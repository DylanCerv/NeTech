
<?php foreach ($newsData->articles as $News) { 
        // if (!$News ) {
        //     echo "0aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa";die;
        // }
    ?>
    <div class="new">
        <div class="img-new">
            <picture>
                <?php
                    if($News->urlToImage == ''){
                ?>
                        <img src="assets/img/not-image.jpg" alt="">
                <?php
                    }else{
                ?>
                        <img src="<?= $News->urlToImage; ?>" alt="">
                <?php
                    }
                ?>
            </picture>
        </div>
        <div class="author"><?= $News->author; ?></div>
        <div class="title">
            <h3><?= $News->title; ?></h3>
        </div>
        

        <?php if ($News->description != ""){ ?>
            <div class="content"><p><?= $News->description; ?></p></div>
        <?php }else{ ?>
            <div class="content"><p><?= $News->content; ?></p></div>
        <?php }?>
        <br>
        <div class="footer-new">
            <div class="date"><?= date('d-m-Y',strtotime($News->publishedAt)); ?></div>
            <div class="mas">
                <button>
                    <a href="<?= $News->url; ?>" target="_blank" rel="noopener noreferrer">LEER MÁS</a>
                </button>
            </div>
        </div>
    </div>
<?php } ?>