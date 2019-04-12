var inputNombre = document.querySelector("");
var selectPaises = document.getElementById("paises");
var selectProvincias = document.getElementById("provincias");


fetch('https://restcountries.eu/rest/v2/all')
  .then(function (response) {
    return response.json();
  })
  .then(function (paises) {
    for (pais of paises) {
      var option = document.createElement('option');
      var optionText = document.createTextNode(pais.name);
      option.append(optionText);
      selectPaises.append(option);
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
  for(var pais of data){
    selectPaises.innerHTML += '<option>' + pais.state + '</option>';
  }
}
