<section class="view_page">
    <div class="container">
        <h1><?= $data["news"]["title"]?></h1>
        <p>
        <?= $data["news"]["text"]?>
        </p>
        <span>Category: <?=$data['news']['category_title']?></span>
        <img src="<?= $data['news']['image'] ?>" alt="error while loading pic">
    </div>
</section>