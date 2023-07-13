//const mi_form=document.querySelector()
const nombre_ticket = document.querySelector("#nombre-ticket")
const apellido_ticket = document.querySelector("#apellido-ticket")
const email_ticket = document.querySelector("#email-ticket")
const cantidad_ticket = document.querySelector("#cantidad-ticket")
const categoria_ticket = document.querySelector("#categoria-ticket")
let mensaje_total = document.querySelector("#mensaje_total")
//const btn_borrar = document.querySelector("#btn-borrar")
const btn_resumen = document.querySelector("#btn-resumen")

// Example starter JavaScript for disabling form submissions if there are invalid fields
/*btn_resumen.addEventListener('click', () => {
  const form = document.querySelector('#formulario-ticket')
  console.log(form);
  //console.log(event);
  form.classList.add('was-validated')
})*/
function validacion() {
  //'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  /*const forms = document.querySelectorAll('.needs-validation')
  console.log(forms);*/

  
  //console.log(form);
  
  
  let form = document.getElementById("formulario-ticket")
  form.classList.add('was-validated')
  if (form.checkValidity()) {
    console.log("formulario OK");
  } else {
    console.log("NO OK");
  }
  
  /*btn_resumen.addEventListener('onclick', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    },false)*/
  // Loop over them and prevent submission
  /*Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })*/
}
//validacion()

function total_pago() {
  let salida = 200;
  let categoria = categoria_ticket.value
  let cantidad = cantidad_ticket.value
  
  console.log("🚀 ~ file: funciones.js:32 ~ total_pago ~ salida:", salida)
  if (categoria === "regular") {
    salida = salida * cantidad
  }
  if (categoria === "estudiante") {
    salida = (salida * cantidad) * 0.2
  }
  if (categoria === "trainee") {
    salida = (salida * cantidad) * 0.5
  }
  if (categoria === "junior") {
    salida = (salida * cantidad) * 0.85
  }
  mensaje_total.textContent="Total a pagar es: $"+salida
}

function borrar_form() {
  let formulario = document.getElementById("formulario-ticket")
  formulario.reset()

  mensaje_total.textContent="Total a pagar es: $200"
}

total_pago()