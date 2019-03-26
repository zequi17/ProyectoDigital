 document.getElementById('logo-menu').addEventListener('click', function(){
   var menu = document.getElementById('container').classList.toggle('container');
 })


 // CREACION DE CARRUSEL -------------------------

var imagenes = [
  "../carrusel/carrusel1.jpg",
  "../carrusel/carrusel2.jpg",
  "../carrusel/carrusel3.jpg",
  "../carrusel/carrusel4.jpg",
  "../carrusel/carrusel5.jpg"
]

var indice = 0;

var anterior = document.getElementById('anterior');
var siguiente = document.getElementById('siguiente');
var img = document.querySelector('img');

 function pasarFoto() {
      if(indice >= imagenes.length - 1) {
          indice = 0;
      } else {
          indice++;
      } renderizarImagen();
 }
    function retrocederFoto() {
      if(indice <= 0) {
          indice = imagenes.length - 1;
      } else {
          indice--;
      }renderizarImagen();
    }
function renderizarImagen () {
      img.setAttribute('src', imagenes[indice])
  }

      siguiente.addEventListener('click', pasarFoto);
      anterior.addEventListener('click', retrocederFoto);
