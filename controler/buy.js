$(document).ready(function () {

// buy_reg  
  $("#buy_reg").submit(function(event){
    // cancels the form submission
    event.preventDefault();
    buy_reg();
});

function buy_reg(){
      
var cname = $("#cname").val();
var name = $("#name").val();
var gstno = $("#gstno").val();
var address = $("#address").val();
var email = $("#email").val();
var mobile = $("#mobile").val();  
$.ajax({
type : "POST",
url : "php/buy.php",
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
	
// buy_cname_list	
buy_pur();  
function buy_pur(){

var data="data";
$.ajax({
type : "POST",
url : "php/buy.php",
data :  {data:data},
cache : false,
success:function(response) 
{
	$("#c_select").html(response); 
}
});
return false;
}

// buy_cname_select 
$( "#c_select" ).change(function() {
	var id = $(this).children(":selected").attr("id");
    buy_load(id);
});
function buy_load(id){
     
var select="select"; 
var value = id;
$.ajax({
type : "POST",
url : "php/buy.php",
data :  {select:select,value:value},
cache : false,
success:function(response) 
{  
                     
 if(response==0)
 {
  $('#msg').html("<big><font color=#FF0000>buyers Id Not Found</font></big>").show().fadeOut( 5000 );
 }
 else
 {
  var array = response.split("||");
  $("#name").val(array[0]);
  $("#gstno").val(array[1]);
  $("#address").val(array[2]);
  $("#mobile").val(array[3]);
 }
}
});
return false;
}
	
// bill_reg
$("#bill_reg").change(function(event){
    // cancels the form submission
    event.preventDefault();
    var weight = $("#weight").val();
	var price = $("#price").val();
	var tamount = (weight*price);
	$("#tamount").val(tamount.toFixed(2));
	
	var gst = $("#gst").val();
	var sc = gst/2;
	$("#sgst").val(sc);
	$("#cgst").val(sc);
	
	var decimal = "0.";
	var value = decimal+gst;
	var tgst = (tamount*value);
	$("#tgst").val(tgst.toFixed(2));
	
	var total = tamount+tgst;
	var roundoff = Math.round(total);
	
	$("#total").val(total.toFixed(2));
	$("#roundoff").val(roundoff.toFixed(2));
	
	var payed = $("#payed").val();
	if(payed==roundoff)
	{
	 $("#status").val("Payed");	
	}
	else
	{
	 $("#status").val("Not Payed");		
	}
	var pay_type = $("input[name='pay_type']:checked").val();
	var balance = roundoff - payed;
	$("#balance").val(balance.toFixed(2));
});
	
  $("#bill_reg").submit(function(event){
    // cancels the form submission
    event.preventDefault();
    bill_reg();
});

function bill_reg()
{  

var cname = $("#c_select").val();
var inid = $("#inid").val();
var name = $("#name").val();
var date = $("#date").val();
var gstno = $("#gstno").val();
var address = $("#address").val();
var mobile = $("#mobile").val();
var weight = $("#weight").val();
var price = $("#price").val();
var tamount = $("#tamount").val();
var gst = $("#gst").val();
var sgst = $("#sgst").val();
var cgst = $("#cgst").val();
var tgst = $("#tgst").val();
var total = $("#total").val();
var roundoff = $("#roundoff").val();
var payed = $("#payed").val();
var status = $("#status").val();
var pay_type = $("input[name='pay_type']:checked").val();
var balance = $("#balance").val();

$.ajax({
type : "POST",
url : "php/buy.php",
data :  {cname:cname,inid:inid,name:name,date:date,gstno:gstno,address:address,mobile:mobile,
		 weight:weight,price:price,tamount:tamount,gst:gst,sgst:sgst,cgst:cgst,tgst:tgst,
		 total:total,roundoff:roundoff,payed:payed,status:status,pay_type:pay_type,balance:balance},
cache : false,
success:function(response) 
{
    if(response==0)
  {
	$("#msg1").html("<big><font color=#FF0000>Problem Creating Invoice</font></big>").show().fadeOut( 5000 ); 
  }
else
  {
     $('#msg1').html("<big><font color=#00ff00>Invoice Created Successfully</font></big>").show().fadeOut( 5000 );
	 $('form :input').val('');
	 $('input[name="status"]').prop('checked', false);
	 $('input[name="pay_type"]').prop('checked', false);
	 location.reload();
  }
}
});
return false;
}

// bill_view	
$(document).ready(function()
{
    $("#billid").on("change", function(){ 
    event.preventDefault();
    buy_lod();
    });
    
function buy_lod(){
    
    var billid = $("#billid").val();
    var load = "load";
	
             $.ajax({
                 method: "POST",
                 url : "php/buy.php",
                 data :  {billid:billid,load:load},
                 success:function(response) 
                 {  
                if(response==0)
                    {
                        $('#msg').html("<big><font color=#FF0000>Bill Id Not Found</font></big>").show().fadeOut( 5000 );
                    }
                else
                    {
                        var array = response.split("||");
                        $("#inid").val(array[0]);
						$("#date").val(array[1]);
                        $("#cname").val(array[2]);
                        $("#name").val(array[3]);
                        $("#gstno").val(array[4]);
                        $("#address").val(array[5]);
						$("#mobile").val(array[6]);
                        $("#weight").val(array[7]);
                        $("#price").val(array[8]);
                        $("#tamount").val(array[9]);
                        $("#payed").val(array[10]);
                        $("#gst").val(array[11]);
                        $("#sgst").val(array[12]);
                        $("#cgst").val(array[13]);
                        $("#tgst").val(array[14]);
                        $("#total").val(array[15]);
                        $("#roundoff").val(array[16]);
						if(array[17]=="Payed")
						{
						 $('[name="status"]')[0].checked = true;	
						}
						else
						{
						 $('[name="status"]')[1].checked = true;
						}
						if(array[18]=="Advance")
						{
						 $('[name="instatus"]')[0].checked = true;	
						}
						else
						{
						 $('[name="instatus"]')[1].checked = true;
						}
						$("#balance").val(array[19]);
						$("#advance").val(array[20]);
                    }
                }
              });
         }
    });	
	
// bill_upd_reg
$("#bill_upd_reg").change(function(event){
    // cancels the form submission
    event.preventDefault();
    var weight = $("#weight").val();
	var price = $("#price").val();
	var tamount = weight*price;
	$("#tamount").val(tamount);
	
	var gst = $("#gst").val();
	var sc = gst/2;
	$("#sgst").val(sc);
	$("#cgst").val(sc);
	
	var decimal = "0.";
	var value = decimal+gst;
	var tgst = tamount*value;
	$("#tgst").val(tgst);
	
	var total = tamount+tgst;
	var roundoff = Math.round(total);
	$("#total").val(total);
	$("#roundoff").val(roundoff);
	
	var payed = $("#payed").val();
	if(payed!=roundoff)
	{
	 $("#status").val("Not Payed");	
	 $("#instatus").val("Advance");
	}
	else
	{
	 $("#status").val("Payed");	
	 $("#instatus").val("Cash On Deliver");	
	}
	var pay_type = $("input[name='pay_type']:checked").val();
	var balance = roundoff - payed;
	$("#balance").val(balance.toFixed(2));
	var oper_type = $("input[name='cre_up']:checked").val();
});
	
  $("#bill_upd_reg").submit(function(event){
    // cancels the form submission
    event.preventDefault();
    bill_upd_reg();
});

function bill_upd_reg()
{  
var reg_up = "register_update";
var billid = $("#billid").val();
var cname = $("#cname").val();
var inid = $("#inid").val();
var name = $("#name").val();
var date = $("#date").val();
var gstno = $("#gstno").val();
var address = $("#address").val();
var mobile = $("#mobile").val();
var weight = $("#weight").val();
var price = $("#price").val();
var tamount = $("#tamount").val();
var gst = $("#gst").val();
var sgst = $("#sgst").val();
var cgst = $("#cgst").val();
var tgst = $("#tgst").val();
var total = $("#total").val();
var roundoff = $("#roundoff").val();
var advance = $("#advance").val();
var payed = $("#payed").val();
var balance = $("#balance").val();
var status = $("input[name='status']:checked").val();
var instatus = $("input[name='instatus']:checked").val();
var oper_type = $("input[name='cre_up']:checked").val();
	
$.ajax({
type : "POST",
url : "php/buy.php",
data :  {reg_up:reg_up,billid:billid,cname:cname,inid:inid,name:name,date:date,gstno:gstno,address:address,mobile:mobile,
		 weight:weight,price:price,tamount:tamount,gst:gst,sgst:sgst,cgst:cgst,tgst:tgst,
		 total:total,roundoff:roundoff,advance:advance,payed:payed,status:status,instatus:instatus,balance:balance,oper_type:oper_type},
cache : false,
success:function(response) 
{
	alert(response);
    if(response==0)
  {
	$("#msg1").html("<big><font color=#FF0000>Problem Update Invoice</font></big>").show().fadeOut( 5000 ); 
  }
else
  {
     $('#msg1').html("<big><font color=#00ff00>Invoice Update Successfully</font></big>").show().fadeOut( 5000 );
	 $('form :input').val('');
	 $('input[name="status"]').prop('checked', false);
	 $('input[name="instatus"]').prop('checked', false);
	 $('input[name="cre_up"]').prop('checked', false);
     location.reload()
  }
}
});
return false;
}

// buy_det	
buy_det();  
function buy_det(){

var buy_det="buy_det";
$.ajax({
type : "POST",
url : "php/buy.php",
data :  {buy_det:buy_det},
cache : false,
success:function(response) 
{
	$("#buy_det").html(response); 
}
});
return false;
}
});

