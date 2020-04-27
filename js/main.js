document.querySelector('.icon-list-bullet').addEventListener('click', (e) => {
    e.target.style.display = 'none'
    document.querySelector('.menu > span').style.display = 'block'
    document.querySelector('nav ul').classList.add('ul-active')
})
document.querySelector('.menu > span').addEventListener('click', (e) => {
    e.target.style.display = 'none'
    document.querySelector('.icon-list-bullet').style.display = 'block'
    document.querySelector('nav ul').classList.remove('ul-active')
})

// валидация и отправка формы
let form = document.querySelector('.feedback')
let email = document.querySelector('#email')
let theme = document.querySelector('#theme')
let name = document.querySelector('#name')
let text = document.querySelector('#text')
let mwin = document.querySelector('.modelWin')
let closeG = document.querySelector('.good > span')
let closeEr = document.querySelector('.error > span')
let load = document.querySelector('.wite')
let error = document.querySelector('.error')
let good = document.querySelector('.good')
let button = document.querySelector('#send')

let regEXPmail = /^([a-z0-9_-]+\.)*[a-z0-9_-]+@[a-z0-9_-]+(\.[a-z0-9_-]+)*\.[a-z]{2,6}$/
let regEXPPhone = /^\+\d{ 2 } \(\d{ 3 } \) \d{ 3 } -\d{ 2 } -\d{ 2 } $/


class ValidForm {
    constructor(idForm, idSubmit, classNameActive) {
        this.elForm = document.querySelector(`${idForm}`),
            this.elSubmit = document.querySelector(`${idSubmit}`),
            this.fields = this.elForm.querySelectorAll('input, textarea'),
            this.classNameActive = classNameActive
    }
    regEXPEmail = /^([a-z0-9_-]+\.)*[a-z0-9_-]+@[a-z0-9_-]+(\.[a-z0-9_-]+)*\.[a-z]{2,6}$/
    regEXPPhone = /^\+\d{ 2 } \(\d{ 3 } \) \d{ 3 } -\d{ 2 } -\d{ 2 } $/
    init() {
        return this._addHendler();
    }
    _valid() {
        let result = true;
        this.fields.forEach(e => {
            console.log(e)
            if (e.dataset.fillin == 'yes' && (e.type == 'text' || e.type == 'textarea')) {
                if (e.value == '') {
                    result = false
                    e.classList.add(this.classNameActive)
                    console.log('class')
                } else {
                    e.classList.remove(this.classNameActive)
                }
            } else if (e.dataset.fillin == 'yes' && e.type == 'phone') {
                if (-1 == e.value.search(this.regEXPPhone)) {
                    e.classList.add(this.classNameActive)
                    result = false
                } else {
                    e.classList.remove(this.classNameActive)
                }
            } else if (e.dataset.fillin == 'yes' && e.type == 'email') {
                if (-1 == e.value.search(this.regEXPEmail)) {
                    e.classList.add(this.classNameActive)
                    result = false
                } else {
                    e.classList.remove(this.classNameActive)
                }
            }
        })
        return result
    }
    _addHendler() {
        let context = this
        console.log(context)
        this.elSubmit.addEventListener('click', (e) => {
           
            e.preventDefault();
            if (context._valid() == 'false') {
                console.log('good')
            } else {
                console.log('bad')
            }

        })

    }

}
/* window.onload = () => {
    let VForm = new ValidForm('.feedback', '#send', 'error')
    VForm.init()
} */



/* button.addEventListener('click', (e) => {
    e.preventDefault();

    if (-1 != email.value.search(regEXPmail) && theme.value != '' && name.value != '' && text.value != '') {
        mwin.classList.add('modelWin-active')

        fetch('./php/server.php', {
            method: 'post',
            body: new FormData(form)
        })
            .then(data => data.json())
            .then((data) => {
                if (data.reply == 'good') {
                    load.classList.add('wite-off')
                    good.classList.add('good-active')
                    closeG.addEventListener('click', (e) => {
                        good.classList.remove('good-active')
                        load.classList.remove('wite-off')
                        mwin.classList.remove('modelWin-active')
                        email.value = ''
                        theme.value = ''
                        text.value = ''
                        name.value = ''
                    })

                } else {
                    load.classList.add('wite-off')
                    error.classList.add('error-active')
                    closeG.addEventListener('click', (e) => {
                        error.classList.remove('error-active')
                        load.classList.remove('wite-off')
                        mwin.classList.remove('modelWin-active')
                    })
                }
            }).catch(() => {
                load.classList.add('wite-off')
                error.classList.add('error-active')
                closeEr.addEventListener('click', (e) => {
                    error.classList.remove('error-active')
                    load.classList.remove('wite-off')
                    mwin.classList.remove('modelWin-active')
                })
            })


    } else {
        if (-1 == email.value.search(regEXP)) {
            {
                email.classList.add('error');
                email.addEventListener('input', (e) => {
                    if (-1 != email.value.search(regEXP)) {
                        email.classList.remove('error');
                    } else {
                        email.classList.add('error');
                    }

                })
            }
        }

        if (theme.value == '') {
            theme.classList.add('error');
            theme.addEventListener('input', (e) => {
                if (theme.value != '') {
                    theme.classList.remove('error');
                } else {
                    theme.classList.add('error');
                }

            })
        }

        if (name.value == '') {
            name.classList.add('error');
            name.addEventListener('input', (e) => {
                if (name.value != '') {
                    name.classList.remove('error');
                } else {
                    name.classList.add('error');
                }

            })
        }

        if (text.value == '') {
            text.classList.add('error');
            text.addEventListener('input', (e) => {
                if (text.value != '') {
                    text.classList.remove('error');
                } else {
                    text.classList.add('error');
                }

            })
        }

    }

}) */

    // script  for recaptcha https://www.google.com/recaptcha/api.js

  //  (function () { var w = window, C = '___grecaptcha_cfg', cfg = w[C] = w[C] || {}, N = 'grecaptcha'; var gr = w[N] = w[N] || {}; gr.ready = gr.ready || function (f) { (cfg['fns'] = cfg['fns'] || []).push(f); }; (cfg['render'] = cfg['render'] || []).push('onload'); w['__google_recaptcha_client'] = true; var d = document, po = d.createElement('script'); po.type = 'text/javascript'; po.async = true; po.src = 'https://www.gstatic.com/recaptcha/releases/wk6lx42JIeYmEAQSHndnyT8Q/recaptcha__ru.js'; var e = d.querySelector('script[nonce]'), n = e && (e['nonce'] || e.getAttribute('nonce')); if (n) { po.setAttribute('nonce', n); } var s = d.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s); })();