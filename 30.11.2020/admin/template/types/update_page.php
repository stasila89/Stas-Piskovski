<?php

$sql = "UPDATE pages SET ";
foreach ($_POST as $key => $value){

    $sql .= "{$key} = '$value',";
}
$sql = substr($sql,0, -1);
$sql .= 'where id ='.$_GET['id'];
//echo $sql;
mysqli_query($connection, $sql);

?>

<div id="page-wrapper">
    <div class="row">
        <h2> Корректировки внесены</h2>
    </div>
</div>
