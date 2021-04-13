<?php
// Ticket: #7257

$rules = array(
	"Marschen am Jadebusen" => 
	"Marschen am  Jadebusen",

	"Vogelschutzgebiet 'Rietberger Emsnied. mit Steinhorster Becken'" => 
	"VSG 'Rietberger Emsniederung mit Steinhorster Becken",

	"Vogelschutzgebiet 'Schwalm-Nette-Platte mit Grenzwald und Meinweg'" => 
	"Vogelschutzgebiet 'Schwalm-Nette-Platte mit Grenzwald u. Meinweg'",

	"Dollberg und Eisener Wald" => 
	"Dollberg u. Eisener Wald",

	"Leuktal, Krautfelsen und Bärenfels bei Orscholz" => 
	"Leuktal, Krautfelsen u. Bärenfels bei Orscholz",

	"Hammelsberg und Atzbüsch bei Perl" => 
	"Hammelsberg u. Atzbüsch bei Perl",

	"Limbacher und Spieser Wald" => 
	"Limbacher u. Spieser Wald",

	"Doberschützer Wasser" => 
	"Doberschützer  Wasser",

	"Beedener Bruch" => 
	"Beeder Bruch",

	"Speyerer Wald, Nonnenwald und Bachauen zw. Geinsheim undHanhofen" => 
	"Speyerer Wald, Nonnenwald und Bachauen zw. Geinsheim u.Hanhofen",

	"Felsen und Hangwälder im Altmühltal und Wellheimer Trockental" => 
	"Felsen und Hangwälder im  Altmühltal und Wellheimer Trockental",

	"Muschelkalkhänge bei Bebelsheim und Wittersheim" => 
	"Muschelkalkhänge bei Bebelsheim u. Wittersheim",

	"Moore südlich des Chiemsees" => 
	"Moore südlich  des Chiemsees",
);

$file = 'spa_de_2020-simplified.geojson';
$current = file_get_contents($file);
foreach($rules AS $to => $from) {
	$count = 0;
	$current = str_replace($from, $to, $current, $count);

	echo $count . " replacements for: " . $from . "\n";
}
echo "Done.\n";
$fp = fopen($file, 'w');
fwrite($fp, $current);
fclose($fp);

