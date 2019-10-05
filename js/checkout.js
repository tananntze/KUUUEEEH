/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
window.onload = function() {
    attachListeners();
    hideOtherSteps();  
};
function attachListeners() {
    var btnToStep2 = document.getElementById("btnStep2");
    var radioHome = document.getElementById("radioHome");
    var radioStore = document.getElementById("radioStore");
    btnToStep2.addEventListener("click", checkStep1);
    radioHome.addEventListener("click", updateAddress);
    radioStore.addEventListener("click", updateAddress);
}
function checkStep1() {
    var email = document.getElementById("email");
    var txtEmail = email.value;
    var isEmailValid = false;
    var firstName = document.getElementById("first_name");
    var txtFirstName = firstName.value;
    var isFirstNameValid = false;
    var lastName = document.getElementById("last_name");
    var txtLastName = lastName.value;
    var isLastNameValid = false;
    var address = document.getElementById("address");
    var txtAddress = address.value;
    var isAddressValid = false;
    var pc = document.getElementById("postal_code");
    var txtPc = pc.value;
    var isPcValid = false;
    var mobileNo = document.getElementById("mobile_no");
    var txtMobileNo = mobileNo.value;
    var isMobileNoValid = false;
    if (txtEmail == "") {
        email.style.borderColor = "red";
        email.setCustomValidity("This is a required field!");
        hideOtherSteps();
        isEmailValid = false;
    } else {
        if (!(chkEmailSyntax(txtEmail))) {
            email.style.borderColor = "red";
            email.setCustomValidity("Please enter a proper email address!");
            hideOtherSteps();
            isEmailValid = false;
        } else {
            email.style.borderColor = "green";
            email.setCustomValidity("");
            isEmailValid = true;
        }
    } if (txtFirstName == "") {
        firstName.style.borderColor = "red";
        firstName.setCustomValidity("This is a required field!");
        hideOtherSteps();
        isFirstNameValid = false;
    } else {
        if (!(chkNameSyntax(txtFirstName))) {
            firstName.style.borderColor = "red";
            firstName.setCustomValidity("Please enter a proper name!");
            hideOtherSteps();
            isFirstNameValid = false;
        } else {
            firstName.style.borderColor = "green";
            firstName.setCustomValidity("");
            isFirstNameValid = true;
        }
    } if (txtLastName == "") {
        lastName.style.borderColor = "red";
        lastName.setCustomValidity("This is a required field!");
        hideOtherSteps();
        isLastNameValid = false;
    } else {
        if (!(chkNameSyntax(txtLastName))) {
            lastName.style.borderColor = "red";
            lastName.setCustomValidity("Please enter a proper name!");
            hideOtherSteps();
            isLastNameValid = false;
        } else {
            lastName.style.borderColor = "green";
            lastName.setCustomValidity("");
            isLastNameValid = true;
        }
    } if (txtAddress == "") {
        address.style.borderColor = "red";
        address.setCustomValidity("This is a required field!");
        hideOtherSteps();
        isAddressValid = false;
    } else {     
        address.style.borderColor = "green";
        address.setCustomValidity("");
        isAddressValid = true;
    } if (txtPc == "") {
        pc.style.borderColor = "red";
        pc.setCustomValidity("This is a required field!");
        hideOtherSteps();
        isPcValid = false;
    } else {     
        if (!(chkNumSyntax(txtPc))) {
            pc.style.borderColor = "red";
            pc.setCustomValidity("Please enter a proper postal code!");
            hideOtherSteps();
            isPcValid = false;
        } else {
            pc.style.borderColor = "green";
            pc.setCustomValidity("");
            isPcValid = true;
        }
    } if (txtMobileNo == "") {
        mobileNo.style.borderColor = "red";
        mobileNo.setCustomValidity("This is a required field!");
        hideOtherSteps();
        isMobileNoValid = false;
    } else {     
        if (!(chkNumSyntax(txtMobileNo))) {
            mobileNo.style.borderColor = "red";
            mobileNo.setCustomValidity("Please enter a proper mobile number!");
            hideOtherSteps();
            isMobileNoValid = false;
        } else {
            mobileNo.style.borderColor = "green";
            mobileNo.setCustomValidity("");
            isMobileNoValid = true;
        }
    } if (isEmailValid && isFirstNameValid && isLastNameValid && isAddressValid && isPcValid && isMobileNoValid) {
        showOtherSteps();
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
function showOtherSteps() {
    var radioStep2 = document.getElementById("step2Radio");
    var radioStep3 = document.getElementById("step3Radio");
    var orderStep4 = document.getElementById("step4Order");
    var getAddress = document.getElementById("address").value;
    var getPc = document.getElementById("postal_code").value;
    var txtHomeAddress = document.getElementById("txtHomeAddress");
    var txtStoreAddress = document.getElementById("txtStoreAddress");
    radioStep2.style.display = "block";
    radioStep3.style.display = "block";
    orderStep4.style.display = "block"; 
    var homeAddress = getAddress + "<br>Singapore " + getPc;
    var storeAddress = "172 Ang Mo Kio Avenue 8 #01-01"+ "<br>Singapore 567739";
    txtHomeAddress.innerHTML = homeAddress;
    txtStoreAddress.innerHTML = storeAddress;
    updateAddress();
}
function hideOtherSteps() {
    var radioStep2 = document.getElementById("step2Radio");
    var radioStep3 = document.getElementById("step3Radio");
    var orderStep4 = document.getElementById("step4Order");
    radioStep2.style.display = "none";
    radioStep3.style.display = "none";
    orderStep4.style.display = "none";    
}
function updateAddress() {
    var getAddress = document.getElementById("address").value;
    var getPc = document.getElementById("postal_code").value;
    var radioHome = document.getElementById("radioHome");
    var radioStore = document.getElementById("radioStore");
    var collectionAddress = document.getElementById("txtCollectionAddress");
    var homeAddress = getAddress + "<br>Singapore " + getPc;
    var storeAddress = "172 Ang Mo Kio Avenue 8 #01-01"+ "<br>Singapore 567739";
    if (radioHome.checked) {
        collectionAddress.innerHTML = homeAddress;
    } else if (radioStore.checked) {
        collectionAddress.innerHTML = storeAddress;
    }
}