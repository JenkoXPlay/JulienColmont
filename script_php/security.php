<?php
	function security($texte) {
		$texte = trim($texte);
		$texte = str_replace("<","1",$texte);
		$texte = str_replace("&lt;","1",$texte);
		$texte = str_replace("&gt;","1",$texte);
		return $texte;
	}
?>