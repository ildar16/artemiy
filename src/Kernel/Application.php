<?php

namespace TextSeparator\Kernel;

class Application
{

	public function index()
	{
		if (isset($_POST['text']) && !empty($_POST['text'])) {
			$text = $this->sortText($_POST['text']);
		}
		
		include("./src/view/main.php");
	}

	public function sortText($str)
	{
		$arr = explode(' ', $str);
		$text = '';
		foreach ($arr as $key => $value) {
 			$s = $this->getSortArray($value);
			$text .= implode('', $s) . ' ';
		}

		return $text;
	}

	public function getSortArray($str)
	{
		$stringParts = str_split($str);
		sort($stringParts);
		
		return $stringParts;
	}

}