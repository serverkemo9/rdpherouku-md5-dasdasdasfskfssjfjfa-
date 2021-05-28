<?php

function a(){

$url = "https://ide-run.goorm.io/container/run";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "accept: */*",
   "accept-encoding: gzip, deflate, br",
   "accept-language: en-US,en;q=0.9",
   "content-length: 84",
   "Content-Type: application/x-www-form-urlencoded",
   "cookie: goorm.lang=us; _fbp=fb.1.1621443732271.1775465325; _hackle_hid=9908f146-cad8-4649-a882-8cd45aef8cb5; site.goorm.sid=s%3A2yu_gpTxDqE-eptcbrl93BgEc4ksCfW7.H7zJPZwTo1C8e%2BJzyE5Hs%2BeCc2kno%2B8xlHwgyU69Fwc; amplitude_id_fef1e872c952688acd962d30aa545b9egoorm.io=eyJkZXZpY2VJZCI6ImRkOGUxOWRiLTllNTctNDczNC05MDUzLTNlZTYyOWE2ZDc4OVIiLCJ1c2VySWQiOm51bGwsIm9wdE91dCI6ZmFsc2UsInNlc3Npb25JZCI6MTYyMTg4NDQyMzM0NiwibGFzdEV2ZW50VGltZSI6MTYyMTg4NDQyNDM2MiwiZXZlbnRJZCI6MSwiaWRlbnRpZnlJZCI6MSwic2VxdWVuY2VOdW1iZXIiOjJ9; ide.goorm.sid=s%3AS0rvQjzosWenVvflbjQNSRBp_scqoe-T.ijmpxFfh7iWyeYwXCi%2Bxvqhj6GSMPXXfdA6MO8yJEcc; intercom-id-xf0rscwz=c5ba60f5-37ce-4a93-9bf2-d2969785de31; accounts.sid=s%3AEXa052y8xfCbb5ipygPU5-31X2ItAA8k.8z3iZ79RdtfSSO%2B6AAGNONXHgsx7u2RSLzrIo5kUGC0; goormaccounts.sid=eyJhbGciOiJSUzI1NiIsInR5cCI6IkpXVCJ9.eyJleHAiOjE2MjI4MjYyNzMsIlRva2VuVHlwZSI6ImxldmVsMSIsImlkIjoiMTEwMjY0MTA5NjE2NDkzNDg1MTc3X3I3ejJvX2dvb2dsZSIsImVtYWlsIjoiMTEwMjY0MTA5NjE2NDkzNDg1MTc3X3I3ejJvX2dvb2dsZSIsImNyZWF0ZWRhdGUiOjE2MjIyMjE0NzMsInNlc3Npb25pZCI6InQ4M0J0cVlQdUlmczNWeVh4ei1TYnpoeWQ0N0w2TzA2a1pORzM0ankwWFE9IiwiVFRMIjowfQ.Zzt9PQme0Qz2kMkzXkKpmtrqE4UIBq15FqL9v7VKecFKc8qXo2E2e52Ej-I7fT0hh3biNqMbCBzD_y87OohK1kb4jLgLMVJc_SK8Mkt7P_fRRIid8ZhK-OmWzDXsVUIwlRKXHnGHxtzl1O33PWZMaqT3SfYumc6_phqD8WSrH6Zf7u1ennBa2Y1l5eLwx40Y4pyumkW6uHV1X_F1aaKIg_tvJxjm_VdV5tXyaqO0Xoqe0O4ST71o9fJ00UAuNGu83PlL1tY0gvll63eRLXGSluU3VNVvcKKQPMtOTsC9SqXgJX5cCFw2uJSDN8hP-Ze94bdY3a9WlnaM_sOFbadjBg; io=UKe6f_U6yfU1w3nZAFYd; intercom-session-xf0rscwz=dk9qSXpaVHc0eStEV2twYXE3MEtPbExoWVFISHFXbEtZSlE5YXhWNElNZGJVa0hPQzN4Sm83OXFaVXJXbWJPUi0tczJJSnFMQTdLUWpPc2dRKzdEMGJQQT09--8151422a814c7ba61e5f00de650450b1776e13f2; AWSALB=MFhDL1le/FQv2h77EKOarmJUm3m2V0QN05sLCBq9VPvhFkyZSuyETFJ24A+fD+zcjfJpFSSLhfXPwm4+Jbja0G6XFwf9pd+9osE4/0ns0LqI6iQTxD7lbjZTmt91; AWSALBCORS=MFhDL1le/FQv2h77EKOarmJUm3m2V0QN05sLCBq9VPvhFkyZSuyETFJ24A+fD+zcjfJpFSSLhfXPwm4+Jbja0G6XFwf9pd+9osE4/0ns0LqI6iQTxD7lbjZTmt91",
   "origin: https://ide-run.goorm.io",
   "referer: https://ide-run.goorm.io/terminal/110264109616493485177_r7z2o_google_xxxqwe",
   "sec-fetch-dest: empty",
   "sec-fetch-mode: cors",
   "sec-fetch-site: same-origin",
   "sec-gpc: 1",
   "user-agent: Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$data = "docker_id=d9o3isBEfvHDTwGlZz7&project_path=110264109616493485177_r7z2o_google_xxxqwe";

curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp = curl_exec($curl);
curl_close($curl);
var_dump($resp);
}
?>

