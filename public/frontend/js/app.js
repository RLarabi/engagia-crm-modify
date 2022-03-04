const demo = document.querySelector('#demo-form'),
message = document.querySelector('.message');

demo.addEventListener('submit', function (e) {

    e.preventDefault();
    
    let formData = new FormData(demo),
        sendBtn = this.querySelector('#demo-send');

    sendBtn.innerHTML = 'En cours d\'envoi...';

    fetch(this.getAttribute('action'), {

        method: 'POST',
        
        headers: {

            'X-CSRF-TOKEN': formData.get('_token'),

        },

        body: formData
        
    })
    .then((resp) => {

        return resp.json();

    })
    .then((data) => {

        if(data.errors !== undefined) {

            message.innerHTML = '';

            data.errors.forEach(error => {

                message.innerHTML += `<li class="text-danger">${error}</li>`;

            });

        } else {

            message.innerHTML = `<li class="text-success">${data.success}</li>`;

            setTimeout(() => {

                message.innerHTML = '';

                for(const inp of document.querySelectorAll('.form-control')) {

                    inp.value = '';

                }


            }, 3000);

        }

        sendBtn.innerHTML = 'Envoyer';

    });

});