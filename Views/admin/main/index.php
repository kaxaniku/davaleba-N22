<div class="container">
    <div class="row">
        <form class="form" action="?type=admin&page=main&action=update" method="post"
        enctype='multipart/form-data'>
            <h2>Update Main</h2>
            <div class="form-group">
                <label for="">Title</label>
                <input type="text" name="title" value="<?= $data['main']['title'] ?>">
            </div>
            <div class="form-group">
                <label for="">Header</label>
                <input type="text" name="header" value="<?= $data['main']['header'] ?>">
            </div>
            <div class="form-group">
                <label for="">Text</label>
                <textarea name="text" cols="30" rows="10"><?= $data['main']['text'] ?></textarea>
            </div>
            <div class="form-group">
                <label for="">Image</label>
                <input type="file" name="image">
            </div>
            <div class="form-group">
                <button>Update</button>
            </div>
        </form>
    </div>
</div>