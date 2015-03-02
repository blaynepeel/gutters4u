<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <title><?php wp_title(); ?></title>
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script>
        	$(window).load(function(){
        		var theImage = $('ul li img');
        		var theWidth = theImage.width();

        		//Wrap into a holding Div
        		$('ul').wrap('<div id="slideholder"/>');

        		//assign height
        		$("#slideholder").css({
        			width: function(){
        				return theWidth;
        			},

        			height: function(){
        				return theImage.height();
        			},

        			position: 'relative',
        			overflow: 'hidden'
        		});

        		//get total of images sizes
        		var totalWidth = theImage.length * theWidth;
        		$('ul').css({
        			width:function(){
        				return totalWidth;
        			}
        		});

        		$(theImage).each(		
					function(intIndex){				
					$(this).nextAll('a').bind("click", function(){
						if($(this).is(".next"))	{
							$(this).parent('li').parent('ul').animate({"margin-left": (-(intIndex + 1) * theWidth)}, 1000)	
						}else if($(this).is(".previous")){
							$(this).parent('li').parent('ul').animate({"margin-left": (-(intIndex - 1) * theWidth)}, 1000)	
						} else if($(this).is(".startover")){
							$(this).parent('li').parent('ul').animate({"margin-left": (0)}, 1000)
						}
					});//close .bind()									 
				});//close .each()
        	});
        </script>
        <?php wp_head(); ?>
    </head>