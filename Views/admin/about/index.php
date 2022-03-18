<div class="container">
    <div class="row">
        <form class="form" action="?type=admin&page=about&action=update" method="post">
            <h2>Update About</h2>
            <div class="form-group">
                <label for="">Home Title</label>
                <input type="text" name="H_title" value="<?= $data['about']['H_title'] ?>">
            </div>
            <div class="form-group">
                <label for="">Inner Title</label>
                <input type="text" name="Abt_title" value="<?= $data['about']['Abt_title'] ?>">
            </div>
            <div class="form-group">
                <label for="">Short Text</label>
                <textarea name="H_text" cols="30" rows="10"><?= $data['about']['H_text'] ?></textarea>
            </div>
            <div class="form-group">
                <label for="">Text</label>
                <textarea name="Abt_text" cols="30" rows="10"><?= $data['about']['Abt_text'] ?></textarea>
            </div>
            <div class="form-group">
                <button>Update</button>
            </div>
        </form>
    </div>
</div>