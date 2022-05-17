const BCategoria = document.getElementById("categoria");
const BPais = document.getElementById("pais");
const BIdioma = document.getElementById("idioma");
const BFuente = document.getElementById("fuente");
const BOrdenarPor = document.getElementById("ordenar-por");



BCategoria.addEventListener('click', ()=>{
    var div = document.querySelector(".categoria");
    if (BIdioma.classList.contains("TRUE")) {
        BIdioma.classList.remove("TRUE");
        div.style.display = "none";
    }else{
        BIdioma.classList.add("TRUE");
        div.style.display = "block";
    }
})

BPais.addEventListener('click', ()=>{
    var div = document.querySelector(".pais");
    if (BPais.classList.contains("TRUE")) {
        BPais.classList.remove("TRUE");
        div.style.display = "none";
    }else{
        BPais.classList.add("TRUE");
        div.style.display = "block";
    }
})

BIdioma.addEventListener('click', ()=>{
    var div = document.querySelector(".idioma");
    if (BCategoria.classList.contains("TRUE")) {
        BCategoria.classList.remove("TRUE");
        div.style.display = "none";
    }else{
        BCategoria.classList.add("TRUE");
        div.style.display = "block";
    }
})

// BFuente.addEventListener('click', ()=>{
//     var div = document.querySelector(".fuente");
//     if (BFuente.classList.contains("TRUE")) {
//         BFuente.classList.remove("TRUE");
//         div.style.display = "none";
//     }else{
//         BFuente.classList.add("TRUE");
//         div.style.display = "block";
//     }
// })

BOrdenarPor.addEventListener('click', ()=>{
    console.log("a");
    var div = document.querySelector(".ordenar-por");
    if (BOrdenarPor.classList.contains("TRUE")) {
        BOrdenarPor.classList.remove("TRUE");
        div.style.display = "none";
    }else{
        BOrdenarPor.classList.add("TRUE");
        div.style.display = "block";
    }
})

// window.addEventListener('click', e=>{
//     console.log(e.target)
//     var div = document.querySelector(".options");
//     var s = document.querySelector(".s");

//     if (e.target != BCategoria &&
//         e.target != BPais &&
//         e.target != BIdioma &&
//         e.target != BFuente &&
//         e.target != BOrdenarPor &&
//         e.target != div &&
//         e.target != s) {
        
//         div.style.display = "none";
//     }
// })
