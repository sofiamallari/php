<?php
/**
 * Created by PhpStorm.
 * User: Vlad Villanueva
 * Date: 30/10/2017
 * Time: 20:08
 */

# Used to redirect the user to page

#TODO(' CHANGED THE REDIRECTION WHEN THE PROJECT MERGE WITH FILES ');
if($_SESSION['status'] == 2){
	header('location: admin/admin.php');
}
else{
	#TODO(' MAYBE THIS IS CATALOG? ');
	header('location: connect/index.php');
}