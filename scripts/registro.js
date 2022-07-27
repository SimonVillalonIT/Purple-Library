let btnContinuar = document.getElementById("btn-continuar");
let overlay = document.getElementById("overlay");
let popUp = document.getElementById("popUp");
let btnCerrarPopUp = document.getElementById("btn-cerrar-popup")

btnContinuar.addEventListener("click",function(){
    overlay.classList.add("active");
        popUp.classList.add("active")
})
btnCerrarPopUp.addEventListener("click", function(){
        overlay.classList.remove("active");
        popUp.classList.add("active")
    })

//  Pop Up de las categorias

let cienciaficcion= document.getElementById("cnc-fic");
let fantasia = document.getElementById("fant");
let romance = document.getElementById("rom");
let comedia = document.getElementById("com");
let nof = document.getElementById("nof");
let horror = document.getElementById("hor");
let arte = document.getElementById("arte");
let misterio = document.getElementById("mist");
let btn_cienciaficcion= document.getElementById("CNC-FIC");
let btn_fantasia = document.getElementById("FANT");
let btn_romance = document.getElementById("ROM");
let btn_comedia = document.getElementById("COM");
let btn_nof = document.getElementById("NOF");
let btn_horror = document.getElementById("HOR");
let btn_arte = document.getElementById("ARTE");
let btn_misterio = document.getElementById("MIST");


cienciaficcion.addEventListener("click", ()=> {
    cienciaficcion.classList.toggle("seleccionado");
    if(btn_cienciaficcion.checked == true){
        btn_cienciaficcion.checked = false;
    }
    else{
        btn_cienciaficcion.checked = true
    } });
fantasia.addEventListener("click", ()=> {fantasia.classList.toggle("seleccionado");
    if(btn_fantasia.checked == true){
    btn_fantasia.checked = false;
}
    else{
    btn_fantasia.checked = true
} });
romance.addEventListener("click", ()=> {romance.classList.toggle("seleccionado");
    if(btn_romance.checked == true){
    btn_romance.checked = false;
}
    else{
    btn_romance.checked = true
}});
comedia.addEventListener("click", ()=> {comedia.classList.toggle("seleccionado");
    if(btn_comedia.checked == true){
    btn_comedia.checked = false; 
}
    else{
    btn_comedia.checked = true
}});
nof.addEventListener("click", ()=> {nof.classList.toggle("seleccionado");
    if(btn_nof.checked == true){
    btn_nof.checked = false;
}
    else{
    btn_nof.checked = true
}});
horror.addEventListener("click", ()=> {horror.classList.toggle("seleccionado");
    if(btn_horror.checked == true){
    btn_horror.checked = false;
}
    else{
    btn_horror.checked = true
}});
arte.addEventListener("click", ()=> {arte.classList.toggle("seleccionado")
    if(btn_arte.checked == true){
    btn_arte.checked = false;
}
    else{
    btn_arte.checked = true
}});
misterio.addEventListener("click", ()=> {misterio.classList.toggle("seleccionado")
    if(btn_misterio.checked == true){
    btn_misterio.checked = false;
}
    else{
    btn_misterio.checked = true
}});


