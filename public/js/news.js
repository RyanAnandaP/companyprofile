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
/******/ 	return __webpack_require__(__webpack_require__.s = 4);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/news.js":
/*!******************************!*\
  !*** ./resources/js/news.js ***!
  \******************************/
/*! no static exports found */
/***/ (function(module, exports) {

$(document).ready(function () {
  getNews();

  function getNews() {
    $.ajax({
      type: 'get',
      url: 'https://newsapi.org/v2/top-headlines?country=id&apiKey=61ae7bd3db18402493d9132fad89bd36',
      success: function success(data) {
        for (i = 0; i < data['articles'].length; i++) {
          $('#newsStand').append('<div class="col-md-4 mb-3"><div class="card shadow"><img class="card-img-top" style="height:10em;overflow:hidden" src="' + data["articles"][i]["urlToImage"] + '" alt="Card image cap"><div class="card-body"><h5 class="card-title title-overflow">' + data["articles"][i]["title"] + '</h5><p class="card-text content-overflow">' + data["articles"][i]["description"] + '</p><a href="' + data["articles"][i]["url"] + '" class="btn btn-primary rounded-pill">Baca Lebih Lanjut &ensp;<i class="fa fa-caret-right"></i></a></div></div></div>');
        }

        for (i = 0; i < 3; i++) {
          if (i == 0) $('#newsHighlights').append('<div class="carousel-item active"><img class="d-block w-100" style="height:100vh;object-fit:cover" src="' + data["articles"][i]["urlToImage"] + '" alt="First slide"><div class="carousel-caption d-none d-md-block bg-primary shadow-lg w-100 pl-2 pr-2" style="bottom:0;height:15vh;right:0;left:0"><h3>' + data["articles"][i]["title"] + '</h5></div></div>');else $('#newsHighlights').append('<div class="carousel-item"><img class="d-block w-100" style="height:100vh;object-fit:cover" src="' + data["articles"][i]["urlToImage"] + '" alt="First slide"><div class="carousel-caption d-none d-md-block bg-primary shadow-lg w-100 pl-2 pr-2" style="bottom:0;height:15vh;right:0;left:0"><h3>' + data["articles"][i]["title"] + '</h5></div></div>');
        }
      }
    });
  }
});

/***/ }),

/***/ 4:
/*!************************************!*\
  !*** multi ./resources/js/news.js ***!
  \************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /Users/gregorysykes/Desktop/Investindo/websites/company_profile/resources/js/news.js */"./resources/js/news.js");


/***/ })

/******/ });