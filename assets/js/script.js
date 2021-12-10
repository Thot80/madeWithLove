let hearts = document.getElementsByClassName("hearts");

console.log(hearts);

for (let i = 0; i < hearts.length; i++ ){
    hearts[i].addEventListener("click", function(){
        hearts[i].classList.toggle("active");
    })
}