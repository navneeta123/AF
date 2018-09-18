<html>
<head>
<title>
</title>
<style>
* {
    margin: 0;
    padding: 0;
    font-family: 'Lato', sans-serif;
}

.progress {
    position: absolute;   
    height: 160px;
    width: 160px;
    cursor: pointer;
    top: 50%;
    left: 50%;
    margin: -80px 0 0 -80px;
}

.progress-circle {
  transform: rotate(-90deg);
	margin-top: -40px;
}

.progress-circle-back {
	fill: none; 
	stroke: #D2D2D2;
	stroke-width:10px;
}

.progress-circle-prog {
	fill: none; 
	stroke: #7E3451;
	stroke-width: 10px;  
	stroke-dasharray: 0 999;    
	stroke-dashoffset: 0px;
    transition: stroke-dasharray 0.7s linear 0s;
}

.progress-text {
	width: 100%;
	position: absolute;
	top: 60px;
	text-align: center;
	font-size: 2em;
}
</style>
<script>
window.randomize = function() {
  var rand = Math.floor(Math.random() * 100);
	var x = document.querySelector('.progress-circle-prog');
  x.style.strokeDasharray = (rand * 4.65) + ' 999';
	var el = document.querySelector('.progress-text'); 
	var from = $('.progress-text').data('progress');
	$('.progress-text').data('progress', rand);
	var start = new Date().getTime();
  
	setTimeout(function() {
	    var now = (new Date().getTime()) - start;
	    var progress = now / 700;
		  result = rand > from ? Math.floor((rand - from) * progress + from) : Math.floor(from - (from - rand) * progress);
	    el.innerHTML = progress < 1 ? result+'%' : rand+'%';
	    if (progress < 1) setTimeout(arguments.callee, 10);
	}, 10);
}

setTimeout(window.randomize, 200);
$('.progress').click(window.randomize);
</script>
</head>
<body>
<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
<div class="progress">
    <svg class="progress-circle" width="200px" height="200px" xmlns="http://www.w3.org/2000/svg">
	    <circle class="progress-circle-back"
		        cx="80" cy="80" r="74"></circle>
        <circle class="progress-circle-prog"
                cx="80" cy="80" r="74"></circle>
    </svg>
	  <div class="progress-text" data-progress="0">0%</div>
</div>	
</body>
</html>