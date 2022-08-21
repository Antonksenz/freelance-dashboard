<?php 
    require 'core/JsonReader.php';

    $jsonReaderObj = new JsonReader('data/sdata.json');
    $data = $jsonReaderObj->getAllData();
    $nodesList = $jsonReaderObj->getNodesList();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src = "https://code.highcharts.com/highcharts.js"></script>
    <style type="text/css">
            h1 {
                margin-left: 40px;
                font-size: 28px; 
                color: white;
            }

            #selector {
                position: relative;
                margin-left: 42px;
                font-size: 20px;
                color: white;
            }

            select {
                background-color: black;
                font-size: 25px;
                color: white;
                padding: 10px;
                width: 170px;
            }

            .data {
                display: flex;
                margin-bottom: 15px;
                background: none;
                color: white;
                border: none;
                font-size: 20px;
                width: 180px;
                outline: none;
                white-space: pre;
            }

            .outline_line_1 {
                display: flex;
                margin-bottom: 8px;
                background: none;
                color: rgb(54, 60, 150);
                border: none;
                font-size: 20px;
                width: 180px;
                outline: none;
            }

            .outline_line_2 {
                background: none;
                color: rgb(54, 60, 150);
                border: none;
                font-size: 20px;
                width: 270px;
                outline: none;
                margin-top: 4px;
            }

            .data1 {
                margin-left: 282px;
                margin-top: -55px;
                font-size: 20px;
                
            }

            .data_1 {
                background: none;
                color: white;
                border: none;
                font-size: 20px;
                width: 180px;
                outline: none;
                white-space: pre;
            }

            .outline_row_1 {
                margin-left: 390px;
                margin-top: -59px;
            }

            .data2 {
                margin-left: 500px;
                margin-top: -63px;
            }

            .outline_row_2 {
                margin-left: 625px;
                margin-top: -37.5px;
            }

            .data4 {
                margin-left: 910px;
                margin-top: -62px;
            }

            .outline_row_3 {
                margin-left: 1040px;
                margin-top: -60px;
            }

            .data6 {
                margin-left: 1200px;
                margin-top: -63px;
            }

            .outline_row_4 {
                margin-left: 1340px;
                margin-top: -59px;
            }

            #container {
                    width: 550px;
                    height: 400px;
                    margin: 20px auto;
                }
            
            #container_2 {
                width: 550px;
                height: 400px;
                margin: 20px auto;
            }

            #second .data1 {
                margin-left: 282px;
                margin-top: -35px;
                font-size: 20px;
                
            }

            #second .outline_row_1 {
                margin-left: 400px;
                margin-top: -39px;
            }

            #second .data2 {
                margin-left: 540px;
                margin-top: -33px;
            }

            #second .outline_row_2 {
                margin-left: 665px;
                margin-top: -38px;
            }

            #second .data4 {
                margin-left: 800px;
                margin-top: -34px;
            }

            #second .outline_row_3 {
                margin-left: 850px;
                margin-top: -37px;
            }

            #second .data6 {
                margin-left: 945px;
                margin-top: -33px;
            }

            #second .outline_row_4 {
                margin-left: 1010px;
                margin-top: -38px;
            }


            @media screen and (max-width: 1350px){
                .data{
                    font-size: 15px;  
                }

                .data1{
                    font-size: 15px; 
                    margin-top: -51px; 
                }

                #second .data1 {
                    margin-left: 282px;
                    margin-top: -35px;
                    font-size: 15px;  
                }

                .data2{
                    margin-top: -49px; 
                }

                #second .data2{
                    margin-left: 470px;
                    margin-top: -26px; 
                }

                .outline_row_1 {
                    margin-left: 365px;
                    margin-top: -48px;
                }

                #second .outline_row_1 {
                    margin-left: 375px;
                    margin-top: -32px;
                }

                .outline_row_2 {
                    margin-left: 597px;
                    margin-top: -29.5px;
                }

                #second .outline_row_2 {
                    margin-left: 570px;
                    margin-top: -32px;
                }

                .data4 {
                    margin-left: 795px;
                    margin-top: -49px;
                }

                #second .data4 {
                    margin-left: 670px;
                    margin-top: -26px;
                }

                .outline_row_3 {
                    margin-left: 895px;
                    margin-top: -48px;
                }

                #second .outline_row_3 {
                    margin-left: 715px;
                    margin-top: -32px;
                }

                .data6 {
                    margin-left: 1005px;
                    margin-top: -49px;
                }

                #second .data6 {
                    margin-left: 780px;
                    margin-top: -26px;
                }

                .outline_row_4 {
                    margin-left: 1110px;
                    margin-top: -47px;
                }

                #second .outline_row_4 {
                    margin-left: 840px;
                    margin-top: -31px;
                }

                .data_1{
                    font-size: 15px;  
                }

                .outline_line_1 {
                    font-size: 13px;  
                }

                .outline_line_2 {
                    font-size: 13px;  
                }

                #container {
                    position: absolute;
                    left: 30%;
                }

                #container_2 {
                    position: absolute;
                    left: 30%;
                }
            }

            @media screen and (max-width: 950px){
                #container {
                    position: absolute;
                    left: 40%;
                }

                #container_2 {
                    position: absolute;
                    left: 40%;
                }
            }

            @media screen and (max-width: 650px){
                #container {
                    position: absolute;
                    left: 50%;
                }

                #container_2 {
                    position: absolute;
                    left: 50%;
                }
            }

            @media screen and (max-width: 500px){
                #container {
                    position: absolute;
                    left: 70%;
                }

                #container_2 {
                    position: absolute;
                    left: 70%;
                }
            }

            @media screen and (max-width: 330px){
                #container {
                    position: absolute;
                    left: 100%;
                }

                #container_2 {
                    position: absolute;
                    left: 100%;
                }
            }

    </style>


</head>
<body style="background-color: gray;">

        <h1>DASHBOARD AT "<?php echo $data['added']; ?>"</h1>

        <label id="selector">Nodes:</label> 
    
    <select>
        <option>ALL</option>
        <?php foreach(array_keys($nodesList) as $nodeName): ?>
            <option value="<?php echo $nodeName; ?>"><?php echo $nodeName; ?></option>
        <?php endforeach; ?>
    </select>

    <div id="first" style="display: block;">

            <div class="data1">
                <label class="data">ROI (USD):</label>
                <label class="data_1">Treasury:</label>
            </div>

            <div class="outline_row_1">
                <input class="outline_line_1" readonly value="<?php echo $data['current_roi']; ?> %">
                <input class="outline_line_2" readonly value="<?php echo $data['treasury_data']; ?> % $DATA">
            </div>

            <div class="data2">
                <label class="data" st>Total Earned:</label>
            </div>

            <div class="outline_row_2">
                <input class="outline_line_1" readonly value="<?php echo $data['total_earned']; ?> $DATA">
                <input class="outline_line_2" readonly value="<?php echo $data['treasury_matic']; ?> % $MATIC">
            </div>

            <div class="data4">
                <label class="data">Total Staked:</label>
                <label class="data_1">$DATA Price:</label>
            </div>

            <div class="outline_row_3">
                <input class="outline_line_1" readonly value="<?php echo $data['total_staked']; ?> $DATA">
                <input class="outline_line_2" readonly value="<?php echo $data['price_data']; ?> USD">
            </div>
            
            <div class="data6">
                <label class="data">Total Nodes:</label>
                <label class="data_1">$MATIC Price:</label>
            </div>

            <div class="outline_row_4">
                <input class="outline_line_1" readonly value="<?php echo count($data['server_data']); ?>">
                <input class="outline_line_2" style="width: 180;" readonly value="<?php echo $data['price_matic']; ?> USD">
            </div>

            <div id = "container"></div>
      
            <script language = "JavaScript">
                $(document).ready(function() {

                var title = {
                text: 'Main_data'   
                };

                var yAxis = {
                title: {
                    text: ''
                },
                
                plotLines: [{
                    value: 0,
                    width: 1,
                    color: '#808080'
                }]
                }; 

                var tooltip = {
                valueSuffix: ''
                }

                var legend = {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'middle',
                borderWidth: 0
                };

                var series = [
                {
                    name: 'Earned',
                    data: <?php echo $jsonReaderObj->getMainChartDateByField('change'); ?>,
                    type: 'column'
                }, 
                {
                    name: 'Servers',
                    data: <?php echo $jsonReaderObj->getMainChartDateByField('servers'); ?>
                }, 
                {
                    name: 'Staked',
                    data: <?php echo $jsonReaderObj->getMainChartDateByField('total_staked'); ?>
                }, 
                {
                    name: 'Price',
                    data: <?php echo $jsonReaderObj->getMainChartDateByField('price_data'); ?>
                }
                ];
                var json = {}; 
                json.title = title;
                json.yAxis = yAxis;
                json.tooltip = tooltip;
                json.legend = legend;
                json.series = series;

                $('#container').highcharts(json);
            });
            </script>
   <script>

</script>
    </div>

    <div id="second" style="display: none;">
        <div class="data1">
                <label class="data">Total Earned:</label>
            </div>

            <div class="outline_row_1">
                <input id="single-total-earned" readonly class="outline_line_1">
            </div>

            <div class="data2">
                <label class="data">Total Stacked:</label>
            </div>

            <div class="outline_row_2">
                <input id="single-total-stacked" readonly class="outline_line_1">
            </div>

            <div class="data4">
                <label class="data">Age:</label>
            </div>

            <div class="outline_row_3">
                <input id="single-age" readonly class="outline_line_1">
            </div>
            
            <div class="data6">
                <label class="data">Status:</label>
            </div>

            <div class="outline_row_4">
                <input id="single-status" readonly class="outline_line_1">
            </div>

            <div id = "container_2"></div>
      
            <script language = "JavaScript">
               
            </script>
    </div>
        
        </div>

    <script language="JavaScript">
        function getNodeChartData(node) {
            let chartData = node['chart_data'];
            let preparedChartData = {
                'earned': [],
                'staked': []
            }

            for (let i = 0; i < chartData.length; i++) {
                preparedChartData['earned'].push(chartData[i]['earned']);
                preparedChartData['staked'].push(chartData[i]['staked']);
            }

            return preparedChartData;
        }

        function buildNodeChart(earned, staked) {
            var title = {
        text: 'Main_data'   
        };
        var yAxis = {
        title: {
            text: ''
        },

        plotLines: [{
            value: 0,
            width: 1,
            color: '#808080'
        }]
        }; 

        var tooltip = {
        valueSuffix: ''
        }

        var legend = {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'middle',
        borderWidth: 0
        };

        var series = [
        {
            name: 'Earned',
            data: earned,
            type: 'column'
        }, 
        {
            name: 'Staked',
            data:  staked
        }, 
        ];
        var json = {}; 
        json.title = title;
        json.yAxis = yAxis;
        json.tooltip = tooltip;
        json.legend = legend;
        json.series = series;

        $('#container_2').highcharts(json);
        }

        $(document).ready(function() {
        var nodesList = <?php echo $jsonReaderObj->getNodesList($json=true); ?>;
        var pluralMeasurementDisplay = document.querySelector("#first");
        var singleMeasurementDisplay = document.querySelector("#second");

        $('select').on('change', function(event) {
            if (this.value != 'ALL') {
                let node = nodesList[this.value];
                let nodeChartData = getNodeChartData(node);

                pluralMeasurementDisplay.style.display = "none";
                singleMeasurementDisplay.style.display = "block";
               
                let singleTotalEarned = document.querySelector("#single-total-earned");
                let singleTotalStacked = document.querySelector("#single-total-stacked");
                let singleAge = document.querySelector("#single-age");
                let singleStatus = document.querySelector("#single-status");
                
                singleTotalEarned.value = node['total_earned'] + " $DATA";
                singleTotalStacked.value = node['total_staked'] + " $DATA";
                singleAge.value = node['age'] + " Days";
                singleStatus.value = node['status'];

                buildNodeChart(nodeChartData['earned'], nodeChartData['staked']);
            } else {
                pluralMeasurementDisplay.style.display = "block";
                singleMeasurementDisplay.style.display = "none";
            }
        })
        });
    </script>
</body>
</html>