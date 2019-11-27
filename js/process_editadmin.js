/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// For editadmin.php search function
function validateSearch() 
{
    var searchcat = document.forms["searchform"]["scategory"].value;
    var searchname = document.forms["searchform"]["sname"].value;

    //If both fields are empty
    if (searchcat === "" && searchname === "")
    {
        alert("Please fill in at least one of the search fields.");
    }
    
    //If category is filled 
    else if (searchcat !== "" && searchname === "")
    {
        if (!(/^[a-zA-Z](?!.* {2})[ \w.-]{2,}$/.test(searchcat)))
        {
            alert("Invalid category format.");
            return false;  
        }
    }
    
    //If name is filled
    else if (searchcat === "" && searchname !== "")
    {
        if (!(/^[a-zA-Z](?!.* {2})[ \w.-]{2,}$/.test(searchname)))
        {
            alert("Invalid name format.");
            return false;  
        }
    }
    
    //If both fields are filled
    else
    {
        //Validate category
        if (!(/^[a-zA-Z](?!.* {2})[ \w.-]{2,}$/.test(searchcat)))
        {
            alert("Invalid category format.");
            return false;  
        }
        
        //Validate name
        if (!(/^[a-zA-Z](?!.* {2})[ \w.-]{2,}$/.test(searchname)))
        {
            alert("Invalid name format.");
            return false;  
        }
    }
} 

// For editadmin.php adding function
function validateAdd() 
{
    var addname = document.forms["addform"]["addName"].value;
    var adddesc = document.forms["addform"]["addDescription"].value;
    var addprice = document.forms["addform"]["addPrice"].value;
    
    if (addname === "" || !(/^[a-zA-Z](?!.* {2,6})[ \w.-]{2,15}$/.test(addname)) || addname.length > 15) 
    {
        alert("Name is invalid.");
        return false;  
    }
    
    if (adddesc === "" || !(/[\w\s\-,.]{10,160}$/.test(adddesc)) || adddesc.length > 200) 
    {
        alert("Description is invalid.");
        return false;  
    }
    
    if (addprice === "" || !(/^(?=.*[1-9])\d{0,2}(?:\.\d{0,2})?$/.test(addprice))) 
    {
        alert("Price is invalid.");
        return false;  
    }    
}

// For editadmin.php editing function
function validateEdit() 
{
    var editname = document.forms["editform"]["editName"].value;
    var editdesc = document.forms["editform"]["editDescription"].value;
    var editprice = document.forms["editform"]["editPrice"].value;
    
    if (editname === "" || !(/^[a-zA-Z](?!.* {2,6})[ \w.-]{2,}$/.test(editname)) || editname.length > 15) 
    {
        alert("Name is invalid.");
        return false;  
    }
    
    if (editdesc === "" || !(/[\w\s\-,.]{10,}$/.test(editdesc)) || editdesc.length > 200) 
    {
        alert("Description is invalid.");
        return false;  
    }
    
    if (editprice === "" || !(/^(?=.*[1-9])\d{0,2}(?:\.\d{0,2})?$/.test(editprice))) 
    {
        alert("Price is invalid.");
        return false;  
    }    
}