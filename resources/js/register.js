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

function buildUser() {
  const name = document.getElementById('inputName').value.toLowerCase();
  const lastname = document.getElementById('inputLastname').value.toLowerCase();
  const dni = document.getElementById('inputDni').value;
  
  let username = '';
  
  if (name && lastname && dni) {
      // Get the full name
      const firstLetterLastname = lastname.charAt(0);
      
      // Get last 3 digits of DNI
      const lastThreeDigits = dni.slice(-3);
      
      // Build username: name + first letter of lastname + last 3 digits of DNI
      username = name + firstLetterLastname + lastThreeDigits;
  }
  
  // Update the username field
  document.getElementById('inputUser').value = username;
}