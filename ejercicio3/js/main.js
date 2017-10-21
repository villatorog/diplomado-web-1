//Ready function
$(function(){
	var tableProms = $('.table-prom');
	var prom =$('#prom');
	 var numberTableProms =tableProms.length;
	 var sumProms=0;
	
	 for(var i=0; i<numberTableProms; i++ ){
		 var valorProm =$(tableProms[i]).text();
		 var valorPromNumber =parseInt(valorProm,10);
		// console.log(typeof valorPromNumber);
		 
		 //sumProms= sumProms + valorProNumber;
		   sumProms +=valorPromNumber;
		 
	 }
	
	var promedio=sumProms/numberTableProms;
	//console.log(prom);
	prom.text(promedio);
	
});
