$(document).ready(function(){
  $(".goods_item .foto").hover(
    function () {
      $(this).find("P").slideToggle(100);
      $(this).find(".shadow").slideToggle(100);
    },
    function () {
      $(this).find(".shadow").slideToggle(100);
      $(this).find("P").slideToggle(500);
    }
  );
  
  var slider2 = $('#slider2').bxSlider({
    /* auto: true,
    speed: 150, */
    controls: false,
    displaySlideQty: 4,
    moveSlideQty: 1
  });
  
  $('#slider2_prev').click(function(){
	  slider2.goToPreviousSlide();
  });

  $('#slider2_next').click(function(){
	  slider2.goToNextSlide();
		
  });
  
  /* all parameters begin */
	$('#all_parameters .all_but').click(function() {
		$('.block_2').toggle();
	});
	/* all parameters end */
	
  /* trackbar begin */
  
  jQuery("#slider_price").slider({
  	min: 10,
  	max: 5000,
  	values: [1000,3000],
  	range: true,
  	stop: function(event, ui) {
  		jQuery("input#minCost").val(jQuery("#slider_price").slider("values",0));
  		jQuery("input#maxCost").val(jQuery("#slider_price").slider("values",1));
      
      jQuery("#minCostText, #maxCostText").empty();
      jQuery("#minCostText").append(jQuery("#slider_price").slider("values",0));
      jQuery("#maxCostText").append(jQuery("#slider_price").slider("values",1));
    },
    
    slide: function(event, ui){
  		jQuery("input#minCost").val(jQuery("#slider_price").slider("values",0));
  		jQuery("input#maxCost").val(jQuery("#slider_price").slider("values",1));
      
      jQuery("#minCostText, #maxCostText").empty();
      jQuery("#minCostText").append(jQuery("#slider_price").slider("values",0));
      jQuery("#maxCostText").append(jQuery("#slider_price").slider("values",1));
    }
  });
  
  /* trackbar end */
	
	/* tabs begin */
	$(".link_1").click(function() {
	  $(".link_1, .link_2, .link_3").removeClass("act_tab");
		$(".link_1").addClass("act_tab");
		
		$(".txt").hide();
		$('.txt_1').show();
	});
	
	$(".link_2").click(function() {
	  $(".link_1, .link_2, .link_3").removeClass("act_tab");
		$(".link_2").addClass("act_tab");
		
		$(".txt").hide();
		$('.txt_2').show();
	});
	
	$(".link_3").click(function() {
	  $(".link_1, .link_2, .link_3").removeClass("act_tab");
		$(".link_3").addClass("act_tab");
		
		$(".txt").hide();
		$('.txt_3').show();
	});
	/* tabs end */
	
	
	/* list_mode begin */
	$('.icons_act').click(function() {
	  $('.list').removeClass('list_act');
		$(this).addClass('icons_act');
    $('.product_block').removeClass('product_block_act');
    $('.catalog_goods_block').removeClass('catalog_goods_block_act');
		
	});
	$('.list').click(function() {
	  $('.icons_act').addClass('icons');
		$('.icons_act').removeClass('icons_act');
		$(this).addClass('list_act');
    $('.catalog_goods_block').addClass('catalog_goods_block_act');
    $('.product_block').addClass('product_block_act');
	});
	/* list_mode end */
	
	
	/* accordion begin */
  $('#accordion > div:not(:first)').hide();
	$('#accordion > H3').click(function() {
	  $('#accordion > H3').removeClass('active');
		$('#accordion > H3 SPAN').removeClass('span_active');
		$('#accordion > DIV').hide();
		
		$(this).addClass('active');
		$(this).find('SPAN').addClass('span_active');
		$(this).next().addClass('active').show();
	});
	/* accordion end */
	
  var top_slider = $('#top_slider').bxSlider({
    auto: true,
    pause: 10000,
    // autoDelay: 10000,
    speed: 500,
    pager: true,
    controls: false
  });
  
  $('#top_slider_prev').click(function(){
	  top_slider.goToPreviousSlide();
  });
  
  $('#top_slider_next').click(function(){
	  top_slider.goToNextSlide();
  });
  
  $('#filter_view_all').click(function() {
    $('.all_brands').toggle();
	});
});


/* count begin */
function counter_value_inc($id) 
{
  var data = $('#counter_value-'+$id).val();
	$('#counter .minus').removeClass('minus_no_act');

	if(data > 0) {
	  var result = parseInt(data) + 1;
	  if (result >= 99) {
		  $('#counter_value-'+$id).val(99);
	    $('#counter .plus').addClass('plus_no_act');
	  }
		else {
		  $('#counter_value-'+$id).val(result);
		}
	}
}
function counter_value_dec($id)
{
  var data = $('#counter_value-'+$id).val();
	$('#counter .plus').removeClass('plus_no_act');
	if(data > 0) {
		var result = parseInt(data) - 1;
		if(result <= 1) {
	    $('#counter_value-'+$id).val(1);
			$('#counter .minus').addClass('minus_no_act');
	  } else {
		  $('#counter_value-'+$id).val(result);
		}
	}
	return false
}
/* count end */