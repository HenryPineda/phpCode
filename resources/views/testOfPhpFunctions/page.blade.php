<?php 

// Page Class

Class page {
	

	var $pagina;

	function page(){

		$this->pagina = 'Test';
	}

	public function displayHeader(){

		return "Header:".$this->pagina;
	}


	public function addHeader2($title){

	//return $this->pagina = "<html> <head> <title> $title </title></head><body><h1 align=\"center\"> $title </h1>"; 
	return $this->pagina = '<html> <head> <title> "'.$title.'"</title></head><body><h1 align="center">  '.$title.' </h1>'; 

	}

		//Adds some more text to the page

	public function addContent2($content){

		return $this->pagina .= "<p align=\"center\">$content </p>";
	}



	public function addFooter2($year, $copyright){

		return $this->pagina .= "<div align=\"center\">&copy; $year $copyright</div></body></html>";

	}


	public function get(){
		return $this->pagina;
	}

}
?>