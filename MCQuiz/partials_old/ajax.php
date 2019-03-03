<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>ajax.php</title>
<script src="js/angular.js"></script>
<script src="js/angular-route.js"></script>
<script src="js/app.js"></script>
<script src="js/controller.js"></script>
<link rel="stylesheet" href="js/style.css" />
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body data-ng-app="myApp" data-ng-controller="indexController">
	
	
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "Dharanic210";
        $dbname = "mcquiz";
        $conn = new mysqli($servername, $username, $password, $dbname);
        $array = array();
        $query = " SELECT * FROM questions  ";
        $result = $conn->query($query);
        //$_POST['next_id'] = 1;
        $number_of_all_questions = mysqli_num_rows($result);
        if ($number_of_all_questions <= $_POST['next_id']) {
            $_POST['next_id'] = 0;
        }
        $query_next_question = "select * from questions where id=(select min(id) from questions where id>{$_POST['next_id']})";
        $result = $conn->query($query_next_question);
        while ($row = $result->fetch_assoc()) {

            $array[] = $row;
        }
        foreach ($array as $item) {
            ?>
            <h2> <?= $item['id'].".". $item['question'] ?>  </h2>
	<input type="radio" id='radio1' name='1' value="option1"
		ng-model="selectedOption">
	<label id='ans1' for='1'><?= $item['option1'] ?></label>
	<br />

	<input type="radio" id='radio2' name='1' ng-model="selectedOption"
		value="option2">
	<label id='ans1' for='2'><?= $item['option2'] ?></label>
	<br />

	<input type="radio" id='radio3' name='1' ng-model="selectedOption"
		value="option3">
	<label id='ans1' for='3'><?= $item['option3'] ?></label>
	<br />

	<input type="radio" id='radio4' name='1' ng-model="selectedOption"
		value="option4">
	<label id='ans1' for='4'><?= $item['option4'] ?></label>
	<br />           
     <?php
        }
        ?>
        
        
        <?php
        session_start(); 
        $_SESSION['selected_answer'] = "{{selectedOption}}";
        echo $_SESSION['selected_answer'].'ajax';
        ?>
        <div>
		<input type="button" id="next" value="next!"
			data-next-question="<?= $_POST['next_id'] ?>"
			data-ng-submit="submit()"></input>
	</div>


</body>
</html>