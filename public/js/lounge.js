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
/******/ 	return __webpack_require__(__webpack_require__.s = 3);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/lounge.js":
/*!********************************!*\
  !*** ./resources/js/lounge.js ***!
  \********************************/
/*! no static exports found */
/***/ (function(module, exports) {

Pusher.logToConsole = true;
var pusher = new Pusher('1502d7801711bed5a2da', {
  cluster: 'ap1',
  forceTLS: true
});
$(document).ready(function () {
  getRecentChats();
  getNews();
  var channel = pusher.subscribe('my-channel');
  channel.bind('my-event', function (data) {
    getRecentChats();
  });

  function getRecentChats() {
    $('#recentChats').html('');
    $.ajax({
      type: 'GET',
      url: '/getRecentChats',
      success: function success(data) {
        colors = ['primary', 'danger', 'warning', 'success'];
        f = 0;

        for (i = 0; i < 10; i++) {
          if (f == 4) f = 0;
          color = colors[f];
          $('#recentChats').append('<div class="col-10 pt-3 pl-2 mb-2 shadow rounded-pill" style="height:20%;"><div class="row"><div class="col-12"><div class="chat-overflow ml-2">' + data[i]['message'] + '</div></div></div></div>');
          f++;
        }
      }
    });
  }

  function getNews() {
    $.ajax({
      type: 'GET',
      url: 'https://newsapi.org/v2/top-headlines?country=id&apiKey=61ae7bd3db18402493d9132fad89bd36',
      success: function success(data) {
        for (i = 0; i < 10; i++) {
          $('#newsCard').append('<div class="col-10 p-3 mb-2 shadow rounded-pill" style="height:30%;"><div class="row"><div class="col-3"><img src="' + data["articles"][i]["urlToImage"] + '" alt="" style="width:3em;height:3em;object-fit:cover"></div><div class="col overflow-auto"><div class="title-overflow">' + data["articles"][i]["title"] + '</div></div></div></div>');
        }
      }
    });
  }
});

/***/ }),

/***/ 3:
/*!**************************************!*\
  !*** multi ./resources/js/lounge.js ***!
  \**************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /Users/gregorysykes/Desktop/Investindo/websites/company_profile/resources/js/lounge.js */"./resources/js/lounge.js");


/***/ })

/******/ });