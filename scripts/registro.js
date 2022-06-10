let btnContinuar = document.getElementById("btn-continuar");
let overlay = document.getElementById("overlay");
let popUp = document.getElementById("popUp");

btnContinuar.addEventListener("click",function(){
    overlay.classList.add("active");
        popUp.classList.add("active")
})


//  Pop Up de las categorias

let cienciaficcion= document.getElementById("cnc-fic");
let fantasia = document.getElementById("fant");
let romance = document.getElementById("rom");
let comedia = document.getElementById("com");
let policial = document.getElementById("poli");
let horror = document.getElementById("hor");
let musica = document.getElementById("mus");
let misterio = document.getElementById("mist");
let btn_cienciaficcion= document.getElementById("CNC-FIC");
let btn_fantasia = document.getElementById("FANT");
let btn_romance = document.getElementById("ROM");
let btn_comedia = document.getElementById("COM");
let btn_policial = document.getElementById("POLI");
let btn_horror = document.getElementById("HOR");
let btn_musica = document.getElementById("MUS");
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
policial.addEventListener("click", ()=> {policial.classList.toggle("seleccionado");
    if(btn_policial.checked == true){
    btn_policial.checked = false;
}
    else{
    btn_policial.checked = true
}});
horror.addEventListener("click", ()=> {horror.classList.toggle("seleccionado");
    if(btn_horror.checked == true){
    btn_horror.checked = false;
}
    else{
    btn_horror.checked = true
}});
musica.addEventListener("click", ()=> {musica.classList.toggle("seleccionado")
    if(btn_musica.checked == true){
    btn_musica.checked = false;
}
    else{
    btn_musica.checked = true
}});
misterio.addEventListener("click", ()=> {misterio.classList.toggle("seleccionado")
    if(btn_misterio.checked == true){
    btn_misterio.checked = false;
}
    else{
    btn_misterio.checked = true
}});


