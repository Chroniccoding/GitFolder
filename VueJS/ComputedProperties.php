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
	           <h1>Hello {{fullname}}</h1>
	           <ul class="text-left">
	                <li>{{first}}</li>
		           <li>{{last}}</li>
	           </ul>
	<hr />
	    </div>
	  </div>
	<div class="row">
	    <div class="col-md-6">
		    <div class="form-group">
			<label>First  Name:</label>
			<input type="text" class="form-control" v-model="first"/>
			
			</div>
	    </div>
		<div class="col-md-6">
		    <div class="form-group">
			    <label>Last Name:</label>
				<input type="text" class="form-control" v-model="last"/>
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
		 first: '',
		 last:'',
		},
		<!--Any function can go into this computed function-->
		computed:{
			fullname:function(){
				return this.first+" "+ this.last
		}
	}
})
</script>
</html>
