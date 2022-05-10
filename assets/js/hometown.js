//slider
var slide = document.getElementsByClassName('slide');
var i = 0;

function showImage(){
    slide[i].classList.add('d-none');

    if(i < slide.length - 1){
        i++;
        slide[i].classList.remove('d-none');
    }else{
        i = 0;
        slide[i].classList.remove('d-none');
    }
    setTimeout(showImage, 5000);
}

setTimeout(showImage, 5000);