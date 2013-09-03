function mostrarSubItems(elemento) {
	
	var subitems = $("ul", $(elemento).parent() );
	
	if (subitems.is(":visible")) {
		subitems.hide(200);
		
	} else {
		subitems.show(200);
	}
}