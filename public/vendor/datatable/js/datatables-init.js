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

/***/ "./resources/js/datatables-init.js":
/*!*****************************************!*\
  !*** ./resources/js/datatables-init.js ***!
  \*****************************************/
/*! no static exports found */
/***/ (function(module, exports) {

$(document).ready(function () {
  // Setup - add a text input to each footer cell
  $('table.display tfoot th').each(function () {
    var title = $(this).text();
    $(this).html('<input type="text" placeholder="Buscar ' + title + '" />');
  }); // DataTable

  var table = $('table.display').DataTable({
    responsive: {
      details: {
        display: $.fn.dataTable.Responsive.display.modal({
          header: function header(row) {
            var data = row.data();
            return 'Detalles: ' + data[0] + ' ' + data[1];
          }
        }),
        renderer: $.fn.dataTable.Responsive.renderer.tableAll()
      }
    },
    //dom: 'Bfrtip',
    //    dom: '<"top" Bf> + rt + <row <"col-sm-12 col-md-5" i> <"col-sm-12 col-md-7" p> >',
    dom: '<"row tools-datatables" <"col-md-6 buttons-datatables" B> <"col-md-6 search-datatables" f> > + rt + <"row" <"col-sm-12 col-md-5" i> <"col-sm-12 col-md-7" p> >',
    buttons: [{
      extend: 'excelHtml5',
      text: '<i class="fa fa-file-excel"></i> <strong>XLS</stron>',
      titleAttr: 'Excel'
    }, //   {
    //       extend:    'csvHtml5',
    //       text:      '<i class="fa fa-file-text"></i>',
    //       titleAttr: 'CSV'
    //   },
    {
      extend: 'pdfHtml5',
      text: '<i class="fa fa-file-pdf"></i> <strong>PDF</stron>',
      titleAttr: 'PDF'
    }, {
      extend: 'print',
      text: '<i class="fa fa-print"></i>',
      titleAttr: 'PDF'
    }, {
      extend: 'colvis',
      className: 'btn btn-primary'
    }, //{ extend: 'excel', className: 'btn btn-primary' },
    // { extend: 'print', className: 'btn btn-primary' },
    // { extend: 'pdf', className: 'btn btn-primary' },
    //{ extend: 'csv', className: 'btn btn-primary' },
    {
      extend: 'pageLength',
      className: 'btn btn-primary'
    }],
    "language": {
      "buttons": {
        "print": 'Imprimir',
        "colvis": 'Columnas',
        "pageLength": {
          "_": "Mostrar %d",
          "-1": ""
        }
      },
      "search": "Buscar",
      "searchPlaceholder": "Buscar algo...",
      "bPrint": "Imprimir",
      "sProcessing": "Procesando...",
      "sLengthMenu": "Mostrar _MENU_ registros",
      "sZeroRecords": "No se encontraron resultados",
      "sEmptyTable": "Ningún dato disponible en esta tabla",
      "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
      "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
      "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
      "sInfoPostFix": "",
      "sSearch": "",
      "sUrl": "",
      "sInfoThousands": ",",
      "sLoadingRecords": "Cargando...",
      "oPaginate": {
        "sFirst": "Primero",
        "sLast": "Último",
        "sNext": "Siguiente",
        "sPrevious": "Anterior"
      },
      "oAria": {
        "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
      }
    }
  }); // Apply the search

  table.columns().every(function () {
    var that = this;
    $('input', this.footer()).on('keyup change', function () {
      if (that.search() !== this.value) {
        that.search(this.value).draw();
      }
    });
  });
});

/***/ }),

/***/ 2:
/*!***********************************************!*\
  !*** multi ./resources/js/datatables-init.js ***!
  \***********************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /Users/adangonzalezrodriguez/Documents/Proyectos/Laravel/alegra/resources/js/datatables-init.js */"./resources/js/datatables-init.js");


/***/ })

/******/ });