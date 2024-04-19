// tooltip 

const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
// ******************************navbar-start***************************************************


console.clear();

const html = document.documentElement;
const toggle = document.getElementById("toggle");
const circle = document.getElementById("bg-circle");
const circleWidth = circle.clientWidth;

// Math calcul to get Height, Width, Diagonal and Circle Radius

const getVpdr = () => {
  const vph = Math.pow(html.offsetHeight, 2); // Height
  const vpw = Math.pow(html.offsetWidth, 2); // Width
  const vpd = Math.sqrt(vph + vpw); // Diagonal
  return (vpd * 2) / circleWidth; // Circle radius
};

const openNavbar = () => {
  const openTimeline = new TimelineMax();
  openTimeline.to(".navbar", 0, { display: "flex" });
  openTimeline.to("#bg-circle", 1, { scale: getVpdr(), ease: Expo.easeInOut });
  openTimeline.staggerFromTo(".navbar ul li", 0, { y: 25, opacity: 0 }, { y: 0, opacity: 1 }, 0.1, 1);
  openTimeline.staggerFromTo(".bordered", 0.5, { y: 100, opacity: 0 }, { y: 0, opacity: 1, delay: 0.1 }, 0.2, 1);
};

const closeNavbar = () => {
  const closeTimeline = new TimelineMax();
  closeTimeline.staggerFromTo(".navbar ul li", 0.2, { y: 0, opacity: 1, delay: 0.5 }, { y: 25, opacity: 0 }, -0.1);
  closeTimeline.staggerFromTo(".bordered", 0.5, { y: 0, opacity: 1, delay: 0.5 }, { y: 25, opacity: 0, delay: -1 }, -0.1);
  closeTimeline.to("#bg-circle", 0.5, { scale: 0, ease: Expo.easeInOut, delay: -0.5 });
  closeTimeline.to(".navbar", 0, { display: "none" });
};

let isOpen = false;

toggle.onclick = function () {
  if (isOpen) {
    this.classList.remove("active");
    closeNavbar();
  } else {
    this.classList.add("active");
    openNavbar();
  }
  isOpen = !isOpen;
};

// On windows resize, recalcule circle radius and update

window.onresize = () => {
  if (isOpen) {
    gsap.to("#bg-circle", 1, { scale: getVpdr(), ease: Expo.easeInOut });
  }
};


// ******************************navbar-end***************************************************



function homeSlider() {

  // swiper slider1 *************


  const progressCircle = document.querySelector(".autoplay-progress svg");
  const progressContent = document.querySelector(".autoplay-progress span");
  var swiper = new Swiper(".mySwiper1", {
    spaceBetween: 30,
    centeredSlides: true,
    loop: true,
    autoplay: {
      delay: 2500,
      disableOnInteraction: false
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev"
    },
    on: {
      autoplayTimeLeft(s, time, progress) {
        progressCircle.style.setProperty("--progress", 1 - progress);
        progressContent.textContent = `${Math.ceil(time / 1000)}s`;
      }
    }
  });
}

homeSlider()



function productSlider() {
  // swiper slider2 *************
  var swiper = new Swiper(".mySwiper2", {
    // slidesPerView: 1,
    spaceBetween: 30,
    grabCursor: true,
    loop: true,

    // autoplay: {
    //   delay: 1000,
    //   disableOnInteraction: false,
    // },

    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints: {
      // when window width is <= 499px
      499: {
        slidesPerView: 1,
        spaceBetweenSlides: 30
      },
      // when window width is <= 768px
      768: {
        slidesPerView: 2,
        spaceBetweenSlides: 40
      },
      // when window width is <= 1200px
      1024: {
        slidesPerView: 3,
        spaceBetweenSlides: 40
      },

      // when window width is <= 1200px
      1200: {
        slidesPerView: 4,
        spaceBetweenSlides: 40
      }
    }
  });

}

productSlider()

// ******* milestone slider **********

function mileSlider() {
  var swiper = new Swiper(".mySwiper3", {
    // slidesPerView: 3,
    spaceBetween: 30,
    centeredSlides: true,
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      dynamicBullets: true,
    },
    breakpoints: {
      // when window width is <= 499px
      499: {
        slidesPerView: 1,
        spaceBetweenSlides: 30
      },
      // when window width is <= 768px
      768: {
        slidesPerView: 2,
        spaceBetweenSlides: 40
      },
      // when window width is <= 1200px
      1024: {
        slidesPerView: 3,
        spaceBetweenSlides: 40
      },

      // when window width is <= 1200px
      1200: {
        slidesPerView: 3,
        spaceBetweenSlides: 40
      }
    }
  });
}
mileSlider()

// ******************google map ********************

// Initialize and add the map



// let map;

// async function initMap() {
//   // The location of Uluru
//   const position = { lat: -25.344, lng: 131.031 };
//   // Request needed libraries.
//   //@ts-ignore
//   const { Map } = await google.maps.importLibrary("maps");
//   const { AdvancedMarkerElement } = await google.maps.importLibrary("marker");

//   // The map, centered at Uluru
//   map = new Map(document.getElementById("map"), {
//     zoom: 4,
//     center: position,
//     mapId: "DEMO_MAP_ID",
//   });

//   // The marker, positioned at Uluru
//   const marker = new AdvancedMarkerElement({
//     map: map,
//     position: position,
//     title: "Uluru",
//   });
// }

// initMap();


const togglePassword = document.querySelector('#togglePassword');
const password = document.querySelector('#id_password');

togglePassword.addEventListener('click', function (e) {
  // toggle the type attribute
  const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
  password.setAttribute('type', type);
  // toggle the eye slash icon
  this.classList.toggle('fa-eye-slash');
});




// **************************************pasword show js***************************



function togglePasswordVisibility() {
  var passwordInput = document.getElementById("passwordInput");
  var icon = document.querySelector(".toggle-password");

  if (passwordInput.type === "password") {
    passwordInput.type = "text";
    icon.classList.remove("fa-eye");
    icon.classList.add("fa-eye-slash");
  } else {
    passwordInput.type = "password";
    icon.classList.remove("fa-eye-slash");
    icon.classList.add("fa-eye");
  }
}



function togglePasswordVisibility2() {
  var passwordInput = document.getElementById("passwordInput2");
  var icon = document.querySelector(".toggle-password2");

  if (passwordInput.type === "password") {
    passwordInput.type = "text";
    icon.classList.remove("fa-eye");
    icon.classList.add("fa-eye-slash");
  } else {
    passwordInput.type = "password";
    icon.classList.remove("fa-eye-slash");
    icon.classList.add("fa-eye");
  }
}

