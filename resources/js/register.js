function buildUser (e) {
  e.preventDefault()
  let userInput = document.querySelector("#inputUser")

  let userValue = userInput.value

  // TODO: Identificar quien lo envia
  // si es el nombre 
  let name = e.value.trim()
  // Si es el apellido 
  let lastname = e.value.chart(0)
  // si es la cedula
  let dni = e.value.substr(-3)

  userValue.value = `${name}${lastname}${dni}`
}
