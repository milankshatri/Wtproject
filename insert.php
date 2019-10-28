<?php
$name=$_POST['name'];
$entry=$_POST['entry'];
// $exit=$_POST['exit'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'entrybook');
$q="insert into entry (name,entrytime) values ('$name','$entry')";
$i=mysqli_query($con,$q);
mysqli_close($con);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insert</title>
</head>
<style>
    span{
        background:grey;
        padding: 5px;
        font-weight: bold;
        font-size:35px;
        color:red;
        border-radius:4px;
    }
    a{
            background:grey;
			padding: 5px;
			text-align: right;
			border-radius: 5px;
			color: white;
			font-weight: bold;
			margin-top: 5px;
            text-decoration: none;
    }
</style>
<body>
    <span><?php if($i==1) echo "Entry Registered"; else echo "Registration Failed"?></span>

    <br><br>
    <a href="view.php">View Entries</a>
    <a href="update.html">Update</a>
</body>
</html>
