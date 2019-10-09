/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var subtotal = 0.0;
window.onload = function() {
    displayOrder();
};
function displayOrder() {
    var quantity = document.getElementById("quantity");
    var tblOrders = document.getElementById("tblOrders");
    var getQuantity = 7;
    var noOfDiffKuehs = 4;
    quantity.innerHTML = "Total Quantity: " + getQuantity;
    var kuehImg = ["img/The Basic Kuehs/Ang Ku Kueh.jpg", "img/The Basic Kuehs/Kueh Lapis.jpg", "img/The Heavyweight Kuehs/Getuk Getuk.jpg", "img/Kueh with Character/Kueh Tutu.jpg"];
    var kuehCategory = ["The Basic Kuehs", "The Basic Kuehs", "The Heavyweight Kuehs", "Kueh with Character"];
    var kuehNames = ["Ang Ku Kueh", "Kueh Lapis", "Getuk Getuk", "Kueh Tutu"];
    var cost = [4.00, 2.50, 3.60, 3.20];
    var quantities = [1, 2, 1, 3];
    var header = tblOrders.createTHead();
    var headerRow = header.insertRow(0);
    var headerCellImg = headerRow.insertCell(0);
    var headerCellCategory = headerRow.insertCell(1);
    var headerCellName = headerRow.insertCell(2);
    var headerCellPriceFor1 = headerRow.insertCell(3);
    var headerCellQuantity = headerRow.insertCell(4);
    var headerCellPriceForAll = headerRow.insertCell(5);
    headerCellImg.innerHTML = "Kueh Image";
    headerCellCategory.innerHTML = "Kueh Category";
    headerCellName.innerHTML = "Kueh Name";
    headerCellPriceFor1.innerHTML = "Price of 1";
    headerCellQuantity.innerHTML = "Quantity";
    headerCellPriceForAll.innerHTML = "Total Price";
    for (var i = 0; i < noOfDiffKuehs; i++) {
        var row = tblOrders.insertRow(i + 1);
        var cellImg = row.insertCell(0);
        var cellCategory = row.insertCell(1);
        var cellKueh = row.insertCell(2);
        var cellPriceFor1 = row.insertCell(3);
        var cellQuantity = row.insertCell(4);
        var cellPriceForAll = row.insertCell(5);
        cellImg.innerHTML = "<img id='imgKueh' src='" + kuehImg[i] + "' alt='kueh'/>";
        cellCategory.innerHTML = kuehCategory[i];
        cellKueh.innerHTML = kuehNames[i];
        cellPriceFor1.innerHTML = "$" + (cost[i]).toFixed(2);
        cellQuantity.innerHTML = quantities[i];
        cellPriceForAll.innerHTML = "$" + (quantities[i] * cost[i]).toFixed(2);
        subtotal += (quantities[i] * cost[i]);
    }
    document.getElementById("subTotal").innerHTML = "Subtotal: $" + subtotal.toFixed(2);
}