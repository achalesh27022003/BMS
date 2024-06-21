const scriptURL = 'https://script.google.com/macros/s/AKfycbyII7exwLpPCB9YLYt-hCO51H_84wnMtWkMKnM-VDox_mYWtvbwJ2tVkvtWsvpoq6ezLA/exec'

const form = document.forms['shareyour']

form.addEventListener('submit', e => {
    e.preventDefault()
    fetch(scriptURL, {method: 'POST', body: new FormData(form)})
    .then(response => alert("Thanks for sharing your all-time-favs. We'll get back to you with something interesting."))
    .then(() => {window.location.reload();})
    .catch(error => console.error('Error!', error.message))
})