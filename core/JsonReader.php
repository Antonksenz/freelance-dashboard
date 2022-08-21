<?php 
    class JsonReader {
        public $data;

        function __construct($fileName){
            if (!file_exists($fileName)) {
                throw new Exception('File does not exist!');
            }

            $fileContent = file_get_contents($fileName);
            $this->data = json_decode($fileContent, $assoc = true);
        }

        public function getDataByNodeName($nodeName, $chartData = false, $json = true){
            $preparedChartData = [
                'earned' => [],
                'stacked' => []
            ];

            foreach ($this->data['server_data'] as $node) {
                if (array_key_exists($nodeName, $node)){
                    if ($chartData) {
                        foreach($node['chart_data'] as $chartPoint) {
                            array_push($preparedChartData['earned'], $chartPoint['earned']);
                            array_push($preparedChartData['stacked'], $chartPoint['stacked']);
                        }

                        if ($json) {
                            return json_encode($preparedChartData);
                        }
                    }
                    return $node[$nodeName];
                }
            }
            
            throw new Exception('Node <' . $nodeName . '> does not exist!');
        }

        public function getNodesList($json=false){
            $nodesList= [];
            foreach ($this->data['server_data'] as $key => $node) {
                $nodesList[key($node)] = $node[key($node)];
            }

            if ($json) {
                return json_encode($nodesList);
            }
            return $nodesList;
        }

        public function getMainChartDateByField($fieldName){
            $mainChartData = $this->data['main_chart_data'];
            $selectedData = [];

            foreach ($mainChartData as $chart){
                array_push($selectedData, $chart[$fieldName]);
            }

            return json_encode($selectedData);
        }


        public function getAllData(){
            return $this->data;
        }

    }
?>