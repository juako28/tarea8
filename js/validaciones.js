
/************************************************************/
const form= document.getElementById("form")
const nombreHotel = document.getElementById("nombreHotel")
const ubicacionHotel = document.getElementById("ubicacionHotel")
const disponibilidad = document.getElementById("disponibilidad")
const tarifaNoche = document.getElementById("tarifaNoche")


//************************************************ */
form.addEventListener("submit", e=>{   
    if (nombreHotel.value.length < 1) {
        alert("debe ingresar un nombre Hotel")
         }
}
)
form.addEventListener("submit", e=>{   
    if (ubicacionHotel.value.length < 1) {
        alert("debe ingresar una ubicacion del Hotel")
         }
}
)
form.addEventListener("submit", e=>{   
    if (disponibilidad.value.length < 1) {
        alert("debe ingresar una disponibilidad")
         }
}
)
form.addEventListener("submit", e=>{   
    if (tarifaNoche.value.length < 1) {
        alert("debe ingresar una tarifa por Noche")
         }
}
)




