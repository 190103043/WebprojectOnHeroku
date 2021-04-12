<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link href='https://fonts.googleapis.com/css?family=Merienda' rel='stylesheet'>
		<link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>

    	<title>Italian Restaurant</title>
    	<link rel="icon" href="images/logo.png">
	</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">
	  	<div id="Welcome">
	  		<!---Start navigation Bar -->
	    	<nav class="navbar navbar-expand-lg navbar fixed-top  navbar-light bg-light">
		 		<a class="navbar-brand" href="#Welcome">
    				<img src="images/logo.png" width="50" height="50" class="d-inline-block" alt=""> {{ __('main.Italian restaurant')}}
		 		</a>
		 		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
		    		<span class="navbar-toggler-icon"></span>
		 		</button>
			  	<div class="collapse navbar-collapse" id="navbarText">
			    	<ul class="navbar-nav ml-auto">
			      		<li class="nav-item">
			        		<a class="nav-link" href="#Welcome">{{ __('main.Welcome')}}</a>
			      		</li>
					    <li class="nav-item">
					    	<a class="nav-link" href="#Restaurant">{{ __('main.Restaurant')}}</a>
					    </li>
					    <li class="nav-item">
					    	<a class="nav-link" href="#Menu">{{ __('main.Menu')}}</a>
					    </li>
					    <li class="nav-item">
					    	<a class="nav-link" href="#Reservation">{{ __('main.Reservation')}}</a>
					    </li>
					    <li class="nav-item">
					    	<a class="nav-link" href="#OurLocation">{{ __('main.Our location')}}</a>
					    </li>
					    <li class="nav-item">
					    	<a href="{{ route('locale', 'en')}}" class="language" rel="it-IT"><img src="https://findicons.com/files/icons/2757/flags_of_the_world/256/ru.png" class="flag" alt="Italiano"></a>
					    	<a href="" class="language" rel="en-En"><img src="images/english.ico" class="flag" alt="English"></a>
					    </li>
				    </ul>
				</div>
			</nav>
			<!--- End Navigation Bar -->
			<!--- Start Carousel -->
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
				    	<img class="d-block w-100 img-fluid img-slider" src="images/slider1.jpg" alt="First slide">
				    	<div class="carousel-caption">
						    <h2>{{ __('main.Welcome!')}}</h2>
							<p>...</p>
						</div>
				    </div>
				    <div class="carousel-item">
				      	<img class="d-block w-100 img-fluid img-slider" src="images/slider2.jpg" alt="Second slide">
				      	<div class="carousel-caption">
						    <h2>{{ __('main.Traditional Italian cuisine')}}</h2>
							<p>...</p>
						</div>
				    </div>
				    <div class="carousel-item">
				      	<img class="d-block w-100 img-fluid img-slider" src="images/slider3.jpg" alt="Third slide">
				      	<div class="carousel-caption">
						    <h2>{{ __('main.Featured Products')}}</h2>
							<p>...</p>
						</div>
				    </div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				    <span class="sr-only">{{ __('main.Previous')}}</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
				    <span class="sr-only">{{ __('main.Next')}}</span>
				</a>
			</div>
		</div>
			<!--- End of Carousel -->
			<!--- Restaurant-->
		<div class="container">
		 	<div class="row" id="Restaurant">
	    		<div class="col navMenu">
	     		 	<h2 class="text-center" > ~ {{ __('main.Restaurant')}} ~</h2>
	    		</div>
  			</div>
  			<div class="row bg-light" >
  				<div class="col-md-6">
  					<h3>{{ __('main.Location')}} </h3>
  					<p> {{ __('main.Thanks for stopping by. We are the last true Italian restaurant in Milan, serving delicious Italian cuisine prepared by the best chefs. Browse our website and take a look at our menu in just a few minutes. We hope you will join us soon to enjoy some great Italian food.')}}</p>
  					<h5>{{ __('main.A unique experience')}}</h5>
  					<p>{{ __('main.Thanks for stopping by. We are the last true Italian restaurant in Milan, serving delicious Italian cuisine prepared by the best chefs. Browse our website and take a look at our menu in just a few minutes. We hope you will join us soon to enjoy some great Italian food.')}}</p>
  				</div>
  				<div class="col-md-6" data-aos="fade-up">
  					<img class="img-fluid" src="images/location.jpg">
  				</div>
  			</div>
  			<div class="row bg-light"><br></div>
  			<div class="row bg-light">
  				<div class="col-md-6 order-md-1 order-2" data-aos="fade-up">
  					<img class="img-fluid " src="images/cuisine.jpg">
  				</div>
  				<div class="col-md-6 order-md-12 order-1">
  					<h3>{{ __('main.Сuisine')}}</h3>
                      <p> {{ __('main.Thanks for stopping by. We are the last true Italian restaurant in Milan, serving delicious Italian cuisine prepared by the best chefs. Browse our website and take a look at our menu in just a few minutes. We hope you will join us soon to enjoy some great Italian food.')}}</p>
  					<h5>{{ __('main.A unique experience')}}</h5>
  					<p>{{ __('main.Thanks for stopping by. We are the last true Italian restaurant in Milan, serving delicious Italian cuisine prepared by the best chefs. Browse our website and take a look at our menu in just a few minutes. We hope you will join us soon to enjoy some great Italian food.')}}</p>
  			</div>
  			<!--- End of Restaurant -->
  			<!--- Start of Menu-->
			<div class="row" id="Menu">
				<div class="col navMenu">
	     		 	<h2 class="text-center" >~ {{ __('main.Menu')}} ~</h2>
				</div>
			</div>
			<div class="row bg-light">
				<div class="col-md-4" data-aos="slide-up">
					<div class="card view zoom">
  						<img class="card-img-top img-fluid " src="images/meat-menu.jpg">
					  	<div class="card-body">
					  		<h5 class="card-title">~ {{ __('main.Meat menu')}} ~</h5>
					    	<ul class="list-group list-group-flush">
							    <li class="list-group-item">{{ __('main.Chunks of meat in a puff pastry nest')}}</li>
							    <li class="list-group-item">{{ __('main.Bruschetta with pork curry')}}</li>
							 	<li class="list-group-item">{{ __('main.Ham eggs')}} </li>
							 	<li class="list-group-item">{{ __('main.Vitello tonnato')}}</li>
							 	<li class="list-group-item">{{ __('main.Marinated turkey breast with olives')}}</li>
							</ul>
					  	</div>
					</div>
				</div>
				<div class="col-md-4" data-aos="slide-up">
					<div class="card">
  						<img class="card-img-top img-fluid " src="images/fish-menu.jpg">
					  	<div class="card-body">
					  		<h5 class="card-title">~ {{ __('main.Fish menu')}} ~</h5>
					    	<ul class="list-group list-group-flush">
							    <li class="list-group-item">{{ __('main.Octopus carpaccio')}}</li>
							    <li class="list-group-item">{{ __('main.Green mussels')}}</li>
							 	<li class="list-group-item">{{ __('main.Shrimp cocktail')}}</li>
							 	<li class="list-group-item">{{ __('main.Risotto with garlic cream')}}</li>
							 	<li class="list-group-item">{{ __('main.Fish ravioli with shrimp cream')}}</li>
							</ul>
					  	</div>
					</div>
				</div>
				<div class="col-md-4" data-aos="slide-up">
					<div class="card">
  						<img class="card-img-top img-fluid" src="images/menu-vegetarian.jpg">
					  	<div class="card-body">
					  		<h5 class="card-title">~ {{ __('main.Vegetarian menu')}} ~</h5>
					    	<ul class="list-group list-group-flush">
							    <li class="list-group-item">{{ __('main.Parmesan eggplant')}}</li>
							    <li class="list-group-item">{{ __('main.Strudel with ricotta and spinach')}}</li>
							 	<li class="list-group-item">{{ __('main.Spinach and ricotta meatballs')}}</li>
							 	<li class="list-group-item">{{ __('main.Omelet with baked potatoes')}}</li>
							 	<li class="list-group-item">{{ __('main.Spaghetti with vegetarian cutlets')}}</li>
							</ul>
					  	</div>
					</div>
				</div>
			</div>
			<!--- End of Menu -->
			<!--- Start of Reservation-->
			<div class="row" id="Reservation">
				<div class="col navMenu">
	     		 	<h2 class="text-center">~ {{ __('main.Reservation')}} ~</h2>
				</div>
			</div>
			<div class="row">
				<div class=" col-lg-12 reserve-container" data-aos="fade-up">
					<img class="img-fluid image-reserve" src="images/reserve.jpg">
					<div class="reserve-text col-lg-12 ">
						<h1 class="text-center">{{ __('main.Schedules')}}</h1>
						<div class="row">
							<div class="col-6">
							   	<h2 class="text-center">{{ __('main.Lunch')}}</h2>
							    <h5 class="text-center">12:00 - 15:00</h5>
							</div>
							<div class="col-6">
							    <h2 class="text-center">{{ __('main.Dinner')}}</h2>
							    <h5 class="text-center">19:30 - 23:30</h5>
							</div>
						</div>
					</div>
				</div>
			</div>
			<br>
			<div class="row bg-light">
				<div class="col">


				 <h1>Upload file</h1>
				   <form action="/" method="POST" enctype="multipart/form-data">
				   @csrf
				
				  
                  <input type="file" class="form-control-file" name="file"> <br> <br>
					 <button type="submit" class="btn btn-success">Upload File</button>
				   </form>  

				
		
                   <canvas id="densityChart" width="600" height="400"></canvas>

                   <canvas id="speedChart" width="600" height="400"></canvas>
                   
				   <canvas id="speedChart2" width="600" height="400"></canvas>
				   
					<form id="addform">
						<div class="form-row">
						  	<div class="form-group col-6">
						  		<h3>{{ __('main.Reservation')}}</h3>
						  		<!-- <label for="inputDate"> Date</label>
						  		<input type="date" class="form-control" id="inputDate" placeholder="Data gg/mm/aaaa"> -->
						  	</div>
						  	<div class="form-group col-6">
						  		<h3>{{ __('main.Details')}}</h3>
						  		<label for="inputName">{{ __('main.Firstname')}}</label>
						  		<input type="text" class="form-control" id="inputName" placeholder="fname">
								  <label for="inputName">{{ __('main.Surname')}}</label>
								  <input type="text" class="form-control" id="inputName" placeholder="lname">
						  	</div>
                                <!-- <div class="form-group col-6">
								<label for="inputName">Lastname</label>
								<input type="text" class="form-control" id="inputName" placeholder="lname">
                           </div> -->
						  	<div class="form-group col-6">
						  		<!-- <label for="inputTime"> Timetables</label>
						  		<input type="time" class="form-control" id="inputTime" placeholder="Timetables"> -->
						  	</div>
						  	<div class="form-group col-6">
						  		<label for="inputEmail">{{ __('main.Email')}}</label>
						  		<input type="email" class="form-control" id="inputEmail" placeholder="Email">
						  	</div>
						  	<div class="form-group col-6">
						  		<!-- <label for="inputNumber"> Number of Guests</label>
						  		<input type="number" class="form-control" id="inputNumber" placeholder="Number of Guests"> -->
						  	</div>
						  	<div class="form-group col-6">
						  		<label for="inputCel">{{ __('main.Phone')}}</label>
						  		<input type="tel" class="form-control" id="inputCel" placeholder="Phone">
						  	</div>
  							<div class="form-group col-12">
  								<!-- <label for="inputComment"> Further requests</label>
								<textarea class="form-control" rows="4" id="inputComment" placeholder="Further requests"></textarea> -->
							</div>
					 	</div>
						<div class="row">
					  		<div class="col-md-4 col-md-offset-4">
					  			<button type="submit" class="btn btn-secondary btn-block">{{ __('main.Reservation')}}</button>
					  		</div>
					  	</div>
					</form>
				</div>
			</div>
			<!--- End of Reserve -->
			<!--- Start of Our Location -->
			<div class="row" id="OurLocation">
				<div class="col navMenu">
					<h2 class="text-center">~ {{ __('main.Our location')}} ~</h2>
				</div>
			</div>
			<div class="row">
				<div id="map" class="col-md-9 map"></div>
				<div class="col-md-3">
					<h3>{{ __('main.The address:')}}</h3>
					<p>{{ __('main.Viale Enrico Fermi, 20159 Milan, Milan (Lombardy)')}}</p>
					<h3>{{ __('main.Email:')}}</h3>
					<p>mail@example.com</p>
				</div>
			</div>
			<!--- End of Our Location -->
			<div class="row footer bg-light">
				<div class="col">
					<p class="text-center">Follow us: <a class="social-icon" href="https://www.facebook.com/rubiktechnologiesShpk/"><i class="fab fa-facebook"></i></a> <a class="social-icon" href="https://www.instagram.com/rubiktechnologies/"><i class="fab fa-instagram"></i></a></p>
				</div>
				<div class="col">
					<p class="text-center">Copyright &copy; 2018</p>
				</div>
				<div class="col">
					<p class="text-center">Powered by: <a href="https://rubik-technologies.com/">Rubik Technologies</a></p>
				</div>
			</div>
		</div>
		<footer class="container">
			<div class= "row only-mobile">
				<div class="col-6">
					<a class="btn btn-primary btn-block text-center" href="tel:++390000000"><i class="fa fa-phone" aria-hidden="true"></i> Call</a>
				</div>
				<div class="col-6">
					<a class="btn btn-success btn-block text-center" href="https://api.whatsapp.com/send?phone=+390000000"><i class="fab fa-whatsapp" aria-hidden="true"></i> Whatsapp</a>
				</div>
			</div>
		</footer>

		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
		<script type="text/javascript" src="js/map.js"></script>
		<script type="text/javascript" src="js/smooth-scroll.js"></script>
		<script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
		<script type="text/javascript" src="js/image-effect.js"></script>
		<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDFZjOV0KA68G2YAh-rn7I3qKqCQEh_Ja0&callback=myMap">

<script type="text/javascript">
     $(document).ready(function)		
	    </script>

		<script>
		var densityCanvas = document.getElementById("densityChart");

Chart.defaults.global.defaultFontFamily = "Lato";
Chart.defaults.global.defaultFontSize = 18;

var densityData = {
  label: 'Fish Menu',
  data: [5427, 5243, 5514, 3933, 1326, 687, 1271, 1638],
  backgroundColor: 'rgba(0, 99, 132, 0.6)',
  borderWidth: 0,
  yAxisID: "y-axis-density"
};

var gravityData = {
  label: 'Vegetarian Menu',
  data: [3.7, 8.9, 9.8, 3.7, 23.1, 9.0, 8.7, 11.0],
  backgroundColor: 'rgba(99, 132, 0, 0.6)',
  borderWidth: 0,
  yAxisID: "y-axis-gravity"
};

var planetData = {
	labels: ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"],
  datasets: [densityData, gravityData]
};

var chartOptions = {
  scales: {
    xAxes: [{
      barPercentage: 1,
      categoryPercentage: 0.6
    }],
    yAxes: [{
      id: "y-axis-density"
    }, {
      id: "y-axis-gravity"
    }]
  }
};

var barChart = new Chart(densityCanvas, {
  type: 'bar',
  data: planetData,
  options: chartOptions
});</script>

<script>
var speedCanvas = document.getElementById("speedChart");

Chart.defaults.global.defaultFontFamily = "Lato";
Chart.defaults.global.defaultFontSize = 18;

var dataFirst = {
    label: "Meat Menu",
    data: [0, 59, 75, 20, 20, 55, 40],
    lineTension: 0,
    fill: false,
    borderColor: 'red'
  };

var dataSecond = {
    label: "Fish Menu",
    data: [20, 15, 60, 60, 65, 30, 70],
    lineTension: 0,
    fill: false,
  borderColor: 'blue'
  };

var speedData = {
	labels: ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"],
  datasets: [dataFirst, dataSecond]
};

var chartOptions = {
  legend: {
    display: true,
    position: 'top',
    labels: {
      boxWidth: 80,
      fontColor: 'black'
    }
  }
};

var lineChart = new Chart(speedCanvas, {
  type: 'line',
  data: speedData,
  options: chartOptions
});
</script>

<script>
var speedCanvas = document.getElementById("speedChart2");

Chart.defaults.global.defaultFontFamily = "Lato";
Chart.defaults.global.defaultFontSize = 18;

var speedData = {
  labels: ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"],
  datasets: [{
    label: "Meat Menu ",
    data: [0, 59, 75, 20, 20, 55, 40],
  }]
};

var chartOptions = {
  legend: {
    display: true,
    position: 'top',
    labels: {
      boxWidth: 80,
      fontColor: 'black'
    }
  }
};

var lineChart = new Chart(speedCanvas, {
  type: 'line',
  data: speedData,
  options: chartOptions
});
</script>