<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" >
        <title><?= $mainPageTitle;?></title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" >
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    </head>
    <body>
      <div class="loader">
        <div class="loader-inner">
          <i class="fa fa-cog fa-spin fa-3x fa-fw margin-bottom"></i>
          <span class="sr-only">Loading...</span>
        </div>
      </div>
      <header class="mainHead" id="home" data-parallax="scroll" data-image-src="<?= Config::getRootPath();?>img/bg.jpg">
        <div class="contaner">
          <div class="row">
            <div class="col s12">
              <button class="toggle_mnu">
                <span class="sandwich">
                  <span class="sw-topper deep-orange lighten-2"></span>
                  <span class="sw-bottom deep-orange lighten-2"></span>
                  <span class="sw-footer deep-orange lighten-2"></span>
                </span>
              </button>
              <nav class="top_mnu">
                <ul>
                  <li>
                    <figure class="effect-sarah">
                      <figcaption>
                        <a href="#home">Главная</a>
                      </figcaption>
                    </figure>
                  </li>
                  <li>
                    <figure class="effect-sarah">
                      <figcaption>
                        <a href="#about">О сервисе</a>
                      </figcaption>
                    </figure>
                  </li>
                  <li>
                    <figure class="effect-sarah">
                      <figcaption>
                        <a href="#sendrequest">Регистрация</a>
                      </figcaption>
                    </figure>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
       </header>