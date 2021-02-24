(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["tourcategories"],{

/***/ "./assets/js/tourcategories.js":
/*!*************************************!*\
  !*** ./assets/js/tourcategories.js ***!
  \*************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! core-js/modules/es.array.find */ "./node_modules/core-js/modules/es.array.find.js");

__webpack_require__(/*! core-js/modules/es.regexp.exec */ "./node_modules/core-js/modules/es.regexp.exec.js");

__webpack_require__(/*! core-js/modules/es.string.replace */ "./node_modules/core-js/modules/es.string.replace.js");

jQuery(document).ready(function () {
  //Get the div that holds the collection of tags
  var collectionHolder = $('#category_list tbody'); // setup an "add a tag" link

  var $addCategoryLink = $('<td><a href="#" class="add_category_link">Add a Category</a></td>');
  var $newLinkTr = $('<tr></tr>').append($addCategoryLink); // add a delete link to all of the existing tag form li elements

  collectionHolder.find('tr').each(function () {
    addTagFormDeleteLink($(this));
  }); // add the "add a tag" anchor and li to the tags ul

  collectionHolder.append($newLinkTr);
  $addCategoryLink.click(function (e) {
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
  var $removeFormA = $('<td><a href="#">delete this category</a></td>');
  $tagFormTr.append($removeFormA);
  $removeFormA.click(function (e) {
    // prevent the link from creating a "#" on the URL
    e.preventDefault(); // remove the li for the tag form

    $tagFormTr.remove();
  });
}

/***/ })

},[["./assets/js/tourcategories.js","runtime","vendors~tourcategories~tourfeatures~touritinerary~toursells","vendors~tourcategories~tourfeatures~touritinerary"]]]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9hc3NldHMvanMvdG91cmNhdGVnb3JpZXMuanMiXSwibmFtZXMiOlsialF1ZXJ5IiwiZG9jdW1lbnQiLCJyZWFkeSIsImNvbGxlY3Rpb25Ib2xkZXIiLCIkIiwiJGFkZENhdGVnb3J5TGluayIsIiRuZXdMaW5rVHIiLCJhcHBlbmQiLCJmaW5kIiwiZWFjaCIsImFkZFRhZ0Zvcm1EZWxldGVMaW5rIiwiY2xpY2siLCJlIiwicHJldmVudERlZmF1bHQiLCJhZGRUYWdGb3JtIiwicHJvdG90eXBlIiwiYXR0ciIsIm5ld0Zvcm0iLCJyZXBsYWNlIiwiY2hpbGRyZW4iLCJsZW5ndGgiLCIkbmV3Rm9ybUxpIiwiYmVmb3JlIiwiJHRhZ0Zvcm1UciIsIiRyZW1vdmVGb3JtQSIsInJlbW92ZSJdLCJtYXBwaW5ncyI6Ijs7Ozs7Ozs7Ozs7Ozs7O0FBR0FBLE1BQU0sQ0FBQ0MsUUFBRCxDQUFOLENBQWlCQyxLQUFqQixDQUF1QixZQUFXO0FBQzlCO0FBQ0EsTUFBSUMsZ0JBQWdCLEdBQUdDLENBQUMsQ0FBQyxzQkFBRCxDQUF4QixDQUY4QixDQUk5Qjs7QUFDQSxNQUFJQyxnQkFBZ0IsR0FBR0QsQ0FBQyxDQUFDLG1FQUFELENBQXhCO0FBQ0EsTUFBSUUsVUFBVSxHQUFHRixDQUFDLENBQUMsV0FBRCxDQUFELENBQWVHLE1BQWYsQ0FBc0JGLGdCQUF0QixDQUFqQixDQU44QixDQVE5Qjs7QUFDQUYsa0JBQWdCLENBQUNLLElBQWpCLENBQXNCLElBQXRCLEVBQTRCQyxJQUE1QixDQUFpQyxZQUFXO0FBQ3hDQyx3QkFBb0IsQ0FBQ04sQ0FBQyxDQUFDLElBQUQsQ0FBRixDQUFwQjtBQUNILEdBRkQsRUFUOEIsQ0FhOUI7O0FBQ0FELGtCQUFnQixDQUFDSSxNQUFqQixDQUF3QkQsVUFBeEI7QUFFQUQsa0JBQWdCLENBQUNNLEtBQWpCLENBQXdCLFVBQVNDLENBQVQsRUFBWTtBQUNoQztBQUNBQSxLQUFDLENBQUNDLGNBQUYsR0FGZ0MsQ0FJaEM7O0FBQ0FDLGNBQVUsQ0FBQ1gsZ0JBQUQsRUFBbUJHLFVBQW5CLENBQVY7QUFDSCxHQU5EO0FBT0gsQ0F2QkQ7O0FBeUJBLFNBQVNRLFVBQVQsQ0FBb0JYLGdCQUFwQixFQUFzQ0csVUFBdEMsRUFBa0Q7QUFDOUM7QUFDQSxNQUFJUyxTQUFTLEdBQUdaLGdCQUFnQixDQUFDYSxJQUFqQixDQUFzQixnQkFBdEIsQ0FBaEIsQ0FGOEMsQ0FJOUM7QUFDQTs7QUFDQSxNQUFJQyxPQUFPLEdBQUdGLFNBQVMsQ0FBQ0csT0FBVixDQUFrQixXQUFsQixFQUErQmYsZ0JBQWdCLENBQUNnQixRQUFqQixHQUE0QkMsTUFBM0QsQ0FBZCxDQU44QyxDQVE5Qzs7QUFDQSxNQUFJQyxVQUFVLEdBQUdqQixDQUFDLENBQUMsV0FBRCxDQUFELENBQWVHLE1BQWYsQ0FBc0JVLE9BQXRCLENBQWpCO0FBQ0FYLFlBQVUsQ0FBQ2dCLE1BQVgsQ0FBa0JELFVBQWxCLEVBVjhDLENBWTlDOztBQUNBWCxzQkFBb0IsQ0FBQ1csVUFBRCxDQUFwQixDQWI4QyxDQWM5QztBQUNBO0FBQ0E7QUFDSDs7QUFFRCxTQUFTWCxvQkFBVCxDQUE4QmEsVUFBOUIsRUFBMEM7QUFDdEMsTUFBSUMsWUFBWSxHQUFHcEIsQ0FBQyxDQUFDLCtDQUFELENBQXBCO0FBQ0FtQixZQUFVLENBQUNoQixNQUFYLENBQWtCaUIsWUFBbEI7QUFFQUEsY0FBWSxDQUFDYixLQUFiLENBQW1CLFVBQVNDLENBQVQsRUFBWTtBQUMzQjtBQUNBQSxLQUFDLENBQUNDLGNBQUYsR0FGMkIsQ0FJM0I7O0FBQ0FVLGNBQVUsQ0FBQ0UsTUFBWDtBQUNILEdBTkQ7QUFPSCxDIiwiZmlsZSI6InRvdXJjYXRlZ29yaWVzLmpzIiwic291cmNlc0NvbnRlbnQiOlsiXG5cblxualF1ZXJ5KGRvY3VtZW50KS5yZWFkeShmdW5jdGlvbigpIHtcbiAgICAvL0dldCB0aGUgZGl2IHRoYXQgaG9sZHMgdGhlIGNvbGxlY3Rpb24gb2YgdGFnc1xuICAgIHZhciBjb2xsZWN0aW9uSG9sZGVyID0gJCgnI2NhdGVnb3J5X2xpc3QgdGJvZHknKTtcblxuICAgIC8vIHNldHVwIGFuIFwiYWRkIGEgdGFnXCIgbGlua1xuICAgIHZhciAkYWRkQ2F0ZWdvcnlMaW5rID0gJCgnPHRkPjxhIGhyZWY9XCIjXCIgY2xhc3M9XCJhZGRfY2F0ZWdvcnlfbGlua1wiPkFkZCBhIENhdGVnb3J5PC9hPjwvdGQ+Jyk7XG4gICAgdmFyICRuZXdMaW5rVHIgPSAkKCc8dHI+PC90cj4nKS5hcHBlbmQoJGFkZENhdGVnb3J5TGluayk7XG5cbiAgICAvLyBhZGQgYSBkZWxldGUgbGluayB0byBhbGwgb2YgdGhlIGV4aXN0aW5nIHRhZyBmb3JtIGxpIGVsZW1lbnRzXG4gICAgY29sbGVjdGlvbkhvbGRlci5maW5kKCd0cicpLmVhY2goZnVuY3Rpb24oKSB7XG4gICAgICAgIGFkZFRhZ0Zvcm1EZWxldGVMaW5rKCQodGhpcykpO1xuICAgIH0pO1xuICAgICAgICBcbiAgICAvLyBhZGQgdGhlIFwiYWRkIGEgdGFnXCIgYW5jaG9yIGFuZCBsaSB0byB0aGUgdGFncyB1bFxuICAgIGNvbGxlY3Rpb25Ib2xkZXIuYXBwZW5kKCRuZXdMaW5rVHIpO1xuXG4gICAgJGFkZENhdGVnb3J5TGluay5jbGljayggZnVuY3Rpb24oZSkge1xuICAgICAgICAvLyBwcmV2ZW50IHRoZSBsaW5rIGZyb20gY3JlYXRpbmcgYSBcIiNcIiBvbiB0aGUgVVJMXG4gICAgICAgIGUucHJldmVudERlZmF1bHQoKTtcblxuICAgICAgICAvLyBhZGQgYSBuZXcgdGFnIGZvcm0gKHNlZSBuZXh0IGNvZGUgYmxvY2spXG4gICAgICAgIGFkZFRhZ0Zvcm0oY29sbGVjdGlvbkhvbGRlciwgJG5ld0xpbmtUcik7XG4gICAgfSk7XG59KTtcblxuZnVuY3Rpb24gYWRkVGFnRm9ybShjb2xsZWN0aW9uSG9sZGVyLCAkbmV3TGlua1RyKSB7XG4gICAgLy8gR2V0IHRoZSBkYXRhLXByb3RvdHlwZSB3ZSBleHBsYWluZWQgZWFybGllclxuICAgIHZhciBwcm90b3R5cGUgPSBjb2xsZWN0aW9uSG9sZGVyLmF0dHIoJ2RhdGEtcHJvdG90eXBlJyk7XG5cbiAgICAvLyBSZXBsYWNlICckJG5hbWUkJCcgaW4gdGhlIHByb3RvdHlwZSdzIEhUTUwgdG9cbiAgICAvLyBpbnN0ZWFkIGJlIGEgbnVtYmVyIGJhc2VkIG9uIHRoZSBjdXJyZW50IGNvbGxlY3Rpb24ncyBsZW5ndGguXG4gICAgdmFyIG5ld0Zvcm0gPSBwcm90b3R5cGUucmVwbGFjZSgvX19uYW1lX18vZywgY29sbGVjdGlvbkhvbGRlci5jaGlsZHJlbigpLmxlbmd0aCk7XG5cbiAgICAvLyBEaXNwbGF5IHRoZSBmb3JtIGluIHRoZSBwYWdlIGluIGFuIGxpLCBiZWZvcmUgdGhlIFwiQWRkIGEgdGFnXCIgbGluayBsaVxuICAgIHZhciAkbmV3Rm9ybUxpID0gJCgnPHRyPjwvdHI+JykuYXBwZW5kKG5ld0Zvcm0pO1xuICAgICRuZXdMaW5rVHIuYmVmb3JlKCRuZXdGb3JtTGkpO1xuXG4gICAgLy8gYWRkIGEgZGVsZXRlIGxpbmsgdG8gdGhlIG5ldyBmb3JtXG4gICAgYWRkVGFnRm9ybURlbGV0ZUxpbmsoJG5ld0Zvcm1MaSk7XG4gICAgLy8gdmFyIGlzQ2hyb21lID0gL0Nocm9tZS8udGVzdChuYXZpZ2F0b3IudXNlckFnZW50KSAmJiAvR29vZ2xlIEluYy8udGVzdChuYXZpZ2F0b3IudmVuZG9yKTtcbiAgICAvL2lmICghaXNDaHJvbWUpXG4gICAgLy9cdCQoJy5kYXRlcGlja2VyJykuZGF0ZXBpY2tlcih7ZGF0ZUZvcm1hdDogJ3l5LW1tLWRkJywgY2hhbmdlTW9udGg6IHRydWUsIGNoYW5nZVllYXI6IHRydWV9KTtcbn1cblxuZnVuY3Rpb24gYWRkVGFnRm9ybURlbGV0ZUxpbmsoJHRhZ0Zvcm1Ucikge1xuICAgIHZhciAkcmVtb3ZlRm9ybUEgPSAkKCc8dGQ+PGEgaHJlZj1cIiNcIj5kZWxldGUgdGhpcyBjYXRlZ29yeTwvYT48L3RkPicpO1xuICAgICR0YWdGb3JtVHIuYXBwZW5kKCRyZW1vdmVGb3JtQSk7XG4gICAgXG4gICAgJHJlbW92ZUZvcm1BLmNsaWNrKGZ1bmN0aW9uKGUpIHtcbiAgICAgICAgLy8gcHJldmVudCB0aGUgbGluayBmcm9tIGNyZWF0aW5nIGEgXCIjXCIgb24gdGhlIFVSTFxuICAgICAgICBlLnByZXZlbnREZWZhdWx0KCk7XG5cbiAgICAgICAgLy8gcmVtb3ZlIHRoZSBsaSBmb3IgdGhlIHRhZyBmb3JtXG4gICAgICAgICR0YWdGb3JtVHIucmVtb3ZlKCk7XG4gICAgfSk7XG59Il0sInNvdXJjZVJvb3QiOiIifQ==