<?php
if ($_GET ['id'] && !empty($_GET['id']) && $_GET['action'] == 'edit_page') {
    $sql = "SELECT * FROM pages where id = " . $_GET['id'];
    $res = mysqli_query($connection, $sql);
    $page = mysqli_fetch_assoc($res);
}
$url = isset($page['id']) ? '/admin/?action=update_page&id=' . $page['id'] : '/admin/?action=save_page';

//Снизу то же самое, что и в строке выше
//if (isset($page['id'])) {
//    $url = '/admin/?action=update_page&id=' . $page['id'];
//} else {
//    $url = '/admin/?action=save_page';
//}


?>
<div id="page-wrapper">
    <div class="row">
        <form role="form" method="post" action="<?=$url?>" enctype="multipart/form-data">
            <div class="form-group">
                <label for="exampleInputEmail1">Заглавие статьи</label>
                <input class="form-control" name="title" value="<?= $page ['title'] ?? '' ?>">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Картинка к статье</label>
                <input class="form-control" type="file" name="page_img">
            </div>
            <div class=" form-group">
                <label for="exampleInputEmail1">Содержание статьи</label>
                <textarea rows="10" class="form-control" name="content"> <?=$page['content'] ?? ''?></textarea>
            </div>
            <div class=" form-group">
                <label for="exampleInputEmail1"> Автор статьи</label>
                <input class="form-control" type="text" name="author" value="<?= $page ['author'] ?? '' ?>">
            </div>
            <div class=" form-group">
                <label for="exampleInputEmail1">Категория статьи</label>
                <input class="form-control" name="category" value="<?= $page ['category'] ?? '' ?>">
            </div>

            <button type=" submit" class="btn btn-primary">Сохранить</button>
    </div>
        </form>

    </div>

</div>
