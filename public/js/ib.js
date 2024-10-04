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
/******/ 	return __webpack_require__(__webpack_require__.s = 8);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/ib.js":
/*!****************************!*\
  !*** ./resources/js/ib.js ***!
  \****************************/
/*! no static exports found */
/***/ (function(module, exports) {

$(document).ready(function () {
  $('#product-button').click(function () {
    window.location.href = '/product';
  });
  $('#career-button').click(function () {
    window.location.href = '/career';
  });
  $('[data-toggle="popover"]').popover();
  $('.popover-dismiss').popover({
    trigger: 'focus'
  });
  $('.card-description-1').hide();
  $('.card-description-2').hide();
  $('.card-description-3').hide();
  $('.card-description-4').hide();
  $('.card-box-1').mouseover(function () {
    $('.card-icon-1').hide();
    $('.card-description-1').show();
    $('.card-description-1').addClass('d-flex');
  }).mouseleave(function () {
    $('.card-description-1').hide();
    $('.card-description-1').removeClass('d-flex');
    $('.card-icon-1').show();
  });
  $('.card-box-2').mouseover(function () {
    $('.card-icon-2').hide();
    $('.card-description-2').show();
    $('.card-description-2').addClass('d-flex');
  }).mouseleave(function () {
    $('.card-description-2').hide();
    $('.card-description-2').removeClass('d-flex');
    $('.card-icon-2').show();
  });
  $('.card-box-3').mouseover(function () {
    $('.card-icon-3').hide();
    $('.card-description-3').show();
    $('.card-description-3').addClass('d-flex');
  }).mouseleave(function () {
    $('.card-description-3').hide();
    $('.card-description-3').removeClass('d-flex');
    $('.card-icon-3').show();
  });
  $('.card-box-4').mouseover(function () {
    $('.card-icon-4').hide();
    $('.card-description-4').show();
    $('.card-description-4').addClass('d-flex');
  }).mouseleave(function () {
    $('.card-description-4').hide();
    $('.card-description-4').removeClass('d-flex');
    $('.card-icon-4').show();
  });
  $('#services').hide();
  $('#view-ipo').click(function () {
    // console.log('test')
    $('#services').fadeToggle("linear");

    if ($('#view-ipo').html() == 'View IPOs') {
      $('#view-ipo').html('Hide IPOs');
    } else {
      $('#view-ipo').html('View IPOs');
    }
  });
});

/***/ }),

/***/ 8:
/*!**********************************!*\
  !*** multi ./resources/js/ib.js ***!
  \**********************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /Users/gregorysykes/Desktop/Investindo/websites/company_profile/resources/js/ib.js */"./resources/js/ib.js");


/***/ })

/******/ });