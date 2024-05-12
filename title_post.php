<html>
 <link rel="stylesheet" href="style.css">
<body>
<span style="font-size: 12pt;   font-family: "Times New Roman", Times, serif;">

<?php  if (!empty($_POST["DAP"])) {
    echo "DAP";    
} else {  
   if (!empty($_POST["DDU"])) {
    echo "DDU";    
} else { 
  echo "DDP";  
}
}
?> // HPH - <?php echo strtoupper($_POST["region"]); ?> //
<?php  if (!empty($_POST["20DC"]) && !empty($_POST["40HC"])) {
    echo "20DC || 40HC";    
} else {  
   if (!empty($_POST["20DC"])) {
    echo "20DC";    
} else { 
  echo "40HC";  
}
}
?> 
 // <?php echo $_POST["name"]; ?> // <?php echo $_POST["PO"]; ?>
 </span>
 
</body>
</html>