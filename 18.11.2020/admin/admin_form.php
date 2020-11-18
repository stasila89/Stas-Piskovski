<form action="" method="post">
    <h2>Заголовок</h2>
    <br>
    <input type="text" name="title"/>
    <br>
    <h3>Статья</h3>
    <br>
    <textarea name="content" id="" cols="30" rows="10"></textarea>
    <br>
    <br>
    <button type="submit">Добавить статью</button>
</form>

<?php
if (!empty($_POST)){
    $sql = "INSERT INTO `test_blog`.`pages` (`title`, `content`)
VALUES ('{$_POST['title']}',  '{$_POST['content']}')
";
   mysqli_query($connection, $sql);
}
