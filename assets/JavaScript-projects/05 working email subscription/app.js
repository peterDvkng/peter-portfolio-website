const scriptURL = 'https://script.google.com/macros/s/AKfycbyF0GKca_5SNeQ1oAyHqp5Sbaq1fFneZXGeGTg75srOzU843oKKt09Q3x2fFKr_H_wM/exec'
const form = document.forms['submit-to-google-sheet']

const msg = document.getElementById('msg')

form.addEventListener('submit', e => {
  e.preventDefault()
  fetch(scriptURL, { method: 'POST', body: new FormData(form)})
    .then(response => {
        msg.innerHTML = "Thank you for Subscribing!"
        setTimeout(function () {
          msg.innerHTML = ""
        }, 5000)
        form.reset()
    } )
    .catch(error => console.error('Error!', error.message))
})