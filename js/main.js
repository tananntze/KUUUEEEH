/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function () {
    $('.header').height($(window).height());
})
function validateForm() {
    var x = document.forms["myForm"]["fname"].value;
    var mnlen = 1;
    if (x == null || x.length < mnlen) { /* take note mnlen is to check for min length of string*/
        alert("Please input a value");
        return false;
    }
}
   