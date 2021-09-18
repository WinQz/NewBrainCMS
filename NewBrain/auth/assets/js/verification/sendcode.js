	$('#SendDataCode').click(function(){
			$.ajax({
			url: 'https://yadahotel.nl/templates/yada/requests/importcode.php',
			type: "POST",
			dataType:'json', 
			data: ({submitdata:submitdata}),
			success: function(data){
                   location.reload();
	        	}
			});  
		});