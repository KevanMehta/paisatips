<?php
$final = array();
$name = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input($_POST["stockname"]);
    search_stock($name);
} else {
    search_stock("MSFT");
}
function search_stock($stockname)
{
    $GLOBALS['name'] = $stockname;
    $key = "2Y37F9ITHK61EQON";
    $url = "https://www.alphavantage.co/query?function=TIME_SERIES_DAILY&symbol=" . $stockname . "&apikey=" . $key;
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
    if (isset($result['Time Series (Daily)'])) {
        foreach ($result['Time Series (Daily)'] as $key => $val) {
            if ($flag) {
                if ((substr($key, 5, 2) == $month and substr($key, 0, 4) == "2021") or (substr($key, 5, 2) == $month - 1 and substr($key, 0, 4) == "2021" and substr($key, 8) >= 15)) {
                    array_push($datapoints, array("y" => floatval($val['4. close']), "label" => Date($key)));
                }
            } else {
                if (substr($key, 5, 2) == $month and substr($key, 0, 4) == "2021") {
                    array_push($datapoints, array("y" => floatval($val['4. close']), "label" => Date($key)));
                }
            }
        }
    } else {
        echo "Something went wrong";
    }
    $GLOBALS['final'] = array_reverse($datapoints);
}
function test_input($data)
{
    $data = trim($data);
    $data = strtoupper($data);
    return $data;
}

?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    <script src="./stockscript.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./Assets/CSS/stocks.css">
    <style>

    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="container filter-div">
            <h2 class="text-center">Search for your stock by it's ticker</h2>
        </div>
    </div>

    <button class="btn btn-success filter-btn" onclick="filter()">Filter </button>


    <ul id="myUL" class="list-group">

        <form method="POST" autocomplete="off" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="conatianer">
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-9">
                        <div class="form-group">
                            <input type="text" class="form-control" id="myInput" onkeyup="myFunction()" placeholder="Enter the stock name" title="Type in a name">
                            <br>
                            <div class="container filter-container" id="filter-container">
                                <input type="button" onclick="change(this)" value="IT" class="filter-btns" id="mybtn">
                                <input type="button" onclick="change(this)" value="Automobile" class="filter-btns" id="mybtn">
                                <input type="button" onclick="change(this)" value="Products" class="filter-btns" id="mybtn">
                                <input type="button" onclick="change(this)" value="Finance" class="filter-btns" id="mybtn">
                                <input type="button" onclick="change(this)" value="Energy" class="filter-btns" id="mybtn">
                                <input type="button" onclick="change(this)" value="Steel" class="filter-btns" id="mybtn">
                            </div>

                            <li class="IT"><input type="submit" value="AAPL" name="stockname"></li>
                            <li class="Products"><input type="submit" value="WMT" name="stockname"></li>
                            <li class="IT"><input type="submit" value="MSFT" name="stockname"></li>
                            <li class="IT"><input type="submit" value="ORCL" name="stockname"></li>
                            <li class="IT"><input type="submit" value="GOOGL" name="stockname"></li>
                            <li class="IT"><input type="submit" value="AMZN" name="stockname"></li>
                            <li class="Products"><input type="submit" value="MCD" name="stockname"></li>
                            <li class="Automobile"><input type="submit" value="TSLA" name="stockname"> </li>
                            <li class="Finance"><input type="submit" value="HDFC.BSE" name="stockname"></li>
                            <li class="Energy"><input type="submit" value="RELIANCE.BSE" name="stockname"></li>
                            <li class="Energy"><input type="submit" value="IOC.BSE" name="stockname"></li>
                            <li class="Energy"><input type="submit" value="BPCL.BSE" name="stockname"></li>
                            <li class="Products"><input type="submit" value="ITC.BSE" name="stockname"></li>
                            <li class="Energy"><input type="submit" value="ONGC.BSE" name="stockname"></li>
                            <li class="Automobile"><input type="submit" value="TTM" name="stockname"></li>
                            <li class="Energy"><input type="submit" value="UPL.BSE" name="stockname"></li>
                            <li class="Energy"><input type="submit" value="POWERGRID.BSE" name="stockname"></li>
                            <li class="Energy"><input type="submit" value="NTPC.BSE" name="stockname"></li>
                            <li class="IT"><input type="submit" value="TCS.BSE" name="stockname"></li>
                            <li class="Products"><input type="submit" value="NESTLEIND.BSE" name="stockname"></li>
                            <li class="Finance"><input type="submit" value="BAJFINANCE.BSE" name="stockname"></li>
                            <li class="Steel"><input type="submit" value="JSWSTEEL.BSE" name="stockname"></li>
                            <li class="Steel"><input type="submit" value="JINDALSTEL.BSE" name="stockname"></li>
                            <li class="Steel"><input type="submit" value="TMST" name="stockname"></li>
                            <li class="Steel"><input type="submit" value="ZEUS" name="stockname"></li>
                            <li class="Steel"><input type="submit" value="TATASTEEL.BSE" name="stockname"></li>
                            <li class="Automobile"><input type="submit" value="MARUTI.BSE" name="stockname"></li>
                            <li class="Automobile"><input type="submit" value="DAI.DEX" name="stockname"></li>
                            <li class="IT"><input type="submit" value="INFY.BSE" name="stockname"></li>
                            <li class="Products"><input type="submit" value="BOSCHLTD.BSE" name="stockname"></li>
                            <li class="Automobile"><input type="submit" value="MRF.BSE" name="stockname"></li>
                            <li class="Finance"><input type="submit" value="HDFCAMC.BSE" name="stockname"></li>
                            <li class="Finance"><input type="submit" value="SBIN.BSE" name="stockname"></li>
                        </div>
                    </div>
                </div>

            </div>


        </form>
    </ul>
    <br><br><br>
    <div style="margin:-50px auto 60px auto;" id="chart" class="container">
        <div id="chartContainer" style="height: 370px; width: 100%;"></div>
    </div>
    <script>
        window.onload = function() {
            var chart = new CanvasJS.Chart("chartContainer", {
                title: {
                    text: "<?php echo $name . ' STOCK MONTHLY DATA'; ?>"
                },
                axisY: {
                    title: "<?php echo $name . 'STOCK VALUE'; ?>"
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
        }
    </script>
</body>

</html>