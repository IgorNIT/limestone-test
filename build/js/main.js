/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./src/js/main.js":
/*!************************!*\
  !*** ./src/js/main.js ***!
  \************************/
/*! no static exports found */
/***/ (function(module, exports) {

jQuery(document).ready(function ($) {
  // Open mobile menu
  var isOpenMenu = false;
  var menu = $('.main-navigation');
  $('#menu-toggle').on('click', function (e) {
    e.preventDefault();
    $(this).toggleClass('is-active');
    menu.fadeToggle(400, function () {
      isOpenMenu = !isOpenMenu;
    });
    $('body').toggleClass('menu-open');
  });
  /*=============  Submit form =====================*/

  var contactFrom = $('.limestone-contact-form');
  var sendData = false;
  contactFrom.on('submit', function (e) {
    e.preventDefault();

    if (sendData) {
      return false;
    }

    sendData = true;
    contactFrom.addClass('disabled');
    var data = [];
    contactFrom.find('input').each(function () {
      var val = validate_input.call($(this));
      data.push(val);
    }); // if not valid form

    if (data.includes(false)) {
      contactFrom.removeClass('disabled');
      return false;
    }

    var obj = {
      nonce_code: contactForm.nonce,
      data: data,
      action: 'contact_form'
    };
    send_data(obj);
  });

  function send_data(obj) {
    $.ajax({
      type: 'POST',
      url: contactForm.url,
      data: obj,
      success: function success(response) {
        contactFrom.removeClass('disabled');
        var data = JSON.parse(response);

        if (data.status === 'success') {
          $('.contact-form__inner').html(data.html);
        }

        if (data.status === 'error') {
          $('.contact-form__response').html(data.html);
        }
      }
    });
  } // Validation


  function validate_input() {
    var valid;
    var val;
    var type = $(this).attr('type');
    var id = $(this).attr('id');

    if (type === 'text' || type === 'number') {
      val = $(this).val();

      if (val.length >= 3) {
        valid = true;
      }
    }

    if (type === 'email') {
      var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
      val = $(this).val();

      if (re.test(val)) {
        valid = true;
      }
    } // Add error class to required fields


    if (!valid) {
      $(this).parent().addClass('error');
      return false;
    }

    $(this).parent().removeClass('error');
    return {
      'name': id,
      'value': val
    };
  }
});

/***/ }),

/***/ "./src/scss/footer.scss":
/*!******************************!*\
  !*** ./src/scss/footer.scss ***!
  \******************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ "./src/scss/front-page.scss":
/*!**********************************!*\
  !*** ./src/scss/front-page.scss ***!
  \**********************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ "./src/scss/header.scss":
/*!******************************!*\
  !*** ./src/scss/header.scss ***!
  \******************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/*!*******************************************************************************************************!*\
  !*** multi ./src/js/main.js ./src/scss/header.scss ./src/scss/footer.scss ./src/scss/front-page.scss ***!
  \*******************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! D:\wamp\www\limestone\wp-content\themes\limestone\src\js\main.js */"./src/js/main.js");
__webpack_require__(/*! D:\wamp\www\limestone\wp-content\themes\limestone\src\scss\header.scss */"./src/scss/header.scss");
__webpack_require__(/*! D:\wamp\www\limestone\wp-content\themes\limestone\src\scss\footer.scss */"./src/scss/footer.scss");
module.exports = __webpack_require__(/*! D:\wamp\www\limestone\wp-content\themes\limestone\src\scss\front-page.scss */"./src/scss/front-page.scss");


/***/ })

/******/ });