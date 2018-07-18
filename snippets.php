<?php
function num2code($num, $dict) {
	// Source: perl Acme::Tools
	// License: GNU GPL v1+; Artistic License
	if (!is_array($dict)) {
		$dict = str_split($dict);
	}
	$base = count($dict);
	$buf = array();
	while ($num > 0) {
		$buf[] = $dict[$num % $base];
		$num = (int)($num/$base);
		var_dump($num);
	}
	return implode(array_reverse($buf));
}

function code2num($str, $dict) {
	// Source: perl Acme::Tools
	// License: GNU GPL v1+; Artistic License
	if (is_array($dict)) {
		$dict = implode($dict);
	}
	$base = strlen($dict);
	$buf = 0;
	foreach (str_split($str) as $c) {
		$buf = $buf*$base + strpos($dict, $c);
	}
	return $buf;
}

// vim: ts=4 nosmarttab noexpandtab
