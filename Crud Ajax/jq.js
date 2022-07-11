$('.heading').html("hello world");

$('.heading2').on('mouseover', ()=>{
    console.log("hello world");
    $('.heading1').css("background-color","blue") 
})
console.log("hwllooo");
let h1= document.querySelector(".heading");

h1.addEventListener("click", function () {
    console.log("clicked");
})