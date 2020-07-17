const subscribeBtn = $('#subscribe_btn')
const loadingBtn = $('#loading_btn')
const emailField = $('#email')
const agreement = $('#agreement')
// Email Regex to ascertain the email provided is valid
const emailRegex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/

$(function () {

  // Watch Demo Trigger
  $("#watch-demo").on('click', (e) => {
    e.preventDefault();
    $(".video").fadeIn();
    $(".overlay").fadeIn();
  })

  // Close Modal
  $(".overlay").on('click', function() {
    $(this).fadeOut()
    $(".video").fadeOut()
  })

  // Onclick action on the subscribe button
  subscribeBtn.on('click', function (e) {
    e.preventDefault()

    if (!agreement.is(':checked')) {
      swal({
        text: 'Please tick the checkbox below',
        icon: 'warning',
        button: 'Close',
      })
      return
    }

    if (!emailField.val().trim() || !emailRegex.test(emailField.val().trim())) {
      emailField.addClass('error')
      swal({
        text: 'Email Address is required',
        icon: 'warning',
        button: 'Close',
      })
    } else {
      emailField.removeClass('error')

      //  Hide Subscribe Button and Show Loading button
      subscribeBtn.addClass('d-none')
      loadingBtn.removeClass('d-none')
      // Perform Ajax Request to submit email to the database
      $.ajax({
        url: './ajax/subscribe.php',
        method: 'POST',
        data: { action: 'subscribe', payload: emailField.val().trim() },
        cache: false,
        success: res => {
          if (res.trim() === 'SAVED') {
            sendMail(emailField.val().trim())
              .done(function ({ status }) {
                if (status.trim() === 'success') {
                  swal({
                    text: 'Thank you! An email has been sent to your mail box.',
                    icon: 'success',
                    button: 'Close',
                  }).then(() => {
                    location.reload()
                  })
                } else {
                  swal({
                    text: 'Network: there is an error, please try again...',
                    icon: 'error',
                    button: 'Close',
                  }).then(() => {
                    location.reload()
                  })
                }
              })
              .fail(err => {
                swal({
                  text: 'Network: there is an error, please try again...',
                  icon: 'error',
                  button: 'Close',
                })
                subscribeBtn.removeClass('d-none')
                loadingBtn.addClass('d-none')
              })
          } else if (res.trim() === 'EXIST') {
            swal({
              text: 'Thank you! An email has been sent to your mail box.',
              icon: 'success',
              button: 'Close',
            }).then(() => {
              location.reload()
            })
            subscribeBtn.removeClass('d-none')
            loadingBtn.addClass('d-none')
          } else {
            swal({
              text: 'Please, provide a valid email address',
              icon: 'warning',
              button: 'Close',
            })
            subscribeBtn.removeClass('d-none')
            loadingBtn.addClass('d-none')
          }
        },
        error: () => {
          swal({
            text: 'Network: there is an error, please try again...',
            icon: 'error',
            button: 'Close',
          })
          subscribeBtn.removeClass('d-none')
          loadingBtn.addClass('d-none')
        },
      })
    }
  })
})

// Function to send welcome mail to the user
function sendMail(email) {
  return $.ajax({
    url: 'https://email.microapi.dev/v1/sendmail/',
    method: 'POST',
    data: {
      recipient: `${email}`,
      sender: 'phemmylintry@gmail.com',
      subject: 'Welcome to MentAi',
      body: 'Thank You for subscribing to MentAi Newsletter',
      cc: '',
      bcc: '',
    },
    dataType: 'json',
  })
}

// *** Slick Slider Configuration ***
$('.pages-slider').slick({
  dots: true,
  arrows: false,
  customPaging: function (slider, i) {
    return '<span class="dot"></span>'
  },
})

$(function () {
  magnifyImages('page-sliders', true)
  magnifyImages('question')
  magnifyImages('signup')
  magnifyImages('badge')
  magnifyImages('community')
  magnifyImages('dashboard')
})

// Function that Adds images to magnify popup
function magnifyImages(id, gallery = false) {
  $(`#${id}`).magnificPopup({
    delegate: 'a',
    type: 'image',
    gallery: {
      enabled: gallery,
    },
  })
}

// Theme Switcher Code
$(function () {
  $('#theme-switch').on('click', function (e) {
    e.preventDefault()
    if ($('body').hasClass('dark')) {
      $('body').removeClass('dark')
      $(this).addClass('btn-dark').removeClass('btn-white text-white')
    } else {
      $('body').addClass('dark')
      $(this).removeClass('btn-dark').addClass('btn-info text-white')
    }
  })
})

// Launch Countdown
$(function () {
  // Get future launch time
  const countDownDate = new Date('Jan 5, 2025 00:00:00').getTime()

  //   Execute this code after 1 second continously
  const timeReached = setInterval(function () {
    const now = new Date().getTime()

    // The difference between the future and now is the distance
    const distance = countDownDate - now

    // Derive Days, Hours, Minutes and Seconds from the distance variable
    const days = Math.floor(distance / (1000 * 60 * 60 * 24))
    const hours = Math.floor(
      (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60),
    )
    const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60))
    const seconds = Math.floor((distance % (1000 * 60)) / 1000)

    // Attach values to the DOM elements
    $('.days').html(days)
    $('.hours').html(hours)
    $('.minutes').html(minutes)
    $('.seconds').html(seconds)

    // When countdown is finished
    if (distance < 0) {
      clearInterval(timeReached)
      $('.days').html(0)
      $('.hours').html(0)
      $('.minutes').html(0)
      $('.seconds').html(0)
    }
  }, 1000)
})

// Animate On Scroll
$(function () {
  AOS.init()
})

// Preloader Settings
$(window).on('load', function () {
  $('.preloader').slideUp(1000)
})
