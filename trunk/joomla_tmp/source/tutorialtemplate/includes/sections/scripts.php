<!--! JavaScript Includes-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>

<script src="<?php echo JURI::base()."templates/".$this->template; ?>/includes/scripts/plugins.js"></script>
<script src="<?php echo JURI::base()."templates/".$this->template; ?>/includes/scripts/script.js"></script>


<script>
    $(document).ready(function(){
        
         var pretty_settings = <?php echo json_encode($pretty_settings)?>;
         
         
  		$("a[rel^='prettyPhoto']").prettyPhoto(pretty_settings);
  		
    $.localScroll({duration:600});

    $('.slider') 
    .after('<div class="slide_nav">') 
    .cycle({ 
        fx:     'scrollHorz', 
        timeout: 4000, 
        slideExpr:'li',
        easing: 'bounceout',
        pager:  '.slide_nav' 
    });




        $('#images figure').animate({'opacity' : 1}).hover(function() {
    		$(this).animate({'opacity' : 0.5}).find('span').addClass("zoom_in").animate({'opacity' : 1});
    	}, function() {
    		$(this).animate({'opacity' : 1}).find('span').removeClass("zoom_in");
    	});


    	var mainLi = $('#main_nav ul li');

        mainLi
        .find('ul')
        .hide()
        .end()
        .hover(function () {

    				$(this).find('> ul').stop(true, true).slideDown('slow');

    	 		}, function() {

    	 			$(this).find('> ul').stop(true, true).fadeOut('fast'); 	

    			});



  	});
    
</script>
