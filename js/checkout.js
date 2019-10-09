/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var txtEmail;
var txtFirstName;
var txtLastName;
var txtAddress;
var txtPc;
var txtMobileNo;
var txtCollectionAddress;
var txtOrderList = "";
var subtotal = 0.0;
var delivery = 0.00;
var totalAmt = 0.0;
var cardType = "Visa";
window.onload = function() {
    attachListeners();
    displayOrder();
    updateDelivery();
};
function attachListeners() {
    var btnOrder = document.getElementById("btnOrder");
    var radioHome = document.getElementById("radioHome");
    var radioStore = document.getElementById("radioStore");
    var address = document.getElementById("address");
    var pc = document.getElementById("postal_code");
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
function displayOrder() {
    var quantity = document.getElementById("quantity");
    var tblOrders = document.getElementById("tblOrders");
    var getQuantity = 7;
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
    headerCellPriceFor1.innerHTML = "Price of 1";
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
        cellPriceFor1.innerHTML = "$" + (cost[i]).toFixed(2);
        cellQuantity.innerHTML = quantities[i];
        cellPriceForAll.innerHTML = "$" + (quantities[i] * cost[i]).toFixed(2);
        cellPriceAction.innerHTML = "<a href='#' class='edit'><span class='fa fa-edit'> Edit Order</span></a>";
        txtOrderList += kuehNames[i] + "   " + quantities[i] + "   " + (quantities[i] * cost[i]).toFixed(2) + "\n";
        subtotal += (quantities[i] * cost[i]);
    }
    document.getElementById("subTotal").innerHTML = "Subtotal: $" + subtotal.toFixed(2);
    document.getElementById("delivery").innerHTML = "Delivery: $" + delivery.toFixed(2);
    totalAmt = subtotal + delivery;
    document.getElementById("totalAmt").innerHTML = "Total Amount: $" + totalAmt.toFixed(2);
}
function checkForms() {
    var billingForm = document.getElementById("billingForm");
    var email = document.getElementById("email");
    txtEmail = email.value;
    var isEmailValid = false;
    var firstName = document.getElementById("first_name");
    txtFirstName = firstName.value;
    var isFirstNameValid = false;
    var lastName = document.getElementById("last_name");
    txtLastName = lastName.value;
    var isLastNameValid = false;
    var address = document.getElementById("address");
    txtAddress = address.value;
    var isAddressValid = false;
    var pc = document.getElementById("postal_code");
    txtPc = pc.value;
    var isPcValid = false;
    var mobileNo = document.getElementById("mobile_no");
    txtMobileNo = mobileNo.value;
    var isMobileNoValid = false;
    var cardName = document.getElementById("card_name");
    var txtCardName = cardName.value;
    var isCardNameValid = false;
    var cardNum = document.getElementById("card_number");
    var txtCardNum = cardNum.value;
    var isCardNumValid = false;
    var cardCCV = document.getElementById("ccv");
    var txtCCV = cardCCV.value;
    var isCCVValid = false;
    if (txtEmail == "") {
        email.style.borderColor = "red";
        email.setCustomValidity("This is a required field!");
        isEmailValid = false;
    } else {
        if (!(chkEmailSyntax(txtEmail))) {
            email.style.borderColor = "red";
            email.setCustomValidity("Please enter a proper email address!");
            isEmailValid = false;
        } else {
            email.style.borderColor = "green";
            email.setCustomValidity("");
            isEmailValid = true;
        }
    } if (txtFirstName == "") {
        firstName.style.borderColor = "red";
        firstName.setCustomValidity("This is a required field!");
        isFirstNameValid = false;
    } else {
        if (!(chkNameSyntax(txtFirstName))) {
            firstName.style.borderColor = "red";
            firstName.setCustomValidity("Please enter a proper name!");
            isFirstNameValid = false;
        } else {
            firstName.style.borderColor = "green";
            firstName.setCustomValidity("");
            isFirstNameValid = true;
        }
    } if (txtLastName == "") {
        lastName.style.borderColor = "red";
        lastName.setCustomValidity("This is a required field!");
        isLastNameValid = false;
    } else {
        if (!(chkNameSyntax(txtLastName))) {
            lastName.style.borderColor = "red";
            lastName.setCustomValidity("Please enter a proper name!");
            isLastNameValid = false;
        } else {
            lastName.style.borderColor = "green";
            lastName.setCustomValidity("");
            isLastNameValid = true;
        }
    } if (txtAddress == "") {
        address.style.borderColor = "red";
        address.setCustomValidity("This is a required field!");
        isAddressValid = false;
    } else {     
        address.style.borderColor = "green";
        address.setCustomValidity("");
        isAddressValid = true;
    } if (txtPc == "") {
        pc.style.borderColor = "red";
        pc.setCustomValidity("This is a required field!");
        isPcValid = false;
    } else {     
        if (!(chkNumSyntax(txtPc))) {
            pc.style.borderColor = "red";
            pc.setCustomValidity("Please enter a proper postal code!");
            isPcValid = false;
        } else {
            pc.style.borderColor = "green";
            pc.setCustomValidity("");
            isPcValid = true;
        }
    } if (txtMobileNo == "") {
        mobileNo.style.borderColor = "red";
        mobileNo.setCustomValidity("This is a required field!");
        isMobileNoValid = false;
    } else {     
        if (!(chkNumSyntax(txtMobileNo))) {
            mobileNo.style.borderColor = "red";
            mobileNo.setCustomValidity("Please enter a proper mobile number!");
            isMobileNoValid = false;
        } else {
            mobileNo.style.borderColor = "green";
            mobileNo.setCustomValidity("");
            isMobileNoValid = true;
        }
    } if (txtCardName == "") {
        cardName.style.borderColor = "red";
        cardName.setCustomValidity("This is a required field!");
        isCardNameValid = false;
    } else {     
        if (!(chkNameSyntax(txtCardName))) {
            cardName.style.borderColor = "red";
            cardName.setCustomValidity("Please enter a proper name!");
            isCardNameValid = false;
        } else {
            cardName.style.borderColor = "green";
            cardName.setCustomValidity("");
            isCardNameValid = true;
        }
    } if (txtCardNum == "") {
        cardNum.style.borderColor = "red";
        cardNum.setCustomValidity("This is a required field!");
        isCardNumValid = false;
    } else {     
        if (!(chkNumSyntax(txtCardNum))) {
            cardNum.style.borderColor = "red";
            cardNum.setCustomValidity("Please enter a proper card number!");
            isCardNumValid = false;
        } else {
            cardNum.style.borderColor = "green";
            cardNum.setCustomValidity("");
            isCardNumValid = true;
        }
    } if (txtCCV == "") {
        cardCCV.style.borderColor = "red";
        cardCCV.setCustomValidity("This is a required field!");
        isCCVValid = false;
    } else {     
        if (!(chkNumSyntax(txtCCV))) {
            cardCCV.style.borderColor = "red";
            cardCCV.setCustomValidity("Please enter a proper CVC number!");
            isCCVValid = false;
        } else {
            cardCCV.style.borderColor = "green";
            cardCCV.setCustomValidity("");
            isCCVValid = true;
        }
    }
    if (isEmailValid && isFirstNameValid && isLastNameValid && isAddressValid && isPcValid && isMobileNoValid && isCardNameValid && isCardNumValid && isCCVValid) {
        alert("Thank you for buying with KUUUEEEH!" + "\n\n\
              Order Successful!\n\n\
              Full Name: " + txtFirstName + " " + txtLastName + "\n\n\
              Address: " + txtAddress + " Singapore " + txtPc + "\n\n\
              Mobile No: " + txtMobileNo + "\n\n\
              Collection Address: " + txtCollectionAddress + "\n\n\
              My Order:\n" + txtOrderList + "\n\n\
              Total Amount: " + totalAmt.toFixed(2) + "\n\n\
              Payment By: " + cardType + "\n\n\
              Delivered in: About 45-60 minutes");
        billingForm.submit();
    }
}
function chkEmailSyntax(email) {
    return /\S+@\S+\.\S+/.test(email);
}
function chkNameSyntax(name) {
    return /^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$/.test(name);
}
function chkNumSyntax(num) {
    return /^[0-9]*$/.test(num);
}
function updateAddress() {
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
function updateDelivery() {
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
function updateCard() {
    var radioVisa = document.getElementById("payVisa");
    var radioMc = document.getElementById("payMaster");
    if (radioVisa.checked) {
        cardType = radioVisa.value;
    } else if (radioMc.checked) {
        cardType = radioMc.value;
    }
}