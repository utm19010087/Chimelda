var links = ["../IMG/carreras/Mecatronica.jpg","../IMG/carreras/Nanotecnologia.jpg","../IMG/carreras/Negocios.jpg", "../IMG/carreras/Tics.jpeg"];
var current = 0;

function cambio() {
    let car = document.getElementById('carousel');
    car.style.backgroundImage = "url('IMG/" + links[current] + "')";
    current++;
    if (current >= links.length) {
        current = 0;
    }
}

setInterval(cambio, 2000);