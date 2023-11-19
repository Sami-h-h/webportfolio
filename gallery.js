function upDate(previewPic){
   
    document.getElementById("image").style.backgroundImage = "url('"  +previewPic.src+ "')";
}

function unDo(){
    document.getElementById("image").style.backgroundImage = "url('')";
   document.getElementById("image").innerHTML = "Meet the crew"
}


