var inputNombre = document.getElementById("name");
var inputApellido = document.getElementById("surname");
var inputEmail = document.getElementById("email");
var inputContraseña = document.getElementById("password");
var inputContraseñaConfirm = document.getElementById("password-confirm");
var selectPaises = document.getElementById("paises");
var selectProvincias = document.getElementById("provincias");


fetch('https://restcountries.eu/rest/v2/all')
  .then(function (response) {
    return response.json();
  })
  .then(function (paises) {
    for (pais of paises) {
      selectPaises.innerHTML += '<option>' + pais.name + '</option>';

      // .... ES LO MISMO QUE LO DE ARRIBA .....!

      // var option = document.createElement('option');
      // var optionText = document.createTextNode(pais.name);
      // option.append(optionText);
      // selectPaises.append(option);
    }
  })
  .catch(function (error) {
    console.error(error);
  });


function fetchAll(url, callback){
  fetch(url)
  .then(function(response){
    return response.json();
  })
  .then(function(data){
    callback(data);
  })
  .catch(function(error){
    console.log(error);
  });
}

function paisesProvincias(data){
  for(var provincia of data){
    selectPaises.innerHTML += '<option>' + provincia.state + '</option>';
  }
}
 /// VALIDACION DE CAMPO NOMBRE ...........

inputNombre.onblur = function(e){
  var nombre = inputNombre.value.trim();
  var divMsj = this.parentElement.querySelector('.msj-error');
  if(nombre == '' || nombre.length < 3){
    divMsj.innerHTML = 'El nombre debe tener al menos 3 caracteres.';
    inputNombre.style.border = '2px solid red';
    e.preventDefault();
  }
  else{
    divMsj.innerHTML = '';
    inputNombre.style.border = '3px solid green';
  }
}

// VALIDACION DE CAMPO APELLIDO .................

inputApellido.onblur = function(e){
  var apellido = inputApellido.value.trim();
  var divMsj = this.parentElement.querySelector('.msj-error');
  if(apellido == '' || nombre.length < 3){
    divMsj.innerHTML = 'El apellido debe tener al menos 3 caracteres.';
    inputNombre.style.border = '2px solid red';
    e.preventDefault();
  }
  else{
    divMsj.innerHTML = '';
    inputNombre.style.border = '3px solid green';
  }
}
