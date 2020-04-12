/* SOFT SCROLL TO A TAG, 
	Util for a landing page
*/

/* Add the class 'scrollto' the link, and the property data-id ponting to the target id */
/* example:
	<li class="item-menu" >
	 <a href="#" class="scrollto" data-id="target-id">
	   Click to Target
	 </a>
	</li>
	
	<section id="target-id">
		<p> content of the section </p>
	</section>
*/

$(document).ready(function(){
	$('.scrollto').bind('click',function(e){
		e.preventDefault();
		$('.item-menu').removeClass('active');
		var activo = $(this).parents('.item-menu'); 
		activo.addClass('active');
		var id = $(this).data('id');
		scrollTo('#'+id,1.5);
	});
});

function scrollTo(id,sec){
    if(id == undefined) id = "";
    if(sec == undefined){ sec = 2; }
    $(id).show();
    $('html,body').animate({scrollTop: $(id).offset().top}, sec*1000, 'swing');

    return false;
}