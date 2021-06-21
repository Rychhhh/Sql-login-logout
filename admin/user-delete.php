<?php 
    require '../config/config.php';

    $id = $_GET['id'];

    if(delete($id) > 0) {
        echo "<script>
            alert('delete data success');
            document.location.href = 'admin.php';
        </script>";
    } else {
        echo "<script>
            alert('delete datafailed');
            document.location.href = 'admin.php';
        </script>";
    }

?>