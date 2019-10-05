/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
window.onload = function() {
    attachListeners();
};
function attachListeners() {
    var fileInput = document.getElementById("file_input");
    var uploadBanner = document.getElementById("banner_file_upload");
    uploadBanner.addEventListener("click", function() {
        fileInput.click();
    });
    fileInput.addEventListener("change", function() {
        displayBanner(this);
    });
}
function displayBanner(input) {
    var fileInput = document.getElementById("file_input");
    var imgExtensionTypes = ['jpg', 'jpeg', 'png', 'gif'];
    var bannerImg = document.getElementById("banner");
    var bannerDropZone = document.getElementById("banner_dropzone");
    var filePath = document.getElementById("filePath");
    var picValid = false;
    var reader;
    if (input.files && input.files[0]) {
        var extension = input.files[0].name.split('.').pop().toLowerCase();
        isSuccess = imgExtensionTypes.indexOf(extension) > -1;
        if (isSuccess) {
            picValid = true;
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
            picValid = false;
            bannerImg.setAttribute("src", "");
            bannerDropZone.style.height = "auto";
            bannerDropZone.style.borderColor = "red";
            filePath.innerHTML = "Invalid file extension!";
            alert("Error, please upload only image files with .jpg, .jpeg, .png or .gif extensions!");
        }
   }
}