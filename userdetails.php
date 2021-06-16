<?php
    include 'config.php';

    if(isset($_POST['submit'])){
        $from = $_GET['id'];
        $to = $_POST['to'];
        $amount = $_POST['amount'];

        $sql = "SELECT * from customer_details where SNO=$from";
        $query = mysqli_query($conn,$sql);
        $sql1 = mysqli_fetch_array($query); 

        $sql = "SELECT * from customer_details where SNO=$to";
        $query = mysqli_query($conn,$sql);
        $sql2 = mysqli_fetch_array($query);

        // Check value entered by user is negative 
        if (($amount)<0)
        {
           
            echo '<script type="text/javascript">';
            echo ' alert("Sorry! Negative values cannot be transferred")';
            echo '</script>';
        }

        // To check insufficient balance.
        else if($amount > $sql1['BALANCE']) 
        {
            echo '<script type="text/javascript">';
            echo ' alert("Bad Luck! Insufficient Balance")';  
            echo '</script>';
        }
    
        // To check zero values
        else if($amount == 0)
        {
            echo "<script type='text/javascript'>";
            echo "alert('Sorry! Zero value cannot be transferred')";
            echo "</script>";
        }


        else 
        {
            // amount deduction from sender's account
            $newbalance = $sql1['BALANCE'] - $amount;
            $sql = "UPDATE customer_details set BALANCE=$newbalance where SNO=$from";
            mysqli_query($conn,$sql);
            
            // adding amount to reciever's account
            $newbalance = $sql2['BALANCE'] + $amount;
            $sql = "UPDATE customer_details set BALANCE=$newbalance where SNO=$to";
            mysqli_query($conn,$sql);
                
            $sender = $sql1['NAME'];
            $receiver = $sql2['NAME'];
            $sql = "INSERT INTO transfer_history(`sender`, `receiver`, `amount_transf`) VALUES ('$sender','$receiver','$amount')";
            $query=mysqli_query($conn,$sql);

            if($query)
            {
                echo "<script> alert('Transaction Successful');
                    window.location='transachistory.php';
                    </script>";
            }

            $newbalance= 0;
            $amount =0;
        }
    
    }
?>



<!DOCTYPE html>
<html lang="en">
    <head>
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>PACIFIC STANDARD BANK</title>

        <!--CSS -->
        <link rel="stylesheet" href="css/Homepage.css" > 

        <!--BOOTSTRAP CSS-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

        <!-- GOOGLE FONTS -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Quattrocento+Sans:wght@700&display=swap" rel="stylesheet">
    
        <!-- TABLE STYLES -->
        <style>
         table{
                text-align: center;
                border:3px solid black;
                border-collapse: collapse;
                width: 100%;
                height: 90px;
             }

            th{
                border-collapse: collapse;
                border: 2px solid black;
                font-family: 'Libre Baskerville', serif;
                font-weight: 35px;
                font-size: 25px;
                height: 45px;
                width: 60px;
            }
    
             td{
                border-collapse: collapse;
                border: 2px solid black;
                width: 60px;
                height: 45px;
                font-size:20px;
                font-weight: 67px;
                font-family: 'Libre Baskerville', serif;
                background-color: white;
            }
        </style>
        <!-- TABLE STYLES END -->
    </head>

   
    <body>
        <!-- HEADER -->
        <header class="p-3 bg-dark text-white">
            <div class="container">
                <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                    <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                        <img src="images/logo.png" alt="company logo" width="260" height="50">
                    </a>
                    <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                        <li><a href="index.html" class="nav-link px-2 text-secondary">&nbsp;Home</a></li>
                        <li><a href="customersdata.php" class="nav-link px-2 text-white">Transfer</a></li>
                        <li><a href="transachistory.php" class="nav-link px-2 text-white">Transaction History</a></li>
                        <li><a href="customersdata.php" class="nav-link px-2 text-white">Customers</a></li>
                        <li><a href="#contact" class="nav-link px-2 text-white">About</a></li>
                    </ul>    
                   <div class="text-end">
                        <a href="customersdata.php"><button type="button" class="btn btn-outline-warning">Transfer</button></a>              
                    </div>
                </div>
            </div>
        </header>
        <!-- HEADER END -->  

        <!-- TABLE -->
        <div class="container">
            <br><h1>TRANSACTION</h1>
                <?php
                    include 'config.php';
                    $sid=$_GET['id'];
                    $sql = "SELECT * FROM  customer_details where SNO=$sid";
                    $result=mysqli_query($conn,$sql);
                    if(!$result)
                    {
                        echo "Error : ".$sql."<br>".mysqli_error($conn);
                    }
                    $rows=mysqli_fetch_assoc($result);
                ?>
            <form method="post" name="tcredit" class="tabletext" ><br>
                <div>
                    <table class="table table-striped table-hover">
                        <tr style="color : white;" class="table-dark">                            
                            <th scope="col" class="text-center py-2">Name</th>
                            <th scope="col" class="text-center py-2">E-Mail</th>                            
                            <th scope="col" class="text-center py-2">Balance</th>
                        </tr>
                        
                        <tr style="color : black; text-align : center">                        
                            <td class="table-light"><?php echo $rows['NAME']?></td>
                            <td class="table-light"><?php echo $rows['EMAIL']?></td>                        
                            <td class="table-light"><?php echo $rows['BALANCE']?></td>
                        </tr>
                    </table>
                </div>
                <br><br><br>
                <label style="color : white;"><b>Transfer To:</b></label>
                <select name="to" class="form-control" required>
                    <option value="" disabled selected>Choose</option>

                    <?php
                        include 'config.php';
                        $sid=$_GET['id'];
                        $sql = "SELECT * FROM customer_details where SNO!=$sid";
                        $result=mysqli_query($conn,$sql);
                        if(!$result)
                        {
                            echo "Error ".$sql."<br>".mysqli_error($conn);
                        }
                        while($rows = mysqli_fetch_assoc($result)) {
                    ?>
            
                    <option class="table" value="<?php echo $rows['SNO'];?>" >
                        <?php echo $rows['NAME'] ;?> - Balance: 
                        <?php echo $rows['BALANCE'] ;?>  
                    </option>

                    <?php 
                        } 
                    ?>
                </select>
                <br>
                        
                <label style="color : white;"><b>Amount:</b></label>
                    <input type="text" class="form-control" name="amount" required>   
                    <br><br>
                <div class="text-center" >
                    <button class="btn btn-outline-warning" name="submit" type="submit" id="myBtn" >Transfer</button>
                </div>
            </form>
        </div>
        <!-- TABLE  -->

        <!-- FOOTER -->
        <footer class="text-muted py-5">
            <div class="footer">
                <div id="contact">      
                    <div class="container">
                        <p class="float-end mb-1">Contact Me:
                            <a class="imagelink" href="https://www.linkedin.com/in/vishnu-v-88021b1b5/" target="_blank">
                                <img src="images/lnlogo.png" width=55 height=50 alt=" linkedin profile link"> 
                            </a>
                            <a class="imagelink" href="https://github.com/vishnu1881/" target="_blank">
                                <img src="https://github.githubassets.com/images/modules/logos_page/GitHub-Mark.png" width=40 height=40 alt="GitHub profile link">
                            </a>
                        </p>
                        <p class="mb-1"> &copy; 2021</p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- FOOTER END -->
        
    </body>
</html>
