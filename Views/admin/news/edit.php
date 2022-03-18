<div class="container">
    <div class="row">
        <form class="form" action="?type=admin&page=news&action=update" method="post"
        enctype='multipart/form-data'>
            <h2>Edit News</h2>
            <div class="form-group">
                <label for="">Title</label>
                <input type="text" name="title" value="<?= $data["news"]["title"] ?>">
            </div>
            <div class="form-group">
                <label for="">Category</label>
                <select name="category">
                    <?php foreach ($data['categories']  as $value) :?>
                    <option value="<?= $value['id'] ?>"><?= $value['title']?></option>
                    <?php endforeach;?>
                </select>
            </div>
            <div class="form-group">
                <label for="">Short Text</label>
                <textarea name="short_text" cols="30" rows="10"><?= $data["news"]["short_text"]?></textarea>
            </div>
            <div class="form-group">
                <label for="">Text</label>
                <textarea name="text" cols="30" rows="10"><?= $data["news"]["text"]?></textarea>
            </div>
            <div class="form-group">
            <div class="form-group">
                <label for="">Image</label>
                <input type="file" name="image">
            </div>
            <input type="hidden" value="<?= $data['news']['id'] ?>" name="id">
                <button>Update</button>
            </div>
        </form>
    </div>
</div>