<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">

<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="reset.css" type="text/css" media="screen" charset="utf-8">
	<style type="text/css" media="screen">
		body {
			margin: 1em;
		}
		
		a {
			color: #E50;
		}
		
		em {
			display: block;
			width: 35em;
			font-style: normal;
			color: #000;
		}
		
		pre {
			white-space: pre-wrap;
			text-transform: uppercase;
			line-height: 1.7em;
			color: #999;
		}
		
		ul li {
			float: left;
			margin-right: 2em;
		}
	</style>
</head>
<body>
<pre>
<strong>Christopher Strachey "Loveletters" (1952)</strong>

<?php

$sals1 = array("Beloved", "Darling", "Dear", "Dearest", "Fanciful", "Honey");

$sals2 = array("Chickpea", "Dear", "Duck", "Jewel", "Love", "Moppet", "Sweetheart");

$adjs = array("affectionate", "amorous", "anxious", "avid", "beautiful", "breathless", "burning", "covetous", "craving", "curious", "eager", "fervent", "fondest", "loveable", "lovesick", "loving", "passionate", "precious", "seductive", "sweet", "sympathetic", "tender", "unsatisfied", "winning", "wistful");

$nouns = array("adoration", "affection", "ambition", "appetite", "ardour", "being", "burning", "charm", "craving", "desire", "devotion", "eagerness", "enchantment", "enthusiasm", "fancy", "fellow feeling", "fervour", "fondness", "heart", "hunger", "infatuation", "little liking", "longing", "love", "lust", "passion", "rapture", "sympathy", "thirst", "wish", "yearning");

$advs = array("affectionately", "ardently", "anxiously", "beautifully", "burningly", "covetously", "curiously", "eagerly", "fervently", "fondly", "impatiently", "keenly", "lovingly", "passionately", "seductively", "tenderly", "wistfully");

$verbs = array("adores", "attracts", "clings to", "holds dear", "hopes for", "hungers for", "likes", "longs for", "loves", "lusts after", "pants for", "pines for", "sighs for", "tempts", "thirsts for", "treasures", "yearns for", "woos");

define(SHORT, 1);
define(LONG, 2);
$last = NULL;

$ll = sprintf("%s %s,\n     ", rel($sals1), rel($sals2));
for($i=0; $i<5; $i++) {
	if (mt_rand(0,9) < 5) {
		//LONG
		$optadj1 = (mt_rand(0,9) < 5) ? '' : rel($adjs);
		$noun1 = rel($nouns);
		$optadv = (mt_rand(0,9) < 5) ? '' : rel($advs);
		$verb = rel($verbs);
		$optadj2 = (mt_rand(0,9) < 5) ? '' : rel($adjs);
		$noun2 = rel($nouns);

		if ($last != NULL || $last == LONG) {
			$concat = ". ";
		}

		$ll .= sprintf("%s My %s %s %s %s your %s %s", $concat, $optadj1, $noun1, $optadv, $verb, $optadj2, $noun2);
		$last = LONG;

	} else {
		//SHORT
		$adj = rel($adjs);
		$noun = rel($nouns);
		if ($last == SHORT) {
			$concat = ", ";
		} elseif ($last == LONG) {
			$concat = ". You are";
		} else {
			$concat = "You are ";
		}

		$ll .= sprintf("%s my %s %s", $concat, $adj, $noun);
		$last = SHORT;
	}
}
$adv = rel($advs);
$ll .= sprintf(".\n     Yours %s,\n     M.U.C.\n\n", $adv);

echo "<em>";
echo str_replace('  ', ' ', $ll);
echo "</em>";

echo "<ul>";
echo "<li><strong>salutations1</strong>\n";
print_ra($sals1);
echo "</li>";

echo "<li><strong>salutations2</strong>\n";
print_ra($sals2);
echo "</li>";

echo "<li><strong>adjectives</strong>\n";
print_ra($adjs);
echo "</li>";

echo "<li><strong>nouns</strong>\n";
print_ra($nouns);
echo "</li>";

echo "<li><strong>adverbs</strong>\n";
print_ra($advs);
echo "</li>";

echo "<li><strong>verbs</strong>\n";
print_ra($verbs);
echo "</li>";
echo "</ul>";

//returns random value from array
function rel($arr) {
	return $arr[array_rand($arr)];
}

function print_ra($arr) {
	foreach ($arr as $el) {
		echo "$el\n";
	}
}

?>
<br clear="both">
<strong>REFERENCES</strong>
<a href="http://www.mosi.org.uk/about-us/news/mosi-writes-love-letter-to-ferranti-(1).aspx">http://www.mosi.org.uk/about-us/news/mosi-writes-love-letter-to-ferranti-(1).aspx</a>
<a href="http://grandtextauto.org/2005/08/01/christopher-strachey-first-digital-artist/">http://grandtextauto.org/2005/08/01/christopher-strachey-first-digital-artist/</a>
<a href="http://gnoetrydaily.wordpress.com/2010/07/13/2-strachey-love-letters/">http://gnoetrydaily.wordpress.com/2010/07/13/2-strachey-love-letters/</a>
<a href="http://www.alpha60.de/art/love_letters/">http://www.alpha60.de/art/love_letters/</a>

<br clear="both">
<strong>SOURCE CODE</strong>
<a href="https://github.com/gingerbeardman/loveletter">https://github.com/gingerbeardman/loveletter</a>

</pre>
</body>
</html>
