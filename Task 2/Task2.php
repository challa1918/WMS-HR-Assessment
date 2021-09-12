<!DOCTYPE HTML>
<html>
<?php
 
 if (isset($_GET['confirm'])) {
    echo '<script>alert("Data deleted Successfully !!")</script>';
  }  
   echo "<h3><a href='Task2.php?confirm=$confirm' onclick='return confirmationFn()' >Delete</a></h3>";
?>
<script>
function confirmationFn() {
var decision = confirm("Are you sure do you want to delete?");
if (decision == false) {
    alert("Data not deleted !!")
   return false;
}
return true; 

}
</script>

</html>
