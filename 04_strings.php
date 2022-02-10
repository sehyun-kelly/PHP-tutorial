<?php

// Create simple string
$name = 'kelly';
$string = 'hello I am '.$name. ' I am 29.';
//we can directly write variable inside double quotation!
$string2 = "hello I am $name. I am 29";

echo $string.'<br>';
echo $string2.'<br>';
// String concatenation
// concat with . in between

// String functions
//strlen, trim, ltrim, rtrim, str_word_count, strrev, strtoupper, strtolower
//ucfirst, lcfirst, ucwords, strpos, stripos, substr, str_replace, str_ireplace ($variable)

// Multiline text and line breaks
$longText = "
    Hello, my name is Kelly.
    I'm 29.
    I'm getting old.     
";

echo $longText.'<br>';
echo nl2br($longText).'<br>';

// Multiline text and reserve html tags
$longText = "
    Hello, my name is <b>Kelly</b>.
    I'm <b>29</b>.
    I'm getting old.     
";

echo $longText.'<br>';
echo "1 - $longText".'<br>';
echo "2 - ".nl2br($longText).'<br>';
echo "3 - ".htmlentities($longText).'<br>';
echo "4 - ".nl2br(htmlentities($longText)).'<br>';
echo html_entity_decode('&lt;b&gt;Kelly&lt;/b&gt;');


// https://www.php.net/manual/en/ref.strings.php