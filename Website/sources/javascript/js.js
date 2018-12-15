function hideCookies() {
    var x = document.getElementById("coookiebox").innerHTML;
    if (x.style.display === "none") {
      x.style.display = "block";
    } else {
      x.style.display = "none";
    }
}