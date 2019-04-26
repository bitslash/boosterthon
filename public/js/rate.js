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
/******/ 	return __webpack_require__(__webpack_require__.s = 2);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/rate.js":
/*!******************************!*\
  !*** ./resources/js/rate.js ***!
  \******************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("$(document).ready(function () {\n  $('#fake_rating').on('click', 'i', function () {\n    var star_count = $('#fake_rating > i').index(this);\n    $('#fake_rating > i').each(function (index) {\n      $(this).removeClass('fa-star-o');\n      $(this).removeClass('fa-star');\n\n      if (index <= star_count) {\n        $(this).addClass('fa-star');\n      } else {\n        $(this).addClass('fa-star-o');\n      }\n    });\n    $('#rating').val(++star_count);\n  });\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvcmF0ZS5qcz84YTdiIl0sIm5hbWVzIjpbIiQiLCJkb2N1bWVudCIsInJlYWR5Iiwib24iLCJzdGFyX2NvdW50IiwiaW5kZXgiLCJlYWNoIiwicmVtb3ZlQ2xhc3MiLCJhZGRDbGFzcyIsInZhbCJdLCJtYXBwaW5ncyI6IkFBQUFBLENBQUMsQ0FBQ0MsUUFBRCxDQUFELENBQVlDLEtBQVosQ0FBa0IsWUFBVztBQUN6QkYsR0FBQyxDQUFDLGNBQUQsQ0FBRCxDQUFrQkcsRUFBbEIsQ0FBcUIsT0FBckIsRUFBOEIsR0FBOUIsRUFBbUMsWUFBVztBQUMxQyxRQUFJQyxVQUFVLEdBQUdKLENBQUMsQ0FBQyxrQkFBRCxDQUFELENBQXNCSyxLQUF0QixDQUE0QixJQUE1QixDQUFqQjtBQUNBTCxLQUFDLENBQUMsa0JBQUQsQ0FBRCxDQUFzQk0sSUFBdEIsQ0FBMkIsVUFBU0QsS0FBVCxFQUFnQjtBQUN2Q0wsT0FBQyxDQUFDLElBQUQsQ0FBRCxDQUFRTyxXQUFSLENBQW9CLFdBQXBCO0FBQ0FQLE9BQUMsQ0FBQyxJQUFELENBQUQsQ0FBUU8sV0FBUixDQUFvQixTQUFwQjs7QUFDQSxVQUFJRixLQUFLLElBQUlELFVBQWIsRUFBeUI7QUFDckJKLFNBQUMsQ0FBQyxJQUFELENBQUQsQ0FBUVEsUUFBUixDQUFpQixTQUFqQjtBQUNILE9BRkQsTUFFTztBQUNIUixTQUFDLENBQUMsSUFBRCxDQUFELENBQVFRLFFBQVIsQ0FBaUIsV0FBakI7QUFDSDtBQUNKLEtBUkQ7QUFTQVIsS0FBQyxDQUFDLFNBQUQsQ0FBRCxDQUFhUyxHQUFiLENBQWlCLEVBQUVMLFVBQW5CO0FBQ0gsR0FaRDtBQWFILENBZEQiLCJmaWxlIjoiLi9yZXNvdXJjZXMvanMvcmF0ZS5qcy5qcyIsInNvdXJjZXNDb250ZW50IjpbIiQoZG9jdW1lbnQpLnJlYWR5KGZ1bmN0aW9uKCkge1xuICAgICQoJyNmYWtlX3JhdGluZycpLm9uKCdjbGljaycsICdpJywgZnVuY3Rpb24oKSB7XG4gICAgICAgIHZhciBzdGFyX2NvdW50ID0gJCgnI2Zha2VfcmF0aW5nID4gaScpLmluZGV4KHRoaXMpO1xuICAgICAgICAkKCcjZmFrZV9yYXRpbmcgPiBpJykuZWFjaChmdW5jdGlvbihpbmRleCkge1xuICAgICAgICAgICAgJCh0aGlzKS5yZW1vdmVDbGFzcygnZmEtc3Rhci1vJyk7XG4gICAgICAgICAgICAkKHRoaXMpLnJlbW92ZUNsYXNzKCdmYS1zdGFyJyk7XG4gICAgICAgICAgICBpZiAoaW5kZXggPD0gc3Rhcl9jb3VudCkge1xuICAgICAgICAgICAgICAgICQodGhpcykuYWRkQ2xhc3MoJ2ZhLXN0YXInKTtcbiAgICAgICAgICAgIH0gZWxzZSB7XG4gICAgICAgICAgICAgICAgJCh0aGlzKS5hZGRDbGFzcygnZmEtc3Rhci1vJyk7XG4gICAgICAgICAgICB9XG4gICAgICAgIH0pO1xuICAgICAgICAkKCcjcmF0aW5nJykudmFsKCsrc3Rhcl9jb3VudCk7XG4gICAgfSk7XG59KTtcbiJdLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./resources/js/rate.js\n");

/***/ }),

/***/ 2:
/*!************************************!*\
  !*** multi ./resources/js/rate.js ***!
  \************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /Users/jwatkins/Vagrant/code/boosterthon.test/resources/js/rate.js */"./resources/js/rate.js");


/***/ })

/******/ });