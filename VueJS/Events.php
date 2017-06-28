<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Vue.JS Tutorial</title>
	<!--Bootstrap-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	
</head>
<body><!--v-on is like onclick or onmouseover in javascript..You can replace v-on: with @ sign-->
	<div id="app">
	<h1>{{cleanUrl}}</h1>
	<p>
	Visit: <a v-bind:href="url">Human URL</a>
	</p>
	<input type="text" class="form-control" v-model="url">
	<button @click="humanizeURL" class="btn btn-primary">Humanize Me!</button>
	</div>
</body>
<script src="https://unpkg.com/vue@2.3.4"></script>

<script>
 var app = new Vue({
	 el: '#app',
	 data: {
		 message:'Hello World',
		 url:"",
         cleanUrl:"" 
	 },
	 methods:{
		 humanizeURL: function(){
			 this.cleanUrl = this.url.replace(/^https?:\/\//,'').replace(/\/$/,'')
		 }
	 }
 
 })
</script>
</html>
