<!--  
 _____                         
|   __|_ _ _ _ _ ___   ___ ___ 
|__   | | | | | |   |_| -_|  _|
|_____|_____|___|_|_|_|___|_|  
 
 -->                              


<!doctype html>
<html lang="en">
	<head>
		<title>Swun.er • The swimrun training tracker</title>
		<link href='https://fonts.googleapis.com/css?family=Lato:100,300,400,700' rel='stylesheet' type='text/css'>

		<link rel="stylesheet" href="./css/main.css">
		<link rel="icon" href="./img/favicon.png">

		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
		<div id="header">
			<a href="#" class="main-logo">Swun.er</a>
			<a href="./settings" class="settings"></a>
		</div><!-- Header -->
		<div id="content">
			<a href="./amphiman" class="competition-detail-button">Last training for <span class="lightfont">Amphiman Bel.</span></a>	
			<div id="last-card-session">
				<div id="card-header">
					<span class="card-title">Swimming session</span>
					<div id="calendar">
						<span class="date">23.02<span>
					</div><!-- calendar -->
				</div><!-- card-header -->

				<!-- PHP LOOP HERE -->
				<div id="card-content">
					<div id="card-item">
						<div class="circle"></div><!-- circle -->
						<p class="record">
							<p class="distance">600m </p>
							<p class="time">14'32</p>
							<p class="time-difference">(+2'57)</p>  
						</p>
					</div><!-- card-item -->	
					<div id="card-item">
						<div class="circle"></div><!-- circle -->
						<p class="record">
							<p class="distance">200m </p>
							<p class="time">9'24</p>
							<p class="time-difference">(+0'46)</p>  
						</p>
					</div><!-- card-item -->
					<div id="card-item">
						<div class="circle"></div><!-- circle -->
						<p class="record">
							<p class="distance">250m </p>
							<p class="time">12'39</p>
							<p class="time-difference">(+1'01)</p>  
						</p>
					</div><!-- card-item -->
					<div id="card-item">
						<div class="circle"></div><!-- circle -->
						<p class="record">
							<p class="distance">400m </p>
							<p class="time">20'10</p>
							<p class="time-difference">(+2'02)</p>  
						</p>
					</div><!-- card-item -->

				</div><!-- card-content -->
			</div><!-- last-card-session -->
		</div><!-- Content -->
		<a href="./newsession" class="new-training-button">New training session</a>
	</body>
</html>