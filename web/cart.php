<?php

session_start();

//Delete
if ( isset($_GET["delete"]) )
   {
   $i = $_GET["delete"];
   $qty = $_SESSION["qty"][$i];
   $qty--;
   if($qty < 0){
   	$qty = 0;
   }
   $_SESSION["qty"][$i] = $qty;
  }
 
echo ("Cheese Pizza: ");
echo ($_SESSION["qty"][0]. "</br>");
echo ("Pepperoni Pizza: ");
echo ($_SESSION["qty"][0]. "</br>");
echo ("Fudge Brownie: ");
echo ($_SESSION["qty"][0]. "</br>");
echo ("Soda: ");
echo ($_SESSION["qty"][0]. "</br>");

?>