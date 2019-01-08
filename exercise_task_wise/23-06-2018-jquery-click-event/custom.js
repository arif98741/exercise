$(document).ready(function() {
	//get text response
	$('#clickbtn').click(function() { //action will happened after click the button
		var id = $(this).attr('buttonvalue');
		$.ajax({
			url: 'response.php',
			method: 'get',
			dataType: 'text', //it maybe text or json or others
			data: {
				//this data is passed as serveral parameters with link

				//url format response.php?getresponse=testresponse&buttonvalue=5

				gettextresponse : 'testresponse',
				buttonvalue : id //sending button value as parameter  
			},
			success:function(response){
				console.log(response);  //show message in console. ctrl+shift+i
				$('#message').html(response); //bind results after getting response
			},
			error:function(error){
				console.log(error);
			}
		});	
	});




	//get json response
	$('#jsonbtn').click(function() { //action will happened after click the button
		var status = $(this).attr('status');
		$.ajax({
			url: 'response.php',
			method: 'get',
			dataType: 'json', //it maybe text or json or others
			data: {
				//this data is passed as serveral parameters with link
				//url format response.php?getjsonresponse=jsonresponse&buttonvalue=Developer
				getjsonresponse : 'jsonresponse',
				buttonvalue : status //sending button value as parameter  
			},
			success:function(response){
				console.log(response);  //show message in console. ctrl+shift+i
				var value = "<table>";
				value += "<tr>"
					  + "<th>ID</th>"		
					  + "<th>Name</th>"		
					  + "<th>Email</th>"		
					  + "<th>Mobile</th>"		
					  + "<th>Designation</th>";		
					  + "</tr";		

				for (i= 0; i< response.length; i++) {
					value +='<tr>';

						value  += '<td>'+response[i].id+'</td>'
						value  += '<td>'+response[i].name+'</td>'
						value  += '<td>'+response[i].email+'</td>'
						value  += '<td>'+response[i].mobile+'</td>'
						value  += '<td>'+response[i].designation+'</td>'

					value +='</tr>';
				}

				value +='</table>';

				$('#jsonresponse').html(value);

			},
			error:function(error){
				console.log(error);
			}
		});	
	});


});
