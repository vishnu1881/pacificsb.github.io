<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>PACIFIC STANDARD BANK</title>
        <link rel="stylesheet" href="css/Homepage.css" > 
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">


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
	<div class="header">
     
		<div class="navbar">
            <a class="navlogo" href="index.html" >
                <img src="images/logo big.svg" alt="company logo" width="350" height="60">
            </a>
            <a class = "navicons" href="index.html">Home</a>    
            <a class = "navicons" href="transfer.php">Transfer</a>
            <a class = "navicons" href="transachistory.php">Transaction History</a>
            <a class = "navicons" href="customersdata.php">Customers</a>
            <a class = "navicons" href="#contact">About</a>       
            
        </div>
    </div>

<br>
    <div class="marq">
        <marquee direction="left" scrolldelay=1> WELCOME TO PACIFIC STANDARD BANK</marquee>
    </div>
    
    <?php
    include 'config.php';
    $sql = "SELECT * FROM customer_details";
    $result = mysqli_query($conn,$sql);
?>

<div class="container">
        <h2 class="text-center pt-4" style="color : black;">Transfer Money</h2>
        <br>
            <div class="row">
                <div class="col">
                    <div class="table-responsive-sm">
                    <table class="table table-hover table-striped table-sm">
                        <thead style="color : white;" class="table-dark">
                            <tr>
                            <th scope="col" class="text-center py-2">SNo</th>
                            <th scope="col" class="text-center py-2">Name</th>
                            <th scope="col" class="text-center py-2">E-Mail</th>
                            <th scope="col" class="text-center py-2">Phone NO</th>
                            <th scope="col" class="text-center py-2">Balance</th>
                            <th scope="col" class="text-center py-2">Operation</th>
                            </tr>
                        </thead>
                        <tbody>
                <?php 
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                    <tr style="color : black;">
                        <td class="py-2"><?php echo $rows['SNO'] ?></td>
                        <td class="py-2"><?php echo $rows['NAME']?></td>
                        <td class="py-2"><?php echo $rows['EMAIL']?></td>
                        <td class="py-2"><?php echo $rows['PHONENO']?></td>
                        <td class="py-2"><?php echo $rows['BALANCE']?></td>
                        <td><a href="userdetails.php?id= <?php echo $rows['SNO'] ;?>"> <button class="btn btn-outline-dark btn">View and Transact</button></a></td> 
                    </tr>
                <?php
                    }
                ?>
            
                        </tbody>
                    </table>
                    </div>
                </div>
            </div> 
         </div>




















<!--

    echo  " <br> 
    <table>
    <tr>
    <th>SNo</th>
    <th>NAME</th>
    <th>EMAIL ID</th>
    <th>PHONE NO</th>
    <th>BALANCE</th>
</tr>";
while ($row=mysqli_fetch_array($query)) {

    echo "<tr>
    <td>".$row['SNO']."</td>
    <td>".$row['NAME']."</td>
    <td>".$row['EMAIL']."</td>
    <td>".$row['PHONENO']."</td>
    <td>".$row['BALANCE']."</td>
    <td><a href="userdetails.php?id= <?php echo $rows['id'] ;?>"> <button class="btn btn-outline-dark btn">View and Transact</button></a></td> 
    </tr>";
}
mysqli_close($con);
?>
-->



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