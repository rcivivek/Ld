function menu() {
    document.getElementById("menu").classList.toggle("active");
    document.getElementById("menu-bars").classList.toggle("fa-bars");
    document.getElementById("menu-bars").classList.toggle("fa-times");
    
    if(document.getElementById("sear").classList.contains("active")){
        document.getElementById("sear").classList.remove("active");
    }
    if(document.getElementById("open-cont").classList.contains("active")){
        document.getElementById("open-cont").classList.remove("active");
        document.getElementById("open-fa").classList.toggle("fa-caret-up");
        document.getElementById("open-fa").classList.toggle("fa-caret-down");
    }
}
function searchBtn() {
    document.getElementById("sear").classList.toggle("active");
    
    if(document.getElementById("menu").classList.contains("active")){
        document.getElementById("menu").classList.remove("active");
        document.getElementById("menu-bars").classList.toggle("fa-times");
        document.getElementById("menu-bars").classList.toggle("fa-bars");
    }
    if(document.getElementById("open-cont").classList.contains("active")){
        document.getElementById("open-cont").classList.remove("active");
        document.getElementById("open-fa").classList.toggle("fa-caret-up");
        document.getElementById("open-fa").classList.toggle("fa-caret-down");
    }
}
function openBtn() {
    document.getElementById("open-cont").classList.toggle("active");
    document.getElementById("open-fa").classList.toggle("fa-caret-down");
    document.getElementById("open-fa").classList.toggle("fa-caret-up");
    
    if(document.getElementById("menu").classList.contains("active")){
        document.getElementById("menu").classList.remove("active");
        document.getElementById("menu-bars").classList.toggle("fa-times");
        document.getElementById("menu-bars").classList.toggle("fa-bars");
    }
    if(document.getElementById("sear").classList.contains("active")){
        document.getElementById("sear").classList.remove("active");
    }
}

function myFunction(imgs) {
    var expandImg = document.getElementById("expandedImg");
    expandImg.src = imgs.src;
    expandImg.parentElement.style.display = "block";
}