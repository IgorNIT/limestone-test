jQuery(document).ready(function ($) {


    // Open mobile menu
    let isOpenMenu = false;
    const menu =  $('.main-navigation');

    $('#menu-toggle').on('click', function (e) {
        e.preventDefault();
        $(this).toggleClass('is-active');

        menu.fadeToggle(400, () => {
            isOpenMenu = !isOpenMenu;
        });
        $('body').toggleClass('menu-open');
    });


    /*=============  Submit form =====================*/


    const contactFrom = $('.limestone-contact-form');
    let sendData = false;

    contactFrom.on('submit', function (e) {
        e.preventDefault();

        if (sendData) {
            return false;
        }
        sendData = true;


        contactFrom.addClass('disabled');

        let data = [];

        contactFrom.find('input').each(function () {
            let val = validate_input.call($(this));
            data.push(val);
        });

        // if not valid form
        if (data.includes(false)) {
            contactFrom.removeClass('disabled');
            return false
        }




        let obj = {
            nonce_code : contactForm.nonce,
            data : data,
            action :  'contact_form'
        };

        send_data(obj);
    });


    function send_data(obj) {

        $.ajax({
            type: 'POST',
            url: contactForm.url,
            data: obj,
            success: function( response ) {
                contactFrom.removeClass('disabled');

                let data = JSON.parse(response);

                if(data.status === 'success') {
                    $('.contact-form__inner').html(data.html);
                }
                if(data.status === 'error') {
                    $('.contact-form__response').html(data.html);
                }
            }
        });
    }

    // Validation
    function validate_input() {
        let valid;
        let val;
        let type = $(this).attr('type');
        let id = $(this).attr('id');

        if (type === 'text' || type === 'number') {
            val = $(this).val();
            if (val.length >= 3) {
                valid = true;
            }
        }

        if (type === 'email') {
            const re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            val = $(this).val();
            if (re.test(val)) {
                valid = true;
            }
        }

        // Add error class to required fields
        if (!valid) {
            $(this).parent().addClass('error');
            return false
        }

        $(this).parent().removeClass('error');

        return {
            'name': id,
            'value': val
        };
    }


});
