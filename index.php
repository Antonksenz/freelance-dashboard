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

    <style type="text/css">
            h1 {
                margin-left: 40px;
                font-size: 28px; 
                color: white;
            }

            label {
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
                margin-bottom: 10px;
            }

            .data1 {
                margin-left: 240px;
                margin-top: -55px;
            }

            .data1_1 {
                margin-left: 385px;
                margin-top: -55px;
            }

            .data2 {
                margin-left: 525px;
                margin-top: -55px;
            }

            .data3 {
                margin-left: 680px;
                margin-top: -32px;
            }

            .data4 {
                margin-left: 820px;
                margin-top: -55px;
            }

            .data5 {
                margin-left: 985px;
                margin-top: -55px;
            }

            .data6 {
                margin-left: 1125px;
                margin-top: -55px;
            }

            .data7 {
                margin-left: 1295px;
                margin-top: -55px;
            }

            #block_1 {
                height: 425px;
                margin: 42px;
                background-color: lightgray;
                position: relative;
                top: 4px;
            }
    </style>


</head>
<body style="background-color: gray;">

        <h1>DASHBOARD AT "<?php echo $data['added']; ?>"</h1>

        <label>Nodes:</label> 
    
    <select>
        <option>ALL</option>
        <?php foreach($nodesList as $nodeName): ?>
            <option value="<?php echo $nodeName; ?>"><?php echo $nodeName; ?></option>
        <?php endforeach; ?>
    </select>

    <div id="first" style="display: block;">

            <div class="data1">
                <label class="data">ROI (USD):</label>
                <label class="data_1">Treasury:</label>
            </div>

            <div class="data1_1">
                <input class="data" value="<?php echo $data['current_roi']; ?>">
                <input class="data_1" value="<?php echo $data['treasury_data']; ?>">
            </div>

            <div class="data2">
                <label class="data">Total Earned:</label>
            </div>

            <div class="data3">
                <input class="data" value="<?php echo $data['total_earned']; ?>">
                <input class="data_1" value="<?php echo $data['treasury_matic']; ?>">
            </div>

            <div class="data4">
                <label class="data">Total Staked:</label>
                <label class="data_1">$DATA Price:</label>
            </div>

            <div class="data5">
                <input class="data" value="<?php echo $data['total_staked']; ?>">
                <input class="data_1" value="<?php echo $data['price_data']; ?>">
            </div>
            
            <div class="data6">
                <label class="data">Total Nodes:</label>
                <label class="data_1">$MATIC Price:</label>
            </div>

            <div class="data7">
                <input class="data" value="<?php echo count($data['server_data']); ?>">
                <input class="data_1" value="<?php echo $data['price_matic']; ?>">
            </div>
            
    </div>

    <div id="second" style="display: none;">
        <div class="data1" style="margin-top: -35px;">
                <label class="data">ROI (USD):</label>
            </div>

            <div class="data1_1" style="margin-top: -32px;">
                <input class="data">
            </div>

            <div class="data2" style="margin-top: -32px;">
                <label class="data">Total Earned:</label>
            </div>

            <div class="data3" style="margin-top: -32px;">
                <input class="data">
            </div>

            <div class="data4" style="margin-top: -32px;">
                <label class="data">Total Staked:</label>
            </div>

            <div class="data5" style="margin-top: -32px;">
                <input class="data">
            </div>
            
            <div class="data6" style="margin-top: -32px;">
                <label class="data">Total Nodes:</label>
            </div>

            <div class="data7" style="margin-left: 1285px;
                                      margin-top: -32px;">
                <input class="data">
            </div>

    </div>

    <div id="block_1"></div>
        
        </div>
</body>
</html>