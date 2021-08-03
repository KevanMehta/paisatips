<?php
$key = "2Y37F9ITHK61EQON";
$url = "https://www.alphavantage.co/query?function=DIGITAL_CURRENCY_DAILY&symbol=BTC&market=CNY&apikey=" . $key;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
curl_close($ch);
$result = json_decode($result, true);
$datapoints = array();
$month = date('m');
$date = (int)date("d");
$flag = false;
if ($date <= 10)
	$flag = true;
else
	$flag = false;
$final = array();
if (isset($result['Time Series (Digital Currency Daily)'])) {
	foreach ($result['Time Series (Digital Currency Daily)'] as $key => $val) {
		if ($flag) {
			if ((substr($key, 5, 2) == $month and substr($key, 0, 4) == "2021") or (substr($key, 5, 2) == $month - 1 and substr($key, 0, 4) == "2021" and substr($key, 8) >= 15)) {
				array_push($datapoints, array("y" => floatval($val['4b. close (USD)']), "label" => Date($key)));
			}
		} else {
			if (substr($key, 5, 2) == $month and substr($key, 0, 4) == "2021") {
				array_push($datapoints, array("y" => floatval($val['4b. close (USD)']), "label" => Date($key)));
			}
		}
	}
} else {
	echo "Something went wrong";
}
$final = array_reverse($datapoints);




$key = "2Y37F9ITHK61EQON";
$url2 = "https://www.alphavantage.co/query?function=CRYPTO_INTRADAY&symbol=ETH&market=USD&interval=5min&apikey=" . $key;
$ch2 = curl_init();
curl_setopt($ch2, CURLOPT_URL, $url2);
curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);
$result2 = curl_exec($ch2);
curl_close($ch2);
$result2 = json_decode($result2, true);
$datapoints2 = array();
$month = date('m');
$date = (int)date("d");
$flag2 = false;
if ($date <= 10)
	$flag2 = true;
else
	$flag2 = false;
$final2 = array();
if (isset($result['Time Series (Digital Currency Daily)'])) {
	foreach ($result['Time Series (Digital Currency Daily)'] as $key => $val) {
		if ($flag2) {
			if ((substr($key, 5, 2) == $month and substr($key, 0, 4) == "2021") or (substr($key, 5, 2) == $month - 1 and substr($key, 0, 4) == "2021" and substr($key, 8) >= 15)) {
				array_push($datapoints, array("y" => floatval($val['4b. close (USD)']), "label" => Date($key)));
			}
		} else {
			if (substr($key, 5, 2) == $month and substr($key, 0, 4) == "2021") {
				array_push($datapoints, array("y" => floatval($val['4b. close (USD)']), "label" => Date($key)));
			}
		}
	}
} else {
	echo "Something went wrong";
}
$final2 = array_reverse($datapoints);

?>

<!DOCTYPE HTML>
<html>

<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script>
		window.onload = function() {

			var chart = new CanvasJS.Chart("chartContainer", {
				title: {
					text: "BTC STOCK MONTHLY DATA"
				},
				axisY: {
					title: "BTC STOCK (USD)"
				},
				axisX: {
					title: "DATE"
				},
				data: [{
					type: "line",
					dataPoints: <?php echo json_encode($final, JSON_NUMERIC_CHECK); ?>
				}]
			});
			chart.render();
		
		
		
		var chart2 = new CanvasJS.Chart("chartContainer2", {
				title: {
					text: "Ethereum STOCK MONTHLY DATA"
				},
				axisY: {
					title: "Ethereum STOCK (USD)"
				},
				axisX: {
					title: "DATE"
				},
				data: [{
					type: "line",
					dataPoints: <?php echo json_encode($final2, JSON_NUMERIC_CHECK); ?>
				}]
			});
			chart2.render();
			
		}
	</script>
</head>

<body>
	<div class="container stock-graph">
		<div id="chartContainer" style="height: 370px; width: 100%;"></div> <br><br><br><br>
		<div id="chartContainer2" style="height: 370px; width: 100%;"></div> <br><br><br>

	</div>
	<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>

</html>