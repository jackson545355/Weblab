const bigImg = document.querySelector(".product_img_big img")
const smalImg = document.querySelectorAll(".product_img_small img")
const value = document.querySelector(".product_img_big img")

smalImg.forEach(function(imgItem,X){
    imgItem.addEventListener('click',function(){
        bigImg.src = imgItem.src
    })
})