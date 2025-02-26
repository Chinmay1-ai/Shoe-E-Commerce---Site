<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- custom css file link  -->
    <link rel="stylesheet" href="checkout.css">

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Retrieve product name and price from localStorage
            var productName = localStorage.getItem('productName');
            var productPrice = localStorage.getItem('productPrice');
            
            // Set the values of input fields
            document.getElementById('productName').value = productName || '';
            document.getElementById('productPrice').value = productPrice || '';
        });
    </script>

</head>
<body>

<div class="container">

    <form action="checkout.php" method="post">
    <?php
    // Database connection
    $hostName = "localhost";
    $dbUser = "root";
    $dbPassword = "";
    $dbName = "payment";
    $conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);

    if (mysqli_connect_error()) {
      echo "Could not connect to the mysql database. Error: " . mysqli_connect_error();
    }

    // Handle form submission
    if (isset($_POST['submit'])) {
        $fullname = $_POST["fullname"];
        $email = $_POST["email"];
        $address = $_POST["address"];
        $city = $_POST["city"];
        $state = $_POST["state"];
        $zipcode = $_POST["zipcode"];
        // $productName = $_POST["productName"];
        // $productPrice = $_POST["productPrice"];

        $sql="INSERT INTO address (`full_name`, `email`, `address`, `city`, `state`, `zipcode`) VALUES ('$fullname', '$email', '$address', '$city', '$state', '$zipcode')";

        if ($conn->query($sql) === true) {
            echo "Payment successful!";
            // Redirect to another page after successful payment
            header("Location: payment.php");
            exit(); // Ensure script stops executing after redirection
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        // Close connection
        $conn->close();
    }
    ?>
      
        <div class="row">

            <div class="col">

                <h3 class="title">Billing Address</h3>

                <!-- Hidden input fields for product name and price
                <input type="hidden" id="productName" name="productName">
                <input type="hidden" id="productPrice" name="productPrice">

                <div class="inputBox">
                    <span>Product Name :</span>
                    <input type="text" value="<?php echo isset($_POST['productName']) ? $_POST['productName'] : ''; ?>" readonly>
                </div>

                <div class="inputBox">
                    <span>Price :</span>
                    <input type="text" value="<?php echo isset($_POST['productPrice']) ? $_POST['productPrice'] : ''; ?>" readonly>
                </div> -->


                <div class="inputBox">
                    <span>Full Name :</span>
                    <input type="text" name="fullname">
                </div>
                <div class="inputBox">
                    <span>Email :</span>
                    <input type="email" name="email">
                </div>
                <div class="inputBox">
                    <span>Address :</span>
                    <input type="text" name="address">
                </div>
                <div class="inputBox">
                    <span>City :</span>
                    <input type="text" name="city">
                </div>

                <div class="flex">
                    <div class="inputBox" >
                        <span>State :</span>
                        <input type="text" name="state">
                    </div>
                    <div class="inputBox">
                        <span>Zip Code :</span>
                        <input type="text" name="zipcode">
                    </div>
                </div>

            </div>
    
        </div>
        <input type="submit" value="Proceed to Checkout" name="submit" class="submit-btn">

    </form>
</div>    

</body>
</html>
