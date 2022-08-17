<?php 
    class JsonReader {
        public $data;

        function __construct($fileName) {
            if (!file_exists($fileName)) {
                throw new Exception('File does not exist!');
            }

            $fileContent = file_get_contents($fileName);
            $this->data = json_decode($fileContent, $assoc = true);
        }
    }
?>