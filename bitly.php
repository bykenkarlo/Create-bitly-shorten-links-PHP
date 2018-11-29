<!-- Login your bitly acount. Go to Settings > Advance Settings > API Support. Copy the LOGIN and API KEY -->

<?php 
	$longUrl = 'https://kenkarlo.com';
	$url  = "http://api.bitly.com/v3/shorten?login=USERNAME&apiKey=API_KEY&longUrl=$longUrl&format=txt";
	$short_url = @file_get_contents($url); //Bitly will return a short url as text
	echo $short_url; //display or return our short url
?>