  

  <?php
  $page_title = 'О компании';
  $header_style = "page-header-bg-grey";
  include_once('header-page.php');?>

<section class="section section-experts">
  <div class="container">
    <div class="experts-content-wrapper">
    <picture   >
      <source   type="image/webp" srcset="img/him_experts.webp"> 
      <source   type="image/jpeg" srcset="img/him_experts.png">
      <img src="img/him_experts.png"  alt="him_experts_photo" class="experts-img">
        </picture>
    
    <div class="experts-content">
          <div class="seporater experts-seporater"></div>
            <h2 class="section-title experts-title">мы - эксперты в области производства химии </h2>
              <p class="experts-text">Разнообразный и богатый опыт говорит нам, что перспективное планирование однозначно фиксирует необходимость поставленных обществом задач! Есть над чем задуматься: ключевые особенности структуры проекта могут быть объединены в целые кластеры себе подобных. Интерактивные прототипы, которые представляют собой яркий пример континентально-европейского типа политической культуры, будут описаны максимально подробно. Значимость этих проблем настолько очевидна, что перспективное планирование играет важную роль в формировании системы массового участия.</p>
      </div>
      </div> 

      
      <?php
       $slider_button_style = "slider-button-prev-about, slider-button-next-about";
      $header_features_color = "header-features-item-inside"; 
      $border_color = "header-features-item-inside";
      include_once("./template-parts/features-slider-block.php");?>

    </div>
    </div>
</section>
<section class="section section-products">
  <div class="container">
    <div class="products-content-wrapper">
        
    <div class="products-content-one"> 
          <div class="seporater products-seporater"></div>
            <h2 class="section-title products-title">Наше производство </h2>
        </div>
        <picture   >
      <source   type="image/webp" srcset="img/products-photo.webp"> 
      <source   type="image/jpeg" srcset="img/products-photo.jpg">
      <img class="products-image" src="img/products-photo.jpg" alt="woman">
        </picture>
            
    
    
            
            
            
            <div class="products-content-two">
              <p class="products-text">Предварительные выводы неутешительны: разбавленное изрядной долей эмпатии, рациональное мышление обеспечивает широкому кругу (специалистов) участие в формировании глубокомысленных рассуждений. Но граница обучения кадров создаёт необходимость включения в производственный план целого ряда внеочередных мероприятий с учётом комплекса кластеризации усилий.
            <p class=" products-text products-text-second">
            Реализация намеченных плановых заданий, а также свежий взгляд на привычные вещи - безусловно открывает новые горизонты для соответствующих условий активизации. Предварительные выводы неутешительны: экономическая повестка сегодняшнего дня требует анализа анализа существующих паттернов поведения.
            </p>
            </p>

            <ul class="products-list">
              <li class="products-list-item">
              <svg width="30" height="30"  class="products-list-icon">
                <use href="img/sprite.svg#auto"></use>
                </svg>
                Автомобильная химия
              </li>
              <li class="products-list-item">
              <svg width="30" height="30"  class="products-list-icon">
                <use href="img/sprite.svg#home"></use>
               </svg>
               Бытовая химия
              </li>
              <li class="products-list-item">
              <svg width="30" height="30"  class="products-list-icon">
                 <use href="img/sprite.svg#detergent"></use>
              </svg>
              Дезинфицирующие средства
              </li>
              <li class="products-list-item">
              <svg width="30" height="30"  class="products-list-icon">
                <use href="img/sprite.svg#spray"></use>
              </svg>
              Пищевые аэрозоли
              </li>
              <li class="products-list-item">
              <svg width="30" height="30"  class="products-list-icon">
              <use href="img/sprite.svg#cosmetic"></use>
              </svg>
              Косметическая продукция
              </li>
              <li class="products-list-item">
              <svg width="30" height="30"  class="products-list-icon">
              <use href="img/sprite.svg#paints"></use>
              </svg>
              Краски аэрозольные
              </li>
            </ul>

            </div>
            </div>
          

  </div>
</section>

     <?php 
     $founder_link_style = "founder-about";
     $founder_content_about = "founder-content-about";
     include_once("./template-parts/founder-block.php")?>


    <?php include_once('./template-parts/research-block.php');?>
 
  


<?php 
$client_section_about = "clients-section-about";
include_once("./template-parts/client-block.php")?>


  <?php include_once('footer.php');?>
  