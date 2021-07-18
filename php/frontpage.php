
<!--  Front Page -->

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/navbar.css">

  <title>Banking System</title>
</head>

<body>
  <?php
  include 'navbar.php';
  ?>
 
  <img src="img/bank1.png" alt="" height="600px" width="100%">
  <div class="container-fluid">

    <!-- Introduction Part -->
    <div class="row intro py-1">
      <div class="col-sm-12 col-md">
        <div class="heading text-center my-5">
          <h2>Welcome  to one of the</h2>
          <h1>TRUSTED BANK</h1>
        </div>
      </div>

      <div class="col-sm-12 col-md img text-center">
        <img src="img/mybank.png" class="img-fluid pt-2" width="300px">
      </div>
    </div>

    <!-- Different Oprations -->
    <div class="row activity text-center">
    <div class="col-md act">
          <br>
          <img src="img/user.png" class="img-fluid" width="200px">
          <br>
          <a href="newuser.php"><button>Create a new Account</button></a>
    </div>

    <div class="col-md act">
          <br>
          <img src="img/transfer.png" class="img-fluid">
          </br>
          </br> 
          <a href="transfermoney.php"><button>Fund Transfer</button></a>
    </div>
        
      <br>
    <div class="col-md act">
        <br>
        <br>
        <img src="img/history.jpg" class="img-fluid" width="200px">
        </br>
        <br> 
        <a href="passbook.php"><button>Passbook</button></a>
     </div>
     </div>
  </div>
  
  
    <footer id="footer" class="text-center mt-5 py-2">
      <p>&copy 2021. Made by <b>Baushil Shah</b> <br>  The Trustworthy Bank</p>
    </footer>
  
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>
</html>