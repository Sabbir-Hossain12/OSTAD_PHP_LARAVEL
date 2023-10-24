// var isHidden = true; // Define isHidden outside of the event listeners
// var element = document.getElementById("custom-edit");
// var editButton = document.querySelectorAll(".edit");

// // Add click event listener to the document
// document.addEventListener("click", function (event) {
//   if (!element.contains(event.target) && event.target !== editButton) {
//     element.setAttribute("hidden", "true");
//     isHidden = true;
//   }
// });

// editButton.addEventListener("click", function (event) {
//   event.preventDefault();
//   if (isHidden) {
//     element.removeAttribute("hidden");
//   } else {
//     element.setAttribute("hidden", "true");
//   }
//   isHidden = !isHidden;
// });

// // Prevent click on the element itself from closing it
// element.addEventListener("click", function (event) {
//   event.stopPropagation();
// });

var isHidden = true; // Define isHidden outside of the event listeners
var element = document.getElementById("custom-edit");
var editButtons = document.querySelectorAll(".edit");

// Add click event listener to the document
document.addEventListener("click", function (event) {
  var isClickInsideElement = element.contains(event.target);
  var isClickOnEditButton = Array.from(editButtons).some(function (button) {
    return button.contains(event.target);
  });

  if (!isClickInsideElement && !isClickOnEditButton) {
    element.setAttribute("hidden", "true");
    isHidden = true;
  }
});

// Add event listeners to each "Edit" button
editButtons.forEach(function (editButton) {
  editButton.addEventListener("click", function (event) {
    event.preventDefault();
    if (isHidden) {
      element.removeAttribute("hidden");
    } else {
      element.setAttribute("hidden", "true");
    }
    isHidden = !isHidden;
  });
});

// Prevent click on the element itself from closing it
element.addEventListener("click", function (event) {
  event.stopPropagation();
});
