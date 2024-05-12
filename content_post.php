<html>
 <link rel="stylesheet" href="style.css">
<body>
<span style="font-size: 12pt;   font-family: "Times New Roman", Times, serif;">

Hi Team,<br>
 <br>
I hope this email finds you well. <br>
  <br>
My name is Viet Thang and I am a pricing staff at Bach Viet Shipping. Please help me check rate as below: <br>
  <br>
Term <?php  if (!empty($_POST["DAP"])) {
    echo "DAP";    
} else {  
   if (!empty($_POST["DDU"])) {
    echo "DDU";    
} else { 
  echo "DDP";  
}
};
?> <br>


POL: Hai Phong, Vietnam <br>
Delivery Address: <?php echo $_POST["address"]; ?> <br>
Vol: <?php if (!empty($_POST["20DC"])) {
    echo $_POST["20DC"];    
    echo x20DC;   
} else {  
}

if (!empty($_POST["40HC"]) && empty($_POST["20DC"]) ) {
    echo $_POST["40HC"];    
    echo x40HC;   
} else {  
  if (!empty($_POST["40HC"])) {
    echo ", ";  
    echo $_POST["40HC"];    
    echo x40HC;   
    } else { 
    }
}
?> 
<br>
Payload: <?php if (!empty($_POST["payload20"])) {
    echo $_POST["payload20"];    
    echo " Tons";   
} else {  
}

if (!empty($_POST["payload40"]) && empty($_POST["payload20"]) ) {
    echo $_POST["payload40"];    
    echo " Tons";   
} else {  
   if (!empty($_POST["payload40"])) {
    echo ", ";  
    echo $_POST["payload40"];    
    echo " Tons";   
    } else { 
    }
}
?> 
<br>

Commd: <?php echo $_POST["commd"]; ?> <br>

If you require any further information or clarification, please do not hesitate to contact me.
 
Thank you for your attention to this matter. We look forward to the opportunity to potentially work with you and your company.</span>

<script>
function myFunction() {
  // Get the text field
  var copyText = document.getElementById("myInput");

  // Select the text field
  copyText.select();
  copyText.setSelectionRange(0, 99999); // For mobile devices

  // Copy the text inside the text field
  navigator.clipboard.writeText(copyText.value);
  
  // Alert the copied text
  alert("Copied the text: " + copyText.value);
}
</script>
</body>
</html>