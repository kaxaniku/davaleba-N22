<section class="searchbox">
    <div class="container1">
        <div class="row">
            <form action="">
                <input type="hidden" name="page" value="news">
                <input class="Searcher" type="text" placeholder="Search..." name="word" value="<?= $data['word']?>">
                <div class="cat_radio">
                    <?php foreach ($data['categories'] as $value) :?>
                    <div>
                    <input type="radio"  value="<?= $value["id"]?> "name="CategoryId" <?= $data['CategoryId'] == $value['id'] ? 'checked' : '' ?>>
                    <label for=""><?= $value['title']?></label>
                    </div>
                    <?php endforeach;?>
                </div>
                <button>Search</button>
            </form>
        </div>
    </div>
</section>

<section class="sec-boxes">
    <div class="container_news">
    <?php foreach ($data["news"] as $value) :?>
        <div class="box">
            <span class="img" style="background-image: url('<?= $value["image"]?>')"></span>
            <div class="text-box">
                <h2><?= $value["title"]?></h2>
                <p><?= $value["short_text"]?></p>
                <a href="?page=news&action=view&id=<?= $value["id"]?>" class="btn">View</a>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</section>