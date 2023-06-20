<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- external css bootstrap  -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

  <!-- <link href="./css/style.css" rel="text/stylesheet"> -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@1,700&family=Playfair+Display:ital,wght@1,700&display=swap"
    rel="stylesheet">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
  <title>Golden Gate Bank</title>
</head>
<header>
  <!-- header with connection and sql code -->
  <?php require_once './include/header.html' ?>
</header>

<body>
  <center>
    <h2 class="welcome">Welcome...</h2>
  </center>
  <div class="container">
    <div class="button-container">
      <div class="items" onclick="location.href='customer.php'">
        <p>Money Transfer</p>
      </div>
      <div class="items" onclick="location.href='transaction.php'"">
        <p>Transaction History</p>
      </div>
    </div>
    <div class="content-container">
      <div class="content">
        <p>To view all the customers</p>
      </div>
      <div class="content">
        <p>To view all the transactions</p>
      </div>
    </div>
  </div>
</body>
<footer>
  <?php require_once './include/footer.html' ?>
</footer>

<style>
  body {
    height: 100%;
    background-image: linear-gradient(rgb(255, 255, 255, 0.40), rgba(255, 255, 255, 0.40)), url(bg.jpg);
  }

  html {
    height: 90%;
    width: 100%;
  }
  .welcome {
    font-family: 'Playfair Display', serif;
    color: rgb(0, 0, 0);
  }

  .container {
    align-items: center;
    justify-content: center;
    background-color: rgba(255, 255, 255, 0.400);
    width: 50%;
    height: 30%;
    display: flex;
    flex-direction: column;
    padding: 10px;
    border-radius: 50px;
    padding-bottom: -30px;
  }



  .button-container {
    display: flex;
    width: 80%;
    height: 50%;
    align-items: center;
    justify-content: space-between;
    border-radius: 15px;
    margin: 10px;
  }

  .content-container {
    width: 95%;
    height: 50%;
    border-radius: 15px;
    margin: 0, 10px, 10px, 10px;
    display: flex;
    flex-direction: row;
    text-align: center;
  }

  .content {
    width: 50%;
    height: 100%;
    justify-content: space-between;
    padding: -10px;
    font-weight: 700;
  }

  .items {
    width: 200px;
    height: 50px;
    justify-content: center;
    align-items: center;
    background-color: #22A699;
    margin: 20px;
    text-align: center;
    padding: 10px;
    border-radius: 25px;
    cursor: pointer;
    font-weight: 700;
    border: 2px solid #009688;
    margin: 25px;

  }

.item:hover {
    background-color: #c3d6d465;
}

footer {
  margin-top: 18%;
  bottom: 0;
}

</style>

</html>