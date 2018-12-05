window.onload = function() {
 prepareListener();
}
function prepareListener() {
 var droppy;
 droppy = document.getElementById("pickamuseum");
 droppy.addEventListener("change",getArt);
}
function getArt() {
alert ("Hello world");
}
