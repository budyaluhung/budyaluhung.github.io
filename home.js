const productContainers = [...document.querySelectorAll('.product-container')];
const nxtBtn = [...document.querySelectorAll('.nxt-btn')];
const preBtn = [...document.querySelectorAll('.nxt-btn')];

productContainers.forEach((item,i) => {
    let containerDimention = item.getBoundingClientRect();
    let containerWidth = containerDimention.width;

    nxtBtn[i].addEventListener('click', () =>{
        item.scrollLeft += containerWidth;
    })
    preBtn[i].addEventListener('click', () =>{
        item.scrollLeft -= containerWidth;
    })
    
})