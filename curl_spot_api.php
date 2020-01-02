<?php
$mycurl=curl_init();

curl_setopt($mycurl,CURLOPT_USERAGENT,'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.103 Safari/537.36'); 

curl_setopt($mycurl,CURLOPT_SSL_VERIFYPEER,false);

curl_setopt($mycurl,CURLOPT_URL,'https://data.ntpc.gov.tw/od/data/api/EDC3AD26-8AE7-4916-A00B-BC6048D19BF8?$format=json');

curl_exec($mycurl);
?>