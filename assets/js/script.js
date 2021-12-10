let hearts = document.getElementsByClassName('heart');

hearts.forEach( element => element.addEventListener("click", function(){
    element.classList.toggle("active");
})
)