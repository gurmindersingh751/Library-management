
  <?php
    session_start();
    include "connection1.php";
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Book list</title>
  <?php
    require_once"assets/head.php";
  ?>
  <!DOCTYPE html>
<html class="">
<head>
  <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

  <title>Edit Book Page</title>

  
  <link rel="stylesheet" type="text/css" href="style.css">
  
  
  
</head>

<body data-offset="200" data-spy="scroll" data-target=".ow-navigation">
 
  <!-- Header Section -->
    <?php
    require_once"assets/header1.php";
  ?>
  
 <table class="table table-bordered">
   <th>
     Student ID
   </th>
   <th>
     Books Name
   </th>
   <th>
     Books Issue Date
   </th>
   <?php 
   $res=mysqli_query($link,"select * from issue_books where username = '$_SESSION[username]'");
   while($row = mysqli_fetch_array($res))
   {
    echo "<tr>";
      echo"<td>";
        echo $row["student_id"];
      echo"</td>";
      echo"<td>";
        echo $row["book_name"];
      echo"</td>";
      echo"<td>";
        echo $row["fromdate"];
      echo"</td>";
    echo "</tr>";


   }

   ?>
 </table>
  
    <?php
    require_once"assets/Footer.php";
  ?>
  
  <!-- JQuery v1.11.3 -->
  <script src="js/jquery.min.js"></script>

  <!-- Library - Js -->
  <script src="libraries/lib.js"></script><!-- Bootstrap JS File v3.3.5 -->

  <!-- RS5.0 Core JS Files -->
  <script type="text/javascript" src="revolution/js/jquery.themepunch.tools.min.js?rev=5.0"></script>
  <script type="text/javascript" src="revolution/js/jquery.themepunch.revolution.min.js?rev=5.0"></script>
  <script type="text/javascript" src="revolution/js/extensions/revolution.extension.video.min.js"></script>
  <script type="text/javascript" src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
  <script type="text/javascript" src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
  <script type="text/javascript" src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
  
  <!-- Library - Google Map API -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDW40y4kdsjsz714OVTvrw7woVCpD8EbLE"></script>
  
  <!-- Library - Theme JS -->
  <script src="js/functions.js"></script>
</body>
</html>