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
/******/ 	return __webpack_require__(__webpack_require__.s = 1);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/chat.js":
/*!******************************!*\
  !*** ./resources/js/chat.js ***!
  \******************************/
/*! no static exports found */
/***/ (function(module, exports) {

/*Pusher.logToConsole = true;*/
var pusher = new Pusher('1502d7801711bed5a2da', {
  cluster: 'ap1',
  forceTLS: true
});
$(document).ready(function () {
  uid = $('#user-id').val();
  getChats();
  var channel = pusher.subscribe('my-channel');
  channel.bind('my-event', function (data) {
    first_name = data['json']['user'].substring(0, 1);
    second_name = data['json']['user'].substring(data['json']['user'].indexOf(" ") + 2, data['json']['user'].indexOf(" ") + 1);
    name = first_name + second_name;

    if (uid != data['json']['pointer']) {
      $('.text-message').append('<div class="row mb-3"><div class="col-12 small text-secondary">' + name + '</div><div class=" rounded-xl pt-2 pl-3 pr-3 bg-primary text-white text-overflow" style="max-width:80%" ><p>' + data['json']['message'] + '</p></div></div>');
    } else {
      $('.text-message').append('<div class="row mb-3 d-flex align-item-right"><div class="col-12 text-right small text-secondary">You</div><div class="col-10 offset-2" style="max-width:80%"><div class="row float-right"><div class=" rounded-xl pt-2 pl-3 pr-3 bg-success text-white text-overflow" ><p>' + data['json']['message'] + '</p></div></div></div></div>');
    }

    $(".text-message").animate({
      scrollTop: $('.text-message')[0].scrollHeight * 10000
    }, 1000);
  });

  function getChats() {
    $.ajax({
      type: 'GET',
      url: '/getChats',
      success: function success(data) {
        // console.log(data[0]['pointer'])
        // colors = ['primary','danger','warning','success']
        // f=0;
        for (i = 0; i < data.length; i++) {
          // if(f==4)f=0
          // color = colors[f];
          // console.log(data[i]['user_id'])
          first_name = data[i]['user'].substring(0, 1);
          second_name = data[i]['user'].substring(data[i]['user'].indexOf(" ") + 2, data[i]['user'].indexOf(" ") + 1);
          name = first_name + second_name; // console.log(second_name)

          if (uid != data[i]['pointer']) {
            $('.text-message').append('<div class="row mb-3"><div class="col-12 small text-secondary">' + name + '</div><div class=" rounded-xl pt-2 pl-3 pr-3 bg-primary text-white text-overflow" style="max-width:80%" ><p>' + data[i]['message'] + '</p></div></div>');
          } else {
            $('.text-message').append('<div class="row mb-3 d-flex align-item-right"><div class="col-12 text-right small text-secondary">You</div><div class="col-10 offset-2" style="max-width:80%"><div class="row float-right"><div class=" rounded-xl pt-2 pl-3 pr-3 bg-success text-white text-overflow" ><p>' + data[i]['message'] + '</p></div></div></div></div>');
          } // $(".text-message").animate({ scrollTop: $('.text-message')[0].scrollHeight*10000}, 1000);
          // f++

        }

        $(".text-message").animate({
          scrollTop: $('.text-message')[0].scrollHeight * 10000
        }, 1000);
      }
    });
  }

  $('form#sendChat').submit(function (e) {
    $('#sendButton').attr('disabled', true);
    formData = new FormData(this);
    e.preventDefault();
    $.ajax({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      type: 'POST',
      url: '/sendMessage',
      data: formData,
      success: function success(data) {
        $('#sendButton').attr('disabled', false);
        $('#text-message-field-no-ambiguity').val('');
      },
      cache: false,
      contentType: false,
      processData: false
    });
    return false;
  });
});

/***/ }),

/***/ 1:
/*!************************************!*\
  !*** multi ./resources/js/chat.js ***!
  \************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /Users/gregorysykes/Desktop/Investindo/websites/company_profile/resources/js/chat.js */"./resources/js/chat.js");


/***/ })

/******/ });