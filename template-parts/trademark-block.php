<section class="section-trademark <?= $trademark_inside ?>" >
    <div class="container">
    
    <?php 
    // if (!empty($block_title)) {
    //   echo ' <div class="seporater trademark-seporater"></div>';
    //   echo ' <h2 class="section-title title-trademark">'. $block_title .'</h2>';
    // }

    ?>
     <div class="seporater trademark-seporater  <?= $trademark_title ?>"></div>
    <h2 class="section-title title-trademark <?= $trademark_title ?>">Собственные <span class="span-trademark">торговые</span> марки</h2>
    <div class="trademark-cards"  >
      <a href="./avtohim.php" class="trademark-card">
        <svg   class="trademark-card-logo">
          <use href="img/sprite.svg#AGTECH"></use>
        </svg>
        <h3 class="trademark-card-title">Автохимия AG-Tech</h3>
        <p class="trademark-card-text">
          Для современного мира разбавленное <br> изрядной долей эмпатии, рациональное мышление создаёт предпосылки для поставленных обществом задач.
        </p>
    </a>
      <a href="#" class="trademark-card">
        <svg   class="trademark-card-logo">
          <use href="img/sprite.svg#AP"></use>
        </svg>
        <h3 class="trademark-card-title">Автохимия AP</h3>
        <p class="trademark-card-text">
          Для современного мира разбавленное <br> изрядной долей эмпатии, рациональное мышление создаёт предпосылки для поставленных обществом задач.
        </p>
      </a>
    </div>
    <!-- /.trademark-cards -->
    </div>
  </section>
  <!-- /.section trademark -->