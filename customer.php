<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- external css bootstrap  -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

  <title>Customer Details</title>
</head>

<body>

  <!-- header with connection and sql code -->
  <?php require_once './include/header.html';
    require 'connection.php';

    $sql = "SELECT * FROM `customers`";

    $result = mysqli_query($conn,$sql);
    $num_of_entry = mysqli_num_rows($result);
?>

  <!-- table starts -->
  <div class="container my-5" id="customer_div">
    <center><h3 class="text-dark">Customers Details</h3></center>
    <div class="container my-3">
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">Transaction ID</th>
            <th scope="col">Name</th>
            <th scope="col">E-Mail</th>
            <th scope="col">Current Balance</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>

          <!-- fetching data from table -->
          <?php 
                  if($num_of_entry>0){
                    while($row = mysqli_fetch_assoc($result)){
                      echo "<tr>
                    <th scope='row'>".$row['Cust_ID']."</th>
                    <td>".$row['Name']."</td>
                    <td>".$row['Email']."</td>
                    <td>".$row['Amount']."</td>
                    <td><a href='send.php?name=".$row['Name']."'><button type='button' class='btn btn-success btn-sm'>Send</button></a></td>
                  </tr>";

                    }
                  }else{
                    echo "<script>alert('No data found in table!');</script>";
                  }
                ?>
        </tbody>
      </table>
    </div>
  </div>
</body>
<footer>
  <?php require_once './include/footer.html' ?>
</footer>

<style>
  footer {
    position: sticky;
    bottom: 0;
  }

  #customer_div {
    width: 70%;
    background-color: #8dbbb629;
    box-shadow: 5px 5px rgba(0, 0, 0, 0.5);
    border-radius: 25px;
    padding: 15px;
  }
</style>

</html>