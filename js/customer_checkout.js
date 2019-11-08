/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var txtEmail;
var txtFirstName;
var txtLastName;
var txtMobileNo;
var txtOrderList = "";
var subtotal = 0.0;
var delivery = 0.00;
var totalAmt = 0.0;
var cardType = "Visa";
var getQuantity = 0;
window.onload = function() {
    attachListeners();
    displayOrder();
    updateDelivery();
    document.getElementById("badgeQuantity").innerHTML = getQuantity.toString(); //displays quantity similar to notification icon
};
function attachListeners() { //this is to add event listeners for the radio buttons of selecting type of delivery and type of payment
    var btnDetails = document.getElementById("btnDetails");
    //var radioHome = document.getElementById("radioHome");
    //var radioStore = document.getElementById("radioStore");
    //radioHome.addEventListener("click", updateDelivery);
    //radioStore.addEventListener("click", updateDelivery);
    btnDetails.addEventListener("click", checkForms);
}
function displayOrder() { //this is the code to dynamically create rows and oclumns to populate the table content for my orders
    /*var quantity = document.getElementById("quantity");
    var tblOrders = document.getElementById("tblOrders");
    var noOfDiffKuehs = 4;
    quantity.innerHTML = "Total Quantity: " + getQuantity;
    var kuehImg = ["img/The Basic Kuehs/Ang Ku Kueh.jpg", "img/Kueh with Character/Png Kueh.jpg", "img/Kueh with Character/Chwee Kueh.jpg", "img/The Heavyweight Kuehs/Kueh Talam Ubi.jpg"];
    var kuehCategory = ["The Basic Kuehs", "Kueh with Character", "Kueh with Character", "The Heavweight Kuehs"];
    var kuehNames = ["Ang Ku Kueh", "Png Kueh", "Chwee Kueh", "Kueh Talam Ubi"];
    var cost = [0.50, 0.60, 0.70, 0.50];
    var quantities = [1, 2, 1, 3];
    var header = tblOrders.createTHead();
    var headerRow = header.insertRow(0);
    var headerCellImg = headerRow.insertCell(0);
    var headerCellCategory = headerRow.insertCell(1);
    var headerCellName = headerRow.insertCell(2);
    var headerCellPriceFor1 = headerRow.insertCell(3);
    var headerCellQuantity = headerRow.insertCell(4);
    var headerCellPriceForAll = headerRow.insertCell(5);
    var headerAction = headerRow.insertCell(6);
    headerCellImg.innerHTML = "Image";
    headerCellCategory.innerHTML = "Category";
    headerCellName.innerHTML = "Name";
    headerCellPriceFor1.innerHTML = "Price";
    headerCellQuantity.innerHTML = "Quantity";
    headerCellPriceForAll.innerHTML = "Total Price";
    headerAction.innerHTML = "Action";
    for (var i = 0; i < noOfDiffKuehs; i++) {
        var row = tblOrders.insertRow(i + 1);
        var cellImg = row.insertCell(0);
        var cellCategory = row.insertCell(1);
        var cellKueh = row.insertCell(2);
        var cellPriceFor1 = row.insertCell(3);
        var cellQuantity = row.insertCell(4);
        var cellPriceForAll = row.insertCell(5);
        var cellPriceAction = row.insertCell(6);
        cellImg.innerHTML = "<img id='imgKueh' src='" + kuehImg[i] + "' alt='kueh'/>";
        cellCategory.innerHTML = kuehCategory[i];
        cellKueh.innerHTML = kuehNames[i];
        cellPriceFor1.innerHTML = "$" + (cost[i]).toFixed(2) + "/pc";
        cellQuantity.innerHTML = quantities[i];
        cellPriceForAll.innerHTML = "$" + (quantities[i] * cost[i]).toFixed(2);
        cellPriceAction.innerHTML = "<a href='#' class='edit'><span class='fa fa-edit'> Edit</span></a>";
        txtOrderList += kuehNames[i] + "   " + quantities[i] + "   " + (quantities[i] * cost[i]).toFixed(2) + "\n";
        subtotal += (quantities[i] * cost[i]);
    }
    document.getElementById("subTotal").innerHTML = "Subtotal: $" + subtotal.toFixed(2);
    document.getElementById("delivery").innerHTML = "Delivery: $" + delivery.toFixed(2);
    totalAmt = subtotal + delivery;
    document.getElementById("totalAmt").innerHTML = "Total Amount: $" + totalAmt.toFixed(2);*/
}
function checkForms() { //this is the function for the form validation
    var customerForm = document.getElementById("customerForm");
    var email = document.getElementById("email");
    txtEmail = email.value;
    var isEmailValid = false;
    var firstName = document.getElementById("first_name");
    txtFirstName = firstName.value;
    var isFirstNameValid = false;
    var lastName = document.getElementById("last_name");
    txtLastName = lastName.value;
    var isLastNameValid = false;
    var mobileNo = document.getElementById("mobile_no");
    txtMobileNo = mobileNo.value;
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
function updateDelivery() { //this is to update the delivery depending on radio button
    /*var radioHome = document.getElementById("radioHome");
    var radioStore = document.getElementById("radioStore");
    if (radioHome.checked) {
        delivery = 5.00;
    } else if (radioStore.checked) {
        delivery = 0.00;
    }
    document.getElementById("subTotal").innerHTML = "Subtotal: $" + subtotal.toFixed(2);
    document.getElementById("delivery").innerHTML = "Delivery: $" + delivery.toFixed(2);
    totalAmt = subtotal + delivery;
    document.getElementById("totalAmt").innerHTML = "Total Amount: $" + totalAmt.toFixed(2);*/
}
function updateCard() { //this is to update the type of card depednding on radio button
    /*var radioVisa = document.getElementById("payVisa");
    var radioMc = document.getElementById("payMaster");
    if (radioVisa.checked) {
        cardType = radioVisa.value;
    } else if (radioMc.checked) {
        cardType = radioMc.value;
    }*/
}