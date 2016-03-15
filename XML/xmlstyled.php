<?php

//Create a DomDocument object

$_xml = new DOMDocument;

// Load the XML source

$_xml -> load('books.xml');

//Similar with XSL

$xsl = new DOMDocument;

$xsl -> load('stylesheet.xsl');

// Create and Configure the transformer

$proc = new XSLTProcessor;

// attach the xsl rules

$proc -> importStyleSheet($xsl);

//Output

echo $proc -> transformToXML($_xml);
?>