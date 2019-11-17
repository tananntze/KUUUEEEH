/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function validateForm() 
{
    var searchcat = document.forms["searchform"]["scategory"].value;
    var searchname = document.forms["searchform"]["sname"].value;


    if (searchcat !== (/^[a-zA-Z](?!.* {2})[ \w.-]{2,}$/.test(searchcat))) 
        {
            alert("Invalid category format.");
            return false;  
        }
    
    if (searchname !== (/^[a-zA-Z](?!.* {2})[ \w.-]{2,}$/.test(searchname))) 
        {
            alert("Invalid name format.");
            return false;  
        }
} 

