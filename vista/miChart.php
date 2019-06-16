<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title></title>
	<script src="Chart.min.js"></script>
	<link rel="stylesheet" href="estilos/estilos.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<canvas id="myChart"></canvas>	 

<div style="margin: auto;width:70%;text-align:center">
<a class="btn btn-primary btn-sm card-title"  href="myChartdonut.php">Mostrar Donut</a>
<a class="btn btn-primary btn-sm card-title" href="../index.php?mod=cancion&ope=index">Volver atrás</a> 

</div>

</body>
<script>
	var ctx = document.getElementById("myChart").getContext('2d');

	var data = [500, 1500, 3000, 4500,
	2150, 5000, 1550, 3250,
	1450, 3650, 2502, 1450];
	var labels = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio","Agosto", "Septiembre","Octubre","Noviembre","Diciembre"]; 
	var myChart = new Chart(ctx, {
		type: 'bar',
		data: {
		labels: labels,
		datasets: [{
		label: 'Reproducciones',
		data: data, 
		backgroundColor: [
			'rgba(255, 99, 132, 1)',
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
			'rgba(54, 162, 235, 1)'
		],
		
		borderColor: [
			'rgba(255, 99, 132, 1)',
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
			'rgba(54, 162, 235, 1)'
		],
		borderWidth: 3
		}]
		},
		options: {
			responsive: true,
			maintainAspectRatio: false, 
		}
		});

</script>
</html>