var imagenes = ['img0.jpg', 'img2.jpg', 'img3.jpg', 'img4.jpg']
    cont = 0;

function movement(container){
   contenedor.addEventListener('click', e => {
      let atras = container.querySelector('.atras'),
        adelante = container.querySelector('.adelante'),
        img = container.querySelector('img'),
        tgt = e.target;

     if (tgt == atras) {
         if (cont > 0) {
           img.src = imagenes[cont - 1];
           cont--;
        }else{
          img.src =imagenes[imagenes.length - 1 ];
          cont = imagenes.length - 1;
        }
     } else if(tgt == adelante){
       if (cont < imagenes.length - 1) {
         img.src = imagenes[cont + 1];
         cont++;
      }else{
        img.src =imagenes[0];
        cont = 0;
      }
     }
  });
}

document.addEventListener("DOMContentLoaded", () => {
  let container = document.querySelector('.container');

  General(container);
});
