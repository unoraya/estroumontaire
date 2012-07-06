<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/stylecontrol/colorpicker/js/colorpicker.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/stylecontrol/colorpicker/js/eye.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/stylecontrol/colorpicker/js/utils.js"></script>
<script type="text/javascript"> 
$(document).ready(function(){ 
        $(".trigger").click(function(){ 
                $(".stylepanel").toggle("medium"); 
                $(this).toggleClass("active"); 
                return false; 
        }); 



	jQuery(".theme").keyup(function() 
    { 
    var face = jQuery("#face").val(); 
    jQuery("body").css("font-family", face); 
        }); 

    
	$('#colorSelector').ColorPicker({
			color: '#0000ff',
			onShow: function (colpkr) {
				$(colpkr).fadeIn(500);
				return false;
			},
			onHide: function (colpkr) {
				$(colpkr).fadeOut(500);
				return false;
			},
			onChange: function (hsb, hex, rgb) {
				$('#colorSelector div,.body2').css('backgroundColor', '#' + hex);
			}
		});
		
jQuery('#colorSelector2').ColorPicker({
				color: '#24303d',
			onShow: function (colpkr) {
				jQuery(colpkr).fadeIn(500);
				return false;
			},
			onHide: function (colpkr) {
				jQuery(colpkr).fadeOut(500);
				return false;
			},
			onChange: function (hsb, hex, rgb) {
				jQuery('#colorSelector2 div,.body3').css('backgroundColor', '#' + hex);
			}
		});
	
	jQuery('#colorSelector3').ColorPicker({
				color: '#212121',
			onShow: function (colpkr) {
				jQuery(colpkr).fadeIn(500);
				return false;
			},
			onHide: function (colpkr) {
				jQuery(colpkr).fadeOut(500);
				return false;
			},
			onChange: function (hsb, hex, rgb) {
				jQuery('#colorSelector3 div').css('backgroundColor', '#' + hex);
				jQuery('body,.body3,.body3 p').css('color', '#' + hex);
			}
		});
	
	
			jQuery('#colorSelector4').ColorPicker({
			color: '#3d6aa1',
			onShow: function (colpkr) {
				jQuery(colpkr).fadeIn(500);
				return false;
			},
			onHide: function (colpkr) {
				jQuery(colpkr).fadeOut(500);
				return false;
			},
			onChange: function (hsb, hex, rgb) {
				jQuery('#colorSelector4 div').css('backgroundColor', '#' + hex);
				jQuery('a').css('color', '#' + hex);
			}
		});

jQuery('#colorSelector5').ColorPicker({
			color: '#3d6aa1',
			onShow: function (colpkr) {
				jQuery(colpkr).fadeIn(500);
				return false;
			},
			onHide: function (colpkr) {
				jQuery(colpkr).fadeOut(500);
				return false;
			},
			onChange: function (hsb, hex, rgb) {
				jQuery('#colorSelector5 div').css('backgroundColor', '#' + hex);
				jQuery('#sliderwrap,.indexpost h2,.portfoliopost h2,.portfoliopost4 h2,.portfoliopost2 h2,.tooltip,#footer,.bread').css('color', '#' + hex);
			}
		});
		
		
		
		jQuery('#colorSelector6').ColorPicker({
			color: '#3d6aa1',
			onShow: function (colpkr) {
				jQuery(colpkr).fadeIn(500);
				return false;
			},
			onHide: function (colpkr) {
				jQuery(colpkr).fadeOut(500);
				return false;
			},
			onChange: function (hsb, hex, rgb) {
				jQuery('#colorSelector6 div').css('backgroundColor', '#' + hex);
				jQuery('.indexpost h2 a,.portfoliopost h2 a,.portfoliopost4 h2 a,.portfoliopost2 h2 a,#footer a,.bread a').css('color', '#' + hex);
			}
		});
	
    }); 
</script> 


<div class="stylepanel"> 
<ul>
<li><small>Slider, Footer:</small><div class="pickbox" id="colorSelector"><div style="background-color: #24303d"></div></div></li>
<li><small>Boxes:</small><div class="pickbox" id="colorSelector2"><div style="background-color: #eee"></div></div></li>
<li><small>Text:</small><div class="pickbox" id="colorSelector3"><div style="background-color: #212121"></div></div></li>
<li><small>2nd Text:</small><div class="pickbox" id="colorSelector5"><div style="background-color: #212121"></div></div></li>
<li><small>Links:</small><div class="pickbox" id="colorSelector4"><div style="background-color: #3d6aa1"></div></div></li>
<li><small>2nd Links:</small><div class="pickbox" id="colorSelector6"><div style="background-color: #3d6aa1"></div></div></li>
<li><p>&nbsp;</p></li>
<li>
<form method="post" action=""> 

<select class="theme" id="face">
      <option value="">Select Font...</option>
      <option value="Arial, sans-serif">Arial</option>
      <option value="Georgia, serif">Georgia</option>
      <option value="Verdana, Verdana Ref, sans-serif">Verdana</option>
      <option value="Trebuchet MS, Verdana, Verdana Ref, sans-serif">Trebuchet</option>
      <option value="Times, Times New Roman, serif">Times</option>
      <option value="Tahoma,Geneva,Verdana,sans-serif">Tahoma</option>
      <option value="Helvetica Neue, Helvetica, Arial, sans-serif">Helvetica*</option>
      <option value="Palatino Linotype, Palatino, Palladio, URW Palladio L, Book Antiqua, Baskerville, Bookman Old Style, Bitstream Charter, Nimbus Roman No9 L, Garamond, Apple Garamond, ITC Garamond Narrow, New Century Schoolbook, Century Schoolbook, Century Schoolbook L, Georgia, serif">Palatino</option>
       <option value="&quot;BebasNeueRegular&quot;, sans-serif">Bebas**</option>
       <option value="&quot;ChunkFiveRegular&quot;, sans-serif">ChunkFive**</option>
       <option value="&quot;Rochester&quot;, cursive">Rochester**</option>
       <option value="Droid Serif, arial, serif">Droid**</option>
       <option value="&quot;Vidaloka&quot;, serif">Vidaloka**</option>
       <option value="&quot;Sansita One&quot;, sans-serif">Sansita**</option>
       <option value="&quot;Abel&quot;, sans-serif">Abel**</option>
       <option value="Jockey One, sans-serif">Jockey**</option>
      
      
   </select>
</form>
</li>
<li><p><small>After font selection hit enter!</small></p></li>
<li><p>&nbsp;</p></li>
<li>Features:</li>
<li><a href="http://wpdemo.themnific.com/pre/01/page-templates/home-variant-2">Homepage - Big posts</a></li>
<li><a href="http://wpdemo.themnific.com/pre/01/page-templates/home-variant-4">Minimalistic Blog</a></li>
<li><a href="http://wpdemo.themnific.com/pre/01/portfolios-2/4-columnss">Filterable Portfolio</a></li>

</ul>
<div style="clear:both;"></div> 
</div> 
<a class="trigger" href="#">Styles</a> 
