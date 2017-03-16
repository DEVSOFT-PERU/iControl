<!-- Actualiza tu etiqueta HTML para incluir itemscope y itemtype.
  <html itemscope itemtype="http://schema.org/Article">
-->

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- App Favicon icon -->
<link rel="shortcut icon" href="{{ URL::asset('favicon_1.ico') }}">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- Coloca estos datos entre las etiquetas <head> de tu página web -->
<title>{{ str_limit( $title , 67) }}</title>

<meta name="description" content="{{ str_limit( $description , 152) }}" />
<meta name="author" content="{{ $author }}">
<meta name="organization" content="{{ config('app.name', 'si no') }}" />
<meta name="locality" content="Lima, Peru" />
<meta name="keywords" content="{{ $keywords }}"/>

<!-- Google Authorship y Marcado de Anunciante
    <link rel="author" href="<a "="">https://plus.google.com/[Perfil_Google+]/posts"/>
-->

<meta name="robots" content="index,follow" />
<meta name='googlebot' content='index, follow' />
<link rel="publisher" href="{{ $publisher }}"/>

<!-- Marcado Schema.org para Google+ -->
<meta itemprop="name" content="{{ config('app.name', 'si no') }}">
<meta itemprop="description" content="{{ $description }}">
<meta itemprop="image" content="{{ $image }}">

<!-- Twitter Card data -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@anucniante">
<meta name="twitter:title" content="{{ $title }}">
<meta name="twitter:description" content="{{ str_limit( $description , 187) }}">
<meta name="twitter:creator" content="@autor">
<!-- Resumen Twitter Card con una imagen grande con al menos 280x150px -->
<meta name="twitter:image:src" content="{{ $image }}">

<!-- Open Graph data -->
<meta property="og:title" content="{{ $title }}" />
<meta property="og:type" content="article" />
<meta property="og:url" content="{{ url()->current() }}" />
<meta property="og:image" content="{{ $image }}" />
<meta property="og:description" content="{{ $description }}" />
<meta property="og:site_name" content="{{ config('app.name', 'si no') }}" />
<meta property="article:published_time" content="{{ $create_at }}" />
<meta property="article:modified_time" content="{{ $update_at }}" />
<meta property="article:section" content="Sección del artículo" />
<meta property="article:tag" content="Etiqueta del artículo" />
<meta property="fb:admins" content="ID numérico de Facebook" />
