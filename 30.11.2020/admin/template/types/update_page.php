<?php
$ids = $_GET['id'];
$title = $_POST['title'];
$content = $_POST['content'];
$author = $_POST['author'];
$category = $_POST['category'];

if (isset($_FILES) && $_FILES['page_img']['size'] > 0){
    $imgUrl = 'downloaded_files/' . $_FILES['page_img']['name'];
    $stmt = mysqli_prepare($connection, "UPDATE pages SET title=?, img=?, content=?, author=?, category=? WHERE id=?");
    mysqli_stmt_bind_param($stmt, "sssssd", $title, $imgUrl, $content, $author, $category, $ids);
    mysqli_stmt_execute($stmt);
}else {
    $stmt = mysqli_prepare($connection, "UPDATE pages SET title=?, content=?, author=?, category=? WHERE id=?");
    mysqli_stmt_bind_param($stmt, "ssssd", $title,  $content, $author, $category, $ids);
    mysqli_stmt_execute($stmt);
}

?>
<div id="page-wrapper">
    <div class="row">
        <h2> Корректировки внесены</h2>
    </div>
</div>
