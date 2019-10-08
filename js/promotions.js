/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var isPicValid = false;
window.onload = function() {
    attachListeners();
};
function attachListeners() {
    var btnAdd = document.getElementById("btnAdd");
    var fileInput = document.getElementById("file_input");
    var uploadBanner = document.getElementById("banner_file_upload");
    uploadBanner.addEventListener("click", function() {
        fileInput.click();
    });
    fileInput.addEventListener("change", function() {
        displayBanner(this);
    });
    btnAdd.addEventListener("click", checkForms);
}
function checkForms() {
    var promoForm = document.getElementById("promoForm");
    var title = document.getElementById("title");
    txtTitle = title.value;
    var isTitleValid = false;
    var description = document.getElementById("description");
    txtDescription = description.value;
    var isDescriptionValid = false;
    var bannerDropZone = document.getElementById("banner_dropzone");
    if (txtTitle == "") {
        title.style.borderColor = "red";
        title.setCustomValidity("This is a required field!");
        isTitleValid = false;
    } else {
        title.style.borderColor = "green";
        title.setCustomValidity("");
        isTitleValid = true;
    } if (txtDescription == "") {
        description.style.borderColor = "red";
        description.setCustomValidity("This is a required field!");
        isDescriptionValid = false;
    } else {
        description.style.borderColor = "green";
        description.setCustomValidity("");
        isDescriptionValid = true;
    } if (!isPicValid) {
        bannerDropZone.style.borderColor = "red";
    } else {
        bannerDropZone.style.borderColor = "green";
    } if (isTitleValid && isDescriptionValid && isPicValid) {
        alert("You have successfully added a new KUUUEEEH promotion!");
        promoForm.submit();
    }
}
function displayBanner(input) {
    var fileInput = document.getElementById("file_input");
    var imgExtensionTypes = ['jpg', 'jpeg', 'png', 'gif'];
    var bannerImg = document.getElementById("banner");
    var bannerDropZone = document.getElementById("banner_dropzone");
    var filePath = document.getElementById("filePath");
    isPicValid = false;
    var reader;
    if (input.files && input.files[0]) {
        var extension = input.files[0].name.split('.').pop().toLowerCase();
        isSuccess = imgExtensionTypes.indexOf(extension) > -1;
        if (isSuccess) {
            isPicValid = true;
            reader = new FileReader();
            reader.onload = function(e) {
                bannerImg.setAttribute("src", e.target.result);
                bannerImg.style.width = "100%";
                bannerDropZone.style.borderColor = "green";
                bannerDropZone.style.height = "auto";
            };
            reader.readAsDataURL(input.files[0]); 
            filePath.innerHTML = input.files[0].name;
        } else {
            isPicValid = false;
            bannerImg.setAttribute("src", "");
            bannerDropZone.style.height = "auto";
            bannerDropZone.style.borderColor = "red";
            filePath.innerHTML = "Invalid file path!";
            alert("Error, please upload only image files with .jpg, .jpeg, .png or .gif extensions!");
        }
   }
}