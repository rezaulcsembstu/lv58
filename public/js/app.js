(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["/js/app"],{

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/ExampleComponent.vue?vue&type=script&lang=js&":
/*!***************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/ExampleComponent.vue?vue&type=script&lang=js& ***!
  \***************************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
/* harmony default export */ __webpack_exports__["default"] = ({
  mounted: function mounted() {
    console.log('Component mounted.');
  }
});

/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/ExampleComponent.vue?vue&type=template&id=299e239e&":
/*!*******************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/ExampleComponent.vue?vue&type=template&id=299e239e& ***!
  \*******************************************************************************************************************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "render", function() { return render; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return staticRenderFns; });
var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _vm._m(0)
}
var staticRenderFns = [
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "container" }, [
      _c("div", { staticClass: "row justify-content-center" }, [
        _c("div", { staticClass: "col-md-8" }, [
          _c("div", { staticClass: "card" }, [
            _c("div", { staticClass: "card-header" }, [
              _vm._v("Example Component")
            ]),
            _vm._v(" "),
            _c("div", { staticClass: "card-body" }, [
              _vm._v(
                "\n                    I'm an example component.\n                "
              )
            ])
          ])
        ])
      ])
    ])
  }
]
render._withStripped = true



/***/ }),

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
__webpack_require__(/*! ./bootstrap */ "./resources/js/bootstrap.js");

window.Vue = __webpack_require__(/*! vue */ "./node_modules/vue/dist/vue.common.js");
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */
// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component("example-component", __webpack_require__(/*! ./components/ExampleComponent.vue */ "./resources/js/components/ExampleComponent.vue")["default"]);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
//const app = new Vue({
//    el: '#app',
//});
// Only load registration.js for this specific page

if (window.location.pathname === "/users/custom/auth/ajax/register") {
  __webpack_require__(/*! ./registration.js */ "./resources/js/registration.js");
} // Only load login.js for this specific page


if (window.location.pathname === "/users/custom/auth/ajax/login") {
  __webpack_require__(/*! ./login.js */ "./resources/js/login.js");
} // Only load upload.js for this specific page


if (window.location.pathname === "/about") {
  __webpack_require__(/*! ./upload.js */ "./resources/js/upload.js");
} // Only load contactCrop.js for this specific page


if (window.location.pathname === "/contactCrop") {
  __webpack_require__(/*! ./contactCrop.js */ "./resources/js/contactCrop.js");
}

/***/ }),

/***/ "./resources/js/bootstrap.js":
/*!***********************************!*\
  !*** ./resources/js/bootstrap.js ***!
  \***********************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var ladda__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ladda */ "./node_modules/ladda/js/ladda.js");
/* harmony import */ var blueimp_file_upload__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! blueimp-file-upload */ "./node_modules/blueimp-file-upload/js/jquery.fileupload.js");
/* harmony import */ var blueimp_file_upload__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(blueimp_file_upload__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var cropperjs__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! cropperjs */ "./node_modules/cropperjs/dist/cropper.js");
/* harmony import */ var cropperjs__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(cropperjs__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var jquery_cropper__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! jquery-cropper */ "./node_modules/jquery-cropper/dist/jquery-cropper.js");
/* harmony import */ var jquery_cropper__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(jquery_cropper__WEBPACK_IMPORTED_MODULE_3__);
window._ = __webpack_require__(/*! lodash */ "./node_modules/lodash/lodash.js");
/**
 * We'll load jQuery and the Bootstrap jQuery plugin which provides support
 * for JavaScript based Bootstrap features such as modals and tabs. This
 * code may be modified to fit the specific needs of your application.
 */

try {
  window.$ = window.jQuery = __webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js");
  window.Popper = __webpack_require__(/*! popper.js */ "./node_modules/popper.js/dist/esm/popper.js")["default"];

  __webpack_require__(/*! bootstrap */ "./node_modules/bootstrap/dist/js/bootstrap.js");
} catch (e) {}
/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */


window.axios = __webpack_require__(/*! axios */ "./node_modules/axios/index.js");
window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";
/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */
// import Echo from 'laravel-echo';
// window.Pusher = require('pusher-js');
// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: process.env.MIX_PUSHER_APP_KEY,
//     cluster: process.env.MIX_PUSHER_APP_CLUSTER,
//     encrypted: true
// });

__webpack_require__(/*! sweetalert */ "./node_modules/sweetalert/dist/sweetalert.min.js");

__webpack_require__(/*! parsleyjs */ "./node_modules/parsleyjs/dist/parsley.js");


window.Ladda = ladda__WEBPACK_IMPORTED_MODULE_0__;




/***/ }),

/***/ "./resources/js/components/ExampleComponent.vue":
/*!******************************************************!*\
  !*** ./resources/js/components/ExampleComponent.vue ***!
  \******************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _ExampleComponent_vue_vue_type_template_id_299e239e___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./ExampleComponent.vue?vue&type=template&id=299e239e& */ "./resources/js/components/ExampleComponent.vue?vue&type=template&id=299e239e&");
/* harmony import */ var _ExampleComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./ExampleComponent.vue?vue&type=script&lang=js& */ "./resources/js/components/ExampleComponent.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _ExampleComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _ExampleComponent_vue_vue_type_template_id_299e239e___WEBPACK_IMPORTED_MODULE_0__["render"],
  _ExampleComponent_vue_vue_type_template_id_299e239e___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/ExampleComponent.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/components/ExampleComponent.vue?vue&type=script&lang=js&":
/*!*******************************************************************************!*\
  !*** ./resources/js/components/ExampleComponent.vue?vue&type=script&lang=js& ***!
  \*******************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_ExampleComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/babel-loader/lib??ref--4-0!../../../node_modules/vue-loader/lib??vue-loader-options!./ExampleComponent.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/ExampleComponent.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_ExampleComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/components/ExampleComponent.vue?vue&type=template&id=299e239e&":
/*!*************************************************************************************!*\
  !*** ./resources/js/components/ExampleComponent.vue?vue&type=template&id=299e239e& ***!
  \*************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_ExampleComponent_vue_vue_type_template_id_299e239e___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../node_modules/vue-loader/lib??vue-loader-options!./ExampleComponent.vue?vue&type=template&id=299e239e& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/ExampleComponent.vue?vue&type=template&id=299e239e&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_ExampleComponent_vue_vue_type_template_id_299e239e___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_ExampleComponent_vue_vue_type_template_id_299e239e___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ }),

/***/ "./resources/js/contactCrop.js":
/*!*************************************!*\
  !*** ./resources/js/contactCrop.js ***!
  \*************************************/
/*! no static exports found */
/***/ (function(module, exports) {

$(document).ready(function () {
  // Get the Cropper.js instance after initialized
  //let cropper = $image.data("cropper");
  var $image;
  ;

  var toCropper = function toCropper() {
    var objectFileReader = new FileReader();
    objectFileReader.readAsDataURL(document.getElementById("uploadedImage").files[0]);

    objectFileReader.onload = function (e) {
      $("#cropImage").removeClass("d-none");
      $("#image").cropper("destroy");
      document.getElementById("image").src = e.target.result;
      $image = $("#image");
      $image.cropper();
    };
  };

  $("#uploadedImage").on("change", toCropper);
  var getCroppedCanvas = {};
  $("#cropImage").click(function () {
    getCroppedCanvas = $image.cropper("getCroppedCanvas");
    $("#getCroppedCanvas").html(getCroppedCanvas);
    $("#croppedImage").val(getCroppedCanvas.toDataURL());
  });
});

/***/ }),

/***/ "./resources/js/login.js":
/*!*******************************!*\
  !*** ./resources/js/login.js ***!
  \*******************************/
/*! no static exports found */
/***/ (function(module, exports) {

$(document).ready(function () {
  var loginFrom = $("#ajaxLoginForm");
  loginFrom.submit(function (e) {
    e.preventDefault();
    var l = Ladda.create(document.querySelector(".ladda-button"));
    l.start().setProgress(0.3);
    $.ajax({
      url: loginFrom.attr("action"),
      type: "POST",
      data: loginFrom.serialize(),
      dataType: "json"
    }).done(function (response) {
      l.setProgress(0.9);

      if (response.success) {
        swal({
          title: "Welcome back!",
          text: response.success,
          timer: 5000,
          showConfirmButton: false,
          type: "success"
        });
        window.location.replace(response.url);
      } else {
        swal({
          title: "Oops!",
          text: response.errors,
          timer: 3000,
          showConfirmButton: false,
          type: "error"
        });
      }
    }).then(function () {
      l.setProgress(0.6);
    }).fail(function () {
      l.setProgress(0.9);
      swal("Fail!", "Cannot login now!", "error");
    }).always(function () {
      l.setProgress(0.9);
      l.stop();
    });
  });
});

/***/ }),

/***/ "./resources/js/registration.js":
/*!**************************************!*\
  !*** ./resources/js/registration.js ***!
  \**************************************/
/*! no static exports found */
/***/ (function(module, exports) {

$(document).ready(function () {
  var ajaxRegistrationForm = $("#ajaxRegistrationForm");
  ajaxRegistrationForm.submit(function (e) {
    e.preventDefault();
    var l = Ladda.create(document.querySelector(".ladda-button"));
    l.start().setProgress(0.3);
    $.ajax({
      url: ajaxRegistrationForm.attr("action"),
      data: ajaxRegistrationForm.serialize(),
      type: "POST",
      dataType: "json"
    }).done(function (response) {
      l.setProgress(0.9);

      if (response.success) {
        swal({
          title: "Hi" + response.name,
          text: response.success,
          timer: 3000,
          button: false,
          icon: "success"
        });
        window.location.replace(response.url);
      } else {
        swal({
          title: "Oops!",
          text: response.errors.join("|"),
          timer: 3000,
          button: false,
          icon: "error"
        });
      }
    }).then(function () {
      l.setProgress(0.6);
    }).fail(function () {
      l.setProgress(0.9);
      swal("Fail!", "Cannot register now!", "error");
    }).always(function () {
      l.setProgress(0.9);
      l.stop();
    });
  });
});

/***/ }),

/***/ "./resources/js/upload.js":
/*!********************************!*\
  !*** ./resources/js/upload.js ***!
  \********************************/
/*! no static exports found */
/***/ (function(module, exports) {

$(document).ready(function () {
  $.ajaxSetup({
    headers: {
      "X-CSRF-Token": $("meta[name=csrf-token]").attr("content")
    }
  });
  var url = "/storeImages";
  $("#fileupload").fileupload({
    url: url,
    dataType: "json",
    maxFileSize: 1000000,
    previewMaxWidth: 333,
    previewMaxHeight: 333
  }).bind("fileuploadadd", function (e, data) {
    $("#progress").fadeIn();
    data.context = $('<div class="fileinfo"><div/>').appendTo("#files");
    $.each(data.files, function (index, file) {
      var node = $("<p/>").append($("<span/>").text(file.name));
      node.appendTo(data.context);
    });
  }).bind("fileuploadprocessalways", function (e, data) {
    var index = data.index,
        file = data.files[index],
        node = $(data.context.children()[index]);

    if (file.preview) {
      node.prepend("<br>").prepend(file.preview);
    }
  }).bind("fileuploadprogressall", function (e, data) {
    var progress = parseInt(data.loaded / data.total * 100, 10);
    $("#progress .progress-bar").css("width", progress + "%");
  }).bind("fileuploaddone", function (e, data) {
    $("#files").empty();
    $.each(data.result.files, function (index, file) {
      if (file.url) {
        var currentTime = new Date().getTime();
        $("#files").append("<div id='testimage'><img class='img-fluid img-thumbnail' src='" + file.url + "?" + currentTime + "' /></div>"); // reset the progress bar

        $("#progress").fadeOut();
        setTimeout(function () {
          $("#progress .progress-bar").css("width", 0);
        }, 500);
      } else if (file.error) {
        var error = $('<span class="text-danger"/>').text(file.error);
        $(data.context.children()[index]).append("<br>").append(error);
      }
    });
  }).bind("fileuploadfail", function (e, data) {
    $.each(data.files, function (index) {
      var error = $('<span class="text-danger"/>').text("File upload failed.");
      $(data.context.children()[index]).append("<br>").append(error);
    });
  });
});

/***/ }),

/***/ "./resources/sass/app.scss":
/*!*********************************!*\
  !*** ./resources/sass/app.scss ***!
  \*********************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/*!*************************************************************!*\
  !*** multi ./resources/js/app.js ./resources/sass/app.scss ***!
  \*************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! D:\laragon\www\lv58\resources\js\app.js */"./resources/js/app.js");
module.exports = __webpack_require__(/*! D:\laragon\www\lv58\resources\sass\app.scss */"./resources/sass/app.scss");


/***/ })

},[[0,"/js/manifest","/js/vendor"]]]);