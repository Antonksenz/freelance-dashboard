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

        public function getDataByNodeName($nodeName){
            foreach ($this->data['server_data'] as $node) {
                if (array_key_exists($nodeName, $node)){
                    return $node[$nodeName];
                }
            }
            
            throw new Exception('Node <' . $nodeName . '> does not exist!');
        }

        public function getNodesList(){
            $nodesList= [];
            foreach ($this->data['server_data'] as $node) {
                array_push($nodesList, key($node));
            }

            return $nodesList;
        }

        public function getAllData(){
            return $this->data;
        }

    }
?>