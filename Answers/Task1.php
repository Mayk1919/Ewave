<?php

$json_string_data = '{"a":1,"b":2,"c":3,"d":4,"e":5}';


class JsonParser{
    public $json_string;
    public $json_data;

    public function __construct($json_data = "",$json_string = "")
    {
        $this->json_data = $json_data;
        $this->json_string = $json_string;
    }

    public function jsonDataToArray(){
        $json = file_get_contents($this->json_data);
        return (json_decode($json, true));
    }

    public function jsonStringToArray(){
        return (json_decode($this->json_string, true));
    }
}

$jsonparser = new JsonParser('example.json',$json_string_data);
var_dump( $jsonparser->jsonStringToArray());
var_dump( $jsonparser->jsonDataToArray());