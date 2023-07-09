let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .navbar');

menu.onclick = () =>{
   menu.classList.toggle('fa-times');
   navbar.classList.toggle('active');
};

window.onscroll = () =>{
   menu.classList.remove('fa-times');
   navbar.classList.remove('active');
};

var swiper = new Swiper(".home-slider", {
   loop:true,
   navigation: {
     nextEl: ".swiper-button-next",
     prevEl: ".swiper-button-prev",
   },
});

var swiper = new Swiper(".reviews-slider", {
   grabCursor:true,
   loop:true,
   autoHeight:true,
   spaceBetween: 20,
   breakpoints: {
      0: {
        slidesPerView: 1,
      },
      700: {
        slidesPerView: 2,
      },
      1000: {
        slidesPerView: 3,
      },
   },
});
// console.log(swiper)

let loadMoreBtn = document.querySelector('.packages .load-more .btn');
let currentItem = 3;
loadMoreBtn.addEventListener("click",function(){
   let boxes = [...document.querySelectorAll('.packages .box-container .box')];
   for (var i = currentItem; i < currentItem + 3; i++){
      boxes[i].style.display = 'inline-block';
   };
   currentItem += 3;
   if(currentItem >= boxes.length){
      loadMoreBtn.style.display = 'none';
   }
})


// registartion form pop when the botton is clicked
let btn1 = document.getElementById("register-btn");
let registerForm = document.getElementById("registernow")
btn1.addEventListener("click", function(){
   registerForm.style.display = "block";
   window.document.body.classList.add("blur-effect")
})

//the form shows auto after 4 seconds
function displayForm()
{
   registerForm.style.display = "block"
}
setTimeout(displayForm,4000)

// the form hides when the exit icon is clicked
let exitIcon = document.getElementById("exit");
exitIcon.addEventListener("click", function(){
   registerForm.style.display="none";
})

