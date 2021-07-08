<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">

    <title>Basic Banking System</title>
  </head>

  <body>
  <?php
  include 'navbar.php';
  ?>
  <section id="banner"  style="background-image: linear-gradient(to right, #a517ba, #5f1782); padding-top: 5%;">
      <div class="container-fluid">
      <!-- Introduction section -->
            <div class="row intro py-1" style="background-image: linear-gradient(to right, #a517ba, #5f1782);">
              <div class="col-md-6">
                <div class="heading text-center my-5">
                  <p class="promo-title"  style="color: #fff;font-size: 48px;font-weight: 700; margin-top: 60px;">Welcome to the Bank of TSF</p>
                  <p  style="color: #fff;font-size: 20px;font-weight: 400;">We exist to put you in total control of your money – anywhere, anytime.
                  Integrity,  Professionalism, Corporate Governance, Loyalty and Excellent Service.</p>
                 <a href="services.php"> <button class="button button1" style="margin:5px;">Our Services</button></a>
                  <a href="contact.php"><button class="button button2">Contact Us</button></a>
                </div>
              </div>
              <div class="col-md-6 text-center" >
                <img src="img/bank.png" class="img-fluid pt-2">
              </div>
            </div>
            <img src="img/wave (3).png" class="bottom-img"style="width: 110%;">
            </section>


      <!-- Activity section -->
            <div class="row activity text-center">
                  <div class="col-md act">
                    <img src="img/user.png" class="img-fluid" style="height:250px">
                    <br>
                    <a href="createuser.php"><button style="background-image: linear-gradient(to right, #a517ba, #5f1782); color:white;">Create a User</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/transfer.png" class="img-fluid"  style="height:250px">
                    <br>
                    <a href="transfermoney.php"><button style="  background-image: linear-gradient(to right, #a517ba, #5f1782);color:white;
">Make a Transaction</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/history1.png" class="img-fluid" style="height:250px">
                    <br>
                    <a href="transactionhistory.php"><button style=" background-image: linear-gradient(to right, #a517ba, #5f1782);color:white;
">Transaction History</button></a>
                  </div>
            </div>
      </div>
      <br/>
      <br/>
      <br/>
      <br/>
      <br/>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  
<?php
  include 'footer.php';
  ?>
</body>
</html>