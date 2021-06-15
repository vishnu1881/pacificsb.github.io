<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>PACIFIC STANDARD BANK</title>
        <link rel="stylesheet" href="css/Homepage.css" > 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">        
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
<style>
table{
        text-align: center;
        border:4px solid black;
        border-collapse: collapse;
        width: 100%;
        height: 90px;
        background-color:#42D7CD;
        
        
    }
    th{
        border-collapse: collapse;
        border: 2px solid black;
        font-family: 'Libre Baskerville', serif;
        font-weight: 35px;
        font-size: 30px;
        height: 45px;
        width: 60px;
        color:green;
        
        

    }
    th:hover{
        background-color: black;
    }
    td{
        border-collapse: collapse;
        border: 2px solid black;
        width: 60px;
        height: 45px;
        font-size:25px;
        font-weight:;
        font-family: 'Libre Baskerville', serif;
        color:red;

    }
    td:hover{
        background-color:#F08080;
    }

</style>
    </head>
<body>
      

      
<header class="p-3 bg-dark text-white">
        <div class="container">
          <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
              <img src="images/logo.png" alt="company logo" width="260" height="50">
              
            </a>
    
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
              
              <li><a href="index.html" class="nav-link px-2 text-white">Home</a></li>
              <li><a href="customersdata.php" class="nav-link px-2 text-white">Transfer</a></li>
              <li><a href="transachistory.php" class="nav-link px-2 text-secondary">Transaction History</a></li>
              <li><a href="customersdata.php" class="nav-link px-2 text-white">Customers</a></li>
              <li><a href="#contact" class="nav-link px-2 text-white">About</a></li>
            </ul>    
            <div class="text-end">
              <a href="customersdata.php"><button type="button" class="btn btn-outline-light me-2">Transfer</button></a>              
            </div>
          </div>
        </div>
      </header> 
<br>
 <div class="marq">
     <marquee direction="left" scrolldelay=1> WELCOME TO PACIFIC STANDARD BANK</marquee>
 </div>


    <div class="container">
        <h2 class="text-center pt-4" style="color : black;">Transaction History</h2>
        
       <br>

    
       <div class="table-responsive-sm">
    <table class="table table-hover table-striped">
        <thead style="color : white;" class="table-dark">
            <tr>
                <th class="text-center">Sender</th>
                <th class="text-center">Receiver</th>
                <th class="text-center">Amount</th>
                <th class="text-center">Date & Time</th>
            </tr>
        </thead>
        <tbody>
        <?php

include 'config.php';

$sql ="select * from transfer_history";

$query =mysqli_query($conn, $sql);

while($rows = mysqli_fetch_assoc($query))
{
?>
<tr style="color : black;">
            <td class="py-2"><?php echo $rows['sender']; ?></td>
            <td class="py-2"><?php echo $rows['receiver']; ?></td>
            <td class="py-2"><?php echo $rows['amount_transf']; ?> </td>
            <td class="py-2"><?php echo $rows['date_time']; ?> </td>
                
        <?php
            }

        ?>
        </tbody>
    </table>

    </div>
</div>










    


<br>

<footer class="text-center mt-5 py-2">
<div class="footer">
    <div id="contact">
        <p id="out">
            &#169; 2021 <emp>VISHNU</emp> 

              <span id="outr">Contact Me:&nbsp; <a class="imagelink" href="https://www.linkedin.com/in/vishnu-v-88021b1b5/" target="_blank">
                <img src="images/lnlogo.png" width=40 height=40 alt=" linkedin profile link"> 
            </a>
            &nbsp;
            
            <a class="imagelink" href="https://github.com/vishnu1881/" target="_blank">
                <img src="https://github.githubassets.com/images/modules/logos_page/GitHub-Mark.png" width=40 height=40 alt="linkedin profile link"> </a>
            </span>

          </p>
    </div>
</div>
</footer>


 </body>
</html>