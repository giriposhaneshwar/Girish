$(document).ready(function(){
	// load Variables
	var dataContainer = $('.rightC');

	var targetLoad;

	$('.modules a').on('click', function(d){
		d.preventDefault();
		targetLoad = d.currentTarget.attributes['href'].value;
		loadPage(targetLoad);
	});


	// loading the modules	
	var loadPage = function(page){
		var urlLoc = "./includes/"
		if(page == undefined){
			page = "dc";
		}
		pageContentUrl(page, urlLoc);
	}


	var pageContentUrl = function(page, location){
		dataContainer.load(location+page+".php");
	}

	// if notting loads then this will trigger
	loadPage(targetLoad);

});