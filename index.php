<?php
require_once 'islem.php';

$toplamlikit=BilgiGetir('tokensupply','stats');
echo 'Toplam Likidite: '. $toplamlikit['result'].'<br>';


$CSupply=BilgiGetir('tokenCsupply','stats');
echo 'Dolaşım Miktarı: '. $CSupply['result'].'<br>';


$TokenBilgi=BilgiGetir('tokeninfo','token');
print_r(implode('',$TokenBilgi));
echo '<br>';


$saatdegisim=BilgiGetir('dailyavgblocktime','stats');
echo '24 Saatlik Değişim : '. $saatdegisim['result'].'<br>';


$saathacim=BilgiGetir('dailytx','stats');
echo '24 Saatlik hacim : '. $saathacim['result'].'<br>';

