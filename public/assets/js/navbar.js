navlinks = document.getElementsByClassName("nav-link-main");
navname = document.getElementById("navname");

for (var i = 0; i < navlinks.length; i++) {
    // alert(navname.innerHTML);
    // alert(navlinks[i].innerHTML);
    if(navname.innerHTML == navlinks[i].id) {
        navlinks[i].classList.add("nav-active-main");
    } else{
        navlinks[i].classList.remove("nav-active-main");
    }
  }