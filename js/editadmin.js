/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

window.onload = function() {

$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});

};

//var addModal = document.getElementById('addModal');
//window.onclick = function(event) {
//    if (event.target === addModal) {
//        addModal.style.display = "none";
//    }
//}