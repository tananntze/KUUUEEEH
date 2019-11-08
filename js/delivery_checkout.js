/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var txtAddress;
var txtPc;
var txtMobileNo;
var txtCollectionAddress;
//var txtOrderList = "";
//var subtotal = 0.0;
//var delivery = 0.00;
//var totalAmt = 0.0;
//var cardType = "Visa";
window.onload = function() {
    attachListeners();
    //displayOrder();
    updateDelivery();
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
    radioHome.addEventListener("click", updateDelivery);
    radioStore.addEventListener("click", updateAddress);
    radioStore.addEventListener("click", updateDelivery);
    radioVisa.addEventListener("click", updateCard);
    radioMc.addEventListener("click", updateCard);
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
        /*alert("Thank you for ordering with KUUUEEEH!" + "\n\n\
        Order Successful!\n\n\
        Full Name: " + txtFirstName + " " + txtLastName + "\n\n\
        Address: " + txtAddress + " Singapore " + txtPc + "\n\n\
        Mobile No: " + txtMobileNo + "\n\n\
        Collection Address: " + txtCollectionAddress + "\n\n\
        My Order:\n" + txtOrderList + "\n\n\
        Total Amount: " + totalAmt.toFixed(2) + "\n\n\
        Payment By: " + cardType + "\n\n\
        Delivered in: About 45-60 minutes");*/
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
function updateDelivery() { //this is to update the delivery depending on radio button
    var radioHome = document.getElementById("radioHome");
    var radioStore = document.getElementById("radioStore");
    if (radioHome.checked) {
        delivery = 5.00;
    } else if (radioStore.checked) {
        delivery = 0.00;
    }
    document.getElementById("subTotal").innerHTML = "Subtotal: $" + subtotal.toFixed(2);
    document.getElementById("delivery").innerHTML = "Delivery: $" + delivery.toFixed(2);
    totalAmt = subtotal + delivery;
    document.getElementById("totalAmt").innerHTML = "Total Amount: $" + totalAmt.toFixed(2);
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