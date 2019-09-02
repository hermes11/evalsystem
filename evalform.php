<html>  
    <head>  
        <title>Live Poll System in PHP Mysql using Ajax</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
		
    </head>  

    <body>  

    	<center><h1 style="color:darkgreen;">Excel Training Skills and Career Center Inc.</h1></center>
        <div class="container">  
            <br />  
            <br />
			<br />
			<h3 align="center" style="color:red; font-size:25px;">QUESTIONS ABOUT INSTRUCTOR</h3><br />
			<div class="row">
				<div class="col-md-6">
					<form method="post" id="q2_form">
						<h3 style="color:darkblue;">1. Does s/he start his/her class on time?</h3>
						<br />
						<div class="radio">
							<label><h4><input type="radio" name="q2_option" class="q2_option" value="Strongly Dissatisfied" /> Strongly Dissatisfied</h4></label>
						</div>
						
						<div class="radio">
							<label><h4><input type="radio" name="q2_option" class="q2_option" value="Dissatisfied" /> Dissatisfied</h4></label>
						</div>
						<div class="radio">
							<label><h4><input type="radio" name="q2_option" class="q2_option" value="Neutral" /> Neutral</h4></label>
						</div>
						<div class="radio">
							<label><h4><input type="radio" name="q2_option" class="q2_option" value="Satisfied" /> Satisfied</h4></label>
						</div>
						<div class="radio">
							<label><h4><input type="radio" name="q2_option" class="q2_option" value="Strongly Satisfied" />  Strongly Satisfied</h4></label>
						</div>
						<br />
						<input type="submit" name="q2_button" id="q2_button" class="btn btn-primary" />
					</form>
					<br />
				</div>
				<div class="col-md-6">
					<br />
					<br />
					<br />
					<h4 style="color:orange;">EVALUATION RESULT</h4><br />
					<div id="q2_result"></div>
				</div>
			</div>
			
			
			<br />
			<br />
			<br />
		</div>
		<hr>
 <div class="container">  
           
			<h2 align="center"></h2><br />
		<div class="row">
				<div class="col-md-6">
					<form method="post" id="q1_form">
						<h3 style="color:darkblue;">2. Does s/he carry him/her self well? Is s/he groomed and properly attired</h3>
						<br />
						<div class="radio">
							<label><h4><input type="radio" name="q1_option" class="q1_option" value="Strongly Dissatisfied" /> Strongly Dissatisfied</h4></label>
						</div>
						
						<div class="radio">
							<label><h4><input type="radio" name="q1_option" class="q1_option" value="Dissatisfied" /> Dissatisfied</h4></label>
						</div>
						<div class="radio">
							<label><h4><input type="radio" name="q1_option" class="q1_option" value="Neutral" /> Neutral</h4></label>
						</div>
						<div class="radio">
							<label><h4><input type="radio" name="q1_option" class="q1_option" value="Satisfied" /> Satisfied</h4></label>
						</div>
						<div class="radio">
							<label><h4><input type="radio" name="q1_option" class="q1_option" value="Strongly Satisfied" /> Strongly Satisfied</h4></label>
						</div>
						<br />
						<input type="submit" name="q1_button" id="q1_button" class="btn btn-primary" />
					</form>
					<br />
				</div>
				<div class="col-md-6">
					<br />
					<br />
					<br />
					<h4 style="color:orange;">EVALUATION RESULT</h4><br />
					<div id="q1_result"></div>
				</div>
			</div>
			
			
			<br />
			<br />
			<br />
		</div>
<hr>
<div class="container">  
           
			<h2 align="center"></h2><br />
		<div class="row">
				<div class="col-md-6">
					<form method="post" id="q3_form">
						<h3 style="color:darkblue;">3. Does s/he have clear and audible voice?</h3>
						<br />
						<div class="radio">
							<label><h4><input type="radio" name="q3_option" class="q3_option" value="Strongly Dissatisfied" /> Strongly Dissatisfied</h4></label>
						</div>
						
						<div class="radio">
							<label><h4><input type="radio" name="q3_option" class="q3_option" value="Dissatisfied" /> Dissatisfied</h4></label>
						</div>
						<div class="radio">
							<label><h4><input type="radio" name="q3_option" class="q3_option" value="Neutral" /> Neutral</h4></label>
						</div>
						<div class="radio">
							<label><h4><input type="radio" name="q3_option" class="q3_option" value="Satisfied" /> Satisfied</h4></label>
						</div>
						<div class="radio">
							<label><h4><input type="radio" name="q3_option" class="q3_option" value="Strongly Satisfied" /> Strongly Satisfied</h4></label>
						</div>
						<br />
						<input type="submit" name="q3_button" id="q3_button" class="btn btn-primary" />
					</form>
					<br />
				</div>
				<div class="col-md-6">
					<br />
					<br />
					<br />
					<h4 style="color:orange;">EVALUATION RESULT</h4><br />
					<div id="q3_result"></div>
				</div>
			</div>
			
			
			<br />
			<br />
			<br />
		</div>
		<hr>
<div class="container">  
           
			<h2 align="center"></h2><br />
		<div class="row">
				<div class="col-md-6">
					<form method="post" id="q4_form">
						<h3 style="color:darkblue;">4. Does s/he attend classes regulary?</h3>
						<br />
						<div class="radio">
							<label><h4><input type="radio" name="q4_option" class="q4_option" value="Strongly Dissatisfied" /> Strongly Dissatisfied</h4></label>
						</div>
						
						<div class="radio">
							<label><h4><input type="radio" name="q4_option" class="q4_option" value="Dissatisfied" /> Dissatisfied</h4></label>
						</div>
						<div class="radio">
							<label><h4><input type="radio" name="q4_option" class="q4_option" value="Neutral" /> Neutral</h4></label>
						</div>
						<div class="radio">
							<label><h4><input type="radio" name="q4_option" class="q4_option" value="Satisfied" /> Satisfied</h4></label>
						</div>
						<div class="radio">
							<label><h4><input type="radio" name="q4_option" class="q4_option" value="Strongly Satisfied" /> Strongly Satisfied</h4></label>
						</div>
						<br />
						<input type="submit" name="q4_button" id="q4_button" class="btn btn-primary" />
					</form>
					<br />
				</div>
				<div class="col-md-6">
					<br />
					<br />
					<br />
					<h4 style="color:orange;">EVALUATION RESULT</h4><br />
					<div id="q4_result"></div>
				</div>
			</div>
			
			
			<br />
			<br />
			<br />
		</div>

		<hr>
<div class="container">  
           
			<h2 align="center"></h2><br />
		<div class="row">
				<div class="col-md-6">
					<form method="post" id="q5_form">
						<h3 style="color:darkblue;">5. Does s/he move around to assist each student during activities/laboratory?</h3>
						<br />
						<div class="radio">
							<label><h4><input type="radio" name="q5_option" class="q5_option" value="Strongly Dissatisfied" /> Strongly Dissatisfied</h4></label>
						</div>
						
						<div class="radio">
							<label><h4><input type="radio" name="q5_option" class="q5_option" value="Dissatisfied" /> Dissatisfied</h4></label>
						</div>
						<div class="radio">
							<label><h4><input type="radio" name="q5_option" class="q5_option" value="Neutral" /> Neutral</h4></label>
						</div>
						<div class="radio">
							<label><h4><input type="radio" name="q5_option" class="q5_option" value="Satisfied" /> Satisfied</h4></label>
						</div>
						<div class="radio">
							<label><h4><input type="radio" name="q5_option" class="q5_option" value="Strongly Satisfied" /> Strongly Satisfied</h4></label>
						</div>
						<br />
						<input type="submit" name="q5_button" id="q5_button" class="btn btn-primary" />
					</form>
					<br />
				</div>
				<div class="col-md-6">
					<br />
					<br />
					<br />
					<h4 style="color:orange;">EVALUATION RESULT</h4><br />
					<div id="q5_result"></div>
				</div>
			</div>
			
			
			<br />
			<br />
			<br />
		</div>

		<hr>
<div class="container">  
           
			<h2 align="center"></h2><br />
		<div class="row">
				<div class="col-md-6">
					<form method="post" id="q6_form">
						<h3 style="color:darkblue;">6. Does s/he accomodate participant's questions patiently?</h3>
						<br />
						<div class="radio">
							<label><h4><input type="radio" name="q6_option" class="q6_option" value="Strongly Dissatisfied" /> Strongly Dissatisfied</h4></label>
						</div>
						
						<div class="radio">
							<label><h4><input type="radio" name="q6_option" class="q6_option" value="Dissatisfied" /> Dissatisfied</h4></label>
						</div>
						<div class="radio">
							<label><h4><input type="radio" name="q6_option" class="q6_option" value="Neutral" /> Neutral</h4></label>
						</div>
						<div class="radio">
							<label><h4><input type="radio" name="q6_option" class="q6_option" value="Satisfied" /> Satisfied</h4></label>
						</div>
						<div class="radio">
							<label><h4><input type="radio" name="q6_option" class="q6_option" value="Strongly Satisfied" /> Strongly Satisfied</h4></label>
						</div>
						<br />
						<input type="submit" name="q6_button" id="q6_button" class="btn btn-primary" />
					</form>
					<br />
				</div>
				<div class="col-md-6">
					<br />
					<br />
					<br />
					<h4 style="color:orange;">EVALUATION RESULT</h4><br />
					<div id="q6_result"></div>
				</div>
			</div>
			
			
			<br />
			<br />
			<br />
		</div>


    </body>  
</html>  
<script>  
$(document).ready(function(){
	
	fetch_q2_data();
	function fetch_q2_data()
	{
		$.ajax({
			url:"fetch_q2_data.php",
			method:"POST",
			success:function(data)
			{
				$('#q2_result').html(data);
			}
		});
	}
	
	$('#q2_form').on('submit', function(event){
		event.preventDefault();
		var q2_option = '';
		$('.q2_option').each(function(){
			if($(this).prop("checked"))
			{
				q2_option = $(this).val();
			}
		});
		if(q2_option != '')
		{
			$('#q2_button').attr('disabled', 'disabled');
			var form_data = $(this).serialize();
			$.ajax({
				url:"poll.php",
				method:"POST",
				data:form_data,
				success:function()
				{
					$('#q2_form')[0].reset();
					$('#q2_button').attr('disabled', false);
					fetch_q2_data();
					alert("Choice Submitted Successfully");
				}
			});
		}
		else
		{
			alert("Please Select Option");
		}
	});
	
	
	
});  
</script>

<script>  
$(document).ready(function(){
	
	fetch_q1_data();
	function fetch_q1_data()
	{
		$.ajax({
			url:"fetch_q1_data.php",
			method:"POST",
			success:function(data)
			{
				$('#q1_result').html(data);
			}
		});
	}
	
	$('#q1_form').on('submit', function(event){
		event.preventDefault();
		var q1_option = '';
		$('.q1_option').each(function(){
			if($(this).prop("checked"))
			{
				q1_option = $(this).val();
			}
		});
		if(q1_option != '')
		{
			$('#q1_button').attr('disabled', 'disabled');
			var form_data = $(this).serialize();
			$.ajax({
				url:"poll.php",
				method:"POST",
				data:form_data,
				success:function()
				{
					$('#q1_form')[0].reset();
					$('#q1_button').attr('disabled', false);
					fetch_q1_data();
					alert("Choice Submitted Successfully");
				}
			});
		}
		else
		{
			alert("Please Select Option");
		}
	});
	
	
	
});  
</script>

<script>  
$(document).ready(function(){
	
	fetch_q3_data();
	function fetch_q3_data()
	{
		$.ajax({
			url:"fetch_q3_data.php",
			method:"POST",
			success:function(data)
			{
				$('#q3_result').html(data);
			}
		});
	}
	
	$('#q3_form').on('submit', function(event){
		event.preventDefault();
		var q3_option = '';
		$('.q3_option').each(function(){
			if($(this).prop("checked"))
			{
				q3_option = $(this).val();
			}
		});
		if(q3_option != '')
		{
			$('#q3_button').attr('disabled', 'disabled');
			var form_data = $(this).serialize();
			$.ajax({
				url:"poll.php",
				method:"POST",
				data:form_data,
				success:function()
				{
					$('#q3_form')[0].reset();
					$('#q3_button').attr('disabled', false);
					fetch_q3_data();
					alert("Choice Submitted Successfully");
				}
			});
		}
		else
		{
			alert("Please Select Option");
		}
	});
	
	
	
});  
</script>

<script>  
$(document).ready(function(){
	
	fetch_q4_data();
	function fetch_q4_data()
	{
		$.ajax({
			url:"fetch_q4_data.php",
			method:"POST",
			success:function(data)
			{
				$('#q4_result').html(data);
			}
		});
	}
	
	$('#q4_form').on('submit', function(event){
		event.preventDefault();
		var q4_option = '';
		$('.q4_option').each(function(){
			if($(this).prop("checked"))
			{
				q4_option = $(this).val();
			}
		});
		if(q4_option != '')
		{
			$('#q4_button').attr('disabled', 'disabled');
			var form_data = $(this).serialize();
			$.ajax({
				url:"poll.php",
				method:"POST",
				data:form_data,
				success:function()
				{
					$('#q4_form')[0].reset();
					$('#q4_button').attr('disabled', false);
					fetch_q4_data();
					alert("Choice Submitted Successfully");
				}
			});
		}
		else
		{
			alert("Please Select Option");
		}
	});
	
	
	
});  
</script>

<script>  
$(document).ready(function(){
	
	fetch_q5_data();
	function fetch_q5_data()
	{
		$.ajax({
			url:"fetch_q5_data.php",
			method:"POST",
			success:function(data)
			{
				$('#q5_result').html(data);
			}
		});
	}
	
	$('#q5_form').on('submit', function(event){
		event.preventDefault();
		var q5_option = '';
		$('.q5_option').each(function(){
			if($(this).prop("checked"))
			{
				q5_option = $(this).val();
			}
		});
		if(q5_option != '')
		{
			$('#q5_button').attr('disabled', 'disabled');
			var form_data = $(this).serialize();
			$.ajax({
				url:"poll.php",
				method:"POST",
				data:form_data,
				success:function()
				{
					$('#q5_form')[0].reset();
					$('#q5_button').attr('disabled', false);
					fetch_q5_data();
					alert("Choice Submitted Successfully");
				}
			});
		}
		else
		{
			alert("Please Select Option");
		}
	});
	
	
	
});  
</script>

<script>  
$(document).ready(function(){
	
	fetch_q6_data();
	function fetch_q6_data()
	{
		$.ajax({
			url:"fetch_q6_data.php",
			method:"POST",
			success:function(data)
			{
				$('#q6_result').html(data);
			}
		});
	}
	
	$('#q6_form').on('submit', function(event){
		event.preventDefault();
		var q6_option = '';
		$('.q6_option').each(function(){
			if($(this).prop("checked"))
			{
				q6_option = $(this).val();
			}
		});
		if(q6_option != '')
		{
			$('#q6_button').attr('disabled', 'disabled');
			var form_data = $(this).serialize();
			$.ajax({
				url:"poll.php",
				method:"POST",
				data:form_data,
				success:function()
				{
					$('#q6_form')[0].reset();
					$('#q6_button').attr('disabled', false);
					fetch_q6_data();
					alert("Choice Submitted Successfully");
				}
			});
		}
		else
		{
			alert("Please Select Option");
		}
	});
	
	
	
});  
</script>





