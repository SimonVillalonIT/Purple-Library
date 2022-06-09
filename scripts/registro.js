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

cienciaficcion.addEventListener("click", ()=> {cienciaficcion.classList.toggle("seleccionado")});
fantasia.addEventListener("click", ()=> {fantasia.classList.toggle("seleccionado")} );
romance.addEventListener("click", ()=> {romance.classList.toggle("seleccionado")});
comedia.addEventListener("click", ()=> {comedia.classList.toggle("seleccionado")});
policial.addEventListener("click", ()=> {policial.classList.toggle("seleccionado")});
horror.addEventListener("click", ()=> {horror.classList.toggle("seleccionado")});
musica.addEventListener("click", ()=> {musica.classList.toggle("seleccionado")});
misterio.addEventListener("click", ()=> {misterio.classList.toggle("seleccionado")});


