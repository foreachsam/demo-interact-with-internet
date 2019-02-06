#!/usr/bin/env php
<?php


// http://php.net/manual/en/function.error-reporting.php
//error_reporting(E_ALL & ~E_NOTICE);
error_reporting(E_ALL & ~(E_WARNING|E_NOTICE));

$base_url = 'https://foreachsam.github.io/demo-interact-with-internet/sample/subject/html/img/img-list';
$file_path = __DIR__ . '/html/list.html'; // http://php.net/manual/en/language.constants.predefined.php

$html = file_get_contents($file_path); // http://php.net/manual/en/function.file-get-contents.php

$doc = new DOMDocument; // http://php.net/manual/en/class.domdocument.php

$doc->preserveWhiteSpace = false; // http://php.net/manual/en/class.domdocument.php#domdocument.props.preservewhitespace

//$doc->loadHTML($html); // http://php.net/manual/en/domdocument.loadhtml.php
$doc->loadHTMLFile($file_path); // http://php.net/manual/en/domdocument.loadhtmlfile.php

$xpath = new DOMXPath($doc); // http://php.net/manual/en/class.domxpath.php

$query = '//img/@src';

$nodes = $xpath->query($query); // http://php.net/manual/en/domxpath.query.php

if (is_null($nodes)) {
	return;
}

// http://php.net/manual/en/class.domnodelist.php
// http://php.net/manual/en/class.domnode.php
foreach ($nodes as $node) {
	//echo $node->nodeName. ': ' . $node->nodeValue . PHP_EOL;

	echo $base_url . '/' . $node->nodeValue . PHP_EOL;

}
