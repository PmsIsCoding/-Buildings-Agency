document.querySelector("header button[type='button']").addEventListener('click',function(){
    document.querySelector('.authentification').style.display='block'
    document.querySelector('.fond-sombre').style.display='block'
})
document.querySelector('.authentification img').addEventListener('click',function(){
    document.querySelector('.authentification').style.display='none'
    document.querySelector('.fond-sombre').style.display='none'
})