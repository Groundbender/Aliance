const navbar = document.querySelector(".navbar");
const logoLight = document.querySelector(".logo-light");
const logo = document.querySelector(".logo");
const mMenuToggle = document.querySelector(".mobile-menu-toggle");
const menu = document.querySelector(".mobile-menu");
const isFront = document.body.classList.contains("front-page");

const lightModeOn = (event) => {
  navbar.classList.add("navbar-light");
};
const lightModeOff = (event) => {
  navbar.classList.remove("navbar-light");
};

const changeNavHeight = (height) => {
  navbar.style.height = height;
};
const openMenu = (event) => {
  // функция открывания меню
  menu.classList.add("is-open"); // вешает класс is-open
  mMenuToggle.classList.add("close-menu"); // при открытии меню, вешает класс close-menu, в котором вместо полосок, появляется крестик
  document.body.style.overflow = "hidden"; //запрещаем прокрутку сайта под меню
  lightModeOn();
};
const closeMenu = (event) => {
  // функция закрывания меню
  menu.classList.remove("is-open"); // вешает класс is-open
  mMenuToggle.classList.remove("close-menu"); 
  document.body.style.overflow = ""; //возвращает прокрутку сайта под меню
  if (isFront) {
    this.scrollY > 1 ? lightModeOn() : lightModeOff() ;
    }
};

window.addEventListener("scroll", () => {
  this.scrollY > 1 ? changeNavHeight("4.5rem") : changeNavHeight("5.875rem");
  if (isFront) {
    this.scrollY > 1 ? lightModeOn() : lightModeOff() ;
    }
   });
   
mMenuToggle.addEventListener("click", (event) => {
  event.preventDefault();
  menu.classList.contains("is-open") ? closeMenu() : openMenu();
});

const swiperSteps = new Swiper(".steps-slider", {
  speed: 400,
  slidesPerView: 1,

  navigation: {
    nextEl: ".steps-button-next",
    prevEl: ".steps-button-prev",
  },
  breakpoints: {
    // when window width is >= 320px
    320: {
      slidesPerView:  1.000001,
      spaceBetween: 55,
    },
    576: {
      slidesPerView: 2,
    },
    // when window width is >= 480px
    768: {
      slidesPerView: 2,
    },
    // when window width is >= 640px
    1024: {
      slidesPerView: 3,
      // when window width is >= 1200px
    },
  },
});

const swiper = new Swiper(".features-slider", {
  speed: 400,
  slidesPerView: 1,
  navigation: {
    nextEl: ".slider-button-next",
    prevEl: ".slider-button-prev",
  },
  breakpoints: {
    // when window width is >= 320px
    320: {
      slidesPerView: 1.37,
    },
    576: {
      slidesPerView: 2,
    },
    // when window width is >= 480px
    768: {
      slidesPerView: 3,
    },
    // when window width is >= 640px
    1024: {
      slidesPerView: 4,
      // when window width is >= 1200px
    },
    1200: {
      slidesPerView: 5,
    },
  },
});

const swiperBlog = new Swiper(".blog-slider", {
  speed: 400,
  slidesPerView: 2,
  spaceBetween: 30,
  navigation: {
    nextEl: ".blog-button-next",
    prevEl: ".blog-button-prev",
  },
  breakpoints: {
    // when window width is >= 320px
    320: {
      slidesPerView: 1,
    },
    // when window width is >= 480px
    576: {
      slidesPerView: 2,
    },
    
  },
  
  
});
const swiperBlogAbout = new Swiper(".blog-slider-about", {
  speed: 400,
  slidesPerView: 2.5,
  initialSlide: 1,
  slidesOffsetBefore: 210,
  spaceBetween: 30,
  navigation: {
    nextEl: ".blog-button-next",
    prevEl: ".blog-button-prev",
  },
 
  
  
});

let currentModal; // текущее модальное окно
let modalDialog;  // белое диалоговое окно 
let alertModal = document.querySelector("#alert-modal"); // окна с предупреждением
let feedbackModal = document.querySelector("#feedback-modal"); // окна с предупреждением

const modalButtons = document.querySelectorAll("[data-toggle=modal]"); // переключатели модальных окон 
modalButtons.forEach((button) => {
  /* клик по переключателю */
  button.addEventListener ("click", (event) => {  
    event.preventDefault();
    /* определяем текущее открытое окно */      
    currentModal = document.querySelector(button.dataset.target);
    /* открываем текущее окно */
    currentModal.classList.toggle("is-open");
    currentModal.classList.contains("is-open") ? document.body.style.overflow = "hidden" : document.body.style.overflow = "";

    
    /* назначаем текущее диалоговое окно */
    modalDialog = currentModal.querySelector(".modal-dialog");
    /* отслеживаем клик по окну и пустым областям */
    currentModal.addEventListener("click", (event) => {
      /* если клик в пустую область (не диалоговое окно) */
      if (!event.composedPath().includes(modalDialog)) {
        /* закрываем окно */
        currentModal.classList.remove("is-open");
        
      }

    });
  });  
});
/* ловим событие нажатие на кнопки */
document.addEventListener("keyup", (event) => {
  /* проверяем что это Escape и текущее окно открыто */
  if (event.key == "Escape" && currentModal.classList.contains("is-open")) {
    /* закрываем текущее окно */
    currentModal.classList.toggle("is-open");
}
currentModal.classList.contains("is-open") ? document.body.style.overflow = "hidden" : document.body.style.overflow = "";



});




const forms = document.querySelectorAll("form"); //собираем все формы
forms.forEach((form ) => {
  const validation = new JustValidate(form, {
    errorFieldCssClass: "is-invalid",
});
validation
  .addField( "[name = username]" , [
    {
      rule: "required",
      errorMessage: "Укажите имя",
    },
    {
      rule: 'maxLength',
      value: 50,
      errorMessage: "Максимально 50 символов",
    },
  ])
  .addField("[name = userphone]", [
    {
      rule: "minLength",
      value: 16,
      errorMessage: "Укажите телефон",

    },
    
    {
      rule: 'required',
      errorMessage: "Укажите телефон",
    },
  ])
  .onSuccess((event) => {
    const thisForm = event.target; // наша форма
    const formData = new FormData(thisForm); // данные из нашей формы
    const ajaxSend = (formData) => {
      fetch(thisForm.getAttribute("action"), {
       method: thisForm.getAttribute("method"),
      body: formData, 

      }).then((response) => {
      if (response.ok  ) {
        thisForm.reset();
        if (currentModal = feedbackModal) {
        currentModal.classList.remove("is-open");
        currentModal = alertModal;    
        alertModal.classList.add("is-open");
      } else {
        thisForm.reset();
        currentModal = alertModal;    
        alertModal.classList.add("is-open");
      }
       
        modalDialog = currentModal.querySelector(".modal-dialog");
        /* отслеживаем клик по окну и пустым областям */
        currentModal.addEventListener("click", (event) => {
          /* если клик в пустую область (не диалоговое окно) */
          if (!event.composedPath().includes(modalDialog)) {
            /* закрываем окно */
            currentModal.classList.remove("is-open");
          }
      
          
        });
        
      } else {
        alert( " Ошибка. Текст ошибки: " .response.statusText);
      }
      currentModal.classList.contains("is-open") ? document.body.style.overflow = "hidden" : document.body.style.overflow = "";

      });
    };
    ajaxSend(formData);
  });
});

var element = document.getElementById('user-phone');
var maskOptions = {
    mask: '+7(000)000-00-00',
    lazy: true
} 
var mask = new IMask(element, maskOptions);

var element = document.getElementById('modal-user-phone');
var maskOptions = {
    mask: '+7(000)000-00-00',
    lazy: true
} 
var mask = new IMask(element, maskOptions);





