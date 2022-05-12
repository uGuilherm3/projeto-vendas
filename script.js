const btn1 = document.querySelector('#btn1')
var cabe = document.querySelector('header')

    function ativar(){
        if (btn1.addEventListener('click')){
            cabe.classList.add('selected')
         } else {
            cabe.classList.remove('selected')
    }
}    
var btn2 = document.querySelector('#btn2')

btn2.addEventListener('click', () => {
    window.scroll({top: window.innerHeight*1, behavior: "smooth"})
})