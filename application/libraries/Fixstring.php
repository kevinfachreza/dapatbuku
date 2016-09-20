<?php
class Fixstring
{
	function variable($string)
	{
		$string = str_replace("'", "&#39;", $string);
		$string = htmlspecialchars($string);
		return $string;
	}
}