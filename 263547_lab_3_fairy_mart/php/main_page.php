<?php
session_start();
$email=$_SESSION ["email"];
$password=$_SESSION ["password"];
?>

<!DOCTYPE html>
<html>
<head>
<title>Main Page</title>
    <link rel="shortcut icon" type="image" href="../images/fairy_mart_logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/263547_lab_3_fairy_mart/css/st.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="header">
        <img src="../images/fairy_mart_logo.png" />
        <h1>Fairy Mart</h1>
        <p>We help you in your diet &#128512; </p>
    </div>

    <div class="navbar">
        <a href="../html/login.html" class="right">Log Out <i class="fa fa-sign-out"></i></a>
    </div>

    <center>
    <h2>Welcome <?php echo $email?> to Fairy Mart</h2>
    </center>

	<div class="searchbar">
	    <form action="search.php" method="POST" align="right">
        <div class="row">
            <div class="column">	
            <input type="text" id="idprname" name="prname" placeholder="Search Product Name.." >
        </div>

        <div class="column">
            <select name="prtype" id="idprtype">
            <option value="noselection">Please Select Product Type</option>
						    <option value="Apples and Pears">Apples and Pears</option>
						    <option value="Citrus">Citrus</option>
						    <option value="Stone Fruit">Stone Fruit</option>
                            <option value="Tropical and Exotic">Tropical and Exotic</option>
                            <option value="Berries">Berries</option>
                            <option value="Melons">Melons</option>
						    <option value="Tomatoes and Avocados">Tomatoes and Avocados</option>
                        </select>
					</div>

        <div class="column">
            <button type="submit" name="button" value="search"><i class="fa fa-search"></i></button></button>
        </div>
        </div>
        </form>
      </div>

    <div>
        <h3>Featured Product</h3>
        <div class="row">
        <?php
            $conn = mysqli_connect("localhost","doubleks_fairy_martadmin","E8OMX979P9") or die("Unable to connect");
            mysqli_select_db($conn,"doubleks_fairy_mart");
            
            $sql ="SELECT * FROM tbl_products ORDER BY prid DESC";
            $result=mysqli_query($conn,$sql);
            if(mysqli_num_rows($result)>0){
                while($row=mysqli_fetch_assoc($result)){
                ?>
                
                    <div class="column">
                        <div class="card">
                            <img src = "/263547_lab_3_fairy_mart/images/<?php echo $row['primage'];?>" width=30% height=30%>
                            <p class="category">Product Name: &nbsp&nbsp<?php echo $row['prname']; ?></p>
                            <p class="category">Product Type: &nbsp&nbsp<?php echo $row['prtype']; ?></p>
                            <p class="category">Product Price (RM): &nbsp&nbsp<?php echo $row['prprice']; ?></p>
                            <p class="category">Product Quantity (pack): &nbsp&nbsp<?php echo $row['prqty']; ?></p>
                        </div>
                    </div>
                
                <?php
                }
            }
        ?>
        </div>

    <div>
        <a href="/263547_lab_3_fairy_mart/php/new_product.php" class="float"> <i class="fa fa-plus my-float"></i>
        <span class="addproduct">Add Product</span></a>
    </div>

    <div class="footer">
        <footer>&copy; Copyright 2021 Fairy Mart. Design By Angela</footer>
    </div>
</body>

</html>