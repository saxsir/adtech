<?php

header('Content-Type', 'text/javascript');
$data = array(
    'ad' => '<img src="https://placehold.it/350x250?text=samplead" alt="サンプル広告です">'
);
$json = json_encode($data);

$script = <<<EOS
(function(json){
  var ad = document.createElement('div');
  ad.innerHTML = json.ad;

  // 複数タグ貼る場合はこれだとだめだなぁ...
  var me = document.getElementById(adserver-tag);
  me.parentNode.appendChild(ad);
})($json);
EOS
;

echo $script;
