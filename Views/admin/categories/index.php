<section class="categories_sec">
    <div class="container">
        <div class="cat_header">
        <h1>Categories</h1>
        <a href="?type=admin&page=categories&action=add">Add</a>
        </div>
        <div class="list">
            <?php foreach ($data['categories'] as $value) {
            ?>
            <div class="cat_box">
                <span><?= $value['title']?></span>
                <div class="action">
                <a href="?type=admin&page=categories&action=edit&id=<?= $value['id']?>">Edit</a>
                <form action="?type=admin&page=categories&action=erasure" method="post">
                <input type="hidden" name="id" value="<?= $value['id']?>">
                <button>Delete</button>
                </form>
                </div>
            </div>
            <?php }?>
        </div>
    </div>
</section class="categories_sec">