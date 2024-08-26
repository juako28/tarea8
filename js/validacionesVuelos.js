const origen = document.getElementById("origen")
const destino = document.getElementById("destino")
const fechaViaje = document.getElementById("fechaViaje")
const plaza = document.getElementById("plaza")
const precio = document.getElementById("precio")
const form1 = document.getElementById("form")


form.addEventListener("submit", e=>{ 
    if (origen.value.length < 1) {
        alert("debe escribir un origen")
         }
}
)
form.addEventListener("submit", e=>{ 
    if (destino.value.length < 1) {
        alert("debe escribir un destino")
         }
}
)
form.addEventListener("submit", e=>{   
    if (fechaViaje.value.length < 1) {
        alert("seleccione una fecha")
         }
}
)
form.addEventListener("submit", e=>{   
    if (plaza.value.length < 1) {
        alert("debe ingresar un plaza")
         }
}
)
form.addEventListener("submit", e=>{   
    if (precio.value.length < 1) {
        alert("debe ingresar un precio")
         }
}
)