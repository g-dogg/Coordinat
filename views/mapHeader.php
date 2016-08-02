<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" >
        <title>Map</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" >
        <meta name='viewport' content='initial-scale=1,maximum-scale=1,user-scalable=no' />
        <meta name="description" content="Настройка компьютеров, оборудования, программного обеспечения. Разработка сайтов. Аудит и проектирование сетей, инфраструктуры. Консультации. Администрирование.">
        <meta name="keywords" content="системное администрирование, СКС, программы, компьютеры, настройка">
        <link href='https://fonts.googleapis.com/css?family=Anonymous+Pro:400,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="<?= Config::getRootPath();?>libs/materialize/css/materialize.min.css">
        <link rel="stylesheet" href="<?= Config::getRootPath();?>libs/animate/animate.min.css">
        <link rel="stylesheet" href="<?= Config::getRootPath();?>libs/loaders/loaders.min.css">
        <link rel="stylesheet" href="<?= Config::getRootPath();?>libs/font-awesome/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"><!-- testing -->
        <link rel="stylesheet" href="<?= Config::getRootPath();?>css/fonts.css">
        <link rel="stylesheet" href="<?= Config::getRootPath();?>css/main.css">
        <link rel="stylesheet" href="<?= Config::getRootPath();?>css/media.css">
        <link rel='stylesheet' href='https://api.tiles.mapbox.com/mapbox-gl-js/v0.21.0/mapbox-gl.css'>
        <script src='https://api.tiles.mapbox.com/mapbox-gl-js/v0.21.0/mapbox-gl.js'></script>
    
   
    </head>
    <body>
        <div class="loader">
            <div class="loader-inner">
                <i class="fa fa-cog fa-spin fa-3x fa-fw margin-bottom"></i>
                <span class="sr-only">Loading...</span>
            </div>
        </div>