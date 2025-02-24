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

/***/ "./resources/js/welcome.js":
/*!*********************************!*\
  !*** ./resources/js/welcome.js ***!
  \*********************************/
/*! no static exports found */
/***/ (function(module, exports) {

$(document).ready(function () {
  $('#applyjob').click(function () {
    $('form#daftarkerjaan').submit(function (e) {
      // $('#applyjob').html('<div class="spinner-border" role="status"><span class="sr-only">Loading...</span></div>')
      var formData = new FormData(this);
      e.preventDefault();
      $.ajax({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: 'POST',
        url: '/apply-job',
        data: formData,
        success: function success(data) {
          $('#loading').modal('hide');

          if (data['error']) {
            for (i = 0; i < data['error'].length; i++) {
              if (data['error'][i].includes("name")) {
                $('#name-error').html(data['error'][i]);
              } else if (data['error'][i].includes("phone")) {
                $("#phone-error").html(data['error'][i]);
              } else if (data['error'][i].includes("email")) {
                $("#email-error").html(data['error'][i]);
              } else if (data['error'][i].includes("cv")) {
                $("#cv-error").html(data['error'][i]);
              } else if (data['error'][i].includes("photo")) {
                $("#photo-error").html(data['error'][i]);
              } else if (data['error'][i].includes("captcha")) {
                $("#captcha-error").html(data['error'][i]);
              }
            }
          } else {
            $('#successModal').modal('show');
            $('#success-message').html('<div class="spinner-border" role="status"><span class="sr-only">Loading...</span></div>'); // $('#successModal').modal('show')

            $('#success-message').html(data);
            $('.close-function').attr('href', '/karir');
            window.setTimeout(function () {
              // change url if error
              window.location.href = "http://localhost:8000/karir";
            }, 1500);
          }
        },
        cache: false,
        contentType: false,
        processData: false
      });
      return false;
    });
  });
});

/***/ }),

/***/ "./resources/sass/welcome.scss":
/*!*************************************!*\
  !*** ./resources/sass/welcome.scss ***!
  \*************************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/*!*********************************************************************!*\
  !*** multi ./resources/js/welcome.js ./resources/sass/welcome.scss ***!
  \*********************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! /Users/gregorysykes/Desktop/Investindo/websites/company_profile/resources/js/welcome.js */"./resources/js/welcome.js");
module.exports = __webpack_require__(/*! /Users/gregorysykes/Desktop/Investindo/websites/company_profile/resources/sass/welcome.scss */"./resources/sass/welcome.scss");


/***/ })

/******/ });