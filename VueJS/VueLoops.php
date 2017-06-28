<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Vue.JS Tutorial</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	
</head>
<body>
	<div id="app">
	<h1>{{message}}</h1>
	<ul>
	    <!--<li style="list-style-type:none;" v-for="todo in todos">{{todo.id}} {{todo.text}}</li>-->
		<li v-for="count in count">item #{{count}}</li>
	   </ul>
	</div>
</body>
<script src="https://unpkg.com/vue@2.3.4"></script>

<script>
 var app = new Vue({
	 el: '#app',
	 data: {
		 message:'Hello World',
		 todos:[
		 {text:'Learn Vue', id:1},
		 {text:'Like the video', id:2},
		 {text:'Suscribe to Dev Marketer',id:3,}
		 
		 ],
		 count:100
	 }
 })
</script>
</html>
