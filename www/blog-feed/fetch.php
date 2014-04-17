<?php
$cache_time = 3600*1; // 1 hour

$cache_file = $_SERVER['DOCUMENT_ROOT'].'/blog-feed/cache.xml';

$timedif = (time() - filemtime($cache_file));

if (file_exists($cache_file) && $timedif < $cache_time) {
    $string = file_get_contents($cache_file);
} else {
    $string = file_get_contents('https://medium.com/feed/@nannerb');
    if ($f = fopen($cache_file, 'w')) {
        fwrite ($f, $string, strlen($string));
        fclose($f);
    }
}
$xml = simplexml_load_string($string);

?>