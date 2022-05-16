<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NeTech</title>
    <script src="https://kit.fontawesome.com/6b6901710e.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>

    <?php require_once "app/api.php"; ?>

    <header>
        <h1>NeTech</h1>
        <span>NeTech es un portal de noticias donde puedes enterarte de lo que esta sucediendo en diferentes parte del mundo, puedes filtrar el contenido a tus preferencias: Idioma, Categorias, Pais, entre muchos otros.</span>
    </header>
<!-- https://www.wired.com/category/artificial-intelligence/ -->
<!-- https://tubitv.com/home -->
    <main>
        <div class="filtros">
            <h3>Filtros</h3>
            
            <div class="form-p-clave">
                <span id="p-clave">Busqueda por palabras clave</span>
                <form method="get">
                    <input type="text" name="search" id="search" placeholder="Buscar">
                    <button type="submit" id="enviar"><b>Search</b></button>
                </form>
            </div>

            <ul>
                <button>
                    <b>Categoria</b>
                    <i class="fa-solid fa-chevron-down"></i>
                </button>
                <button>
                    <b>Pais</b>
                    <i class="fa-solid fa-chevron-down"></i>
                </button>
                <button>
                    <b>Idioma</b>
                    <i class="fa-solid fa-chevron-down"></i>
                </button>
                <button>
                    <b>Fuentes</b>
                    <i class="fa-solid fa-chevron-down"></i>
                </button>
                <button>
                    <b>Ordenar Por</b>
                    <i class="fa-solid fa-chevron-down"></i>
                </button>
            </ul>

            <hr>
            <h5> Tecnologia - Noticias</h5>
            <hr>
        </div>


        <div class="all-news">
            <!-- <?php //foreach ($newsData->articles as $News) { ?>
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
                <div class="description"><?= $News->description; ?></div>
                <hr class="hr-new">
                <div class="content"><p><?= $News->content; ?></p></div>
                <div class="date"><?= $News->publishedAt; ?></div>
            </div>
            <?php //} ?> -->



            <div class="new">
                <div class="img-new">
                    <picture>
                        <img src="https://media.wired.com/photos/627c44cdbdc4ad545af73cdc/master/w_1600,c_limit/Dental-Mold-Google-IO-Chat-Bot-Business-1369322804.jpg" alt="">
                    </picture>
                </div>
                <div class="author">Nombre del autor</div>
                <div class="title">
                    <h3>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquid, laboriosam.></h3>
                </div>
                <hr class="hr-new">
                <div class="content"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores sint ut perferendis mollitia possimus labore eius porro magnam minus repudiandae repellat, quas accusamus ratione rem aliquam animi! Officiis, doloremque cum?</p></div>
                <br>
                <div class="footer-new">
                    <div class="date"><b>2022-02-05</b></div>
                    <div class="mas">
                        <button>
                            <a href="https://newsapi.org/docs/endpoints/everything" target="_blank" rel="noopener noreferrer">LEER MÁS</a>
                        </button>
                    </div>
                </div>
            </div>
            <div class="new">
                <div class="img-new">
                    <picture>
                        <img src="https://media.wired.com/photos/627c44cdbdc4ad545af73cdc/master/w_1600,c_limit/Dental-Mold-Google-IO-Chat-Bot-Business-1369322804.jpg" alt="">
                    </picture>
                </div>
                <div class="author">Nombre del autor</div>
                <div class="title">
                    <h3>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquid, laboriosam.></h3>
                </div>
                <hr class="hr-new">
                <div class="content"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores sint ut perferendis mollitia possimus labore eius porro magnam minus repudiandae repellat, quas accusamus ratione rem aliquam animi! Officiis, doloremque cum?</p></div>
                <br>
                <div class="footer-new">
                    <div class="date"><b>2022-02-05</b></div>
                    <div class="mas">
                        <button>
                            <a href="https://newsapi.org/docs/endpoints/everything" target="_blank" rel="noopener noreferrer">LEER MÁS</a>
                        </button>
                    </div>
                </div>
            </div>
            <div class="new">
                <div class="img-new">
                    <picture>
                        <img src="https://media.wired.com/photos/627c44cdbdc4ad545af73cdc/master/w_1600,c_limit/Dental-Mold-Google-IO-Chat-Bot-Business-1369322804.jpg" alt="">
                    </picture>
                </div>
                <div class="author">Nombre del autor</div>
                <div class="title">
                    <h3>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquid, laboriosam.></h3>
                </div>
                <hr class="hr-new">
                <div class="content"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores sint ut perferendis mollitia possimus labore eius porro magnam minus repudiandae repellat, quas accusamus ratione rem aliquam animi! Officiis, doloremque cum?</p></div>
                <br>
                <div class="footer-new">
                    <div class="date"><b>2022-02-05</b></div>
                    <div class="mas">
                        <button>
                            <a href="https://newsapi.org/docs/endpoints/everything" target="_blank" rel="noopener noreferrer">LEER MÁS</a>
                        </button>
                    </div>
                </div>
            </div>
            <div class="new">
                <div class="img-new">
                    <picture>
                        <img src="https://media.wired.com/photos/627c44cdbdc4ad545af73cdc/master/w_1600,c_limit/Dental-Mold-Google-IO-Chat-Bot-Business-1369322804.jpg" alt="">
                    </picture>
                </div>
                <div class="author">Nombre del autor</div>
                <div class="title">
                    <h3>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquid, laboriosam.></h3>
                </div>
                <hr class="hr-new">
                <div class="content"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores sint ut perferendis mollitia possimus labore eius porro magnam minus repudiandae repellat, quas accusamus ratione rem aliquam animi! Officiis, doloremque cum?</p></div>
                <br>
                <div class="footer-new">
                    <div class="date"><b>2022-02-05</b></div>
                    <div class="mas">
                        <button>
                            <a href="https://newsapi.org/docs/endpoints/everything" target="_blank" rel="noopener noreferrer">LEER MÁS</a>
                        </button>
                    </div>
                </div>
            </div>
            <div class="new">
                <div class="img-new">
                    <picture>
                        <img src="https://media.wired.com/photos/627c44cdbdc4ad545af73cdc/master/w_1600,c_limit/Dental-Mold-Google-IO-Chat-Bot-Business-1369322804.jpg" alt="">
                    </picture>
                </div>
                <div class="author">Nombre del autor</div>
                <div class="title">
                    <h3>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquid, laboriosam.></h3>
                </div>
                <hr class="hr-new">
                <div class="content"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores sint ut perferendis mollitia possimus labore eius porro magnam minus repudiandae repellat, quas accusamus ratione rem aliquam animi! Officiis, doloremque cum?</p></div>
                <br>
                <div class="footer-new">
                    <div class="date"><b>2022-02-05</b></div>
                    <div class="mas">
                        <button>
                            <a href="https://newsapi.org/docs/endpoints/everything" target="_blank" rel="noopener noreferrer">LEER MÁS</a>
                        </button>
                    </div>
                </div>
            </div>
            <div class="new">
                <div class="img-new">
                    <picture>
                        <img src="https://media.wired.com/photos/627c44cdbdc4ad545af73cdc/master/w_1600,c_limit/Dental-Mold-Google-IO-Chat-Bot-Business-1369322804.jpg" alt="">
                    </picture>
                </div>
                <div class="author">Nombre del autor</div>
                <div class="title">
                    <h3>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquid, laboriosam.></h3>
                </div>
                <hr class="hr-new">
                <div class="content"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores sint ut perferendis mollitia possimus labore eius porro magnam minus repudiandae repellat, quas accusamus ratione rem aliquam animi! Officiis, doloremque cum?</p></div>
                <br>
                <div class="footer-new">
                    <div class="date"><b>2022-02-05</b></div>
                    <div class="mas">
                        <button>
                            <a href="https://newsapi.org/docs/endpoints/everything" target="_blank" rel="noopener noreferrer">LEER MÁS</a>
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </main>



    <footer>
        <img src="" alt="logo">
        <div class="contact">
            <div class="red">Facebook</div>
        </div>
        <div class="contact">
            <div class="red">Facebook</div>
        </div>
        <div class="contact">
            <div class="red">Facebook</div>
        </div>
        <div class="contact">
            <div class="red">Facebook</div>
        </div>
    </footer>
</body>
</html>