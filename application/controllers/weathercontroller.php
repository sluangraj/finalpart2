<?php

class WeatherController extends Controller{

				public $result;

	public function index(){

		$this->set('result',false);
	}

	public function getresults(){

		$xml = simplexml_load_file('http://api.worldweatheronline.com/premium/v1/weather.ashx?q='.$_POST['zip'].'&format=xml&num_of_days=2&key=7c9b94e59bae4a11b33231453183011');

        $this->set('result', true);
        $this->set('weather', $xml);

        }
}
