<?php include '../include/navbar.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="bg-dark text-white">
<div class="container">
  <div class="row">
    <div class="col-md-6">
    <h1>Payment Page</h1>
    <form>
      <div class="form-group col-md-6">
        <label for="cardNumber">Card Number</label>
        <input type="text" class="form-control" id="cardNumber" placeholder="Enter card number">
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="expiryDate">Expiry Date</label>
          <input type="text" class="form-control" id="expiryDate" placeholder="MM/YY">
        </div>
        <div class="form-group col-md-6">
          <label for="cvv">CVV</label>
          <input type="text" class="form-control" id="cvv" placeholder="CVV">
        </div>
      </div>
      <div class="form-group col-md-6">
        <label for="name">Cardholder Name</label>
        <input type="text" class="form-control" id="name" placeholder="Enter cardholder name">
      </div>
      <div class="form-group col-md-6">
        <label for="amount">Amount</label>
        <input type="text" class="form-control" id="amount" placeholder="Enter amount">
      </div>
      <button type="submit" class="btn btn-primary">Pay Now</button>
    </form>
    </div>
    <div class="col-md-6">
      <!-- Content of the second column -->
      <h1>berlangganan sekarang</h1>
      <img src="../assets/img/img_profiles/coolguy.jpg" alt="coolguysjoinsmembership" height="500px" width="500px">
    </div>
  </div>
</div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
<?php include '../include/footer.php' ?>