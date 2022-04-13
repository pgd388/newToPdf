var modal = document.getElementById("loading-modal");
var input = document.getElementById("form-input");
var modalCard = document.getElementsByClassName("close")[0];

input.onclick = function() {
  modal.style.display = "block";
}

modalCard.onclick = function() {
  modal.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

window.addEventListener('unload', function (e) {
    modal.style.display = "none";
    e.returnValue = '';
    delete e['returnValue'];
  });