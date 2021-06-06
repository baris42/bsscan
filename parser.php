<?php
require_once  'simple_html_dom.php';
$html = file_get_html('https://bscscan.com/token/0x8076c74c5e3f5852037f31ff0093eeb8c8add8d3#tokenInfo');


foreach($html->find('span#pricebutton') as $e)
    echo 'Market Cap: '.$e->innertext . '<br>';


// find all span tags with class=gb1
foreach($html->find('span.d-block') as $e)
     $fiat[]=$e->innertext;
echo 'Fiyat & Değiişim: ' .$fiat['8'].'<br>';





foreach($html->find('div.mr-3') as $e)
    echo 'Holders : '.$e->innertext . '<br>';


foreach($html->find('td') as $e)
        $hacim[]=$e->innertext;
echo '24H Volume: ' .$hacim['2'].'<br>';




foreach($html->find('span') as $e)
    //echo 'Total Txn : '.$e->innertext . '<br>';
    $data[]=$e->innertext;
echo 'Total Supply : '.$data['51'].'<br>';
echo $data['54'];














?>
