<?php
require_once('connection/connection.php');



if(isset($_POST['mm']) && $_POST['mm']=="mblcmp")
{	
	$title=$_POST['fr_title'];
	$pos=$_POST['pos'];
	$query="INSERT INTO sub_heading (id,sub_id,sub_title,position) VALUES ('','1','$title','$pos')";
	$queryInsertion=mysql_query($query);
	if($queryInsertion)
	{
		header('location:for_sale.php?msg=Subcategory Added');
		exit;
	}
	else
	{
		header('location:for_sale.php?msg=Fail to add Try Again!');
		exit;
	}


	
}
?>

