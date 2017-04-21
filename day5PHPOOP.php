
<?php

class Address {
	
	//s	treet adress
	public $street_adress_1;
	
	public $street_adress_2;
	
	
	//n	ame of the city
	public $city_name;
	
	
	// 	subdivision
	public $subdivision_name;
	
	
	//p	ostal code
	public $postal_code;
	
	
	//N	ame of the country
	public $country_name;
	
	
	
	// 	display an adress in HTML
	
	function display() {
		
		$output = '';
		$output .= $this->street_adress_1;
        if($this ->street_adress_2){
            $output .= '</br>' . $this->street_adress_2;
        }
		//city dundiv and postal
        $output .= $this->city_name . ',' . $this->subdivision_name;
        $output .= $this->postal_code;
        $output .= '</br>';
        //country
        $output .= $this->country_name;


		return $output;
		
	}
	
}

