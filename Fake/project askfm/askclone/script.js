function getRandomColor() {
  var letters = '0123456789ABCDEF';
  var color = '#';
  for (var i = 0; i < 6; i++) {
    color += letters[Math.floor(Math.random() * 16)];
  }
  return color;
}

function myFunction() {
 //$("#colour").css("background-color", blue );
  document.getElementsByClassName('color').style.background =getRandomColor() ;
}
$(document).ready(function () {
  $("#colour").css("background-color", getRandomColor() );
})
