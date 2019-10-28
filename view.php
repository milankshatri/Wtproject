<?php
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'entrybook');
$q="select* from entry";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
mysqli_close($con);
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style>
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
        table{
            margin-top:20px;
            margin-left:440px;
            background-color: rgba(220,230,200,0.4 );
            border-width:10px;
        }
    </style>
</head>
<body>
    <a href="Entry.html">Enter New Entry</a>
    <a href="update.html">Update</a>
    <h1 style="font-weight:bold; color:green; text-align: center;">Entries</h1>
    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <th>Entry Id</th>
            <th>Name of Visitor</th>
            <th>Entry Time(Hr:Min:Sec)</th>
            <th>Exit Time(Hr:Min:Sec)</th>
        </tr>
        <?php
        for($i=1;$i<=$num;$i++){
            $row=mysqli_fetch_array($result);
        ?>
        <tr>
            <td><?php echo $row['entryid'];?></td>
            <td><?php echo $row['name'];?></td>
            <td><?php echo $row['entrytime'];?></td>
            <td><?php echo $row['exittime'];?></td>
        </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>
<?php
