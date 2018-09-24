function userDropdown() {
    document.getElementById("myDropdown").classList.toggle("show");
}

function BurgerUserDropdown() {
  if (document.getElementById("navbarSupportedContent").style.display == "block") {
    document.getElementById("navbarSupportedContent").style.display = "none";
  } else {
    document.getElementById("navbarSupportedContent").style.display = "block";
  }
  
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }

  // if (!event.target.matches('#navbarSupportedContent')) {

  //   var userDropdown = document.getElementById("navbarSupportedContent");
    
  //   if (userDropdown.style.display == "block") {
  //     userDropdown.style.display = "none";
  //   }
  // }

  
}
