<!--
El marcado de producto es muy popular para los que tienen un ecommerce, y por lo general es muy fácil para los desarrolladores implementarlo en el software de tiendas online. La plantilla del producto difiere de la de marcado  de artículo en pocos puntos:

Etiqueta <html> modificada para reflejar los datos de producto schema.org
La Ficha de Producto de Twitter incluye etiquetas de los datos obligatorios
Los datos de Open Graph incluyen datos sobre precio y moneda

Plantilla Etiquetas Meta Sociales: Producto
-->

<!-- Actualiza tu etiqueta HTML para incluir itemscope y itemtype. -->
<html itemscope itemtype="http://schema.org/Product">

<!-- Coloca estos datos entre las etiquetas <head> de tu página web -->
<title>Título de la página. Longitud máxima 60-70 caracteres</title>
<meta name="description" content="Descripción de la página. Longitud máxima 155 caracteres." />

<!-- MArcado Schema.org para Google+ -->
<meta itemprop="name" content="Nombre de la página web">
<meta itemprop="description" content="Descripción de la página">
<meta itemprop="image" content="http://www.ejemplo.com/imagen.jpg">

<!-- Twitter Card data -->
<meta name="twitter:card" content="product">
<meta name="twitter:site" content="@anunciante">
<meta name="twitter:title" content="Título de la página">
<meta name="twitter:description" content="Descripción de la página. Longitud máxima 200 caracteres">
<meta name="twitter:creator" content="@autor">
<meta name="twitter:image" content="http://www.ejemplo.com/imagen.html">
<meta name="twitter:data1" content="$3">
<meta name="twitter:label1" content="Precio">
<meta name="twitter:data2" content="Negro">
<meta name="twitter:label2" content="Color">

<!-- Open Graph data -->
<meta property="og:title" content="Título de la página aquí" />
<meta property="og:type" content="article" />
<meta property="og:url" content="http://www.ejemplo.com/" />
<meta property="og:image" content="http://ejemplo.com/imagen.jpg" />
<meta property="og:description" content="Descripción de la página" />
<meta property="og:site_name" content="Nombre de la página" />
<meta property="og:price:amount" content="15.00" />
<meta property="og:price:currency" content="EUR" />
