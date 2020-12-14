function post_query(url, name, data){
	var str = '';
	$.each( data.split('.'), function(k, v){
		str += '&' + v + '=' + $('#' + v).val();
	});

	$.ajax({
		url: '/' + url,
		type: 'POST',
		data: name + "_f=12424" + str,
		cache: false,
		success: function( result ){
			obj = jQuery.parseJSON( result );
			//console.log(obj.go);
			if ( obj.go ) go(obj.go);
			else if(obj.message && !obj.error) swal(obj.message, { icon: 'success' });
			else if(obj.error) swal(obj.message, { title: "Error!", icon: 'error' });
		}
	})
}

function go(url){
	window.location.href='/' + url;
}

