window.addEventListener("scroll",function(e){ 
    var h =document.documentElement.scrollTop||document.body.scrollTop; 
    if(h > 10){ 
        $("#backtop").css("right","15px");
        $("#backtop::before").css("right","25px");
    } else{
        $("#backtop").css("right","-100px")
        $("#backtop::before").css("right","-90px");
    }
});
function backtop() {
    var h1 =document.documentElement.scrollTop||document.body.scrollTop; 
    while (h1>0) {
        h1=document.documentElement.scrollTop||document.body.scrollTop; 
        document.documentElement.scrollTop=h1-20; 
    }
}