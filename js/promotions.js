/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var isPicValid = false;
window.onload = function() {
    attachListeners();
};
function attachListeners() { //this is to initialize the buttons by attaching an event and call function
    var btnAdd = document.getElementById("btnAdd");
    var fileInput = document.getElementById("file_input");
    var uploadBanner = document.getElementById("banner_file_upload");
    uploadBanner.addEventListener("click", function() { //this is to prompt user to show the dialog to select a file once user clicks a button
        fileInput.click();
    });
    fileInput.addEventListener("change", function() {
        displayBanner(this);
    });
    btnAdd.addEventListener("click", checkForms);
}
function checkForms() { //this is the function for the form validation
    var promoForm = document.getElementById("promoForm");
    var start = document.getElementById("start_date");
    txtStart = start.value;
    startDate = new Date(txtStart);
    startDate.setHours(0, 0, 0);
    var isStartDateValid = true;
    var end = document.getElementById("end_date");
    txtEnd = end.value;
    endDate = new Date(txtEnd);
    endDate.setHours(23, 59, 59);
    var isEndDateValid = true;
    var bannerDropZone = document.getElementById("banner_dropzone");
    if (!isPicValid) {
        bannerDropZone.style.borderColor = "red";
    } else {
        bannerDropZone.style.borderColor = "green";
    } if (txtStart == "") {
        start.setCustomValidity("This is a required field!");
        isStartDateValid = false;
    } else {
        if (startDate <= new Date().setHours(0, 0, 0)) { //if user keys in date before current date
            start.style.borderColor = "red";
            start.setCustomValidity("Please enter the start date that is later than the current date");
            isStartDateValid = false;
        } else {
            start.style.borderColor = "green";
            start.setCustomValidity("");
            isStartDateValid = true;
        }
    } if (txtEnd == "") {
        end.setCustomValidity("This is a required field!");
        isEndDateValid = false;
    } else {
        if (endDate <= new Date().setHours(0, 0, 0)) { //if user keys in date before current date
            end.style.borderColor = "red";
            end.setCustomValidity("Please enter the end date that is later than the current date");
            isEndDateValid = false;
        } else if (endDate < startDate) { //if user keys in end date before start date
            end.style.borderColor = "red";
            end.setCustomValidity("Please enter the end date that is later than the start date");
            isEndDateValid = false;
        } else {
            end.style.borderColor = "green";
            end.setCustomValidity("");
            isEndDateValid = true;
        }
    }
    if (isPicValid && isStartDateValid && isEndDateValid) {
        alert("You have successfully added a new KUUUEEEH promotion!");
        promoForm.submit();
    }
    var promoForm = document.getElementById("promoForm");
    promoForm.submit();
}
function displayBanner(input) { //this is to check whether the file extension is an image or not. If it is an image, the image that is selected will be displayed out to the user.
    var fileInput = document.getElementById("file_input");
    var imgExtensionTypes = ["jpg", "png", "gif", "jpeg"];
    var bannerImg = document.getElementById("banner");
    var bannerDropZone = document.getElementById("banner_dropzone");
    var filePath = document.getElementById("filePath");
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
            fileInput.value = "";
            bannerImg.setAttribute("src", "");
            bannerDropZone.style.height = "auto";
            bannerDropZone.style.borderColor = "red";
            filePath.innerHTML = "Invalid file path!";
            alert("Error, please upload only image files with .jpg, .jpeg, .png or .gif extensions!");
        }
    }
}