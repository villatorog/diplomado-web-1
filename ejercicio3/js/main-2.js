$(function(){
	var tableProm = $('.table-prom');
	
	//console.log(tableProm.lengh);
	/*
	Tipos de valores:
	-valores de cadena de texto->string
	-valor numerico ->number
	-valor de tipo arreglo ->array
	*/
	
	
	
	var texto1='HolaMundo';
	var texto2='2017';
	var numero1=10;
	var numero2=20;
	var resultado=numero1+numero2;
	
	var verdadero=true;
	var falso=false;
	
	//array arreglo,vector o matriz
	
	var diasSemana=['Lunes','Martes','Miercoles','Jueves','Viernes'];
	
	/*menor que devuelve un boolean p.ej:5<10==true
	++ incremento p.ej:->10++ ===11 
	--decremento p.ej:->10-- ===9
	
	//Iterador "for"
	resultado--;
		resultado--;
		resultado--;
		resultado--;
		
	console.log(resultado);
	*/
	for(var i=0;i<diasSemana.length;i++){
		console.log(diasSemana[i]);
		
	}
	
	
});