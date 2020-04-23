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