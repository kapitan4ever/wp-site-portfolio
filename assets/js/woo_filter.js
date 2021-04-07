jQuery(function($)
{

    if($('.wayup_sortby').length){
        var minprice = $('.wayup_sortby').data('minprice');
        var maxprice = $('.wayup_sortby').data('maxprice');
        var maximum = maxprice + maxprice * 0.15;


        $( "#slider-range" ).slider({
            range: true,
            min: 0,
            max: maximum,
            values: [ minprice, maxprice ],
            step: 5,
            slide: function( event, ui ) {
                $( "#priceMin" ).val( ui.values[ 0 ]);
                $( "#priceMax" ).val( ui.values[ 1 ]);
            },
            stop: function(event, ui){
                wayup_get_posts();
            }
        });
        $( "#priceMin" ).val( $( "#slider-range" ).slider( "values", 0 ));
        $( "#priceMax" ).val( $( "#slider-range" ).slider( "values", 1 ));
    }

    function getCats()
    {
        var cats = []; //Setup empty array

        $(".wayup_filter_check input:checked").each(function() {
            var val = $(this).val();
            cats.push(val); //Push value onto array
        });

        return cats; //Return all of the selected genres in an array
    }

    function getPricesMin(){
        var min_price = $( "#priceMin" ).val();
        return min_price;
    }

    function getPriceMax(){
        var max_price = $( "#priceMax" ).val();
        return max_price;
    }

    function wayup_order(){
        var order = $( ".sort-menu li.active a" ).data('value');
        return order;
    }

    $(".wayup_filter_check input").on('change',function(){
        wayup_get_posts();
    });


    $(document).on("click",".page-numbers",function(e){
        e.preventDefault();

        var url = $(this).attr('href'); //Grab the URL destination as a string
        var paged = url.split('&paged='); //Split the string at the occurance of &paged=

        if(~url.indexOf('&paged=')){
            paged = url.split('&paged=');
        } else {
            paged = url.split('/page/');
        }
        wayup_get_posts(paged[1]); //Load Posts (feed in paged value)
    });


    $('.sort-menu li').on('click',function() {
		
        $('.sort-menu li').removeClass('active');
        $(this).addClass('active')
        wayup_get_posts();

        //Меняем эктив
        var order_text = 'по популярности';

        if(wayup_order() == 'rating') {
            order_text = 'по рейтингу';
		} else if(wayup_order() == 'date') {
            order_text = 'по новизне';
		} else if(wayup_order() == 'price') {
            order_text = 'по возрастанию';
		} else if(wayup_order() == 'price-desc'){
            order_text = 'по убыванию';
		}

        $('#parametr').text(order_text);
	});


    function wayup_get_posts(paged)
    {
        var paged_value = paged; //Store the paged value if it's being sent through when the function is called
        var ajax_url = wayup_settings.ajax_url; //Get ajax url (added through wp_localize_script)

        $.ajax({
            type: 'GET',
            url: ajax_url,
            data: {
                action: 'wayup_filter',
                category: getCats,
                min: getPricesMin,
                max: getPriceMax,
                order: wayup_order,
                paged: paged_value //If paged value is being sent through with function call, store here
            },
            beforeSend: function ()
            {
                $('#main').html('ждите');
            },
            success: function(data)
            {
                //Hide loader here
                $('#main').html(data);
            },
            error: function()
            {
                //If an ajax error has occured, do something here...
                $("#main").html('<p>There has been an error</p>');
            }
        });
    }
});