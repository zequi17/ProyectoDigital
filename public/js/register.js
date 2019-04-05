var selectPaises = document.getElementById("paises");

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
