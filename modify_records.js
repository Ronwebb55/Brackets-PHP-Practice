function edit_row(id)
{

    var name = doucument.getElementById("name_val"+id).innerHTML;
    var email = doucument.getElementById("email_val"+id).innerHTML;
    var pnumber = doucument.getElementById("pnumber_val"+id).innerHTML;

    document.getElementById("name_val"+id).innerHTML="<input type='text' id='name_text"+id+"' value='"+name+"'>";
    document.getElementById("email_val"+id).innerHTML="<input type='text' id=email_text"+id+"' value='"+email+"'>";
    document.getElementById("pnumber_val"+id).innerHTML="<input type='text' id='pnumber_text"+id+"' value='"+pnumber+"'>";

    doucument.getElementById("edit_button" + id).style.display = 'block';

    doucument.getElementById("save_button" + id).style.display = 'none';

}

function save_row(id)
{

    var name = document.getElementById("name_text" + id).value;
    var email=document.getElementById("email_text"+id).value;
    var pnumber=document.getElementById("pnumber_text"+id).value;


    $.ajax
    ({
        type:'post',
        url: 'modify_records.php',
        data:{
            edit_row:'edit_row',
            row_id:id,
            name_val:name,
            email_val:email,
            pnumber_val:pnumber

        },

        success:function(response){
            if(response=="success")
            {
                document.getElementById("name_val"+id).innerHTML=name;
                document.getElementById("email_val"+id).innerHTML=email;

                document.getElementById("pnumber_val"+id).innerHTML=pnumber;
                document.getElementById("edit_button"+id).style.display="block";
                document.getElementById("save_button"+id).style.display="none";
            }

        }

    });
}


function delete_row(id)
{
    $.ajax
    ({
        type:'post',
        url: 'modify_records.php',
        data:{
            delete_row:'delete_row',
            row_id:id,
        },

        success:function(response) {
            if(response=="success")
            {
                var row=document.getElementById("row"+id);
                row.parentNode.removeChild(row);
            }
        }
    });
}
function insert_row()
{
    var name=document.getElementById("new_name").value;
    var email=document.getElementById("new_email").value;
    var pnumber=document.getElementById("new_pnumber").value;

    $.ajax
    ({
        type:'post',
        url:'modify_records.php',
        data:{
            insert_row:'insert_row',
            name_val:name,
            email_val:email,
            pnumber_val:pnumber
        },
        success:function(response) {
            if(response!="")
            {
                var id=response;
                var table=document.getElementById("user_table");
                var table_len=(table.rows.length)-1;
                var row = table.insertRow(table_len).outerHTML="<tr id='row"+id+"'><td id='name_val"+id+"'>"+name+"</td><td id='email_val"+id+"'>"+email+"</td><td id='pnumber_val"+id+"'>"+pnumber+"</td><td><input type='button' class='edit_button' id='edit_button"+id+"' value='edit' onclick='edit_row("+id+");'/><input type='button' class='save_button' id='save_button"+id+"' value='save' onclick='save_row("+id+");'/><input type='button' class='delete_button' id='delete_button"+id+"' value='delete' onclick='delete_row("+id+");'/></td></tr>";
                document.getElementById("new_name").value="";
                document.getElementById("new_email").value="";
                document.getElementById("new_pnumber").value="";
                }
                }
            });
        }




