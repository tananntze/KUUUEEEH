/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

window.onload = function() {

//for add item's file field
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();  
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});

//To retrieve and display in the fields for edit modal
    $(document).ready(function () {
        $('.editbtn').on('click', function () {

            $('#editModal').modal('show'); //to make the edit modal pop up when on click


            $tr = $(this).closest('tr');
            var data = $tr.children("td").map(function () { //create a var to map the TD to the function returning text value.

                return $(this).text();

            }).get();

            console.log(data);

            //retrieving the data from table and store into form IDs
            $('#updateProdId').val(data[0]);
            $('#editCategory').val(data[1]);
            $('#editName').val(data[2]);
            $('#editDescription').val(data[3]);
            $('#editPrice').val(data[4]);
            $('#updateImg').val(data[5]);
            $('#editStatus').val(data[6]);

        });

    });
    
};



