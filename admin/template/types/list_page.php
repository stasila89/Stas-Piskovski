<?php
$sql = "SELECT * FROM pages";
$result = mysqli_query($connection, $sql);
$pages = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>

<div id="page-wrapper">
<a href="/admin/?action=add_page" class="btn btn-primary"> Создать статью</a>
    <table class="table table-dark">
        <thead>
        <tr>

            <th scope="col">Заголовк статьи</th>



        </tr>
        </thead>
        <tbody>
        <?php foreach ($pages as $page):?>
        <tr>

            <td><?=$page['title']?></td>
           
            <td>
                <a href="/admin/?action=edit_page&id=<?=$page['id']?>">Редактировать</a>
                <a href="/admin/?action=delete_page&id=<?=$page['id']?>">Удалить</a>
            </td>


        </tr>
        <?php endforeach;?>
        </tbody>
    </table>
</div>
