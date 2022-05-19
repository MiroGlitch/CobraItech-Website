//Form Validation for Careers Page
$('#career-btn').on('click', function () {
  let name = $('#name').val();
  let email = $('#email').val();
  let job = document.getElementById("job");
  let resume = $('#fileCV').val();
  let cover = $('#cover').val();

  if (name == '' || email == '' || resume == '' || job.value === '' || cover == '') {
    swal('Error!', 'Please fill up the fields!', 'error');
    return false;
  } else {
    $("#pageloader").fadeIn();
  }
});

//Form Validation for Support Page
$('#support-btn').on('click', function () {
  let name = $('#name').val();
  let email = $('#email').val();
  let number = $('#number').val();
  let category = document.getElementById("category");
  let issue = $('#issue').val();

  if (name == '' || email == '' || issue == '' || number == '' || category.value === '') {
    swal('Error!', 'Please fill up the fields!', 'error');
    return false;
  } else if (isNaN(number)) {
    swal('Error!', 'Please enter a valid contact number!', 'error');
    return false;
  } else {
    $("#pageloader").fadeIn();
  }
});

//Form Validation for Contact Page
$('#contact-btn').on('click', function () {
  let name = $('#name').val();
  let email = $('#email').val();
  let subject = $('#subject').val();
  let message = $('#message').val();

  if (name == '' || email == '' || subject == '' || message == '') {
    swal('Error!', 'Please fill up the fields!', 'error');
    return false;
  } else {
    $("#pageloader").fadeIn();
  }
});

function fileValidation() {
  var fileInput = document.getElementById('fileCV');
    
  var filePath = fileInput.value;

  // Allowing file type
  var allowedExtensions = /(\.doc|\.docx|\.pdf)$/i;
    
  if (!allowedExtensions.exec(filePath)) {
    swal('Error!', 'Only upload .doc/.docx/.pdf files!', 'error');
    fileInput.value = '';
    return false;
  }
}


(function () {
  "use strict";

  /**
   * Easy selector helper function
   */
  const select = (el, all = false) => {
    el = el.trim()
    if (all) {
      return [...document.querySelectorAll(el)]
    } else {
      return document.querySelector(el)
    }
  }

  /**
   * Easy event listener function
   */
  const on = (type, el, listener, all = false) => {
    let selectEl = select(el, all)
    if (selectEl) {
      if (all) {
        selectEl.forEach(e => e.addEventListener(type, listener))
      } else {
        selectEl.addEventListener(type, listener)
      }
    }
  }

  /**
   * Easy on scroll event listener 
   */
  const onscroll = (el, listener) => {
    el.addEventListener('scroll', listener)
  }

  /**
   * Toggle .header-scrolled class to #header when page is scrolled
   */
  let selectHeader = select('#header')
  if (selectHeader) {
    const headerScrolled = () => {
      if (window.scrollY > 100) {
        selectHeader.classList.add('header-scrolled')
      } else {
        selectHeader.classList.remove('header-scrolled')
      }
    }
    window.addEventListener('load', headerScrolled)
    onscroll(document, headerScrolled)
  }

  /**
   * Back to top button
   */
  let backtotop = select('.back-to-top')
  if (backtotop) {
    const toggleBacktotop = () => {
      if (window.scrollY > 100) {
        backtotop.classList.add('active')
      } else {
        backtotop.classList.remove('active')
      }
    }
    window.addEventListener('load', toggleBacktotop)
    onscroll(document, toggleBacktotop)
  }

  /**
 * Clients Slider
 */
  new Swiper('.clients-slider', {
    speed: 400,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    slidesPerView: 'auto',
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    },
    breakpoints: {
      320: {
        slidesPerView: 3,
        spaceBetween: 40
      },
      480: {
        slidesPerView: 3,
        spaceBetween: 60
      },
      640: {
        slidesPerView: 4,
        spaceBetween: 80
      },
      992: {
        slidesPerView: 6,
        spaceBetween: 120
      }
    }
  });

  /**
   * Mobile nav toggle
   */
  on('click', '.mobile-nav-toggle', function (e) {
    select('#navbar').classList.toggle('navbar-mobile')
    this.classList.toggle('bi-list')
    this.classList.toggle('bi-x')
  })

  /**
   * Mobile nav dropdowns activate
   */
  on('click', '.navbar .dropdown > a', function (e) {
    if (select('#navbar').classList.contains('navbar-mobile')) {
      e.preventDefault()
      this.nextElementSibling.classList.toggle('dropdown-active')
    }
  }, true)


  /**
   * Porfolio isotope and filter
   */
  window.addEventListener('load', () => {
    let partnerContainer = select('.partner-container');
    if (partnerContainer) {
      let partnerIsotope = new Isotope(partnerContainer, {
        itemSelector: '.partner-item'
      });

      let partnerFilters = select('#partner-flters li', true);

      on('click', '#partner-flters li', function (e) {
        e.preventDefault();
        partnerFilters.forEach(function (el) {
          el.classList.remove('filter-active');
        });
        this.classList.add('filter-active');

        partnerIsotope.arrange({
          filter: this.getAttribute('data-filter')
        });
      }, true);
    }

  });

  /**
   * Initiate partner lightbox 
   */
  const partnerLightbox = GLightbox({
    selector: '.partner-lightbox'
  });

  /**
   * partner details slider
   */
  new Swiper('.partner-details-slider', {
    speed: 400,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    }
  });

  /**
   * Initiate partner details lightbox 
   */
  const partnerDetailsLightbox = GLightbox({
    selector: '.partner-details-lightbox',
    width: '90%',
    height: '90vh'
  });


})()
