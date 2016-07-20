

<!DOCTYPE html>
<html>

	<head>

		<script src="https://use.fontawesome.com/e07070a13d.js"></script>
		<link href='https://fonts.googleapis.com/css?family=Josefin+Sans' rel='stylesheet' type='text/css'>
		<script   src="https://code.jquery.com/jquery-3.1.0.min.js"   integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s="   crossorigin="anonymous"></script>
		<link rel="stylesheet" href="style.css">
		
	</head>

	<body>
		

	
		<!--<div>
			<button onclick="handlers.toggleAll()">Toggle All</button>
		</div>-->
<div id="container">
	<h1>Todos</h1>
		<div>
			<!--<button onclick="handlers.addTodo()">Add</button>-->
			<i onclick="handlers.toggleAll()" class="fa fa-chevron-down" aria-hidden="true"></i>
			
			<input id="addTodoTextInput" type="text" placeholder="What needs to be done?">
		</div>
		<div>
			<ul id="todoList" onMouseOver="handlers.addDeleteClass(event)" onMouseOut="handlers.removeDeleteClass(event)">

			</ul>
		</div>

		<!--<div>
			<button onclick="handlers.changeTodo()">Change Todo</button>
			<input id="changeTodoPositionInput" type="number">
			<input id="changeTodoTextInput" type="text">
		</div>-->
		<div>
			<button id="update" onclick="todoList.updateTodo()">Save Edits</button>
		</div>

		<div id="directions">
			<h4>Directions</h4>
			<p>Type something that needs to be done and press enter.</p>
			<p>Make sure you click Save Edits after updating a todo!</p>
		</div>

</div>
	
	<script>

	
/*
$.ajax({
    url: "php/listtasks.php",
    type: 'GET',
    dataType:"json",
    contentType: "application/json; charset=utf-8",
    success: function(data) {
       // console.log(alert(data[0]));
        $('#directions').html(data);
        //console.log(JSON.parse(data));

   },
    error: function(error)
    {
       console.log("test");
    }

});*/


 </script>

	<script src="script.js"></script>



	</body>
</html>