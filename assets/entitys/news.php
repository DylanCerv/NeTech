
<?php foreach ($newsData->articles as $News) { ?>
    <div class="new">
        <div class="img-new">
            <picture>
                <img src="<?= $News->urlToImage; ?>" alt="">
            </picture>
        </div>
        <div class="author"><?= $News->author; ?></div>
        <div class="title">
            <h3><?= $News->title; ?></h3>
        </div>
        <hr class="hr-new">

        <?php if ($News->description != ""){ ?>
            <div class="content"><p><?= $News->description; ?></p></div>
        <?php }else{ ?>
            <div class="content"><p><?= $News->content; ?></p></div>
        <?php }?>
        <br>
        <div class="footer-new">
            <div class="date"><?= $News->publishedAt; ?></div>
            <div class="mas">
                <button>
                    <a href="<?= $News->url; ?>" target="_blank" rel="noopener noreferrer">LEER MÁS</a>
                </button>
            </div>
        </div>
    </div>
<?php } ?>