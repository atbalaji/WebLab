function toTop(newTop){
	
	domNew=document.getElementById(newTop).style;
	//domTop.zIndex="0";
	domNew.zIndex++;
	var par=document.getElementById('par');

	var len=newTop.length-1;
	
	var sz=parseInt(newTop[len])*100;
	sz=sz.toString();
	sz+='%'; 
	var pars=document.getElementById('par').style;
	pars.fontSize=sz;
	
    par.innerHTML=document.getElementById(newTop).alt;	
	
	
	top=newTop;
	
}