<div id="page-wrapper">
    <div class="row">
        <form role="form" method="post" action="/admin/?action=save_page" enctype="multipart/form-data">
            <div class="form-group">
                <label for="exampleInputEmail1">Заглавие статьи</label>
                <input  class="form-control"  name="title">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Картинка к статье</label>
                <input  class="form-control" type="file" name="page_img">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Содержание статьи</label>
                <textarea  rows="10" class="form-control"  name="content"></textarea>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1"> Автор статьи</label>
                <input  class="form-control" type="text" name="author">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Категория статьи</label>
                <input  class="form-control" name="category">
            </div>

            <button type="submit" class="btn btn-primary">Сохранить</button>
        </form>

    </div>

</div>
