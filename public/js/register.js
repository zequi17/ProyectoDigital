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


// function fetchAll(url, callback){
//   fetch(url)
//   .then(function(response){
//     return response.json();
//   })
//   .then(function(data){
//     callback(data);
//   })
//   .catch(function(error){
//     console.log(error);
//   });
// }
//
// function provincias(data){
//   for(var provincia of data){
//     selectProvincias.innerHTML += '<option>' + provincia.state + '</option>';
//   }
// }
//------------------ VALIDACIONES -------------------

 /// VALIDACION DE CAMPO NOMBRE ...........

inputNombre.onblur = function(e){
  var nombre = inputNombre.value.trim();
  var divMsj = this.parentElement.querySelector('.msj-error');
  if(nombre == '' || nombre.length < 3){
    divMsj.innerHTML = 'El Nombre debe tener al menos 3 caracteres.';
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
  if(apellido == '' || apellido.length < 3){
    divMsj.innerHTML = 'El Apellido debe tener al menos 3 caracteres.';
    inputApellido.style.border = '2px solid red';
    e.preventDefault();
  }
  else{
    divMsj.innerHTML = '';
    inputApellido.style.border = '3px solid green';
  }
}

// VALIDACION DE CAMPO EMAIL ...................


inputEmail.onblur = function(e){
  var email = this.value.trim();
  var divMsj = this.parentElement.querySelector('.msj-error');
  var regexEmail = /\S+@\S+\.\S+/;
  if(!regexEmail.test(email)){
    divMsj.innerHTML = 'Este campo debe ser de formato Email.'
    inputEmail.style.border = '2px solid red';
    e.preventDefault();
  }else if(email == ''){
    divMsj.innerHTML = 'El campo Email no debe estar vacio.';
    e.preventDefault();
  }
  else{
    divMsj.innerHTML = '';
    inputEmail.style.border = '2px solid green';
  }
}

// VALIDACION DE CAMPO PAIS .................

selectPaises.onchange = function(){
  if(this.value === 'Argentina'){
    selectProvincias.classList.remove('hidden');
    fetchAll('https://dev.digitalhouse.com/api/getProvincias')
    .then(function(response){
      return response.json();
    })
    .then(function(data){
      for(var provincia of data){
        selectProvincias.innerHTML += '<option>' + provincia.state + '</option>';
      })
      .catch(function(error){
        console.log(error);
      })
  }else {
    selectProvincias.classList.add('hidden');
    selectProvincias.innerHTML = '';
  }
}
