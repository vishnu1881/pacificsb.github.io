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

    <div class="formm">
        
            <form action="welcome.php" method="post" target="_parent">
        Sender E-Mail : <input type="text" id="from" name="smail"><br>
        Receiver E-mail:<input type="text" id="to"   name="rmail"><br>
        Amount:    <input type="text" id="amount_dep"   name="amountdep"><br><br>
        <input type="submit" value="TRANSFER" onclick="alert('Transaction Successful !')">
        </form>
</div>        


</body>
</html>
