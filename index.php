<!DOCTYPE html>
<html lang="ru">
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
  <title>Aliance Production</title>
</head>
<body class="front-page ">
  <div class="page-wrapper-about">
  <div class="mobile-menu ">
    <ul class="mobile-menu-nav">
      <li class="mobile-menu-nav-item">
        <a href="./about.php" class="mobile-menu-link">О компании</a>
      </li>
      <li class="mobile-menu-nav-item">
        <a href="./contracts.php" class="mobile-menu-link">Контрактное производство</a>
      <ul class="mobile-submenu">
        <li class="mobile-submenu-item">
          <a class="mobile-submenu-link" href="./avtohim.php">Автомобильная химия</a>
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
        <a href="./trademarks.php" class="mobile-menu-link">Собственные торговые марки</a></li>
      <li class="mobile-menu-nav-item">
        <a href="./blog.php" class="mobile-menu-link">Новости</a></li>
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

  <nav class="navbar ">
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
        <a href="./about.php" class="header-nav-link">О компании</a></li>
      <li class="header-nav-item">
        <a href="./contracts.php" class="header-nav-link">Контрактное производство</a></li>
      <li class="header-nav-item">
        <a href="./trademarks.php" class="header-nav-link">Собственные торговые марки</a></li>
      <li class="header-nav-item">
        <a href="./blog.php" class="header-nav-link">Новости</a></li>
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
    <button class="navbar-button button" data-toggle="modal"  data-target="#feedback-modal"  >
      <svg class="button-icon"  width="24" height="24">
        <use href="img/sprite.svg#phone"></use>
      </svg>
      <span class="button-text">Получить консультацию</span></button>  
        </nav>
        <!-- navbar -->
  <header class="header header-image" >
    
    <div class="container">
      <div class="header-content">
        <div class="seporater"></div>
        <h1 class="header-title">
          Комплексное обеспечение товарами <br> и расходными материалами бизнеса
        </h1>
      <p class="header-text">Высокий уровень вовлечения представителей целевой аудитории является четким доказательством простого факта: высококачественный прототип будущего проекта напрямую зависит от анализа существующих паттернов поведения.
        </p>
        <div class="button header-button" data-toggle="modal" data-target="#feedback-modal">Подробнее о компании</div>
      </div>
      <!-- /.header-content -->

      <?php 
       $slider_button_style = "slider-button-prev";
       $header_features_color = "header-features-front";
       $border_color = "header-features-item-front";
      include_once("./template-parts/features-slider-block.php");?>
    </div>
    <!-- /.container -->
  </header>

  <?php include_once("./template-parts/section-light.php");?>
    
  
  <?php $block_title = "контрактное производство";
  $seo_style = "seo-front"; 
  include_once("./template-parts/production-block.php")?>


  <?php $block_title = "собственные торговые марки"; 
  include_once("./template-parts/trademark-block.php")?>
   
  
  <?php include_once("./template-parts/founder-block.php")?>
  
  <?php include_once("./template-parts/client-block.php")?>

  <section class="section blog blog-section">
    <div class="container">
      <div class="seporater blog-seporater ">
      </div>
    <h2 class="section-title blog-title">Блог экспертов в области производства</h2>
    <!-- Slider main container -->

 
    
    <div class="swiper blog-slider">

  <!-- Additional required wrapper -->
  <div class="swiper-wrapper">
    <!-- Slides -->
    <a href="#"  class="swiper-slide blog-card">
    <img src="img/blog-photo.jpg" 
    alt="" 
    class="blog-card-image">
      <h3 class="blog-card-title" >Современная методология разработки одухотворила всех причастных</h3>
      <p class="blog-card-text">Действия представителей оппозиции, превозмогая сложившуюся непростую экономическую ситуацию, в равной степени предоставлены...</p>
    </a>
    <a href="#" class="swiper-slide blog-card">
        <img src="img/blog-photo2.jpg" 
        alt="" 
        class="blog-card-image">
      <h3 class="blog-card-title" >Сложно сказать, почему жизнь прекрасна</h3>
      <p class="blog-card-text">Сложно сказать, почему элементы политического процесса функционально разнесены на независимые элементы. Безусловно, высокотехнологичная...</p>
    </a>
    <a href="#" class="swiper-slide blog-card">
      <img src="img/blog-photo.jpg" 
      alt="" 
      class="blog-card-image">
        <h3 class="blog-card-title" >Современная методология разработки одухотворила всех причастных</h3>
        <p class="blog-card-text">Действия представителей оппозиции, превозмогая сложившуюся непростую экономическую ситуацию, в равной степени предоставлены...</p>
    </a>

  </div>
  
  <div class="blog-slider-footer">
    <a href="#" class="button-link">Весь блог</a>
    <div class="blog-buttons primary-buttons-wrapper">
      <div class="blog-button-prev primary-button-prev">  
        <svg   width="36" height="24">
          <use href="img/sprite.svg#arrow-prev"></use>
        </svg>
    </div>
      <div class="blog-button-next primary-button-next">
        <svg   width="36" height="24">
          <use href="img/sprite.svg#arrow-next"></use>
        </svg>
      </div>
    </div>
   <!-- blog-button -->
  </div>
  <!-- blog-slider-footer -->
  </div>
    <!-- /.container -->
  </section>
 
  
  <?php include_once('footer.php');?>
  </div>
