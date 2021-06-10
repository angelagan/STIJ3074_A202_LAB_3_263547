<html>
<head>
<title>Search Page</title>
    <link rel="shortcut icon" type="image" href="../images/fairy_mart_logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/263547_lab_3_fairy_mart/css/st.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="../js/validate_pr.js"></script>
</head>

<body>
    <div class="header">
        <img src="../images/fairy_mart_logo.png" />
        <h1>Fairy Mart</h1>
        <p>We help you in your diet &#128512; </p>
    </div>

    <div class="navbar">
        <a href="../php/main_page.php" class="right">Back to Main Page <i class="fa fa-level-up"></i></a>
    </div>
<?php

$con = mysqli_connect("localhost","doubleks_fairy_martadmin","E8OMX979P9") or die("Unable to connect");
mysqli_select_db($con,"doubleks_fairy_mart");

   $prname = $_POST['prname'];
   $prtype = $_POST['prtype'];

   if ($prtype == "noselection") {
       $sqlsearch = "SELECT * FROM tbl_products WHERE prname LIKE '%$prname%' ORDER BY prid DESC";
   } else {
       $sqlsearch = "SELECT * FROM tbl_products WHERE prtype = '$prtype' AND prname LIKE '%$prname%' ORDER BY prid DESC";
   }


$sql = $con -> query($sqlsearch);
if($sql->num_rows >0){
    while ($row = $sql->fetch_array()){
    
?>
    <div class="row">
        <div class="column-card" >
            <div class="card">
               <div class="left">
                  <img src = "/263547_lab_3_fairy_mart/images/<?php echo $row['primage'];?>" width=30% height=30%>
               </div>
               <div class="right">
                  <p>Product Name: &nbsp&nbsp<?php echo $row['prname']; ?></p>
                  <p>Product Type: &nbsp&nbsp<?php echo $row['prtype']; ?></p>
                  <p>Product Price: &nbsp&nbsp<?php echo $row['prprice']; ?></p>
                  <p>Quantity: &nbsp&nbsp<?php echo $row['prqty']; ?></p>
               </div>
            </div>
         </div>
    <?php
    }
}else{
    echo "<script>alert('No Result Found')</script>";
    echo "<script>window.location.replace('../php/main_page.php')</script>";
}
?>

</body>
</html>