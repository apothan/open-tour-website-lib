(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["tourfeatures"],{

/***/ "./assets/js/tourfeatures.js":
/*!***********************************!*\
  !*** ./assets/js/tourfeatures.js ***!
  \***********************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! core-js/modules/es.array.find */ "./node_modules/core-js/modules/es.array.find.js");

__webpack_require__(/*! core-js/modules/es.regexp.exec */ "./node_modules/core-js/modules/es.regexp.exec.js");

__webpack_require__(/*! core-js/modules/es.string.replace */ "./node_modules/core-js/modules/es.string.replace.js");

jQuery(document).ready(function () {
  //Get the div that holds the collection of tags
  var collectionHolder = $('#feature_list tbody'); // setup an "add a tag" link

  var $addFeatureLink = $('<td><a href="#" class="add_feature_link">Add a Feature</a></td>');
  var $newLinkTr = $('<tr></tr>').append($addFeatureLink); // add a delete link to all of the existing tag form li elements

  collectionHolder.find('tr').each(function () {
    addTagFormDeleteLink($(this));
  }); // add the "add a tag" anchor and li to the tags ul

  collectionHolder.append($newLinkTr);
  $addFeatureLink.click(function (e) {
    // prevent the link from creating a "#" on the URL
    e.preventDefault(); // add a new tag form (see next code block)

    addTagForm(collectionHolder, $newLinkTr);
  });
});

function addTagForm(collectionHolder, $newLinkTr) {
  // Get the data-prototype we explained earlier
  var prototype = collectionHolder.attr('data-prototype'); // Replace '$$name$$' in the prototype's HTML to
  // instead be a number based on the current collection's length.

  var newForm = prototype.replace(/__name__/g, collectionHolder.children().length); // Display the form in the page in an li, before the "Add a tag" link li

  var $newFormLi = $('<tr></tr>').append(newForm);
  $newLinkTr.before($newFormLi); // add a delete link to the new form

  addTagFormDeleteLink($newFormLi); // var isChrome = /Chrome/.test(navigator.userAgent) && /Google Inc/.test(navigator.vendor);
  //if (!isChrome)
  //	$('.datepicker').datepicker({dateFormat: 'yy-mm-dd', changeMonth: true, changeYear: true});
}

function addTagFormDeleteLink($tagFormTr) {
  var $removeFormA = $('<td><a href="#">delete this feature</a></td>');
  $tagFormTr.append($removeFormA);
  $removeFormA.click(function (e) {
    // prevent the link from creating a "#" on the URL
    e.preventDefault(); // remove the li for the tag form

    $tagFormTr.remove();
  });
}

/***/ })

},[["./assets/js/tourfeatures.js","runtime","vendors~tourcategories~tourfeatures~touritinerary~toursells","vendors~tourcategories~tourfeatures~touritinerary"]]]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9hc3NldHMvanMvdG91cmZlYXR1cmVzLmpzIl0sIm5hbWVzIjpbImpRdWVyeSIsImRvY3VtZW50IiwicmVhZHkiLCJjb2xsZWN0aW9uSG9sZGVyIiwiJCIsIiRhZGRGZWF0dXJlTGluayIsIiRuZXdMaW5rVHIiLCJhcHBlbmQiLCJmaW5kIiwiZWFjaCIsImFkZFRhZ0Zvcm1EZWxldGVMaW5rIiwiY2xpY2siLCJlIiwicHJldmVudERlZmF1bHQiLCJhZGRUYWdGb3JtIiwicHJvdG90eXBlIiwiYXR0ciIsIm5ld0Zvcm0iLCJyZXBsYWNlIiwiY2hpbGRyZW4iLCJsZW5ndGgiLCIkbmV3Rm9ybUxpIiwiYmVmb3JlIiwiJHRhZ0Zvcm1UciIsIiRyZW1vdmVGb3JtQSIsInJlbW92ZSJdLCJtYXBwaW5ncyI6Ijs7Ozs7Ozs7Ozs7Ozs7O0FBR0FBLE1BQU0sQ0FBQ0MsUUFBRCxDQUFOLENBQWlCQyxLQUFqQixDQUF1QixZQUFXO0FBQzlCO0FBQ0EsTUFBSUMsZ0JBQWdCLEdBQUdDLENBQUMsQ0FBQyxxQkFBRCxDQUF4QixDQUY4QixDQUk5Qjs7QUFDQSxNQUFJQyxlQUFlLEdBQUdELENBQUMsQ0FBQyxpRUFBRCxDQUF2QjtBQUNBLE1BQUlFLFVBQVUsR0FBR0YsQ0FBQyxDQUFDLFdBQUQsQ0FBRCxDQUFlRyxNQUFmLENBQXNCRixlQUF0QixDQUFqQixDQU44QixDQVE5Qjs7QUFDQUYsa0JBQWdCLENBQUNLLElBQWpCLENBQXNCLElBQXRCLEVBQTRCQyxJQUE1QixDQUFpQyxZQUFXO0FBQ3hDQyx3QkFBb0IsQ0FBQ04sQ0FBQyxDQUFDLElBQUQsQ0FBRixDQUFwQjtBQUNILEdBRkQsRUFUOEIsQ0FhOUI7O0FBQ0FELGtCQUFnQixDQUFDSSxNQUFqQixDQUF3QkQsVUFBeEI7QUFFQUQsaUJBQWUsQ0FBQ00sS0FBaEIsQ0FBdUIsVUFBU0MsQ0FBVCxFQUFZO0FBQy9CO0FBQ0FBLEtBQUMsQ0FBQ0MsY0FBRixHQUYrQixDQUkvQjs7QUFDQUMsY0FBVSxDQUFDWCxnQkFBRCxFQUFtQkcsVUFBbkIsQ0FBVjtBQUNILEdBTkQ7QUFPSCxDQXZCRDs7QUF5QkEsU0FBU1EsVUFBVCxDQUFvQlgsZ0JBQXBCLEVBQXNDRyxVQUF0QyxFQUFrRDtBQUM5QztBQUNBLE1BQUlTLFNBQVMsR0FBR1osZ0JBQWdCLENBQUNhLElBQWpCLENBQXNCLGdCQUF0QixDQUFoQixDQUY4QyxDQUk5QztBQUNBOztBQUNBLE1BQUlDLE9BQU8sR0FBR0YsU0FBUyxDQUFDRyxPQUFWLENBQWtCLFdBQWxCLEVBQStCZixnQkFBZ0IsQ0FBQ2dCLFFBQWpCLEdBQTRCQyxNQUEzRCxDQUFkLENBTjhDLENBUTlDOztBQUNBLE1BQUlDLFVBQVUsR0FBR2pCLENBQUMsQ0FBQyxXQUFELENBQUQsQ0FBZUcsTUFBZixDQUFzQlUsT0FBdEIsQ0FBakI7QUFDQVgsWUFBVSxDQUFDZ0IsTUFBWCxDQUFrQkQsVUFBbEIsRUFWOEMsQ0FZOUM7O0FBQ0FYLHNCQUFvQixDQUFDVyxVQUFELENBQXBCLENBYjhDLENBYzlDO0FBQ0E7QUFDQTtBQUNIOztBQUVELFNBQVNYLG9CQUFULENBQThCYSxVQUE5QixFQUEwQztBQUN0QyxNQUFJQyxZQUFZLEdBQUdwQixDQUFDLENBQUMsOENBQUQsQ0FBcEI7QUFDQW1CLFlBQVUsQ0FBQ2hCLE1BQVgsQ0FBa0JpQixZQUFsQjtBQUVBQSxjQUFZLENBQUNiLEtBQWIsQ0FBbUIsVUFBU0MsQ0FBVCxFQUFZO0FBQzNCO0FBQ0FBLEtBQUMsQ0FBQ0MsY0FBRixHQUYyQixDQUkzQjs7QUFDQVUsY0FBVSxDQUFDRSxNQUFYO0FBQ0gsR0FORDtBQU9ILEMiLCJmaWxlIjoidG91cmZlYXR1cmVzLmpzIiwic291cmNlc0NvbnRlbnQiOlsiXG5cblxualF1ZXJ5KGRvY3VtZW50KS5yZWFkeShmdW5jdGlvbigpIHtcbiAgICAvL0dldCB0aGUgZGl2IHRoYXQgaG9sZHMgdGhlIGNvbGxlY3Rpb24gb2YgdGFnc1xuICAgIHZhciBjb2xsZWN0aW9uSG9sZGVyID0gJCgnI2ZlYXR1cmVfbGlzdCB0Ym9keScpO1xuXG4gICAgLy8gc2V0dXAgYW4gXCJhZGQgYSB0YWdcIiBsaW5rXG4gICAgdmFyICRhZGRGZWF0dXJlTGluayA9ICQoJzx0ZD48YSBocmVmPVwiI1wiIGNsYXNzPVwiYWRkX2ZlYXR1cmVfbGlua1wiPkFkZCBhIEZlYXR1cmU8L2E+PC90ZD4nKTtcbiAgICB2YXIgJG5ld0xpbmtUciA9ICQoJzx0cj48L3RyPicpLmFwcGVuZCgkYWRkRmVhdHVyZUxpbmspO1xuXG4gICAgLy8gYWRkIGEgZGVsZXRlIGxpbmsgdG8gYWxsIG9mIHRoZSBleGlzdGluZyB0YWcgZm9ybSBsaSBlbGVtZW50c1xuICAgIGNvbGxlY3Rpb25Ib2xkZXIuZmluZCgndHInKS5lYWNoKGZ1bmN0aW9uKCkge1xuICAgICAgICBhZGRUYWdGb3JtRGVsZXRlTGluaygkKHRoaXMpKTtcbiAgICB9KTtcbiAgICAgICAgXG4gICAgLy8gYWRkIHRoZSBcImFkZCBhIHRhZ1wiIGFuY2hvciBhbmQgbGkgdG8gdGhlIHRhZ3MgdWxcbiAgICBjb2xsZWN0aW9uSG9sZGVyLmFwcGVuZCgkbmV3TGlua1RyKTtcblxuICAgICRhZGRGZWF0dXJlTGluay5jbGljayggZnVuY3Rpb24oZSkge1xuICAgICAgICAvLyBwcmV2ZW50IHRoZSBsaW5rIGZyb20gY3JlYXRpbmcgYSBcIiNcIiBvbiB0aGUgVVJMXG4gICAgICAgIGUucHJldmVudERlZmF1bHQoKTtcblxuICAgICAgICAvLyBhZGQgYSBuZXcgdGFnIGZvcm0gKHNlZSBuZXh0IGNvZGUgYmxvY2spXG4gICAgICAgIGFkZFRhZ0Zvcm0oY29sbGVjdGlvbkhvbGRlciwgJG5ld0xpbmtUcik7XG4gICAgfSk7XG59KTtcblxuZnVuY3Rpb24gYWRkVGFnRm9ybShjb2xsZWN0aW9uSG9sZGVyLCAkbmV3TGlua1RyKSB7XG4gICAgLy8gR2V0IHRoZSBkYXRhLXByb3RvdHlwZSB3ZSBleHBsYWluZWQgZWFybGllclxuICAgIHZhciBwcm90b3R5cGUgPSBjb2xsZWN0aW9uSG9sZGVyLmF0dHIoJ2RhdGEtcHJvdG90eXBlJyk7XG5cbiAgICAvLyBSZXBsYWNlICckJG5hbWUkJCcgaW4gdGhlIHByb3RvdHlwZSdzIEhUTUwgdG9cbiAgICAvLyBpbnN0ZWFkIGJlIGEgbnVtYmVyIGJhc2VkIG9uIHRoZSBjdXJyZW50IGNvbGxlY3Rpb24ncyBsZW5ndGguXG4gICAgdmFyIG5ld0Zvcm0gPSBwcm90b3R5cGUucmVwbGFjZSgvX19uYW1lX18vZywgY29sbGVjdGlvbkhvbGRlci5jaGlsZHJlbigpLmxlbmd0aCk7XG5cbiAgICAvLyBEaXNwbGF5IHRoZSBmb3JtIGluIHRoZSBwYWdlIGluIGFuIGxpLCBiZWZvcmUgdGhlIFwiQWRkIGEgdGFnXCIgbGluayBsaVxuICAgIHZhciAkbmV3Rm9ybUxpID0gJCgnPHRyPjwvdHI+JykuYXBwZW5kKG5ld0Zvcm0pO1xuICAgICRuZXdMaW5rVHIuYmVmb3JlKCRuZXdGb3JtTGkpO1xuXG4gICAgLy8gYWRkIGEgZGVsZXRlIGxpbmsgdG8gdGhlIG5ldyBmb3JtXG4gICAgYWRkVGFnRm9ybURlbGV0ZUxpbmsoJG5ld0Zvcm1MaSk7XG4gICAgLy8gdmFyIGlzQ2hyb21lID0gL0Nocm9tZS8udGVzdChuYXZpZ2F0b3IudXNlckFnZW50KSAmJiAvR29vZ2xlIEluYy8udGVzdChuYXZpZ2F0b3IudmVuZG9yKTtcbiAgICAvL2lmICghaXNDaHJvbWUpXG4gICAgLy9cdCQoJy5kYXRlcGlja2VyJykuZGF0ZXBpY2tlcih7ZGF0ZUZvcm1hdDogJ3l5LW1tLWRkJywgY2hhbmdlTW9udGg6IHRydWUsIGNoYW5nZVllYXI6IHRydWV9KTtcbn1cblxuZnVuY3Rpb24gYWRkVGFnRm9ybURlbGV0ZUxpbmsoJHRhZ0Zvcm1Ucikge1xuICAgIHZhciAkcmVtb3ZlRm9ybUEgPSAkKCc8dGQ+PGEgaHJlZj1cIiNcIj5kZWxldGUgdGhpcyBmZWF0dXJlPC9hPjwvdGQ+Jyk7XG4gICAgJHRhZ0Zvcm1Uci5hcHBlbmQoJHJlbW92ZUZvcm1BKTtcbiAgICBcbiAgICAkcmVtb3ZlRm9ybUEuY2xpY2soZnVuY3Rpb24oZSkge1xuICAgICAgICAvLyBwcmV2ZW50IHRoZSBsaW5rIGZyb20gY3JlYXRpbmcgYSBcIiNcIiBvbiB0aGUgVVJMXG4gICAgICAgIGUucHJldmVudERlZmF1bHQoKTtcblxuICAgICAgICAvLyByZW1vdmUgdGhlIGxpIGZvciB0aGUgdGFnIGZvcm1cbiAgICAgICAgJHRhZ0Zvcm1Uci5yZW1vdmUoKTtcbiAgICB9KTtcbn0iXSwic291cmNlUm9vdCI6IiJ9