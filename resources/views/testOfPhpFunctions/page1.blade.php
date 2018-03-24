<?php 

// Page Class

Class page1 {

	var $pagina = '';
	

	 function addHeader2($title){

	//return $this->pagina = "<html> <head> <title> $title </title></head><body><h1 align=\"center\"> $title </h1>"; 
	return $pagina .= '<html> <head> <title> "'.$title.'"</title></head><body><h1 align="center">  '.$title.' </h1>'; 

	}

		//Adds some more text to the page

	 function addContent2( $content){

		return $pagina .= "<p align=\"center\">$content </p>";
	}



	 function addFooter2($year, $copyright){

		return $pagina .= "<div align=\"center\">&copy; $year $copyright</div></body></html>";

	}
}

	$web = '';
	$web = page1::addHeader2('This is a script using Static Methods');
	
	$web = page1::addContent2('This page was generated Static Methods');
	$web = page1::addFooter2(date('Y'), 'Static Designs Inc.');

	echo $web;
?>