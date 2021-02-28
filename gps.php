<!DOCTYPE html>
<html>
    <title>First</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta charset="utf-8">
  <head>
    <style>
      p {
        font-family: "Times New Roman", Times, serif;
      }

      
      /* Set the size of the div element that contains the map */
       html, body, #map {
        height: 90%;  /* The height is 400 pixels */
        width: 100%;
        padding: 0;
        
        
        /* The width is the width of the web page */
       }
       body{
        background-image: linear-gradient(to bottom right, #63B8FF, #3299CC, #42C0FB, #BFEFFF);
       }
      
       button {
        border-radius: 4px;
       	background-color: rgb(255,80,80);
        border:none;
       	padding: 15px 32px;
       	font-size: 16px;
       	margin: 4px 2px;
       	cursor: pointer;
        padding: 10px;
         box-shadow: 5px 5px 15px;
        
       }
       button:hover{
       	background-color:#7CFC00;
       }


       table{
        width: 100%;
        padding: 4px;
        

       }
       /*table */
       td, th{
        background-color: #33FFA3;
        border-collapse: collapse;
        font-size: 15px;
        font-family: "Times New Roman", Serif;
        margin: 20px 12px 20px 12px;
         box-shadow: 5px 5px 15px;

       }
       
       /*text boxes */
       .textbox {
        margin: auto;
        width: 50%;

       }
       

       input{
        width: 240px;
        padding: 12px 20px;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 8px;
        box-sizing: border-box;
         box-shadow: 5px 5px 15px;
       }
       
    </style>



  </head>
  <body>


   

    <!--The div element for the map -->
    <div id="map"> </div> 
    <h7> <center>👀 Your location: Latitude & Longitude </center> </h7>
    <table>
      <tr>
        <th> Latitude </th>
        <th> Longitude </th>
      </tr>
      <tr>
       <td> <center> <p id="demo"> </p> </center> </td>
      <td> <center> <p id="demo1"> </p> </center> </td>
    </tr>
  </table>
    
   <div class="textbox">
<input type="text" value="https://friendsaddress.000webhostapp.com/test1.php" id="myInput">
<button id="get" onclick="myFunction()"> COPY IT </button>
</div>

   
   



    <script>
      //GUIDE
      //alert message
      
        
      
       
      /*user x and y
      */

      var x = document.getElementById('demo');
      var y = document.getElementById('demo1');
      
//locate user location 
//
// 
function getLocation() {
  if(navigator.geolocation){
    navigator.geolocation.getCurrentPosition(showPosition);
  }
  }
//call the function
getLocation();
var lat;
var lng;
function showPosition(position){
 lat= x.innerHTML = position.coords.latitude;
 lng = y.innerHTML = position.coords.longitude;



}
// Initialize and add the map
function myMap() {
    alert("If map not loaded properly, refresh the page");
   // swal("Note!","Copy the address, (Your address has been automatically saved)","info");
  
  // The location of Uluru
  var myPlace =new google.maps.LatLng(x.innerHTML, y.innerHTML);
  // The map, centered at Uluru
  var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 16, center: myPlace});
  // The marker, positioned at Uluru
  var marker = new google.maps.Marker({position: myPlace, 
  	map: map, 
  	draggable: true,
  	animation: google.maps.Animation.BOUNCE,
    label:'Me'
  	 });

/*
//Marker dragged
if(marker.on(draggable:true)){
  alert("dragged");
google.maps.event.addListener(map, 'drag', function() {
  marker.setPosition(map.getCenter());
  updatePosition(map.getCenter().lat(), map.getCenter().lng());
});


 */

//LocalStorage Transmittinig data
var ArrayItems = {'latitude': lat, 'longitude': lng};
localStorage.setItem('items',JSON.stringify(ArrayItems));
  

  //Remove LocalStorage to free up space

}
/*

//FUNction to test localStorage size
 var getLocalStorageSize = function() {
  var total =0;
  for(var x in localStorage) {
    var amount = (localStorage[x].length * 2) /1024 /1024;
    total += amount;
  }
  return total.toFixed(2);
 }

*/

//for sending and copying link
  function myFunction() {
    var copyText = document.getElementById("myInput");
    copyText.select();
    copyText.setSelectionRange(0,99999)
    document.execCommand("copy");
    
    
   // swal('Copied!', 'Send the copied link via test message or //messenger!', 'success'); 
   alert("WORK IN PROGRESS");


  }



    </script>

<!--Alert Text box From sweetAlert-->
<!--<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> -->

<!--API Key -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkE6cKtxcq8_OLMv6mWkIFBEQ5RfFTpWU&callback=myMap"></script>


</body>
</html>


