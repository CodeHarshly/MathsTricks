document.addEventListener("DOMContentLoaded", function() {
  var toggleButton = document.getElementById("toggleButton");

  toggleButton.addEventListener("change", function() {
    if (toggleButton.checked) {
      enableDarkMode();
    } else {
      disableDarkMode();
    }
  });

  // Check the initial state of dark mode
  var isDarkMode = localStorage.getItem("darkMode");

  if (isDarkMode === "1") {
    toggleButton.checked = true;
    enableDarkMode();
  } else {
    toggleButton.checked = false;
    disableDarkMode();
  }
});

function enableDarkMode() {
  document.body.classList.add("dark-mode");
  localStorage.setItem("darkMode", "1");
}

function disableDarkMode() {
  document.body.classList.remove("dark-mode");
  localStorage.setItem("darkMode", "0");
}
