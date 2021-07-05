
const btn = document.querySelectorAll(".btn")

const modal = document.querySelector('#myModal')

const span = document.getElementsByClassName("close")[0]


btn.forEach((el)=>{
    el.addEventListener('click',()=>{
        modal.style.display = "block"
    })
})


span.addEventListener('click',()=>{
    modal.style.display = "none"
})


window.addEventListener(('click'),(event)=>{
    if (event.target == modal) {
        modal.style.display = "none"
    }
})

