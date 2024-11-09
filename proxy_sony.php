<?php
$targetUrl = 'https://bldcmprod-cdn.toffeelive.com/cdn/live/sony_ten3_hd/playlist.m3u8';

$options = [
    "http" => [
        "header" => "Host: bldcmprod-cdn.toffeelive.com\r\n" .
                    "Cookie: Edge-Cache-Cookie=URLPrefix=aHR0cHM6Ly9ibGRjbXByb2QtY2RuLnRvZmZlZWxpdmUuY29tLw:Expires=1731313136:KeyName=prod_linear:Signature=faCP40LnFH42ss64oDnUaI4IsvwTSM3bLdiPyLVdZhN2H_IsxqyRYzLBioYFgzGrUPR6OIz64TGeC7RNU2TzBQ\r\n" .
                    "User-Agent: Toffee (Linux;Android 14) AndroidXMedia3/1.1.1/64103898/4d2ec9b8c7534adc\r\n" .
                    "Accept-Encoding: gzip\r\n"
    ]
];

$context = stream_context_create($options);

$streamContent = file_get_contents($targetUrl, false, $context);

header("Content-Type: application/vnd.apple.mpegurl");
echo $streamContent;
?>
