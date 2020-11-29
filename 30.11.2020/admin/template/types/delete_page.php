<?php
$sql = "DELETE FROM pages WHERE id='{$_GET['id']}'";
if(mysqli_query($connection, $sql)){
    echo "Удалено успешно";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($connection);
}

echo $sql;
