const selector1 = document.querySelector('.select1');
const selector2 = document.querySelector('.select2');
const panels = document.querySelectorAll('.panel');
const contents = document.querySelectorAll('.contents');
const close = document.querySelectorAll('.close');
const zamknij = document.querySelectorAll('.zamknij');
const maja = document.querySelector('.maja');

for (let i=1; i<panels.length-3; i++) {
    if (i === 1 || i=== 3) {
    } else {
        panels[i].addEventListener('mouseover', ()=>{

            selector1.style.top = `${(i-1)*62+30}px`; // margin-top:30px; (i-1) start from the second div
            setTimeout(() => {selector2.style.top = `${(i-1)*62+30}px`;}, 100);
    
    
        });
        panels[i].addEventListener('mouseleave', ()=>{
            selector1.style.top = "30px";
            selector2.style.top = "154px";
        });
        panels[i].addEventListener('click', ()=>{ // removes background of all elements except the one clicked 

                for (let j=0; j<panels.length; j++){
                    panels[j].classList.add('hidebcg2');
                    }
                    panels[i].classList.remove('hidebcg2');
                    panels[i].style.backgroundImage = `url(bg/${i}.png), linear-gradient(to right, #ffe957, #ffe957 , #00ffb4)`;
                    selector1.classList.add('hidebcg2');
                    selector2.classList.add('hidebcg2');
                    const close = document.querySelector(`.close${i}`); // select div CLOSE (closest)
                    const zamknij = document.querySelector(`.zamknij${i}`); // select div ZAMKNIJ (closest)
                    setTimeout(() => {
                        
                        contents[i].classList.remove('contentsHide');
                        contents[i].classList.add('contentsShow');
                    }, 500);
                        close.addEventListener('mouseover', ()=>{//
                            zamknij.classList.add('slideIn')//
                        });
                        close.addEventListener('mouseleave', ()=>{//
                            zamknij.classList.remove('slideIn')//
                        });
                        close.addEventListener('click', ()=>{
                            for (let j=0; j<panels.length; j++){
                                panels[j].classList.remove('hidebcg2');
                                }
                                panels[i].style.backgroundImage = `url(bg/${i}.png)`;
                                selector1.classList.remove('hidebcg2');
                                selector2.classList.remove('hidebcg2');
                                contents[i].classList.remove('contentsShow');
                                setTimeout(() => {
                                    contents[i].classList.add('contentsHide');
                                    
                                }, 500);
                        });
                    
                    

            
        });
    };

}
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    maja.style.left = "-300px";
  } else {
    maja.style.left = "30px";
  }
}