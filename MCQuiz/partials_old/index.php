<html>
<head>
<title>index.php</title>
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="js/angular.js"></script>
<script src="js/angular-route.js"></script>
<script src="js/app.js"></script>
<script src="js/controller.js"></script>
</head>
<body data-ng-app="myApp" data-ng-controller="indexController">

 <?php
 session_start(); 
 $_SESSION['selected_answer'] = "{{selectedOption}}";
 echo $_SESSION['selected_answer'].'index';
?>

	<div class="service">
		<div>Multiple Choice Quiz</div>
		<div id="container" style="border: 1px solid red;"></div>
		<input type="button" id="submit" value="submit"
			data-ng-click="submit()"></input>
	</div>



	<script>
        $(document).ready(function(){
			$('body').on('click','#next',function(){
				var curr_id=$(this).data('nextQuestion');
				var option1=$('#radio1').is(':checked');
				var option2=$('#radio2').is(':checked');
				var option3=$('#radio3').is(':checked');
				var option4=$('#radio4').is(':checked');
				getQuestion(curr_id,option1,option2,option3,option4);				
				});

			function getQuestion(curr_id,option1,option2,option3,option4){
				$.post("ajax.php",{
					next_id:parseInt(curr_id)+1,
					option1:option1,
    				option2:option2,
    				option3:option3,
    				option4:option4    				
					},
					function(data,status){
						$('#container').html(data);
						});
				}
			getQuestion(-1);        	
        });
	</script>
</body>
</html>

