<section class="categories_sec">
    <div class="flex">
        <?php foreach ($data['categories'] as $value) :?>
    <div class="item">
        <a href="?page=news&CategoryId=<?= $value["id"]?>"><?= $value['title']?></a>
    </div>
    <?php endforeach;?>
    </div>
</section>