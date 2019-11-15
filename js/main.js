/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function () {
    $('.header').height($(window).height());
})
function validateForm()
{
    var name = document.forms["myForm"]["name"].value;
    var email = document.forms["myForm"]["email"].value;
    var text = document.forms["myForm"]["text"].value;
    var regex = /^[a-zA-Z][a-zA-Z\s]*$/;
    var textregex = /^[A-Za-z _.,!"'/$]*/;
    var emailregex = /[a-z0-9.%+-]+@[a-z0-9.-]+\.[a-z]{2,}$/;

    //Name//
    if (!name.match(regex))
    {
        alert("Please enter a valid name");
        return false;
    }


    //Email Validation//
    else if (!email.match(emailregex))
    {
        alert("Please enter your email");

        return false;
    }
    if (!text.match(textregex))
    {
        alert("Please enter a proper question that you wish to ask.");
        return false;
    }

}

//The following is used for the Accordion FAQ page item*/

$(document).ready(function () {
    // Add minus icon for collapse element which is open by default
    $(".collapse.show").each(function () {
        $(this).prev(".card-header").addClass("highlight");
    });

    // Highlight open collapsed element 
    $(".card-header .btn").click(function () {
        $(".card-header").not($(this).parents()).removeClass("highlight");
        $(this).parents(".card-header").toggleClass("highlight");
    });
});
//
////Function: Hover images on menu page to zoom and display caption
//$(document).ready(function($){
//    $("#hoverimg").on("mouseover", function() {
//        document.getElementById("togglecaption").style.visibility = "visible";
//        
//    });
//    $("#hoverimg").on("mouseout", function() {
//        document.getElementById("togglecaption").style.visibility = "hidden";
//    });
//});


