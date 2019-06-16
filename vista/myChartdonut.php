<!DOCTYPE html>
<html>
<head>
	<title></title>
    <script src="Chart.min.js"></script>
    <link rel="stylesheet" href="estilos/estilos.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<canvas width="500" id="myChart2"></canvas>

<div style="margin: auto;width:70%;text-align:center">
<a class="btn btn-primary btn-sm card-title"  href="miChart.php">Mostrar Barras</a>
<a class="btn btn-primary btn-sm card-title" href="../index.php?mod=cancion&ope=index">Inicio</a> 
</div>

</body>
<script>
	
    var ctx = document.getElementById("myChart2").getContext('2d');

var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio","Agosto", "Septiembre","Octubre","Noviembre","Diciembre"],
        datasets: [{    
            data: [500, 1500, 3000, 4500,
	2150, 5000, 1550, 3250,
	1450, 3650, 2502, 1450], // Specify the data values array
          
            borderColor: ['rgba(255, 99, 132, 1)',
			'rgba(54, 162, 235, 1)',
			'rgba(255, 206, 86, 1)',
			'rgba(75, 192, 192, 1)',
			'rgba(153, 102, 255, 1)',
			'rgba(255, 159, 64, 1)',
			'rgba(255, 99, 132, 1)',
			'rgba(54, 162, 235, 1)',
			'rgba(255, 206, 86, 1)',
			'rgba(75, 192, 192, 1)',
			'rgba(255, 99, 132, 1)',
            'rgba(54, 162, 235, 1)'], 

            backgroundColor: ['rgba(255, 99, 132, 1)',
			'rgba(54, 162, 235, 1)',
			'rgba(255, 206, 86, 1)',
			'rgba(75, 192, 192, 1)',
			'rgba(153, 102, 255, 1)',
			'rgba(255, 159, 64, 1)',
			'rgba(255, 99, 132, 1)',
			'rgba(54, 162, 235, 1)',
			'rgba(255, 206, 86, 1)',
			'rgba(75, 192, 192, 1)',
			'rgba(255, 99, 132, 1)',
			'rgba(54, 162, 235, 1)'],
            borderWidth: 3
        }]},         
    options: {
      responsive: true, // Instruct chart js to respond nicely.
      maintainAspectRatio: false, // Add to prevent default behaviour of full-width/height 
    }
});
</script>
</html>