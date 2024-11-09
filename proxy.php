<?php
$targetUrl = 'https://bldcmprod-cdn.toffeelive.com/cdn/live/sports_highlights/playlist.m3u8';

$options = [
    "http" => [
        "header" => "Host: bldcmprod-cdn.toffeelive.com\r\n" .
                    "Cookie: Edge-Cache-Cookie=URLPrefix=aHR0cHM6Ly9ibGRjbXByb2QtY2RuLnRvZmZlZWxpdmUuY29tLw:Expires=1731313136:KeyName=prod_linear:Signature=faCP40LnFH42ss64oDnUaI4IsvwTSM3bLdiPyLVdZhN2H_IsxqyRYzLBioYFgzGrUPR6OIz64TGeC7RNU2TzBQ\r\n" .
                    "User-Agent: Toffee (Linux;Android 14) AndroidXMedia3/1.1.1/64103898/4d2ec9b8c7534adc\r\n" .
                    "client-api-header: angM1aXCHQLmmSW6cDlpXMD6tLdwnhMoUeaBBFKmd98bX6Vrae5xCMbm4gg0+u33rnxeGQDZNr2GD1tW0cWwKEpWimNlGqXVQGhpiIBz1JFxN+OxXcQqaMPrjwUhCyI5mO1DGyNv18+Z2EpmHtVnLzV9SrGsQWu4oRKjxE8QIMsRs6LrvL6hWGPlOGQke/qb5QxQZNetPzI39jHhX7Zi2XrCMIT4a+gk2Wu1c3wIybwkqknPcTp4Bj1cEF3Q+q1dV05SBhzpEDfoR2BLyQ6dV3LvmY6MNKxbUjby7hMsg35lFl2Df2mZsr7C27309w/qWi8lLXDjB7B1MozIGKn8rw3bXY5YlrPKBKztyiisAjQQi7kc5ISXyGSwRmhciwkciuitsSL0LlqHY7/Qkkh71EtaK3XEgVpLdH8zRCsTwfu1iIVPiDwTycuuBy4XWkcNnd0iLB35yftQpiL8HfpO2jQnrAwzePxszJ7mewVG+M0P/qyTBD52NkPR8uW0AZmDKp5LHTCGf7sqldDzpZvU+gsSdvtsBUcmHzjINGEoyXk=\r\n" .
                    "Accept-Encoding: gzip\r\n"
    ]
];

// Create a stream context with the specified options
$context = stream_context_create($options);

// Fetch the content from the target URL
$streamContent = file_get_contents($targetUrl, false, $context);

// Output the content
header("Content-Type: application/vnd.apple.mpegurl");
echo $streamContent;
?>
