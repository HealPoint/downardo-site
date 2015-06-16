<?php require_once('http://downardo.com/template/head.php'); ?>

<?php

function get_random_wikipedia_article() {
  if (!function_exists('curl_init')) return FALSE;
  $url = 'http://en.wikipedia.org/wiki/Special:Random';
  $options = array(
    CURLOPT_RETURNTRANSFER => true,     // return web page
    CURLOPT_HEADER         => false,    // don't return headers
    CURLOPT_FOLLOWLOCATION => true,     // follow redirects
    CURLOPT_ENCODING       => "",       // handle all encodings
    CURLOPT_USERAGENT      => "spider", // who am i
    CURLOPT_AUTOREFERER    => true,     // set referer on redirect
    CURLOPT_CONNECTTIMEOUT => 10,      // timeout on connect
    CURLOPT_TIMEOUT        => 10,      // timeout on response
    CURLOPT_MAXREDIRS      => 1,       // stop after 10 redirects
  );

  $ch = curl_init($url);
  curl_setopt_array($ch, $options);
  $content = curl_exec($ch);
  $err = curl_errno($ch);
  $errmsg = curl_error($ch);
  $header = curl_getinfo($ch);
  curl_close($ch);

  if (preg_match('/<title>(.*?)<\/title>/i', $content, $matches)) {
    $title = str_replace(' - Wikipedia, the free encyclopedia', '', $matches[1]);
  }

  return '<a target="_blank" href="'. $header['url'] .'">'. $title .'</a>';
}
?>

<br/>

<?php 

for($i = 1; $i < 11; $i++){
	echo $i.'.) ' . get_random_wikipedia_article();	
	echo '<br/>';
}

?>


<?php require_once('http://downardo.com/template/footer.php'); ?>