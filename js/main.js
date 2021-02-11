// Function to  handle Night mode Button  
function NightMode() {
    var element = document.body;
    element.classList.toggle("nightMode");
    
 }

// handle the scroll Button  of the page 
let topBotton = document.querySelector(".top") 
window.onscroll= function()
{
    if(window.pageYOffset>300)  topBotton.style.display= 'block' ; 
    else topBotton.style.display= 'none' ;

}

topBotton.addEventListener('click' , scroll) 
function  scroll()
{
    window.scrollTo(0,0);
}
                      
  
 
  
 