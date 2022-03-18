<section id="intro">
        <div class="container1">
            <div class="row">

                

                <div class="intro-content">
                    <div class="content">
                        <span><?= $data['main']['title']?></span>
                        <h1><?= $data['main']['header']?></h1>
                        <p><?= $data['main']['text']?></p>
                    </div>

                    <div class="img">
                        <img src="<?= $data['main']['image']?>" alt="">
                    </div>
                </div>

            </div>
        </div>
    </section>

<main>
    <section class="sec-Welcome">
        <div class="container">
        <h1><?= $data["about"]["H_title"]?></h1>
        <p><?= $data["about"]["H_text"]?></p>
        <div class="categories">
            <?php foreach ($data["categories"] as $value) { ?>
                <div class="item">
                    <a href=""><?=$value["title"]?></a>
                </div>
            <?php }?>
        </div>
        </div>    
    </section>
    <section class="sec-boxes">
        <div class="center">
    <a href="?page=news">View ALL</a>
    </div>
    <div class="container">
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
</main>