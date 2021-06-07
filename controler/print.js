window.onload = function() 
{
 try 
 {
      var url_string = (window.location.href).toLowerCase();
      var url = new URL(url_string);
      var id_in = url.searchParams.get("id_in");               
      console.log(id_in);
	  print_in(id_in);
  } 
  catch (err) 
  {
    console.log("Issues with Parsing URL Parameter's - " + err);
  }
}
//print
function print_in(id)
{
var id_in=id;
$.ajax({
type : "POST",
url : "php/print.php",
data :  {id_in:id_in},
cache : false,
success:function(response) 
{
	         
    if(response==0)
    {
      $('#msg').html("<big><font color=#FF0000>Employe Id Not Found</font></big>").show().fadeOut( 5000 );
    }
    else
    {
     var array = response.split("||");
     $("#billid").text(array[0]);
     $("#cname").text(array[1]);
	   $("#date").text(array[2]);
     $("#name").text(array[3]);
     $("#gstno").text(array[4]);
     $("#address").text(array[5]);
     $("#mobile").text(array[6]);
     $("#weight").text(array[7]);
     $("#price").text(array[8]);
	   $("#totalamount").text(array[9]);
		
	   var part=array[13]/2;
	   var per="%";
		
     $("#gst").text(array[10]+per);
     $("#sgst").text(part+" "+"("+array[11]+per+")");
     $("#cgst").text(part+" "+"("+array[12]+per+")");
		
     $("#tgst").text(array[13]);
     $("#total").text(array[14]);	
     $("#roundoff").text(array[15]);
	
	   var tgst=array[13];
	   var total=array[14];
	   var roundoff=array[15];
	 
	   var r=roundoff-total;
	   if(r > 0)
	   {
		  $("#r").text("+"+r.toFixed(2)); 
	   }
	   else
	   {
		  $("#r").text(+r.toFixed(2));	 
	   }
     $("#advance").text(array[16]);
     $("#payed").text(array[17]);
     $("#balance").text(array[18]);
     $("#status").text(array[19]);
	 }
                
}
});
return false;
}
