<div id="page-wrapper">
    <div class="row">
        <?php
        if (!empty($_POST)) {

            if ($_FILES['page_img']['size'] > 0) {
                $imgUrl='downloaded_files/' . $_FILES['page_img']['name'];
                move_uploaded_file($_FILES['page_img']['tmp_name'],
                    BASE_PATH . '/../downloaded_files/' . $_FILES['page_img']['name']);
            }
        }

        $sql = "INSERT INTO `pages` (`title`, `img`, `content`, `author`, `category`)
    VALUES ('{$_POST['title']}', '{$imgUrl}', '{$_POST['content']}', '{$_POST['author']}', '{$_POST['category']}')
";
   mysqli_query($connection, $sql);

        ?>
     

    </div>

</div>
