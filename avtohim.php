<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/swiper-bundle.min.css">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/style.css">
  <title>Автомобильная химия - Aliance Production</title>
</head>
<body>
  <div class="mobile-menu ">
    <ul class="mobile-menu-nav">
      <li class="mobile-menu-nav-item">
        <a href="#" class="mobile-menu-link">О компании</a>
      </li>
      <li class="mobile-menu-nav-item">
        <a href="#" class="mobile-menu-link">Контрактное производство</a>
      <ul class="mobile-submenu">
        <li class="mobile-submenu-item">
          <a class="mobile-submenu-link" href="#">Автомобильная химия</a>
        </li>
        <li class="mobile-submenu-item">
          <a class="mobile-submenu-link" href="#">Бытовая химия</a>
        </li>
        <li class="mobile-submenu-item">
          <a class="mobile-submenu-link" href="#">Дезинфицирующие средства</a>
        </li>
      </ul>
      </li>
      <li class="mobile-menu-nav-item">
        <a href="#" class="mobile-menu-link">Собственные торговые марки</a></li>
      <li class="mobile-menu-nav-item">
        <a href="#" class="mobile-menu-link">Новости</a></li>
      <li class="mobile-menu-nav-item">
        <a href="#" class="mobile-menu-link">Контакты</a></li>
    </ul>
    <a href="tel:+74996861014" class="mobile-phone"> +7 (499) 686-10-14</a>
    <div class="mobile-info">
      <svg class="phone-icon"  width="24" height="24">
        <use href="img/sprite.svg#mark"></use>
      </svg>
      <address class="mobile-info-address">
        г. Мосвка, Холодильный пер. 4к1с8
      </address>
    </div>
    <!-- /.mobile-info -->
    <div class="mobile-info">
      <svg class="phone-icon"  width="24" height="24">
        <use href="img/sprite.svg#mail"></use>
      </svg>
      <a href="mailto:a.dragunov@tdaliance.ru" class="mobile-info-email">
        a.dragunov@tdaliance.ru
      </a>
    </div>
   <a href="#"> <svg class="vk-icon"  width="24" height="24">
    <use href="img/sprite.svg#Vector"></use>
  </svg></a>
  <a href="#"><svg class="inst-icon"  width="24" height="24">
    <use href="img/sprite.svg#inst"></use>
  </svg></a>
  </div>
  <nav class="navbar navbar-light">
    <a href="#" class="mobile-menu-toggle">
      <div class="mobile-menu-line-container">
      <div class="mobile-menu-line"></div>
      <div class="mobile-menu-line"></div>
      <div class="mobile-menu-line"></div>
      </div>
    </a>
    <a href="./" class="header-logo">
        <svg class="logo-svg logo-light" >
          <use href="img/sprite.svg#logo-light" ></use>
        </svg>
        <svg class="logo-svg logo-dark" >
          <use href="img/sprite.svg#logo" ></use>
        </svg>
          </a>
        </a>
    <ul class="header-nav">
      <li class="header-nav-item">
        <a href="/about.html" class="header-nav-link">О компании</a></li>
      <li class="header-nav-item">
        <a href="#" class="header-nav-link">Контрактное производство</a></li>
      <li class="header-nav-item">
        <a href="#" class="header-nav-link">Собственные торговые марки</a></li>
      <li class="header-nav-item">
        <a href="#" class="header-nav-link">Новости</a></li>
      <li class="header-nav-item">
        <a href="#" class="header-nav-link">Контакты</a></li>
    </ul>
    <div class="header-phone">
      <svg class="phone-icon"  width="24" height="24">
        <use href="img/sprite.svg#phone"></use>
      </svg>
      <a href="tel:+74996861014" class="header-phone-link">
        +7 (499) 686-10-14
      </a> 
    </div>
    <!-- /.header phone -->
    <button class="navbar-button button" data-toggle="modal"  data-target="#feedback-modal" >
      <svg class="button-icon"  width="24" height="24">
        <use href="img/sprite.svg#phone"></use>
      </svg>
      <span class="button-text">Получить консультацию</span></button>  
        </nav>
        <!-- navbar -->
       <header class="header-about header-avtohim">
        <div class="container">
         <div class="avtohim-content">
          <div class="seporater about-seporater"></div>
          <h2 class="header-title-about header-title-avtohim">Автомобильная химия</h2>
          <ul class="breadcrumbs">
            <li class="breadcrumb"><a href="#" class="breadcrumb-link">Главная</a></li>
            <li class="breadcrumb"><a href="#" class="breadcrumb-link">Контрактное производство</a></li>
            <li class="breadcrumb"><a href="#" class="breadcrumb-link">Автомобильная химия </a></li>
          </ul>
         </div>
         <img class="avtohim-image" src="img/avto-him.png" alt="">
       
        </div>
       </header>
       
       <?php include_once('footer.php');?>
