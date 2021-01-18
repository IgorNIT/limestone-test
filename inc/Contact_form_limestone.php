<?php

Class Contact_form_limestone
{

    public function __construct()
    {
        // Enqueue scripts
        add_action('wp_enqueue_scripts', array($this, 'ajax_scripts'));

        // Ajax get size chart html
        add_action('wp_ajax_contact_form', array($this, 'contact_form_callback'));
        add_action('wp_ajax_nopriv_contact_form', array($this, 'contact_form_callback'));
        add_shortcode('contact_form_limestone', array($this, 'generate_form_html'));
    }

    // Localize ajax array
    public function ajax_scripts()
    {
        wp_localize_script('main-js', 'contactForm',
            array(
                'url' => admin_url('admin-ajax.php'),
                'nonce' => wp_create_nonce('lm-nonce')
            )
        );
    }

    // Ajax function
    public function contact_form_callback()
    {
        $response = [];
        $data = [];
        foreach ($_POST['data'] as $item) {
            $data[$item['name']] = $item['value'];
        }

        if(!isset($data['email'])) {
           echo '';
        }

        $emails = ['example@gmail.com', 'example@gmail.us', 'example@gmail.org'];

        if(in_array($data['email'], $emails)){
            $response['status'] = 'success';
            $response['html'] = $this->ajax_success_message();

        } else {
            $response['status'] = 'error';
            $response['html'] = 'No such email in database. Try one of those: ' . implode(', ', $emails);
        }


        echo json_encode($response);
        die();
    }

    private function ajax_success_message()
    {
        $out = '';
        $out .= '<div class="success-message">';
        $out .= '<div class="success-message__icon">';
        $out .=  '<img src="' . get_template_directory_uri() . '/build/images/nthumbs-up.jpg">';
        $out .= '</div>';
        $out .= '<div class="success-message__title"> ' . __('Success!', 'limestone') . '</div>';
        $out .= '</div>';

        return $out;

    }

    // Generate form  HTML
    public function generate_form_html()
    {
        $html = '';

        $html .= '<form action="contact_form_callback" class="limestone-contact-form" novalidate>';
        $html .= '<div class="form-group">';
        $html .= '<label for="name">Name*</label>';
        $html .= '<input type="text" id="name" name="name">';
        $html .= '</div>';
        $html .= '<div class="form-group">';
        $html .= '<label for="title">Title*</label>';
        $html .= '<input type="text" id="title" name="title">';
        $html .= '</div>';
        $html .= '<div class="form-group">';
        $html .= '<label for="company">Company*</label>';
        $html .= '<input type="text" id="company" name="company">';
        $html .= '</div>';
        $html .= '<div class="form-group">';
        $html .= '<label for="email">Email*</label>';
        $html .= '<input type="email" id="email" name="email">';
        $html .= '</div>';
        $html .= '<button type="submit">'. __('LEARN MORE', 'limestone') . '</button>';
        $html .= '<div class="contact-form__response"></div>';
        $html .= '</form>';

        return $html;
    }

}

$contact_form = new Contact_form_limestone();
