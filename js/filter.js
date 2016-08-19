	jQuery(document).ready(function($){
		data = new Object();
		sort = false;
		pricerange = false;
		category = false;
		ajaxreqvest = false;
				
		$('#category a').click(function(e){
			e.preventDefault();
			category = true;
			if( $("#category").find(".active") )
			{
				$("#category").find(".active").removeClass('active');
			}			
			$(this).addClass('active');
			data['category'] = $(this).attr('cat');
			
			data["filtername"] = $(".orderby option:selected").val();
			data["page"] = 1;
			data['min-price'] = $(".from").text().substring(1); 
			data['max-price'] = $(".to").text().substring(1); 
			filter();
		});
		
		var b = 0;
		var c = 10000;
		var d = 0;
		var e = 10000;
		$(".price_slider").slider({
			range:!0,
			animate:!0,
			min:b,
			max:c,
			values:[d,e],
			create:function(){
				$(".price_slider_amount #min_price").val(d),$(".price_slider_amount #max_price").val(e),$(document.body).trigger("price_slider_create",[d,e])
				},
			slide:function(b,c){
				$("input#min_price").val(c.values[0]),$("input#max_price").val(c.values[1]),$(document.body).trigger("price_slider_slide",[c.values[0],c.values[1]])
				},
			change:function(b,c){
				$(document.body).trigger("price_slider_change",[c.values[0],c.values[1]]);
					pricerange = true;
					data["filtername"] = $(".orderby option:selected").val();
					data["page"] = 1;
					data['min-price'] = c.values[0]; 
					data['max-price'] = c.values[1]; 
					if( $("#category").find(".active") )
					{
					   data['category'] = $("#category").find(".active").attr('cat');
					}
					filter();
				}
		})
		
		
	    $('select').on('change', function() {
			//alert($('#min_price').data('min')); return false;
		  sort = true;
		  data["filtername"] = this.value; // or $(this).val()
		  data["page"] = 1;
		  data['min-price'] = $(".from").text().substring(1); 
		  data['max-price'] = $(".to").text().substring(1); 
	
		  if( $("#category").find(".active") )
		  {
			data['category'] = $("#category").find(".active").attr('cat');
		  }
		  filter();
		});		
		
		
		$(document).on("click", ".woocommerce-pagination a", function(e){
			e.preventDefault();
			
			//$(this).closest('ul li').find('.disabled').removeClass('disabled');             
			//$(this).addClass('disabled');
			//if( $(this).parent().find('.disabled').length == 1 )
				//alert("got it")
			
			/*if(sort == true || pricerange == true || category == true)
			{
				data["page"] = $(this).data('ci-pagination-page');
			}
			else
			{
				data["page"] = 1;
			}*/
			
			data["page"] = $(this).data('ci-pagination-page');
			data["filtername"] = $(".orderby option:selected").val();
			if( $("#category").find(".active") )
			{
			  data['category'] = $("#category").find(".active").attr('cat');
			}
			data['min-price'] = $(".from").text().substring(1); 
			data['max-price'] = $(".to").text().substring(1); 
			  
			filter();
			}
		);
		
	function filter(){
	  $('#products').children().fadeOut('fast',function(){ });
	  $('.woocommerce-pagination').children().fadeOut('fast',function(){ });
	  var loading = jQuery('<img />',{class:'prloading', src:base_url+'images/icons/loader.gif'}).appendTo('#products');
	  
	  if( ajaxreqvest )
			ajaxreqvest.abort();
		
		ajaxreqvest = $.post(base_url +''+ lang + '/products/filter',data, function(data,status){
			
		})
		.success(function(data){
			$(loading).remove();
			alert(data); return false;
			
			var obj = jQuery.parseJSON( data );
			var length = 0;
			if(obj)
			{
				length = obj["products"][0].length;
			}
			if( length < 1 )
			{
				//alert("no products found");
			}
			
		 for(var i = 0; i<length; i++)
		 {
			var div = jQuery('<div/>',{class:'noo-md-4 noo-sm-6 noo-xs-6 noo-product-item post-639 product type-product status-publish has-post-thumbnail product_cat-car-covers product_cat-poster product_cat-vehicle product_tag-painting product_tag-seat-cover product_tag-vehicle has-featured shipping-taxable purchasable product-type-simple product-cat-car-covers product-cat-poster product-cat-vehicle product-tag-painting product-tag-seat-cover product-tag-vehicle instock'}).appendTo('#products');
			var element = jQuery('<div />',{class:'noo-product-inner'}).appendTo(div);
			var subnail = jQuery('<div>', {class:'woo-thumbnail'}).appendTo(element);
			var fuullink = jQuery('<a />',{href:base_url+'/'+lang+'products/detail/'+obj["products"][0][i]}).appendTo(subnail);
			jQuery('<div />',{class:'bk'}).appendTo(fuullink);
			jQuery('<img />',{src:base_url+'/images/resource/'+obj["products"][2][i],class:'attachment-noo-woo-thumbnail wp-post-image',height:'350',width:'270'}).appendTo(fuullink);
			
			var prmeta = jQuery('<div />',{class:'noo-product-meta'}).appendTo(subnail);
			var cartmeta = jQuery('<div />',{class:'entry-cart-meta'}).appendTo(prmeta);
			jQuery('<a />',{href:base_url+'/'+lang+'products/detail/'+obj["products"][0][i],text:'Detail',rel:'nofollow',class:'button add_to_cart_button product_type_simple'}).appendTo(cartmeta);
							
			var prfooter = jQuery('<div />',{class:'noo-product-footer'}).appendTo(element);
			var prheader = jQuery('<h3 />',{text:obj["products"][1][i]}).appendTo(prfooter);
			jQuery('<a />',{href:base_url+'/'+lang+'products/detail/'+obj["products"][0][i]}).appendTo(prheader);
			var price = jQuery('<span />',{class:"price"}).appendTo(prfooter);
			jQuery('<span />',{class:"amount",text:"$"+obj["products"][3][i] }).appendTo(price);			
		 }
		 $('.woocommerce-pagination').html(obj['links']);
		// pagecount
	
		var count = parseInt(obj['total_rows']);
		var page = parseInt(obj['page']);
		var size = parseInt(obj['size']);
			if( count < 1 )
			{
				$('#pagecount').html('<p class="woocommerce-info">No products were found matching your selection.</p>');			
			}
			else if( count == 1 )
			{
				$('#pagecount').html('<p class="woocommerce-result-count-single"> Showing the single result</p>');
			}
			else if( count >= 1 )
			{
				if( page == 1)
				{
					$('#pagecount').html('<p class="woocommerce-result-count">					Showing 1–'+size+' of '+count+' results</p>');
				}
				else
				{
										
					var start = ((page-1)*size) + 1;
					var end = ((page-1)*size) + size;
					if( parseInt(end) > count )
					{
						end = count - ((page-1)*size);
						end = start + end - 1;
					}
					$('#pagecount').html('<p class="woocommerce-result-count">					Showing '+ start+ '–'+ end +' of '+ count +' results</p>');					
				}
				
			}
							
		})
		 .fail(function(){
			console.log("ERROR");
			return false;
		});			
	  }
		
	});