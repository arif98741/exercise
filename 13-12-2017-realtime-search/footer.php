
		<section class="footeroption">
		    <h2>www.phpdark.com</h2>
		    <h4 style="margin-top: 0px;">&copy; Ariful Islam</h4>
		</section>
		</div>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script>
			$(document).ready(function(){
			
				$("#searchbar").keyup(function() {
					var val = $(this).val();
					$.ajax({
						url: 'fetch.php',
						data: {

							action : 'getdata',
							value : val
						},
						method:'post',
						success:function(data){
							console.log(data);
							$('.message').html(data);
						},error:function(){

						}
					});
					
				});
			});
		</script>
	</body> 
</html>