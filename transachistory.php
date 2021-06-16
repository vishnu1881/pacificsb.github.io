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
                        <a href="customersdata.php">
                            <button type="button" class="btn btn-outline-warning">Transfer</button>
                        </a>              
                    </div>           
                </div>
            </div>   
        </header>
        <!-- HEADER END -->  

        
        <div class="container">
            <div class="table-responsive-sm">
                <h1>Transaction History</h1>
                <table class="table table-hover">
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
                            <td class="table-light"><?php echo $rows['sender']; ?></td>
                            <td class="table-light"><?php echo $rows['receiver']; ?></td>
                            <td class="table-light"><?php echo $rows['amount_transf']; ?> </td>
                            <td class="table-light"><?php echo $rows['date_time']; ?> </td>
                        </tr>

                        <?php
                            }               
                        ?>

                    </tbody>
                </table>
            </div>
        </div>

        <!-- FOOTER -->
        <footer class="text-muted py-5">
            <div class="footer">
                <div id="contact">      
                    <div class="container">
                        <p class="float-end mb-1">
                            Contact Me:

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