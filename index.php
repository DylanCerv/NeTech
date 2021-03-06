<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NeTech</title>
    <link rel="stylesheet" href="assets/css/main.css">
	<link rel="icon" href="assets/img/n.ico">
    <script src="https://kit.fontawesome.com/6b6901710e.js" crossorigin="anonymous"></script>
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

            <ul class="filtro-button">
                <li>
                    <button id="categoria">
                        <b>Categoria</b>
                        <i class="fa-solid fa-chevron-down"></i>
                    </button>
                    <div class="s"></div>
                    <div class="options categoria">
                        <ul>
                            <a href="?categoria=general">General</a>
                            <a href="?categoria=bussines">Empresa</a>
                            <a href="?categoria=entertainment">Entretenimiento</a>
                            <a href="?categoria=health">Salud</a>
                            <a href="?categoria=science">Ciencia</a>
                            <a href="?categoria=sports">Deportes</a>
                            <a href="?categoria=technology">Tecnonologia</a>
                        </ul>
                    </div>
                </li>
                <li>
                    <button id="pais">
                        <b>Pais</b>
                        <i class="fa-solid fa-chevron-down"></i>
                    </button>
                    <div class="options pais">
                        <ul>
                            <a href="?pais=AF">Afganist??n</a>
                            <a href="?pais=AL">Albania</a>
                            <a href="?pais=DE">Alemania</a>
                            <a href="?pais=AD">Andorra</a>
                            <a href="?pais=AO">Angola</a>
                            <a href="?pais=AI">Anguilla</a>
                            <a href="?pais=AQ">Ant??rtida</a>
                            <a href="?pais=AG">Antigua y Barbuda</a>
                            <a href="?pais=AN">Antillas Holandesas</a>
                            <a href="?pais=SA">Arabia Saud??</a>
                            <a href="?pais=DZ">Argelia</a>
                            <a href="?pais=AR">Argentina</a>
                            <a href="?pais=AM">Armenia</a>
                            <a href="?pais=AW">Aruba</a>
                            <a href="?pais=AU">Australia</a>
                            <a href="?pais=AT">Austria</a>
                            <a href="?pais=AZ">Azerbaiy??n</a>
                            <a href="?pais=BS">Bahamas</a>
                            <a href="?pais=BH">Bahrein</a>
                            <a href="?pais=BD">Bangladesh</a>
                            <a href="?pais=BB">Barbados</a>
                            <a href="?pais=BE">B??lgica</a>
                            <a href="?pais=BZ">Belice</a>
                            <a href="?pais=BJ">Benin</a>
                            <a href="?pais=BM">Bermudas</a>
                            <a href="?pais=BY">Bielorrusia</a>
                            <a href="?pais=MM">Birmania</a>
                            <a href="?pais=BO">Bolivia</a>
                            <a href="?pais=BA">Bosnia y Herzegovina</a>
                            <a href="?pais=BW">Botswana</a>
                            <a href="?pais=BR">Brasil</a>
                            <a href="?pais=BN">Brunei</a>
                            <a href="?pais=BG">Bulgaria</a>
                            <a href="?pais=BF">Burkina Faso</a>
                            <a href="?pais=BI">Burundi</a>
                            <a href="?pais=BT">But??n</a>
                            <a href="?pais=CV">Cabo Verde</a>
                            <a href="?pais=KH">Camboya</a>
                            <a href="?pais=CM">Camer??n</a>
                            <a href="?pais=CA">Canad??</a>
                            <a href="?pais=TD">Chad</a>
                            <a href="?pais=CL">Chile</a>
                            <a href="?pais=CN">China</a>
                            <a href="?pais=CY">Chipre</a>
                            <a href="?pais=VA">Ciudad del Vaticano (Santa Sede)</a>
                            <a href="?pais=CO">Colombia</a>
                            <a href="?pais=KM">Comores</a>
                            <a href="?pais=CG">Congo</a>
                            <a href="?pais=CD">Congo, Rep??blica Democr??tica del</a>
                            <a href="?pais=KR">Corea</a>
                            <a href="?pais=KP">Corea del Norte</a>
                            <a href="?pais=CI">Costa de Marf??l</a>
                            <a href="?pais=CR">Costa Rica</a>
                            <a href="?pais=HR">Croacia (Hrvatska)</a>
                            <a href="?pais=CU">Cuba</a>
                            <a href="?pais=DK">Dinamarca</a>
                            <a href="?pais=DJ">Djibouti</a>
                            <a href="?pais=DM">Dominica</a>
                            <a href="?pais=EC">Ecuador</a>
                            <a href="?pais=EG">Egipto</a>
                            <a href="?pais=SV">El Salvador</a>
                            <a href="?pais=AE">Emiratos ??rabes Unidos</a>
                            <a href="?pais=ER">Eritrea</a>
                            <a href="?pais=SI">Eslovenia</a>
                            <a href="?pais=ES" selected>Espa??a</a>
                            <a href="?pais=US">Estados Unidos</a>
                            <a href="?pais=EE">Estonia</a>
                            <a href="?pais=ET">Etiop??a</a>
                            <a href="?pais=FJ">Fiji</a>
                            <a href="?pais=PH">Filipinas</a>
                            <a href="?pais=FI">Finlandia</a>
                            <a href="?pais=FR">Francia</a>
                            <a href="?pais=GA">Gab??n</a>
                            <a href="?pais=GM">Gambia</a>
                            <a href="?pais=GE">Georgia</a>
                            <a href="?pais=GH">Ghana</a>
                            <a href="?pais=GI">Gibraltar</a>
                            <a href="?pais=GD">Granada</a>
                            <a href="?pais=GR">Grecia</a>
                            <a href="?pais=GL">Groenlandia</a>
                            <a href="?pais=GP">Guadalupe</a>
                            <a href="?pais=GU">Guam</a>
                            <a href="?pais=GT">Guatemala</a>
                            <a href="?pais=GY">Guayana</a>
                            <a href="?pais=GF">Guayana Francesa</a>
                            <a href="?pais=GN">Guinea</a>
                            <a href="?pais=GQ">Guinea Ecuatorial</a>
                            <a href="?pais=GW">Guinea-Bissau</a>
                            <a href="?pais=HT">Hait??</a>
                            <a href="?pais=HN">Honduras</a>
                            <a href="?pais=HU">Hungr??a</a>
                            <a href="?pais=IN">India</a>
                            <a href="?pais=ID">Indonesia</a>
                            <a href="?pais=IQ">Irak</a>
                            <a href="?pais=IR">Ir??n</a>
                            <a href="?pais=IE">Irlanda</a>
                            <a href="?pais=BV">Isla Bouvet</a>
                            <a href="?pais=CX">Isla de Christmas</a>
                            <a href="?pais=IS">Islandia</a>
                            <a href="?pais=KY">Islas Caim??n</a>
                            <a href="?pais=CK">Islas Cook</a>
                            <a href="?pais=CC">Islas de Cocos o Keeling</a>
                            <a href="?pais=FO">Islas Faroe</a>
                            <a href="?pais=HM">Islas Heard y McDonald</a>
                            <a href="?pais=FK">Islas Malvinas</a>
                            <a href="?pais=MP">Islas Marianas del Norte</a>
                            <a href="?pais=MH">Islas Marshall</a>
                            <a href="?pais=UM">Islas menores de Estados Unidos</a>
                            <a href="?pais=PW">Islas Palau</a>
                            <a href="?pais=SB">Islas Salom??n</a>
                            <a href="?pais=SJ">Islas Svalbard y Jan Mayen</a>
                            <a href="?pais=TK">Islas Tokelau</a>
                            <a href="?pais=TC">Islas Turks y Caicos</a>
                            <a href="?pais=VI">Islas V??rgenes (EEUU)</a>
                            <a href="?pais=VG">Islas V??rgenes (Reino Unido)</a>
                            <a href="?pais=WF">Islas Wallis y Futuna</a>
                            <a href="?pais=IL">Israel</a>
                            <a href="?pais=IT">Italia</a>
                            <a href="?pais=JM">Jamaica</a>
                            <a href="?pais=JP">Jap??n</a>
                            <a href="?pais=JO">Jordania</a>
                            <a href="?pais=KZ">Kazajist??n</a>
                            <a href="?pais=KE">Kenia</a>
                            <a href="?pais=KG">Kirguizist??n</a>
                            <a href="?pais=KI">Kiribati</a>
                            <a href="?pais=KW">Kuwait</a>
                            <a href="?pais=LA">Laos</a>
                            <a href="?pais=LS">Lesotho</a>
                            <a href="?pais=LV">Letonia</a>
                            <a href="?pais=LB">L??bano</a>
                            <a href="?pais=LR">Liberia</a>
                            <a href="?pais=LY">Libia</a>
                            <a href="?pais=LI">Liechtenstein</a>
                            <a href="?pais=LT">Lituania</a>
                            <a href="?pais=LU">Luxemburgo</a>
                            <a href="?pais=MK">Macedonia, Ex-Rep??blica Yugoslava de</a>
                            <a href="?pais=MG">Madagascar</a>
                            <a href="?pais=MY">Malasia</a>
                            <a href="?pais=MW">Malawi</a>
                            <a href="?pais=MV">Maldivas</a>
                            <a href="?pais=ML">Mal??</a>
                            <a href="?pais=MT">Malta</a>
                            <a href="?pais=MA">Marruecos</a>
                            <a href="?pais=MQ">Martinica</a>
                            <a href="?pais=MU">Mauricio</a>
                            <a href="?pais=MR">Mauritania</a>
                            <a href="?pais=YT">Mayotte</a>
                            <a href="?pais=MX">M??xico</a>
                            <a href="?pais=FM">Micronesia</a>
                            <a href="?pais=MD">Moldavia</a>
                            <a href="?pais=MC">M??naco</a>
                            <a href="?pais=MN">Mongolia</a>
                            <a href="?pais=MS">Montserrat</a>
                            <a href="?pais=MZ">Mozambique</a>
                            <a href="?pais=NA">Namibia</a>
                            <a href="?pais=NR">Nauru</a>
                            <a href="?pais=NP">Nepal</a>
                            <a href="?pais=NI">Nicaragua</a>
                            <a href="?pais=NE">N??ger</a>
                            <a href="?pais=NG">Nigeria</a>
                            <a href="?pais=NU">Niue</a>
                            <a href="?pais=NF">Norfolk</a>
                            <a href="?pais=NO">Noruega</a>
                            <a href="?pais=NC">Nueva Caledonia</a>
                            <a href="?pais=NZ">Nueva Zelanda</a>
                            <a href="?pais=OM">Om??n</a>
                            <a href="?pais=NL">Pa??ses Bajos</a>
                            <a href="?pais=PA">Panam??</a>
                            <a href="?pais=PG">Pap??a Nueva Guinea</a>
                            <a href="?pais=PK">Paquist??n</a>
                            <a href="?pais=PY">Paraguay</a>
                            <a href="?pais=PE">Per??</a>
                            <a href="?pais=PN">Pitcairn</a>
                            <a href="?pais=PF">Polinesia Francesa</a>
                            <a href="?pais=PL">Polonia</a>
                            <a href="?pais=PT">Portugal</a>
                            <a href="?pais=PR">Puerto Rico</a>
                            <a href="?pais=QA">Qatar</a>
                            <a href="?pais=UK">Reino Unido</a>
                            <a href="?pais=CF">Rep??blica Centroafricana</a>
                            <a href="?pais=CZ">Rep??blica Checa</a>
                            <a href="?pais=ZA">Rep??blica de Sud??frica</a>
                            <a href="?pais=DO">Rep??blica Dominicana</a>
                            <a href="?pais=SK">Rep??blica Eslovaca</a>
                            <a href="?pais=RE">Reuni??n</a>
                            <a href="?pais=RW">Ruanda</a>
                            <a href="?pais=RO">Rumania</a>
                            <a href="?pais=RU">Rusia</a>
                            <a href="?pais=EH">Sahara Occidental</a>
                            <a href="?pais=KN">Saint Kitts y Nevis</a>
                            <a href="?pais=WS">Samoa</a>
                            <a href="?pais=AS">Samoa Americana</a>
                            <a href="?pais=SM">San Marino</a>
                            <a href="?pais=VC">San Vicente y Granadinas</a>
                            <a href="?pais=SH">Santa Helena</a>
                            <a href="?pais=LC">Santa Luc??a</a>
                            <a href="?pais=ST">Santo Tom?? y Pr??ncipe</a>
                            <a href="?pais=SN">Senegal</a>
                            <a href="?pais=SC">Seychelles</a>
                            <a href="?pais=SL">Sierra Leona</a>
                            <a href="?pais=SG">Singapur</a>
                            <a href="?pais=SY">Siria</a>
                            <a href="?pais=SO">Somalia</a>
                            <a href="?pais=LK">Sri Lanka</a>
                            <a href="?pais=PM">St Pierre y Miquelon</a>
                            <a href="?pais=SZ">Suazilandia</a>
                            <a href="?pais=SD">Sud??n</a>
                            <a href="?pais=SE">Suecia</a>
                            <a href="?pais=CH">Suiza</a>
                            <a href="?pais=SR">Surinam</a>
                            <a href="?pais=TH">Tailandia</a>
                            <a href="?pais=TW">Taiw??n</a>
                            <a href="?pais=TZ">Tanzania</a>
                            <a href="?pais=TJ">Tayikist??n</a>
                            <a href="?pais=TF">Territorios franceses del Sur</a>
                            <a href="?pais=TP">Timor Oriental</a>
                            <a href="?pais=TG">Togo</a>
                            <a href="?pais=TO">Tonga</a>
                            <a href="?pais=TT">Trinidad y Tobago</a>
                            <a href="?pais=TN">T??nez</a>
                            <a href="?pais=TM">Turkmenist??n</a>
                            <a href="?pais=TR">Turqu??a</a>
                            <a href="?pais=TV">Tuvalu</a>
                            <a href="?pais=UA">Ucrania</a>
                            <a href="?pais=UG">Uganda</a>
                            <a href="?pais=UY">Uruguay</a>
                            <a href="?pais=UZ">Uzbekist??n</a>
                            <a href="?pais=VU">Vanuatu</a>
                            <a href="?pais=VE">Venezuela</a>
                            <a href="?pais=VN">Vietnam</a>
                            <a href="?pais=YE">Yemen</a>
                            <a href="?pais=YU">Yugoslavia</a>
                            <a href="?pais=ZM">Zambia</a>
                            <a href="?pais=ZW">Zimbabue</a>
                        </ul>
                    </div>
                </li>
                <li>
                    <button id="idioma">
                        <b>Idioma</b>
                        <i class="fa-solid fa-chevron-down"></i>
                    </button>
                    <div class="options idioma">
                        <ul>
                            <a href="?idioma=ar">??rabe</a>
                            <a href="?idioma=de">Alem??n</a>
                            <a href="?idioma=zh">Chino</a>
                            <a href="?idioma=es">Espa??ol</a>
                            <a href="?idioma=fr">Franc??s</a>
                            <a href="?idioma=he">Hebreo</a>
                            <a href="?idioma=en">Ingl??s</a>
                            <a href="?idioma=it">Italiano</a>
                            <a href="?idioma=nl">Neerland??s </a>
                            <a href="?idioma=no">Noruego</a>
                            <a href="?idioma=pt">Portugu??s</a>
                            <a href="?idioma=ru">Ruso</a>
                            <a href="?idioma=sv">Sueco</a>
                        </ul>
                    </div>
                </li>
                <!-- <li>
                    <button id="fuente">
                        <b>Fuentes</b>
                        <i class="fa-solid fa-chevron-down"></i>
                    </button>
                    <div class="options fuente">
                        <ul>
                            <a href="?categoria=general">General</a>
                            <a href="?categoria=bussines">Empresa</a>
                            <a href="?categoria=entertainment">Entretenimiento</a>
                            <a href="?categoria=health">Salud</a>
                            <a href="?categoria=science">Ciencia</a>
                            <a href="?categoria=sports">Deportes</a>
                            <a href="?categoria=technology">Tecnonologia</a>
                        </ul>
                    </div>
                </li> -->
                <li>
                    <button id="ordenar-por">
                        <b>Ordenar Por</b>
                        <i class="fa-solid fa-chevron-down"></i>
                    </button>
                    <div class="options ordenar-por">
                        <ul>
                            <a href="?sortBy=relevancy">Relevancia</a>
                            <a href="?sortBy=popularity">Popular</a>
                            <a href="?sortBy=publishedAt">Nuevos</a>
                        </ul>
                    </div>
                </li>
            </ul>

            <hr>
            <h5> Tecnologia - Noticias</h5>
            <hr>
        </div>



        <div class="all-news">
            
            <?php require_once "assets/entitys/news.php"; ?>


            <!-- <div class="new">
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
                            <a href="https://newsapi.org/docs/endpoints/everything" target="_blank" rel="noopener noreferrer">LEER M??S</a>
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
                            <a href="https://newsapi.org/docs/endpoints/everything" target="_blank" rel="noopener noreferrer">LEER M??S</a>
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
                            <a href="https://newsapi.org/docs/endpoints/everything" target="_blank" rel="noopener noreferrer">LEER M??S</a>
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
                            <a href="https://newsapi.org/docs/endpoints/everything" target="_blank" rel="noopener noreferrer">LEER M??S</a>
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
                            <a href="https://newsapi.org/docs/endpoints/everything" target="_blank" rel="noopener noreferrer">LEER M??S</a>
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
                            <a href="https://newsapi.org/docs/endpoints/everything" target="_blank" rel="noopener noreferrer">LEER M??S</a>
                        </button>
                    </div>
                </div>
            </div> -->

        </div>
    </main>



    <footer>
        <div class="img">
            <img src="assets/img/n.png" alt="logo">
        </div>
        <div class="contact">
            <h2>Contacto</h2>
            <div class="content-footer">
                <div class="contact">
                    <a href="http://www.linkedin.com/in/dylan-espa??a-c-200abc/" target="_blank" rel="noopener noreferrer">LinkedIn</a>
                </div>
                <div class="contact">
                    <a href="https://github.com/DylanCerv" target="_blank" rel="noopener noreferrer">GitHub</a>
                </div>
                <div class="contact">
                    <a href="https://portafoliodylangowner.000webhostapp.com/portafolio/" target="_blank" rel="noopener noreferrer">Portafolio</a>
                </div>
            </div>
        </div>
    </footer>




    <script src="assets/js/appN.js"></script>
</body>
</html>