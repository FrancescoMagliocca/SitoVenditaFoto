var images = ["img/Antonio Cabrini e Claudio Gentile festeggiano la vittoria del Mondiale 1982.png", "img/Cristiano Ronaldo.png", "img/Finale dei Mondiali 1982 - Italia 3 vs Germania Ovest 1.png", "img/Diego Maradona - La mano di Dio.png", "img/Diego Maradona.png"];
var img = document.getElementById("imageid");
var currentImageIndex = 0;
var t=0;
var z=0;

var bottonesx = document.getElementById("bottonecambiofotosx");
var bottonedx = document.getElementById("bottonecambiofotodx");
var sottotitolo = document.getElementById("titolopersottotitolo");
var imagesof = document.getElementById("change");

var argomento = ["Zidane", "Gerd Muller", "Pelè e Facchetti", "Gianni Rivera", "Paolo Maldini", "I Fratelli Mazzola"];

var cambiofoto = ["img/quadri/quadro0.jpg", "img/quadri/quadro14.jpg", "img/quadri/quadro1.jpg", "img/quadri/quadro13.jpg", "img/quadri/quadro3.jpg", "img/quadri/quadro12.jpg"];

setInterval(function () {
	currentImageIndex = (currentImageIndex + 1) % images.length;
	img.src = images[currentImageIndex];
  }, 3000)


  function avanti() {

	sottotitolo.innerHTML= argomento[t];
	imagesof.src = cambiofoto[t];


	t = (t + 1) % cambiofoto.length;

  }

  function indietro() {

	t = (t - 1);

	if (t==(-1)) {
		t=5;
	}

	if (z==0) {
		t=4;
		z++;
	}

	sottotitolo.innerHTML= argomento[t];
	imagesof.src = cambiofoto[t];
	
  }