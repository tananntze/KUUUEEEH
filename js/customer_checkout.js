/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var txtEmail;
var txtFirstName;
var txtLastName;
var txtMobileNo;
//var txtOrderList = "";
//var subtotal = 0.0;
//var delivery = 0.00;
//var totalAmt = 0.0;
//var cardType = "Visa";
window.onload = function() {
    attachListeners();
    //updateDelivery();
};
function attachListeners() { //this is to add event listeners for the radio buttons of selecting type of delivery and type of payment
    var btnDetails = document.getElementById("btnDetails");
    btnDetails.addEventListener("click", checkForms);
}
function checkForms() { //this is the function for the form validation
    var customerForm = document.getElementById("customerForm");
    var email = document.getElementById("email");
    var txtEmail = email.value;
    var isEmailValid = false;
    var firstName = document.getElementById("first_name");
    var txtFirstName = firstName.value;
    var isFirstNameValid = false;
    var lastName = document.getElementById("last_name");
    var txtLastName = lastName.value;
    var isLastNameValid = false;
    var mobileNo = document.getElementById("mobile_no");
    var txtMobileNo = mobileNo.value;
    var isMobileNoValid = false;
    if (txtEmail == "") { //this is to check if one of the text fields is left blank and the textfield will display respective indications of changing border color and showing tooltip to indicate error message
        email.setCustomValidity("This is a required field!");
        isEmailValid = false;
    } else {
        if (!(chkEmailSyntax(txtEmail))) { //this is to check if the email does not follow the syntax and the textfield will display respective indications of changing border color and showing tooltip to indicate error message
            email.setCustomValidity("Please enter a proper email address!");
            isEmailValid = false;
        } else { //this is to indicate that the user has keyed in proper email address and textfield turns green
            email.style.borderColor = "green";
            email.setCustomValidity("");
            isEmailValid = true;
        }
    } if (txtFirstName == "") {
        firstName.setCustomValidity("This is a required field!");
        isFirstNameValid = false;
    } else {
        if (!(chkNameSyntax(txtFirstName))) {
            firstName.setCustomValidity("Please enter a proper name!");
            isFirstNameValid = false;
        } else {
            firstName.style.borderColor = "green";
            firstName.setCustomValidity("");
            isFirstNameValid = true;
        }
    } if (txtLastName == "") {
        lastName.setCustomValidity("This is a required field!");
        isLastNameValid = false;
    } else {
        if (!(chkNameSyntax(txtLastName))) {
            lastName.setCustomValidity("Please enter a proper name!");
            isLastNameValid = false;
        } else {
            lastName.style.borderColor = "green";
            lastName.setCustomValidity("");
            isLastNameValid = true;
        }
    } if (txtMobileNo == "") {
        mobileNo.setCustomValidity("This is a required field!");
        isMobileNoValid = false;
    } else {     
        if (!(chkMobileNoSyntax(txtMobileNo))) {
            mobileNo.setCustomValidity("Please enter a proper mobile number!");
            isMobileNoValid = false;
        } else {
            mobileNo.style.borderColor = "green";
            mobileNo.setCustomValidity("");
            isMobileNoValid = true;
        }
    } if (isEmailValid && isFirstNameValid && isLastNameValid && isMobileNoValid) {
        customerForm.submit();
    }
}
function chkEmailSyntax(email) { //this is to check whether syntax of email is correct format or not
    return /\S+@\S+\.\S+/.test(email);
}
function chkNameSyntax(name) { //this is to check whether syntax of name is correct format or not
    return /^[a-zA-Z][a-zA-Z .,'-]*$/.test(name);
}
function chkPostalCodeSyntax(num) { //this is to check whether syntax of 6-digit Singapore postal code is in correct format or not
    return /^[0-9]{6}$/.test(num);
}
function chkMobileNoSyntax(num) { //this is to check whether syntax of 8-digit Singapore format is in correct format or not
    return /^[0-9]{8}$/.test(num);
}
function chkCardNoSyntax(num) { //this is to check whether syntax of 16-digit card number is in correct format or not
    return /^[0-9]{16}$/.test(num);
}
function chkCCVSyntax(num) { //this is to check whether syntax of 3-digit ccv is in correct format or not
    return /^[0-9]{3}$/.test(num);
}
function updateAddress() { //this is to update the address depending on radio button
    var getAddress = document.getElementById("address").value;
    var getPc = document.getElementById("postal_code").value;
    var radioHome = document.getElementById("radioHome");
    var radioStore = document.getElementById("radioStore");
    var collectionAddress = document.getElementById("txtCollectionAddress");
    var homeAddress = getAddress + " Singapore " + getPc;
    var storeAddress = "172 Ang Mo Kio Avenue 8 #01-01"+ " Singapore 567739";
    if (radioHome.checked) {
        txtCollectionAddress = homeAddress;
        collectionAddress.innerHTML = txtCollectionAddress;
    } else if (radioStore.checked) {
        txtCollectionAddress = storeAddress;
        collectionAddress.innerHTML = txtCollectionAddress; 
    }
}