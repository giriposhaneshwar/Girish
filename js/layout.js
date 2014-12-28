
$(document).ready(function(){

var leftC = $('.leftC');
var rightC = $('.rightC');
var screenX = $(window).width();
var screenY = $(window).height();

var dcNum = $('#dcNum');


// resetting hte left panel height
$(window).on('load resize ready mousedown mouseup mousewheel mousemove', function(d){
	updatePanel();
});

	

	// Screen Updater
	var updatePanel = function(){
		leftC = $('.leftC');
		rightC = $('.rightC');
		screenX = $(window).width();
		screenY = $(window).height();

		// reseting the height of the left container
		leftC.css({
			'height': screenY > rightC.height() ? screenY : rightC.height() + 'px'
		});
		rightC.css({
			'width' : (screenX-leftC.width())-70  + 'px'
		});
	}

	

	// customer list tabs '.toggleCust a'
	$(document).on('click', function(d, i){
		// console.log($(d.target).text());
		var addCust = $('.newEntry');
		var loadFile = $('.loadFile');
		var showList = $('.showList');

		if(	$(d.target).text() == "Add Customer" ||
			$(d.target).text() == "Add Product"){
			
			$('.newEntry').fadeIn(500);
			$('.loadFile').hide();
			$('.showList').hide();
		}else if($(d.target).text() == "Upload File" || $(d.target).text() == "Upload Product File"){
			$('.newEntry').hide();
			$('.loadFile').fadeIn(500);
			$('.showList').hide();
		}else if($(d.target).text() == "Customer List" || $(d.target).text() == "Product List"){
			$('.newEntry').hide();
			$('.loadFile').hide();
			$('.showList').fadeIn(500);

		}
	});
	
});