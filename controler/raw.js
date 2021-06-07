$(document).ready(function () {

// Suplier_register
  
  $("#raw_reg").submit(function(event){
    // cancels the form submission
    event.preventDefault();
    raw_reg();
});

function raw_reg(){
      
var cname = $("#cname").val();
var name = $("#name").val();
var gstno = $("#gstno").val();
var address = $("#address").val();
var email = $("#email").val();
var mobile = $("#mobile").val();  
$.ajax({
type : "POST",
url : "php/raw.php",
data :  {cname:cname,name:name,gstno:gstno,address:address,email:email,mobile:mobile},
cache : false,
success:function(response) 
{
  if(response==0)
  {
	$("#msg").html("<big><font color=#FF0000>Problem during Registration</font></big>").show().fadeOut( 5000 );  
  }
else
  {
     $('#msg').html("<big><font color=#00ff00>Compney Registration Successfully</font></big>").show().fadeOut( 5000 ); 
	 $('form :input').val('');
  }
  }
});
return false;
}

//Suplier Name Load
suplier_name();
    
function suplier_name(){

var sup_up_reg="sup_up_reg";
var data="data";
$.ajax({
type : "POST",
url : "php/raw.php",
data :  {data:data,sup_up_reg:sup_up_reg},
cache : false,
success:function(response) 
{
  $("#suplier_select").html(response); 
}
});
return false;
}

// suplier_cname_select   
 $('#suplier_select').on('change',function(){
        suplier_load();
    });

function suplier_load(){
      
var select="select"; 
var suplier_select = $("#suplier_select").val();

$.ajax({
type : "POST",
url : "php/raw.php",
data :  {select:select,suplier_select:suplier_select},
cache : false,
success:function(response) 
{  
  if(response==0)
  {
    $("#msg1").html("<big><font color=#FF0000>Compney name not found</font></big>").show().fadeOut( 5000 ); 
  }
  else
  {
  var array = response.split("||");
  $("#msg1").val(array[0]);
  $("#cname1").val(array[1]);
  $("#name1").val(array[2]);
  $("#gstno1").val(array[3]);
  $("#address1").val(array[4]);
  $("#mobile1").val(array[5]);
  $("#email1").val(array[6]);
  }
}
});
return false;
}

// suplier_reg_up
  
  $("#sup_reg_up").submit(function(event){
    // cancels the form submission
    event.preventDefault();
    sup_reg_up();
});

function sup_reg_up(){
 
var sup_reg_up = "sup_reg_up";
var cname1 = $("#suplier_select").val();
var id1 = $("#msg1").val();
var name1 = $("#name1").val();
var gstno1 = $("#gstno1").val();
var address1 = $("#address1").val();
var mobile1 = $("#mobile1").val();
var email1 = $("#email1").val();

//alert(reg);alert(cname);alert(date);alert(item);alert(gstno);alert(address);alert(mobile);alert(weight);alert(unit);alert(price);alert(status); 
$.ajax({
  
type : "POST",
url : "php/raw.php",
data :  {sup_reg_up:sup_reg_up,cname1:cname1,id1:id1,name1:name1,gstno1:gstno1,address1:address1,mobile1:mobile1,email1:email1},
cache : false,
success:function(response) 
{
  if(response==0)
  {
  $("#msg2").html("<big><font color=#FF0000>Problem during Update</font></big>").show().fadeOut( 5000 );  
  }
else
  {
  $('#msg2').html("<big><font color=#00ff00>Updated Successfully</font></big>").show().fadeOut( 5000 ); 
  $('form :input').val('');
  }
}
});
return false;
}

	
// raw_cname_list	
raw_cname();
    
function raw_cname(){

var data="data";
$.ajax({
type : "POST",
url : "php/raw.php",
data :  {data1:data1},
cache : false,
success:function(response) 
{
	$("#c_select").html(response); 
}
});
return false;
}

// raw_cname_select 	
 $('#c_select').on('change',function(){
        raw_load();
    });

function raw_load(){
      
var select="select"; 
var value = $("#c_select").val();

$.ajax({
type : "POST",
url : "php/raw.php",
data :  {select:select,value:value},
cache : false,
success:function(response) 
{  
                     
                if(response==0)
                    {
                        $("#msg").html("<big><font color=#FF0000>Compney name not found</font></big>").show().fadeOut( 5000 ); 
                    }
                else
                    {
                        var array = response.split("||");
                        $("#gstno").val(array[0]);
                        $("#address").val(array[1]);
                        $("#mobile").val(array[2]);
                    }
                }
});
return false;
}
	
// raw_reg
  
  $("#raw_pur").submit(function(event){
    event.preventDefault();
    raw_pur();
});

function raw_pur(){
 
var reg = "register";
var cname = $("#c_select").val();
var inid = $("#inid").val();
var date = $("#date").val();
var item = $("#item").val();
var gstno = $("#gstno").val();
var address = $("#address").val();
var mobile = $("#mobile").val();
var weight = $("#weight").val();
var unit = $("#unit").val();
var price = $("#price").val();
var status =$("input[name='status']:checked").val();
//alert(reg);alert(cname);alert(date);alert(item);alert(gstno);alert(address);alert(mobile);alert(weight);alert(unit);alert(price);alert(status);	
$.ajax({
	
type : "POST",
url : "php/raw.php",
data :  {reg:reg,cname:cname,inid:inid,date:date,item:item,gstno:gstno,address:address,mobile:mobile,weight:weight,unit:
unit,price:price,status:status},
cache : false,
success:function(response) 
{
	alert(response);
  if(response==0)
  {
	$("#msg1").html("<big><font color=#FF0000>Problem during Registration</font></big>").show().fadeOut( 5000 );  
  }
else
  {
    $('#msg1').html("<big><font color=#00ff00>Registration Successfully</font></big>").show().fadeOut( 5000 ); 
	$('form :input').val('');
	$('input[name="status"]').prop('checked', false);
  }
  }
});
return false;
}
	
//update load
 $('#up_puid').on('change',function(){
        raw_up_load();
    });
	
function raw_up_load(){
      
var select="select"; 
var up_puid = $("#up_puid").val();

$.ajax({
type : "POST",
url : "php/raw.php",
data :  {select:select,up_puid:up_puid},
cache : false,
success:function(response) 
{  
                     
                if(response==0)
                    {
                        $("#msg2").html("<big><font color=#FF0000>Purchase id not found</font></big>").show().fadeOut( 5000 ); 
                    }
                else
                    {
                        var array = response.split("||");
                        $("#up_inid").val(array[0]);
                        $("#up_cname").val(array[1]);
                        $("#up_date").val(array[2]);
						$("#up_item").val(array[3]);
                        $("#up_gstno").val(array[4]);
                        $("#up_address").val(array[5]);
						$("#up_mobile").val(array[6]);
                        $("#up_weight").val(array[7]);
                        $("#up_unit").val(array[8]);
						$("#up_price").val(array[9]);
						if(array[10]=="Payed")
						{
						 $('[name="up_status"]')[0].checked = true;	
						}
						else
						{
						 $('[name="up_status"]')[1].checked = true;
						}
                    }
                }
});
return false;
}
	
// raw_up_reg
  
  $("#raw_up_pur").submit(function(event){
    // cancels the form submission
    event.preventDefault();
    raw_up_pur();
});

function raw_up_pur(){
 
var up_reg = "up_register";
var puid = $("#up_puid").val();
var cname = $("#up_cname").val();
var inid = $("#up_inid").val();
var date = $("#up_date").val();
var item = $("#up_item").val();
var gstno = $("#up_gstno").val();
var address = $("#up_address").val();
var mobile = $("#up_mobile").val();
var weight = $("#up_weight").val();
var unit = $("#up_unit").val();
var price = $("#up_price").val();
var status =$("input[name='up_status']:checked").val();
//alert(reg);alert(cname);alert(date);alert(item);alert(gstno);alert(address);alert(mobile);alert(weight);alert(unit);alert(price);alert(status);	
$.ajax({
	
type : "POST",
url : "php/raw.php",
data :  {up_reg:up_reg,puid:puid,cname:cname,inid:inid,date:date,item:item,gstno:gstno,address:address,mobile:mobile,weight:weight,unit:
unit,price:price,status:status},
cache : false,
success:function(response) 
{
  if(response==0)
  {
	$("#msg3").html("<big><font color=#FF0000>Problem during Update</font></big>").show().fadeOut( 5000 );  
  }
else
  {
    $('#msg3').html("<big><font color=#00ff00>Updated Successfully</font></big>").show().fadeOut( 5000 ); 
	$('form :input').val('');
	$('input[name="up_status"]').prop('checked', false);
  }
}
});
return false;
}

// purchase details
pur_det();  
function pur_det(){

var pur_det="pur_det";
$.ajax({
type : "POST",
url : "php/raw.php",
data :  {pur_det:pur_det},
cache : false,
success:function(response) 
{
	$("#pur_det").html(response); 
}
});
return false;
}
});
