<?php include_once("conn.php");
?>
<?php
session_start();
?>

<?php

	if(isset($_GET['id'])){
		$id = $_GET['id'];
	}

	$_sql="DELETE FROM product WHERE id={$id}"; 

	$_result = $conn->query($_sql);
	    if($_result){
        exit("<script>
            alert('Delete successfully');
            location.href='Products_List.php'
        </script>");
    }else{
        exit("<script>
            alert('Delete failed');
            location.href='Products_List.php';
        </script>");
    }

	header("Location:Products_List.php");  
?>

