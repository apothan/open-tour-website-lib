(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["touritinerary"],{

/***/ "./assets/js/touritinerary.js":
/*!************************************!*\
  !*** ./assets/js/touritinerary.js ***!
  \************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! core-js/modules/es.array.find */ "./node_modules/core-js/modules/es.array.find.js");

__webpack_require__(/*! core-js/modules/es.regexp.exec */ "./node_modules/core-js/modules/es.regexp.exec.js");

__webpack_require__(/*! core-js/modules/es.string.replace */ "./node_modules/core-js/modules/es.string.replace.js");

jQuery(document).ready(function () {
  //Get the div that holds the collection of tags
  var collectionHolder = $('#itinerary_list tbody'); // setup an "add a tag" link

  var $addItineraryLink = $('<td><a href="#" class="add_itinerary_link">Add an Itinerary Day</a></td>');
  var $newLinkTr = $('<tr></tr>').append($addItineraryLink); // add a delete link to all of the existing tag form li elements

  collectionHolder.find('tr').each(function () {
    addTagFormDeleteLink($(this));
  }); // add the "add a tag" anchor and li to the tags ul

  collectionHolder.append($newLinkTr);
  $addItineraryLink.click(function (e) {
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
  var $removeFormA = $('<td><a href="#">delete this itinerary day</a></td>');
  $tagFormTr.append($removeFormA);
  $removeFormA.click(function (e) {
    // prevent the link from creating a "#" on the URL
    e.preventDefault(); // remove the li for the tag form

    $tagFormTr.remove();
  });
}

/***/ })

},[["./assets/js/touritinerary.js","runtime","vendors~tourcategories~tourfeatures~touritinerary~toursells","vendors~tourcategories~tourfeatures~touritinerary"]]]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9hc3NldHMvanMvdG91cml0aW5lcmFyeS5qcyJdLCJuYW1lcyI6WyJqUXVlcnkiLCJkb2N1bWVudCIsInJlYWR5IiwiY29sbGVjdGlvbkhvbGRlciIsIiQiLCIkYWRkSXRpbmVyYXJ5TGluayIsIiRuZXdMaW5rVHIiLCJhcHBlbmQiLCJmaW5kIiwiZWFjaCIsImFkZFRhZ0Zvcm1EZWxldGVMaW5rIiwiY2xpY2siLCJlIiwicHJldmVudERlZmF1bHQiLCJhZGRUYWdGb3JtIiwicHJvdG90eXBlIiwiYXR0ciIsIm5ld0Zvcm0iLCJyZXBsYWNlIiwiY2hpbGRyZW4iLCJsZW5ndGgiLCIkbmV3Rm9ybUxpIiwiYmVmb3JlIiwiJHRhZ0Zvcm1UciIsIiRyZW1vdmVGb3JtQSIsInJlbW92ZSJdLCJtYXBwaW5ncyI6Ijs7Ozs7Ozs7Ozs7Ozs7O0FBR0FBLE1BQU0sQ0FBQ0MsUUFBRCxDQUFOLENBQWlCQyxLQUFqQixDQUF1QixZQUFXO0FBQzlCO0FBQ0EsTUFBSUMsZ0JBQWdCLEdBQUdDLENBQUMsQ0FBQyx1QkFBRCxDQUF4QixDQUY4QixDQUk5Qjs7QUFDQSxNQUFJQyxpQkFBaUIsR0FBR0QsQ0FBQyxDQUFDLDBFQUFELENBQXpCO0FBQ0EsTUFBSUUsVUFBVSxHQUFHRixDQUFDLENBQUMsV0FBRCxDQUFELENBQWVHLE1BQWYsQ0FBc0JGLGlCQUF0QixDQUFqQixDQU44QixDQVE5Qjs7QUFDQUYsa0JBQWdCLENBQUNLLElBQWpCLENBQXNCLElBQXRCLEVBQTRCQyxJQUE1QixDQUFpQyxZQUFXO0FBQ3hDQyx3QkFBb0IsQ0FBQ04sQ0FBQyxDQUFDLElBQUQsQ0FBRixDQUFwQjtBQUNILEdBRkQsRUFUOEIsQ0FhOUI7O0FBQ0FELGtCQUFnQixDQUFDSSxNQUFqQixDQUF3QkQsVUFBeEI7QUFFQUQsbUJBQWlCLENBQUNNLEtBQWxCLENBQXlCLFVBQVNDLENBQVQsRUFBWTtBQUNqQztBQUNBQSxLQUFDLENBQUNDLGNBQUYsR0FGaUMsQ0FJakM7O0FBQ0FDLGNBQVUsQ0FBQ1gsZ0JBQUQsRUFBbUJHLFVBQW5CLENBQVY7QUFDSCxHQU5EO0FBT0gsQ0F2QkQ7O0FBeUJBLFNBQVNRLFVBQVQsQ0FBb0JYLGdCQUFwQixFQUFzQ0csVUFBdEMsRUFBa0Q7QUFDOUM7QUFDQSxNQUFJUyxTQUFTLEdBQUdaLGdCQUFnQixDQUFDYSxJQUFqQixDQUFzQixnQkFBdEIsQ0FBaEIsQ0FGOEMsQ0FJOUM7QUFDQTs7QUFDQSxNQUFJQyxPQUFPLEdBQUdGLFNBQVMsQ0FBQ0csT0FBVixDQUFrQixXQUFsQixFQUErQmYsZ0JBQWdCLENBQUNnQixRQUFqQixHQUE0QkMsTUFBM0QsQ0FBZCxDQU44QyxDQVE5Qzs7QUFDQSxNQUFJQyxVQUFVLEdBQUdqQixDQUFDLENBQUMsV0FBRCxDQUFELENBQWVHLE1BQWYsQ0FBc0JVLE9BQXRCLENBQWpCO0FBQ0FYLFlBQVUsQ0FBQ2dCLE1BQVgsQ0FBa0JELFVBQWxCLEVBVjhDLENBWTlDOztBQUNBWCxzQkFBb0IsQ0FBQ1csVUFBRCxDQUFwQixDQWI4QyxDQWM5QztBQUNBO0FBQ0E7QUFDSDs7QUFFRCxTQUFTWCxvQkFBVCxDQUE4QmEsVUFBOUIsRUFBMEM7QUFDdEMsTUFBSUMsWUFBWSxHQUFHcEIsQ0FBQyxDQUFDLG9EQUFELENBQXBCO0FBQ0FtQixZQUFVLENBQUNoQixNQUFYLENBQWtCaUIsWUFBbEI7QUFFQUEsY0FBWSxDQUFDYixLQUFiLENBQW1CLFVBQVNDLENBQVQsRUFBWTtBQUMzQjtBQUNBQSxLQUFDLENBQUNDLGNBQUYsR0FGMkIsQ0FJM0I7O0FBQ0FVLGNBQVUsQ0FBQ0UsTUFBWDtBQUNILEdBTkQ7QUFPSCxDIiwiZmlsZSI6InRvdXJpdGluZXJhcnkuanMiLCJzb3VyY2VzQ29udGVudCI6WyJcblxuXG5qUXVlcnkoZG9jdW1lbnQpLnJlYWR5KGZ1bmN0aW9uKCkge1xuICAgIC8vR2V0IHRoZSBkaXYgdGhhdCBob2xkcyB0aGUgY29sbGVjdGlvbiBvZiB0YWdzXG4gICAgdmFyIGNvbGxlY3Rpb25Ib2xkZXIgPSAkKCcjaXRpbmVyYXJ5X2xpc3QgdGJvZHknKTtcblxuICAgIC8vIHNldHVwIGFuIFwiYWRkIGEgdGFnXCIgbGlua1xuICAgIHZhciAkYWRkSXRpbmVyYXJ5TGluayA9ICQoJzx0ZD48YSBocmVmPVwiI1wiIGNsYXNzPVwiYWRkX2l0aW5lcmFyeV9saW5rXCI+QWRkIGFuIEl0aW5lcmFyeSBEYXk8L2E+PC90ZD4nKTtcbiAgICB2YXIgJG5ld0xpbmtUciA9ICQoJzx0cj48L3RyPicpLmFwcGVuZCgkYWRkSXRpbmVyYXJ5TGluayk7XG5cbiAgICAvLyBhZGQgYSBkZWxldGUgbGluayB0byBhbGwgb2YgdGhlIGV4aXN0aW5nIHRhZyBmb3JtIGxpIGVsZW1lbnRzXG4gICAgY29sbGVjdGlvbkhvbGRlci5maW5kKCd0cicpLmVhY2goZnVuY3Rpb24oKSB7XG4gICAgICAgIGFkZFRhZ0Zvcm1EZWxldGVMaW5rKCQodGhpcykpO1xuICAgIH0pO1xuICAgICAgICBcbiAgICAvLyBhZGQgdGhlIFwiYWRkIGEgdGFnXCIgYW5jaG9yIGFuZCBsaSB0byB0aGUgdGFncyB1bFxuICAgIGNvbGxlY3Rpb25Ib2xkZXIuYXBwZW5kKCRuZXdMaW5rVHIpO1xuXG4gICAgJGFkZEl0aW5lcmFyeUxpbmsuY2xpY2soIGZ1bmN0aW9uKGUpIHtcbiAgICAgICAgLy8gcHJldmVudCB0aGUgbGluayBmcm9tIGNyZWF0aW5nIGEgXCIjXCIgb24gdGhlIFVSTFxuICAgICAgICBlLnByZXZlbnREZWZhdWx0KCk7XG5cbiAgICAgICAgLy8gYWRkIGEgbmV3IHRhZyBmb3JtIChzZWUgbmV4dCBjb2RlIGJsb2NrKVxuICAgICAgICBhZGRUYWdGb3JtKGNvbGxlY3Rpb25Ib2xkZXIsICRuZXdMaW5rVHIpO1xuICAgIH0pO1xufSk7XG5cbmZ1bmN0aW9uIGFkZFRhZ0Zvcm0oY29sbGVjdGlvbkhvbGRlciwgJG5ld0xpbmtUcikge1xuICAgIC8vIEdldCB0aGUgZGF0YS1wcm90b3R5cGUgd2UgZXhwbGFpbmVkIGVhcmxpZXJcbiAgICB2YXIgcHJvdG90eXBlID0gY29sbGVjdGlvbkhvbGRlci5hdHRyKCdkYXRhLXByb3RvdHlwZScpO1xuXG4gICAgLy8gUmVwbGFjZSAnJCRuYW1lJCQnIGluIHRoZSBwcm90b3R5cGUncyBIVE1MIHRvXG4gICAgLy8gaW5zdGVhZCBiZSBhIG51bWJlciBiYXNlZCBvbiB0aGUgY3VycmVudCBjb2xsZWN0aW9uJ3MgbGVuZ3RoLlxuICAgIHZhciBuZXdGb3JtID0gcHJvdG90eXBlLnJlcGxhY2UoL19fbmFtZV9fL2csIGNvbGxlY3Rpb25Ib2xkZXIuY2hpbGRyZW4oKS5sZW5ndGgpO1xuXG4gICAgLy8gRGlzcGxheSB0aGUgZm9ybSBpbiB0aGUgcGFnZSBpbiBhbiBsaSwgYmVmb3JlIHRoZSBcIkFkZCBhIHRhZ1wiIGxpbmsgbGlcbiAgICB2YXIgJG5ld0Zvcm1MaSA9ICQoJzx0cj48L3RyPicpLmFwcGVuZChuZXdGb3JtKTtcbiAgICAkbmV3TGlua1RyLmJlZm9yZSgkbmV3Rm9ybUxpKTtcblxuICAgIC8vIGFkZCBhIGRlbGV0ZSBsaW5rIHRvIHRoZSBuZXcgZm9ybVxuICAgIGFkZFRhZ0Zvcm1EZWxldGVMaW5rKCRuZXdGb3JtTGkpO1xuICAgIC8vIHZhciBpc0Nocm9tZSA9IC9DaHJvbWUvLnRlc3QobmF2aWdhdG9yLnVzZXJBZ2VudCkgJiYgL0dvb2dsZSBJbmMvLnRlc3QobmF2aWdhdG9yLnZlbmRvcik7XG4gICAgLy9pZiAoIWlzQ2hyb21lKVxuICAgIC8vXHQkKCcuZGF0ZXBpY2tlcicpLmRhdGVwaWNrZXIoe2RhdGVGb3JtYXQ6ICd5eS1tbS1kZCcsIGNoYW5nZU1vbnRoOiB0cnVlLCBjaGFuZ2VZZWFyOiB0cnVlfSk7XG59XG5cbmZ1bmN0aW9uIGFkZFRhZ0Zvcm1EZWxldGVMaW5rKCR0YWdGb3JtVHIpIHtcbiAgICB2YXIgJHJlbW92ZUZvcm1BID0gJCgnPHRkPjxhIGhyZWY9XCIjXCI+ZGVsZXRlIHRoaXMgaXRpbmVyYXJ5IGRheTwvYT48L3RkPicpO1xuICAgICR0YWdGb3JtVHIuYXBwZW5kKCRyZW1vdmVGb3JtQSk7XG4gICAgXG4gICAgJHJlbW92ZUZvcm1BLmNsaWNrKGZ1bmN0aW9uKGUpIHtcbiAgICAgICAgLy8gcHJldmVudCB0aGUgbGluayBmcm9tIGNyZWF0aW5nIGEgXCIjXCIgb24gdGhlIFVSTFxuICAgICAgICBlLnByZXZlbnREZWZhdWx0KCk7XG5cbiAgICAgICAgLy8gcmVtb3ZlIHRoZSBsaSBmb3IgdGhlIHRhZyBmb3JtXG4gICAgICAgICR0YWdGb3JtVHIucmVtb3ZlKCk7XG4gICAgfSk7XG59Il0sInNvdXJjZVJvb3QiOiIifQ==