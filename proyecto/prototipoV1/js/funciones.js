window.onload=inicio;
function inicio() {
	dibujarCanvas();
	drawW={
		color: "#000",
		forma: {
			estado: false,
			circuloR: document.getElementById('tamVal').value,
			rectangulo: [4,4,1,5],
			tipo: "lineas", //lineas,circulos
			posicionAnX: 0,
			posicionAnY: 0
		},
		borrador: {
			estado: false,
			tam: 20
		},
		posicionX: 10,
		posicionY: 10
	}
	dubujoCamenzar();
	window.onresize=Tamanio;
	var colorC=document.getElementById('col');
	var tamV=document.getElementById('tamVal');
	colorC.addEventListener("change",cargarCol,false);
	tamV.addEventListener("change",cargarTamanio,false);
}
function dibujarCanvas(){
	var canvas=document.createElement('canvas');
	var campo=document.getElementById('canvasImprim');
	canvas.id="dibujito";
	campo.appendChild(canvas);
}
function dubujoCamenzar(){
	canvas=document.getElementById("dibujito");
	Tamanio();
	if(canvas.getContext){
		contexto=canvas.getContext("2d");
		contexto.fillStyle="#eee";
		contexto.fillRect(0,0,canvas.width,canvas.height);
		document.getElementById('color').style.background=drawW.color;
	}else{
		alert("Disculpe por las molestias, pero no puedes dibujar, necesitas el navegador actualizado");
	}
	eventos();
}
function dibujarOb(e){
	if(drawW.borrador.estado){
		if(document.getElementById('eracerFun')){
			var nodo=document.getElementById('eracerFun');
			drawW.posicionX=e.layerX-10;
			drawW.posicionY=e.layerY-5;
			nodo.style.left=drawW.posicionX+"px";
			nodo.style.top=drawW.posicionY+"px";
			//contexto.clearRect(drawW.posicionX-10,drawW.posicionY,drawW.borrador.tam,drawW.borrador.tam);
			contexto.fillStyle="#eee";
			contexto.fillRect(drawW.posicionX-10,drawW.posicionY,drawW.borrador.tam,drawW.borrador.tam);
		}
	}else{
		switch(drawW.forma.tipo){
			case "lineas": dibujoConLines(e); break;
			case "circulos": dibujoConCircles(e);break;
		}
	}
}
function dibujoConLines(e){
	if(drawW.forma.estado){
		contexto.beginPath();
		contexto.strokeStyle = drawW.color;
		contexto.lineWidth = drawW.forma.circuloR;
		contexto.lineJoin = 'round';
		contexto.moveTo(drawW.forma.posicionAnX, drawW.forma.posicionAnY);
		contexto.lineTo((e.layerX)*1 - 8, (e.layerY)*1);
		contexto.closePath();
		contexto.stroke();
		drawW.forma.posicionAnX=(e.layerX)*1 - 8;
		drawW.forma.posicionAnY=(e.layerY)*1;
	}else{
		drawW.forma.posicionAnX=e.layerX;
		drawW.forma.posicionAnY=e.layerY;
		drawW.forma.estado=true;
	}
}
function dibujoConCircles(e){
	contexto.beginPath();
	contexto.fillStyle = drawW.color;
	drawW.posicionX=e.layerX-10;
	drawW.posicionY=e.layerY-5;
	var _radio = 1 + Math.ceil(Math.random() * drawW.forma.circuloR);
	var _posX = 1 + Math.ceil(Math.random() * drawW.forma.circuloR);
	var _posY = 1 + Math.ceil(Math.random() * drawW.forma.circuloR);
	contexto.arc(drawW.posicionX + _posX, drawW.posicionY + _posY, _radio, 0, Math.PI * 2);
	contexto.fill();
	contexto.beginPath();
	_radio = 1 + Math.ceil(Math.random() * drawW.forma.circuloR);
	_posX = 1 + Math.ceil(Math.random() * drawW.forma.circuloR);
	_posY = 1 + Math.ceil(Math.random() * drawW.forma.circuloR)
	contexto.arc(drawW.posicionX + _posX, drawW.posicionY + _posY, _radio, 0, Math.PI * 2);
	contexto.fill();
	contexto.beginPath();
	_radio = 1 + Math.ceil(Math.random() * drawW.forma.circuloR);
	_posX = 1 + Math.ceil(Math.random() * drawW.forma.circuloR);
	_posY = 1 + Math.ceil(Math.random() * drawW.forma.circuloR)
	contexto.arc(drawW.posicionX + _posX, drawW.posicionY + _posY, _radio, 0, Math.PI * 2);
	contexto.fill();
	contexto.beginPath();
	_radio = 1 + Math.ceil(Math.random() * drawW.forma.circuloR);
	_posX = 1 + Math.ceil(Math.random() * drawW.forma.circuloR);
	_posY = 1 + Math.ceil(Math.random() * drawW.forma.circuloR)
	contexto.arc(drawW.posicionX + _posX, drawW.posicionY + _posY, _radio, 0, Math.PI * 2);
	contexto.fill();
}
function eventos(){
	canvas.addEventListener("mousedown", clickMouse);
}
function clickMouse(e){
	canvas.addEventListener("mousemove", moverMouse);
	document.addEventListener("mouseup", elimEv);
}
function moverMouse(e){
	dibujarOb(e);
}
function elimEv(){
	canvas.removeEventListener("mousemove", moverMouse);
	drawW.forma.estado=false;
}
function Tamanio(){
	var mat=document.getElementById('materiales');
	var can=document.getElementById('canvasImprim');
	var bE=document.getElementById('barraHerramientas');
	var CampoDibujo=document.getElementById('campoDraw');
	var tamHe=CampoDibujo.offsetHeight - bE.offsetHeight-20;
	canvas.width=CampoDibujo.offsetWidth-mat.offsetWidth-30;
	can.style.width=(CampoDibujo.offsetWidth-mat.offsetWidth-24)+"px";
	if (tamHe>=450){
		canvas.height=CampoDibujo.offsetHeight - bE.offsetHeight-20;
	}else{
		canvas.height=450;
	}
	//console.log(CampoDibujo.offsetHeight - bE.offsetHeight-20);
}
function cargarCol(){
	var etiquetaCol=document.getElementById('color');
	drawW.color=this.value;
	etiquetaCol.style.background=drawW.color;
}
function cargarTamanio(){
	drawW.forma.circuloR=this.value;
	if(drawW.borrador.estado){
		drawW.borrador.tam=Math.round(this.value*1)+20;
		var nodo=document.getElementById('eracerFun');
		nodo.style.height=drawW.borrador.tam+"px";
		nodo.style.width=drawW.borrador.tam+"px";
		//console.log(Math.round(this.value*1)+20);
	}
	//this.addEventListener("mousemove",function(e){
		//document.getElementById('color').innerHTML=this.value;
	//});
	//document.getElementById('color').innerHTML=this.value;
}
function newCanvasL(){
	canvas.width=canvas.width;
	canvas.height=canvas.height;
	contexto.fillStyle="#eee";
	contexto.fillRect(0,0,canvas.width,canvas.height);
	document.getElementById('color').style.background=drawW.color;
}
function borradorC(){
	if(drawW.borrador.estado){
		crearBorrador();
	}else{
		drawW.borrador.estado=true;
		crearBorrador();
	}
}
function crearBorrador(){
	if(document.getElementById('eracerFun')){
		var nodo=document.getElementById('eracerFun');
		nodo.remove();
	}
	var tag=document.createElement("div");
	var cont=document.getElementById('canvasImprim');
	tag.id="eracerFun";
	tag.style.width=drawW.borrador.tam+"px";
	tag.style.height=drawW.borrador.tam+"px";
	cont.appendChild(tag);
	console.log(drawW.borrador.tam);
}
function cursorC(){
	drawW.borrador.estado=false;
	if(document.getElementById('eracerFun')){
		var nodo=document.getElementById('eracerFun');
		nodo.remove();
	}
}
function lapizC(){
	drawW.borrador.estado=false;
}
function guardarTrab(){
	var data = canvas.toDataURL('image/png');
	var xhr = new XMLHttpRequest();
	xhr.onreadystatechange = function() {
	  if (xhr.readyState == 4) {
		window.open('save/snd-yvv/'+xhr.responseText,'_blank');
	  }
	}
	xhr.open('POST','php/saveImage.php',true);
	xhr.setRequestHeader('Content-Type', 'application/upload');
	xhr.send(data);
}