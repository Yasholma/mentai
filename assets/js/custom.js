const subscribeBtn = $('#subscribe_btn')
const loadingBtn = $('#loading_btn')
const emailField = $('#email')
// Email Regex to ascertain the email provided is valid
const emailRegex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/

$(function () {
  // Onclick action on the subscribe button
  subscribeBtn.on('click', function (e) {
    e.preventDefault()

    if (!emailField.val().trim() || !emailRegex.test(emailField.val().trim())) {
      emailField.addClass('border-danger')
    } else {
      emailField.removeClass('border-danger')

      //   Hide Subscribe Button and Show Loading button
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
                  alert('Mail sent successfully')
                  location.reload()
                } else {
                  alert('Error sending mail...')
                  location.reload()
                }
              })
              .fail(err => {
                console.log(err)
                subscribeBtn.removeClass('d-none')
                loadingBtn.addClass('d-none')
              })
          } else if (res.trim() === 'EXIST') {
            alert('Email already exist')
            subscribeBtn.removeClass('d-none')
            loadingBtn.addClass('d-none')
          } else {
            alert('Invalid email address')
            subscribeBtn.removeClass('d-none')
            loadingBtn.addClass('d-none')
          }
        },
        error: err => {
          console.log('Error saving email to the database: ' + err)
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
