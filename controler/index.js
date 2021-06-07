$(document).ready(function () {

bill_status();
adv_inc();
emp_det();
	
function bill_status()
{
var bill_status="0";
$.ajax({
type : "POST",
url : "php/index.php",
data :  {bill_status:bill_status},
cache : false,
success:function(response) 
{
  $('#bill_status').html(response); 
}
});
return false;
}
	
function adv_inc()
{
var adv_inc="0";
$.ajax({
type : "POST",
url : "php/index.php",
data :  {adv_inc:adv_inc},
cache : false,
success:function(response) 
{
  $('#adv_inc').html(response); 
}
});
return false;
}
	
function emp_det()
{
var emp_det="0";
$.ajax({
type : "POST",
url : "php/index.php",
data :  {emp_det:emp_det},
cache : false,
success:function(response) 
{
  $('#emp_det').html(response); 
}
});
return false;
}

  $("#form_adv_inc").submit(function(event){
    // cancels the form submission
    event.preventDefault();
    form_adv_inc();
});
function form_adv_inc()
{
var empid=$("#adv_inc").val();
var option=$("input[name='adv_amo']:checked").val();
var amount=$("#amount").val();

$.ajax({
type : "POST",
url : "php/index.php",
data :  {empid:empid,option:option,amount:amount},
cache : false,
success:function(response) 
{
  if(response=="0")
  {
	$("#result").html("<big><font color=#FF0000>Please Select Proper Operation</font></big>").show().fadeOut( 5000 ); 
  }
  else if(response=="a0")
  {
	$("#result").html("<big><font color=#FF0000>Problem During Updating Advance</font></big>").show().fadeOut( 5000 ); 
  }
  else if(response=="a1")
  {
	$("#result").html("<big><font color=#00ff00>Advance Amount Updated Successfully</font></big>").show().fadeOut( 5000 ); 
  }
  else if(response=="i0")
  {
	$("#result").html("<big><font color=#FF0000>Problem During Updating Increment</font></big>").show().fadeOut( 5000 ); 
  }
  else if(response=="i1")
  {
	$("#result").html("<big><font color=#00ff00>Increment Amount Updated Successfully</font></big>").show().fadeOut( 5000 ); 
  }
  else
  {
	$("#result").html("<big><font color=#FF0000>Error</font></big>").show().fadeOut( 5000 ); 
  }
}
});
setTimeout(location.reload.bind(location), 6000);
return false;
}
});