<?php

# Un solo parametro
$country = "country=us"; // El código ISO 3166-1 de 2 letras del país del que desea obtener titulares.

# Un solo parametro
$category = "&category=technology";

# Un solo parametro y No mezclar con contry ni category
$sources = "&sources=bbc-news";

# Palabra clave de la busqueda
$q = "&q=trump";

# Cantidad de resultados a devolver por defecto min=20 y un max=100
$pageSize = "&pageSize=20";

# Ecluir dominios de los resiltados se separan por comas &excludeDomains=bbc.co.uk,techcrunch.com,engadget.com
$excludeDomains = "&excludeDomains=";

# Fecha de inicio
$from = "from=2022-05-10"; // FORMATOS -> 2022-05-16 OR 2022-05-16T01:07:46

# Fecha de fin
$to = "&to=2022-05-01"; // FORMATOS -> 2022-05-16 OR 2022-05-16T01:07:46

# Lenguajes
$language = "language=es";

# Orden de los articulos
// relevancy = articles more closely related to q come first.
// popularity = articles from popular sources and publishers come first.
// publishedAt = newest articles come first.
$sortBy = "&sortBy=popularity";


# Obligatiorio
$apiKey = AKEY;