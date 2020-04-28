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
let mwin = document.querySelector('.modelWin')
let closeG = document.querySelector('.good > span')
let closeEr = document.querySelector('.error > span')
let load = document.querySelector('.wite')
let error = document.querySelector('.error')
let good = document.querySelector('.good')
let button = document.querySelector('#send')


class ValidForm {
    constructor(idForm, idSubmit, startValid, requireFillOnnClass, classNameActive) {
        this.elForm = document.querySelector(`${idForm}`),
        this.elSubmit = document.querySelector(`${idSubmit}`),
        this.fields = this.elForm.querySelectorAll('input, textarea'),
        this.startValid = this.elForm.querySelector(`${startValid}`),
        this.requireFillOnnClass = requireFillOnnClass,    
        this.classNameActive = classNameActive
        
    }
    regEXPEmail = /^([a-z0-9_-]+\.)*[a-z0-9_-]+@[a-z0-9_-]+(\.[a-z0-9_-]+)*\.[a-z]{2,6}$/
    regEXPPhone = /^(\s*)?(\+)?([- _():=+]?\d[- _():=+]?){10,14}(\s*)?$/
    flag = []
    init() {
        return this._addHendler();
    }
    _focusVal() {
        this.fields.forEach(e => {
            if ((e.type == 'text' || e.type == 'textarea' || e.type == 'email' || e.type == 'tel') && e.dataset.fillin == 'yes') {
                this.flag.push({ flag: false, el: e })
            }
        })
        this.fields.forEach((e, i) => {
            if (e.dataset.fillin == 'yes' && (e.type == 'text' || e.type == 'textarea')) {
                e.addEventListener('input', (evt) => {
                    if (evt.target.value != '') {
                        this.flag[i].flag = true
                        evt.target.classList.remove(this.classNameActive)
                    } else {
                        evt.target.classList.add(this.classNameActive)
                        this.flag[i].flag = false
                    }
                })
            } else if (e.dataset.fillin == 'yes' && e.type == 'tel') {
                e.addEventListener('input', (evt) => {
                    if (-1 != evt.target.value.search(this.regEXPPhone)) {
                        this.flag[i].flag = true
                        evt.target.classList.remove(this.classNameActive)
                    } else {
                        evt.target.classList.add(this.classNameActive)
                        this.flag[i].flag = false
                    }
                })
            } else if (e.dataset.fillin == 'yes' && e.type == 'email') {
                e.addEventListener('input', (evt) => {
                    if (-1 != evt.target.value.search(this.regEXPEmail)) {
                        evt.target.classList.remove(this.classNameActive)
                        this.flag[i].flag = true
                    } else {
                        evt.target.classList.add(this.classNameActive)
                        this.flag[i].flag = false
                    }
                })
            }
        })
    }
    _addHendler() {
        this._addOffFocusHov()
        this._focusVal();
        this.startValid.addEventListener('click', (e) => {
            e.preventDefault();
            let res = () => {
                let f = true
                this.flag.forEach(e => {
                    if (!e.flag) { f = false }
                })
                return f
            }
            if (!res()) {
                this.flag.forEach(e => {
                    if (e.flag == false) {
                        e.el.classList.add(this.classNameActive)
                    }
                })
            } else {
                document.querySelector('#sendData').click();

            }
        })
        this.elSubmit.addEventListener('click', (e) => {
            e.preventDefault()
            this._requesrToServer()

        })
    }
    _clearForm() {
        this.fields.forEach(e => {
            e.value = ''
        })
        this.flag.forEach((e) => {
            e.flag = false
        })
    }
    _addOffFocusHov() { 
        this.fields.forEach(e => {
            if ((e.type == 'text' || e.type == 'textarea' || e.type == 'email' || e.type == 'tel') && e.dataset.fillin == 'yes') {
                e.addEventListener('blur', (evt) => { 
                    if (evt.target.value == "") {
                        let par = e.parentNode
                        par.querySelector('p').classList.add(this.requireFillOnnClass)
                    } else { 
                        let par = e.parentNode
                        par.querySelector('p').classList.remove(this.requireFillOnnClass)
                    }

                })
            }
        })

    }
    _requesrToServer() {
        mwin.classList.add('modelWin-active')

        fetch('./php/server.php', {
            method: 'post',
            body: new FormData(this.elForm)
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

                        this._clearForm()

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
    }
}

let VForm = new ValidForm('.feedback', '#send', '#valid','pON', 'error')
VForm.init()




