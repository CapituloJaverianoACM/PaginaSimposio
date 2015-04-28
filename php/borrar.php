<?php
        session_start();
        if($_SESSION['log']==1){
		session_destroy();
	}
	header('Location: admin.php');
?>
