<?php 
    require 'functions.php';
    $nis = $_GET["nis"];

    if(delete($nis) > 0){
        echo "<script>
            alert('Delete was successful');
            document.location.href='../index.php';
		</script>";
    }else{
        echo "<script>
            alert('Delete was failed');
            document.location.href='../index.php';
		</script>";
    }
?>