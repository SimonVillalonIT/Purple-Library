var btnAbrirPopUp = document.getElementById("login"),
    overlay = document.getElementById("overlay"),
    popUp = document.getElementById("popUp"),
    btnCerrarPopUp = document.getElementById("btn-cerrar-popup");

    btnAbrirPopUp.addEventListener('click',function(){
        overlay.classList.add("active");
        popUp.classList.add("active")
    });

    btnCerrarPopUp.addEventListener("click", function(){
        overlay.classList.remove("active");
        popUp.classList.add("active")
    })
