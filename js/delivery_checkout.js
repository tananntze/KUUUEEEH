/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var txtAddress;
var txtPc;
var txtMobileNo;
var txtCollectionAddress;
window.onload = function() {
    attachListeners();
};
function attachListeners() { //this is to add event listeners for the radio buttons of selecting type of delivery and type of payment
    var btnOrder = document.getElementById("btnOrder");
    btnOrder.addEventListener("click", checkForms);
    var address = document.getElementById("address");
    var pc = document.getElementById("postal_code");
    var radioHome = document.getElementById("radioHome");
    var radioStore = document.getElementById("radioStore");
    var radioVisa = document.getElementById("payVisa");
    var radioMc = document.getElementById("payMaster");
    address.addEventListener("input", updateAddress);
    pc.addEventListener("input", updateAddress);
    btnOrder.addEventListener("click", checkForms);
    radioHome.addEventListener("click", updateAddress);
    radioStore.addEventListener("click", updateAddress);
    radioVisa.addEventListener("click", updateCard);
    radioMc.addEventListener("click", updateCard);
}
function checkForms() { //this is the function for the form validation
    var detailsForm = document.getElementById("detailsForm");
    var address = document.getElementById("address");
    var txtAddress = address.value;
    var isAddressValid = false;
    var pc = document.getElementById("postal_code");
    var txtPc = pc.value;
    var isPcValid = false;
    var cardName = document.getElementById("card_name");
    var txtCardName = cardName.value;
    var isCardNameValid = false;
    var cardNum = document.getElementById("card_number");
    var txtCardNum = cardNum.value;
    var isCardNumValid = false;
    var cardCCV = document.getElementById("ccv");
    var txtCCV = cardCCV.value;
    var isCCVValid = false;
    var expiryMonth = document.getElementById("expiry_month");
    var txtExpiryMonth = expiryMonth.value;
    var expiryYear = document.getElementById("expiry_year");
    var txtExpiryYear = expiryYear.value;
    var expiryDate = new Date(txtExpiryYear + '-' + txtExpiryMonth + '-01'); //this excerpt of code is taken from: https://www.freecodecamp.org/forum/t/trying-to-validate-a-credit-card-expiry-month-against-current-date/191434/2
    var isNotExpired = false;
    if (txtAddress == "") {
        address.setCustomValidity("This is a required field!");
        isAddressValid = false;
    } else {     
        address.style.borderColor = "green";
        address.setCustomValidity("");
        isAddressValid = true;
    } if (txtPc == "") {
        pc.setCustomValidity("This is a required field!");
        isPcValid = false;
    } else {     
        if (!(chkPostalCodeSyntax(txtPc))) {
            pc.setCustomValidity("Please enter a proper postal code!");
            isPcValid = false;
        } else {
            pc.style.borderColor = "green";
            pc.setCustomValidity("");
            isPcValid = true;
        }
    } if (txtCardName == "") {
        cardName.setCustomValidity("This is a required field!");
        isCardNameValid = false;
    } else {     
        if (!(chkNameSyntax(txtCardName))) {
            cardName.setCustomValidity("Please enter a proper name!");
            isCardNameValid = false;
        } else {
            cardName.style.borderColor = "green";
            cardName.setCustomValidity("");
            isCardNameValid = true;
        }
    } if (txtCardNum == "") {
        cardNum.setCustomValidity("This is a required field!");
        isCardNumValid = false;
    } else {     
        if (!(chkCardNoSyntax(txtCardNum))) {
            cardNum.setCustomValidity("Please enter a proper card number!");
            isCardNumValid = false;
        } else {
            cardNum.style.borderColor = "green";
            cardNum.setCustomValidity("");
            isCardNumValid = true;
        }
    } if (txtCCV == "") {
        cardCCV.setCustomValidity("This is a required field!");
        isCCVValid = false;
    } else {     
        if (!(chkCCVSyntax(txtCCV))) {
            cardCCV.setCustomValidity("Please enter a proper CCV number!");
            isCCVValid = false;
        } else {
            cardCCV.style.borderColor = "green";
            cardCCV.setCustomValidity("");
            isCCVValid = true;
        }
    } if (expiryDate < new Date().setHours(0,0,0,0)) {
        expiryMonth.style.borderColor = "red";
        expiryYear.style.borderColor = "red";
        expiryMonth.setCustomValidity("Your card has expire already, please try again!");
        expiryYear.setCustomValidity("Your card has expire already, please try again!");
        isNotExpired = false;
    } else {
        expiryMonth.style.borderColor = "green";
        expiryYear.style.borderColor = "green";
        expiryMonth.setCustomValidity("");
        expiryYear.setCustomValidity("");
        isNotExpired = true;
    }
    if (isAddressValid && isPcValid && isCardNameValid && isCardNumValid && isCCVValid && isNotExpired) { //if all the textfields are valid, then form submission will take place and there will be a alert to display in a form of e-receipt to show that an order has been made successfully
        detailsForm.submit();
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
    txtCollectionAddress = homeAddress;
    collectionAddress.innerHTML = txtCollectionAddress;
    if (radioHome.checked) {
        txtCollectionAddress = homeAddress;
        collectionAddress.innerHTML = txtCollectionAddress;
    } else if (radioStore.checked) {
        txtCollectionAddress = storeAddress;
        collectionAddress.innerHTML = txtCollectionAddress; 
    }
}
function updateCard() { //this is to update the type of card depednding on radio button
    var radioVisa = document.getElementById("payVisa");
    var radioMc = document.getElementById("payMaster");
    if (radioVisa.checked) {
        cardType = radioVisa.value;
    } else if (radioMc.checked) {
        cardType = radioMc.value;
    }
}