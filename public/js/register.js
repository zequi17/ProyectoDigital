var inputNombre = document.getElementById("name");
var inputApellido = document.getElementById("surname");
var inputEmail = document.getElementById("email");
var inputContraseña = document.getElementById("password");
var inputContraseñaConfirm = document.getElementById("password-confirm");
var selectPaises = document.getElementById("paises");
var selectProvincias = document.getElementById("provincias");
var containerProvincias = document.getElementById("cities");
var btnSubmit = document.getElementById("btn-submit");

// Fetch PARA PAISES !!!.....

// fetch('https://restcountries.eu/rest/v2/all')
//   .then(function (response) {
//     return response.json();
//   })
//   .then(function (paises) {
//     for (pais of paises) {
//       selectPaises.innerHTML += '<option>' + pais.name + '</option>';

      // .... ES LO MISMO QUE LO DE ARRIBA .....!

      // var option = document.createElement('option');
      // var optionText = document.createTextNode(pais.name);
      // option.append(optionText);
      // selectPaises.append(option);
  //   }
  // })
  // .catch(function (error) {
  //   console.error(error);
  // });

  function fetchCall (url, callback) {
  	window.fetch(url)
  		.then(function (response) {
  			return response.json();
  		})
  		.then(function (data) {
  			callback(data);
  		})
  		.catch(function (error) {
  			console.log(error);
  		});
  }

  function fillCitiesSelect (data) {
  	for (var oneCity of data) {
  		selectProvincias.innerHTML += '<option>' + oneCity.state + '</option>';
  	}
  }

  function fillCountrySelect (data) {
  	for (var oneCountrie of data) {
  		selectPaises.innerHTML += '<option>' + oneCountrie.name + '</option>';
  	}
  }

  fetchCall('https://restcountries.eu/rest/v2/all', fillCountrySelect);
  fetchCall('https://dev.digitalhouse.com/api/getProvincias', fillCitiesSelect);

// CONTADOR DE ERRORES ..........

var errores = 0;

 /// VALIDACION DE CAMPO NOMBRE ...........

inputNombre.onblur = function(e){
  var nombre = inputNombre.value.trim();
  var divMsj = this.parentElement.querySelector('.msj-error');
  if(nombre == '' || nombre.length < 3){
    divMsj.innerHTML = 'El Nombre debe tener al menos 3 caracteres.';
    inputNombre.style.border = '2px solid red';
    errores++;
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
  if(email == ''){
    divMsj.innerHTML = 'El campo Email no debe estar vacio.';
    inputEmail.style.border = '2px solid red';
    e.preventDefault();
  }
  else if(email != '' && !regexEmail.test(email)){
    divMsj.innerHTML = 'Este campo debe ser de formato Email.'
    inputEmail.style.border = '2px solid red';
    e.preventDefault();
  }  else{
    divMsj.innerHTML = '';
    inputEmail.style.border = '2px solid green';
  }
}

// VALIDACION DE CAMPO CONTRASEÑA .............

inputContraseña.onblur = function(e){
  var password = this.value.trim();
  var divMsj = this.parentElement.querySelector('.msj-error');
  if(password.length < 8){
    divMsj.innerHTML = 'La contraseña debe tener como minimo 8 caracteres.'
    this.style.border = '2px solid red';
    e.preventDefault();
  }else{
    divMsj.innerHTML = '';
    this.style.border = '2px solid green';
  }
}

// VALIDACION DE CAMPO CONFIRMACION DE CONTRASEÑA ..........

inputContraseñaConfirm.onblur = function(e){
  var passwordConfirm = this.value.trim();
  var divMsj = this.parentElement.querySelector('.msj-error');
  if(passwordConfirm.length < 8){
    divMsj.innerHTML = 'La contraseña debe tener como minimo 8 caracteres.'
    this.style.border = '2px solid red';
    e.preventDefault();
  }else if(passwordConfirm !== inputContraseña.value){
    divMsj.innerHTML = 'Las contraseñas no coinciden.'
    this.style.border = '2px solid red';
    e.preventDefault();
  }
  else{
    divMsj.innerHTML = '';
    this.style.border = '2px solid green';
  }
}

// VALIDACION DE CAMPO PAIS .................

selectPaises.onblur = function(e){
  var divMsj = this.parentElement.querySelector('.msj-error');
  if(this.value === ''){
    divMsj.innerHTML = 'Debes selecccionar un país.';
    this.style.border = '2px solid red';
    e.preventDefault();
  }else{
    divMsj.innerHTML = '';
    this.style.border = '2px solid green';
  }
}

//BOTON DE REGISTRARSE ................

btnSubmit.onclick = function(){
  if(inputNombre === ""){
   alert('El campo nombre esta mal');
  }
}

// selectPaises.onchange = function () {
// 	if (this.value === 'Argentina') {
// 		containerProvincias.classList.remove('hidden');
// 		fetchCall('https://dev.digitalhouse.com/api/getProvincias', fillCitiesSelect);
// 	} else {
// 		containerProvincias.classList.add('hidden');
// 		selectProvincias.innerHTML = '';
// 	}
// };

// selectPaises.onchange = function(){
//   if(this.value === 'Argentina'){
//     selectProvincias.classList.remove('hidden');
//   }else {
//     selectProvincias.classList.add('hidden');
//     selectProvincias.innerHTML = '';
//   }
// }

// Fetch mal hecho !!
// fetch('https://dev.digitalhouse.com/api/getProvincias')
// .then(function(response){
//   return response.json();
// })
// .then(function(provincias){
//   for(var provincia of provincias){
//     selectProvincias.innerHTML += '<option>' + provincia.state + '</option>';
//   })
//   .catch(function(error){
//     console.log(error);
//   })
