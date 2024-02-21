<?php

	session_start();
	session_destroy();
	
	echo "<script type='text/javascript'>
			alert('Sua conta foi deslogada!');
			window.location.replace('index.html');
		  </script>";
	
?>