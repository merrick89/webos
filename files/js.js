$(document).ready(function(){
	//Initialize tooltips
	$(function () {
        $("[rel='tooltip']").tooltip();
    });

	//Animate logo to fade in after 2 second delay
	$(".app-content").animate({
		opacity:1
	}, 500);

	//Fade intro text in after a small delay of 1 second
	setTimeout(helloText, 1000);

	function helloText(){
		$("#hello").typed({
    		strings: ["Merrick Chun."],
        	typeSpeed: 100
      	});
	};

	//Window functions
	$(function() {
		//draggable windows
    	$(".app-content div.draggable").draggable({
    		containment: "parent",
    		handle: "div.window-header",
    		stack: ".app-content div.draggable"
    	})

    	//resizable windows
    	$( ".resizable" ).resizable({
    		containment: "parent"
    	});

    	//Bring to front on click
    	$(".window-container").click(function(){
    		var otherWindows = $(".window-container").not(this);
    		$(this).css("z-index", "2");
    		otherWindows.css("z-index", "1");
    	});
  	});

	// Time and Date
  	$(function(){ 		

  		// function for setting date and time
  		var update = function(){
  			var realTime = moment().format('h:mm A');
  			var realDate = moment().format('YYYY[-]MM[-]DD');
  			$(".system-time").html(realTime);
  			$(".system-date").html(realDate);
  		};

  		update(); // Call the function
  		setInterval(update, 1000); // Call it every second
  		
  	});

});