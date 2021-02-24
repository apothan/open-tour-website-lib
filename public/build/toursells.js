(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["toursells"],{

/***/ "./assets/js/toursells.js":
/*!********************************!*\
  !*** ./assets/js/toursells.js ***!
  \********************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! core-js/modules/es.array.find */ "./node_modules/core-js/modules/es.array.find.js");

jQuery(document).ready(function () {
  //Get the div that holds the collection of tags
  var collectionHolder = $('#sellbreak_list tbody'); // add a delete link to all of the existing tag form li elements

  collectionHolder.find('tr').each(function () {
    addTagFormDeleteLink($(this));
  });
});

function addTagFormDeleteLink($tagFormTr) {
  var $removeFormA = $('<td><a href="#">delete</a></td>');
  $tagFormTr.append($removeFormA);
  $removeFormA.click(function (e) {
    // prevent the link from creating a "#" on the URL
    e.preventDefault(); // remove the li for the tag form

    $tagFormTr.remove();
  });
}

/***/ })

},[["./assets/js/toursells.js","runtime","vendors~tourcategories~tourfeatures~touritinerary~toursells"]]]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9hc3NldHMvanMvdG91cnNlbGxzLmpzIl0sIm5hbWVzIjpbImpRdWVyeSIsImRvY3VtZW50IiwicmVhZHkiLCJjb2xsZWN0aW9uSG9sZGVyIiwiJCIsImZpbmQiLCJlYWNoIiwiYWRkVGFnRm9ybURlbGV0ZUxpbmsiLCIkdGFnRm9ybVRyIiwiJHJlbW92ZUZvcm1BIiwiYXBwZW5kIiwiY2xpY2siLCJlIiwicHJldmVudERlZmF1bHQiLCJyZW1vdmUiXSwibWFwcGluZ3MiOiI7Ozs7Ozs7Ozs7O0FBQUFBLE1BQU0sQ0FBQ0MsUUFBRCxDQUFOLENBQWlCQyxLQUFqQixDQUF1QixZQUFXO0FBQzlCO0FBQ0EsTUFBSUMsZ0JBQWdCLEdBQUdDLENBQUMsQ0FBQyx1QkFBRCxDQUF4QixDQUY4QixDQU05Qjs7QUFDQUQsa0JBQWdCLENBQUNFLElBQWpCLENBQXNCLElBQXRCLEVBQTRCQyxJQUE1QixDQUFpQyxZQUFXO0FBQ3hDQyx3QkFBb0IsQ0FBQ0gsQ0FBQyxDQUFDLElBQUQsQ0FBRixDQUFwQjtBQUNILEdBRkQ7QUFNSCxDQWJEOztBQWVBLFNBQVNHLG9CQUFULENBQThCQyxVQUE5QixFQUEwQztBQUN0QyxNQUFJQyxZQUFZLEdBQUdMLENBQUMsQ0FBQyxpQ0FBRCxDQUFwQjtBQUNBSSxZQUFVLENBQUNFLE1BQVgsQ0FBa0JELFlBQWxCO0FBRUFBLGNBQVksQ0FBQ0UsS0FBYixDQUFtQixVQUFTQyxDQUFULEVBQVk7QUFDM0I7QUFDQUEsS0FBQyxDQUFDQyxjQUFGLEdBRjJCLENBSTNCOztBQUNBTCxjQUFVLENBQUNNLE1BQVg7QUFDSCxHQU5EO0FBT0gsQyIsImZpbGUiOiJ0b3Vyc2VsbHMuanMiLCJzb3VyY2VzQ29udGVudCI6WyJqUXVlcnkoZG9jdW1lbnQpLnJlYWR5KGZ1bmN0aW9uKCkge1xuICAgIC8vR2V0IHRoZSBkaXYgdGhhdCBob2xkcyB0aGUgY29sbGVjdGlvbiBvZiB0YWdzXG4gICAgdmFyIGNvbGxlY3Rpb25Ib2xkZXIgPSAkKCcjc2VsbGJyZWFrX2xpc3QgdGJvZHknKTtcblxuICAgIFxuXG4gICAgLy8gYWRkIGEgZGVsZXRlIGxpbmsgdG8gYWxsIG9mIHRoZSBleGlzdGluZyB0YWcgZm9ybSBsaSBlbGVtZW50c1xuICAgIGNvbGxlY3Rpb25Ib2xkZXIuZmluZCgndHInKS5lYWNoKGZ1bmN0aW9uKCkge1xuICAgICAgICBhZGRUYWdGb3JtRGVsZXRlTGluaygkKHRoaXMpKTtcbiAgICB9KTtcbiAgICAgICAgXG5cbiAgICBcbn0pO1xuXG5mdW5jdGlvbiBhZGRUYWdGb3JtRGVsZXRlTGluaygkdGFnRm9ybVRyKSB7XG4gICAgdmFyICRyZW1vdmVGb3JtQSA9ICQoJzx0ZD48YSBocmVmPVwiI1wiPmRlbGV0ZTwvYT48L3RkPicpO1xuICAgICR0YWdGb3JtVHIuYXBwZW5kKCRyZW1vdmVGb3JtQSk7XG4gICAgXG4gICAgJHJlbW92ZUZvcm1BLmNsaWNrKGZ1bmN0aW9uKGUpIHtcbiAgICAgICAgLy8gcHJldmVudCB0aGUgbGluayBmcm9tIGNyZWF0aW5nIGEgXCIjXCIgb24gdGhlIFVSTFxuICAgICAgICBlLnByZXZlbnREZWZhdWx0KCk7XG5cbiAgICAgICAgLy8gcmVtb3ZlIHRoZSBsaSBmb3IgdGhlIHRhZyBmb3JtXG4gICAgICAgICR0YWdGb3JtVHIucmVtb3ZlKCk7XG4gICAgfSk7XG59Il0sInNvdXJjZVJvb3QiOiIifQ==