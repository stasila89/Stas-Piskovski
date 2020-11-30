<div id="page-wrapper">
    <div class="row">
         <?php
        $title = $_POST['title'];
        $imgUrl = $_FILES['page_img']['name'];
        $content = $_POST['content'];
        $author = $_POST['author'];
        $category = $_POST['category'];
        if (!empty($_POST)) {

            if ($_FILES['page_img']['size'] > 0) {
                $imgUrl='downloaded_files/' . $_FILES['page_img']['name'];
                move_uploaded_file($_FILES['page_img']['tmp_name'],
                    BASE_PATH . '/../downloaded_files/' . $_FILES['page_img']['name']);
            }
        }

        $sql = mysqli_prepare($connection, 'INSERT INTO pages (`title`, `img`, `content`, `author`, `category`)
    VALUES (?,?,?,?,?)');
        mysqli_stmt_bind_param($sql, "sssss", $title, $imgUrl, $content, $author, $category);
        mysqli_stmt_execute($sql);


        ?>
     

    </div>

</div>
