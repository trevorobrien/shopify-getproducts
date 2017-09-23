
var url = "/getProducts.php?call=products.json";

var request = $.getJSON(url, function(data){});
// request.error(function(xhr, stat, et){});
// request.fail(function(xhr, stat, et){});
request.always(function(xhr, stat, et){
	if(stat == 'success')
	{
		console.log(xhr)
		/*  the variable xhr contains your JSONP data  */
	}else{
		alert('f');
	}
});