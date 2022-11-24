
<section class="cta <?= $footer_avtohim ?>">
    <div class="bg-grey section-cta">
    <picture>
  <source type="image/webp" srcset="img/cta.webp">
  <source  type="image/png" srcset="img/сta.png">
  <img  class="cta-image" src="img/cta.png" alt="call to action">
</picture>
      <!-- <img src="img/cta.png" alt="call to action" class="cta-image"> -->
      <div class="cta-form-wrapper container">
      <form action="handler.php" method="POST" class="cta-form">
          <h2 class="section-title сta-form-title">Хотите сотрудничать?</h2>
          <p class="cta-form-text">
            Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время ответит на все интересующие вопросы и поможем даже в самых сложных случаях!
          </p>
          <div class="input-group-wrapper input-cta-wrapper">
            <div class="input-group cta-input-group ">
              <input id="user-name" 
              type="text" 
              class="input" 
              name="username"
              placeholder=" "
              required
              maxlenght="100">
              <label class="input-group-label" for="user-name" >Имя</label>    
            </div>

         
          <!-- input-group  -->
          <div class="input-group cta-input-group ">
          <input id="user-phone" 
          type="tel" 
          class="input" 
          name="userphone"
          placeholder="  "
          required
          maxlenght="30"
          > 
            <label class="input-group-label" for="user-phone">Номер телефона</label>
          </div>
          <!-- input-group  -->
          </div>
          <!-- /.input-group-wrapper -->
        <div class="cta-form-footer">
          <button type="submit" class="button cta-form-button"> Отправить заявку</button>
          <div class="notify cta-notify">
            <svg class="notify-icon"  width="14" height="14">
              <use href="img/sprite.svg#shield"></use>
            </svg>
            <p class="notify-text  ">
              Обращаясь к нам вы получаете не только профессиональную работу, но и абсолютную конфиденциальность информации!
            </p>
          </div>
        </div>
        <!-- cta-form-footer -->
        </form>
      </div>
      <!-- cta-form-wrapper -->
    </div>
  </section>

  <?php 
  include_once('./template-parts/footer-part-block.php');?>

    
    <div id="feedback-modal" class="modal " >
    <div class="modal-dialog">
      <h2 class="modal-title">Есть вопросы?</h2>
      <a href="" class="modal-close" data-toggle="modal"  data-target="#feedback-modal">
        <svg class="phone-icon"  width="24" height="24">
          <use href="img/sprite.svg#close"></use>
        </svg>
      </a>
      <p class="modal-text">
        Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время ответит на все интересующие вопросы и поможем даже в самых сложных случаях!
      </p>
      <form action="handler.php" method="POST" class="modal-form">
        <div class="input-group-wrapper input-group-vertical">
          <div class="input-group modal-input-group">
            <input id="modal-user-name" 
            type="text" 
            class="input modal-input" 
            name="username"
            placeholder=" "
            required
            maxlenght="100">
            
            <label class="input-group-label modal-input-label " for="user-name" >Имя</label>    
          </div>

       
        <!-- input-group  -->
        <div class="input-group modal-input-group">
        <input id="modal-user-phone" 
        type="tel" 
        class="input modal-input" 
        name="userphone"
        placeholder=" "
        required
        maxlenght="30"> 
          <label class="input-group-label modal-input-label " for="user-phone">Номер телефона</label>
        </div>
        <!-- input-group  -->
        </div>
        <!-- /.input-group-wrapper -->
        <div class="modal-form-footer">
          <button type="submit" class="button modal-form-button " > Отправить заявку</button>
          <div class="notify modal-notify">
            <svg class="notify-icon"  width="14" height="14">
              <use href="img/sprite.svg#shield"></use>
            </svg>
            <p class="notify-text">
              Обращаясь к нам вы получаете не только профессиональную работу, но и абсолютную конфиденциальность информации!
            </p>
          </div>
        </div>
        <!-- cta-form-footer -->
      </form>
    </div>
  </div>



  <div id="alert-modal" class="modal " >
      <div class="modal-dialog">
      <picture   >
      <source   type="image/webp" srcset="img/thanks.webp">
      <source   type="image/jpeg" srcset="img/thanks.png">
      <img class= "modal-image" src="img/thanks.png" alt="thanks">
        </picture>
        <img class= "modal-image" src="img/thanks.png" alt="thanks">
        <h2 class="modal-title">Спасибо за заявку</h2>
        <a href="#" class="modal-close" data-toggle="modal" data-target="#alert-modal">
          <svg class="phone-icon"  width="24" height="24">
            <use href="img/sprite.svg#close"></use>
          </svg>
        </a>
        <p class="modal-text">
        Наш менеджер свяжется с Вами в ближайшее время ответит на все интересующие вопросы и поможем даже в самых сложных случаях!
        </p>
        <button type="reset" class="button modal-form-button " data-toggle="modal" data-target="#alert-modal"> Вернуться на главную</button>

        
      </div>
  </div >
  
  <script src="https://unpkg.com/imask"></script>
  <script src="js/swiper-bundle.min.js"></script>
  <script src="js/just-validate.production.min.js"></script>
  <script src="js/main.js"></script>
</body>
</html>

