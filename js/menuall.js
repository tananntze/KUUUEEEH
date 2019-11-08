/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//This is the code to display the populated table of my orders
//var subtotal = 0.0;
//var getQuantity = 0;
window.onload = function() {
    //displayOrder();
    //document.getElementById("badgeQuantity").innerHTML = getQuantity.toString(); //displays quantity similar to notification icon
    /*btnCart = document.getElementsByClassName("btn");
    for (var i = 0; i < btnCart.length; i++) {
        btnCart[i].addEventListener('click', addKueh, false);
    }*/
};
function displayOrder() { //this is the code to dynamically create rows and columns to populate the table content for my orders
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
    var headerCellPriceAction = headerRow.insertCell(6);
    headerCellImg.innerHTML = "Image";
    headerCellCategory.innerHTML = "Category";
    headerCellName.innerHTML = "Name";
    headerCellPriceFor1.innerHTML = "Price";
    headerCellQuantity.innerHTML = "Quantity";
    headerCellPriceForAll.innerHTML = "Total Price";
    headerCellPriceAction.innerHTML = "Action";
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
        cellPriceAction.innerHTML = "<a id='btnEdit' href='#'><span class='fa fa-edit'> Edit</span></a><a href ='#' class='delete'><span class='fa fa-trash-o'> Delete</span></a>";
        subtotal += (quantities[i] * cost[i]);
    }
    document.getElementById("subTotal").innerHTML = "Subtotal: $" + subtotal.toFixed(2);*/
}