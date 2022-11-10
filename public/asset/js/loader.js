let loader = document.getElementById("loader");
document.body.style.maxHeight = "100vh";
document.body.style.overflow = "hidden";

setTimeout(loaderNone, 2000);
function loaderNone() {
  loader.style.opacity = "0";
  loader.style.zIndex = "-1"
  document.body.style.overflow = "auto";
}