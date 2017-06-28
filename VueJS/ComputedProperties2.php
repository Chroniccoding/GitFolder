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
<body>
	<div id="app" class="container">
	    <div class="row">
	        <div class="col-md-12 text-center">
	           <h1>You are a <strong>{{level}}</strong></h1>
			   <hr />
			   <h3>Current XP:{{xp}} </h3>
			   </div>
			</div>
			<div class="row">
			<div class="col-md-6 col-md-offset-3">
			<div class="row">
			<div class="col-md-6">
	<button class="btn btn-success btn-block"
	@click="addXP"><span class="glyphicon glyphicon-collapse-up"></span> Add XP</button>
	  </div>
	  <div class="col-md-6">
	  <div class="form-group">
	<button class="btn btn-success btn-block" 
	@click="decreaseXP"><span class="glyphicon glyphicon-collapse-down"></span> Decrease XP</button>
	      </div>
	     </div>
	    </div>
	   </div>
    </div>
   </div>
</body>
<script src="https://unpkg.com/vue@2.3.4"></script>
<script>
 var app = new Vue({
	 el: '#app',
	 data: {
		 xp:10
	 },
	 methods:{
		 
		 addXP:function(){
			 return this.xp +=10
		 },
		 decreaseXP:
		 function(){
			 this.xp -=10
		 }
	 },
	 computed:{
		 level: function(){
			 if(this.xp >=200){
				 return "Pro"
			 }else if(this.xp >=100){
				 return "Intermediate"
			 }else if (this.xp >=0){
				 return "Beginner"
			 }else{
				 return "Banned"
			 }
		 }
	 }
 })
</script>
</html>
