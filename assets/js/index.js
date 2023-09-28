// Get the current page URL
var currentPageURL = window.location.href;

// Loop through all menu buttons
var menuButtons = document.querySelectorAll('.header-button');

menuButtons.forEach(function(button) {
  // Compare the button's href with the current page URL
  if (button.getAttribute('href') === currentPageURL) {
    // Add the 'active' class to the matching button
    button.classList.add('active');
  }
});