// new
$(document).ready(function () {

  $("#emp_reg").submit(function(event){
    // cancels the form submission
    event.preventDefault();
    emp_reg();
});

function emp_reg(){
 
var fname = $("#fname").val();
var lname = $("#lname").val();
var gender=$("input[name='gender']:checked").val();
var date = $("#date").val();
var age = $("#age").val();
var salery = $("#salery").val();
var aadharno = $("#aadharno").val();
var address = $("#address").val();
var mobile = $("#mobile").val();

$.ajax({
type : "POST",
url : "php/emp.php",
data :  {fname:fname,lname:lname,gender:gender,date:date,age:age,salery:salery,aadharno:aadharno,address:address,mobile:mobile},
cache : false,
success:function(response) 
{
  if(response==0)
  {
    $('#msg').html("<big><font color=#FF0000>Problem During Registration</font></big>").show().fadeOut( 5000 );
  }
else
  {
    $('#msg').html("<big><font color=#00ff00>Employe Register Successfully</font></big>").show().fadeOut( 5000 );
	$('form :input').val('');
	$('input[name="gender"]').prop('checked', false);
  }
  }
});
return false;
}
});
//update
$(document).ready(function()
{
    $("#empid").on("change", function(){ 
    event.preventDefault();
    emp_lod();
    });
    
function emp_lod(){
    
    var empid = $("#empid").val();
   
             $.ajax({
                 method: "POST",
                 url : "php/emp.php",
                 data :  {empid:empid},
                 success:function(response) 
                 {  
                     
                if(response==0)
                    {
                        $('#msg').html("<big><font color=#FF0000>Employe Id Not Found</font></big>").show().fadeOut( 5000 );
                    }
                else
                    {
                        var array = response.split("||");
                        $("#fname").val(array[0]);
                        $("#lname").val(array[1]);
						if(array[2]=="Male")
						{
						 $('[name="gender"]')[0].checked = true;	
						}
						else
						{
						 $('[name="gender"]')[1].checked = true;
						}
                        $("#date").val(array[3]);
                        $("#age").val(array[4]);
                        $("#salery").val(array[5]);
                        $("#aadharno").val(array[6]);
                        $("#address").val(array[7]);
                        $("#mobile").val(array[8]);
                    }
                }
              });
         }
    });
/////////////////////////////////////
$(document).ready(function () 
{
  $("#emp_update").submit(function(event){
    // cancels the form submission
    event.preventDefault();
    emp_upd();
});

function emp_upd(){
 
var empid = $("#empid").val();
var fname = $("#fname").val();
var lname = $("#lname").val();
var gender=$("input[name='gender']:checked").val();
var date = $("#date").val();
var age = $("#age").val();
var salery = $("#salery").val();
var aadharno = $("#aadharno").val();
var address = $("#address").val();
var mobile = $("#mobile").val();
    
$.ajax({
type : "POST",
url : "php/emp.php",
data :  {empid:empid,fname:fname,lname:lname,gender:gender,date:date,age:age,salery:salery,aadharno:aadharno,address:address,mobile:mobile},
cache : false,
success:function(response) 
{
  if(response==0)
  {
    $('#msg1').html("<big><font color=#FF0000>Problem During Update</font></big>").show().fadeOut( 5000 );
  }
else
  {
    $('#msg1').html("<big><font color=#00ff00>Employe Updated Successfully</font></big>").show().fadeOut( 5000 ); 
	  $('form :input').val('');
	  $('input[name="gender"]').prop('checked', false);
	  
  }
  }
});
return false;
}

// employe details
emp_det();  
function emp_det(){

var emp_det="emp_det";
$.ajax({
type : "POST",
url : "php/emp.php",
data :  {emp_det:emp_det},
cache : false,
success:function(response) 
{
	$("#emp_det").html(response); 
}
});
return false;
}
});

