<?php
  session_start();
  require_once("connection.php");
?>

<!DOCTYPE html>
<html>
<head>
  <title>ORDER</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
  
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
  background-color: #000;
}

* {
  box-sizing: border-box;
  color: #f2e3e3;;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px 40px;
  
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
  color:black;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #a8a02a;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
  text-decoration: none;
}

.btn:hover {
  background-color: #459da0;
}

a {
  color: #edeeef;
  text-decoration: none;
}

hr {
  border: 1px solid rgb(85, 79, 79);
}

span.price {
  float: right;
  color: rgb(161, 206, 71);
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
</head>
<body>
  <div>
  <div style="display: flex; align-items:left; justify-content:left;">
    <img src="logo2.png" height="150px" style="padding-right:250px">
        <center><h2 style="font-size: 50px; color: aliceblue;">Shopping Cart</h2></center>
</div>
</div>

  <p  style="font-size:20px; color:rgb(67, 84, 99);  padding-left: 1000px;">
    ORDER NOW!<br></p>
    <a href="home_next.php"><button class="btn">Home</button></a>
     <p style="font-size:20px; color:rgb(112, 167, 214);">Flavors for royalty.</p>
<div class="row">
  
  <div class="col-75">
    <div class="container"  style="display: flex; background-image: url(https://wallpapers.com/images/hd/food-4k-m37wpodzrcbv5gvw.jpg) ; background-size:cover ; background-attachment: fixed;">
      <form action="code_pay.php" method="POST">

          <div class="col-50">
            <h3>Payment methods</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="Anthonio de silva">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1000-2000-3000-4000">
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="March">
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2025">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="123">
              </div>
            </div>
          </div>
          
        </div>
        <button type="submit" name="submit" value="Continue to checkout" class="btn" style="color: #f9f8f8; text-decoration: none;">checkout</button>
      </form>
    </div>
  </div>
 

  <br>
<p style="font-size:23px; color:rgb(52, 83, 208); padding-left:250px">
    A taste you’ll remember!</p><br>

</body>
</html>