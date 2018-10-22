<?
$queryUrl = 'https://ultralive.bitrix24.ru/rest/11/bdb8uef8w3f9orml/calendar.event.add.json';
$queryData = http_build_query(array(
     		type: 'user',
     	 	ownerId: '11',
      		name: 'test',
      		description: 'Description for event',
      		from: '2018-10-24',
      		to: '2018-10-24',
      		skipTime: 'Y',
      		section: 1,
));   
$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_SSL_VERIFYPEER => 0,
  CURLOPT_POST => 1,
  CURLOPT_HEADER => 0,
  CURLOPT_RETURNTRANSFER => 1,
  CURLOPT_URL => $queryUrl,
));

curl_close($curl);




 
