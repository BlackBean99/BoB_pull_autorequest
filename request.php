<?php 
	$username = '19-71110836';
	$password = 'dhwns3807!';
	// $loginUrl = 'http://www.babfull.or.kr/222/auth-signin-v1_y.php';
	$loginUrl = 'http://www.babfull.or.kr/ww1/bbs/login_check.php';	
$cookie_file_path = './babfull_cookie.txt';
	//init curl
	$ch = curl_init();

	//Set the URL to work with
	curl_setopt($ch, CURLOPT_URL, $loginUrl);

	// ENABLE HTTP POST
	curl_setopt($ch, CURLOPT_POST, 1);

	//Set the post parameters
	curl_setopt($ch, CURLOPT_POSTFIELDS, 'url=%2F222&auto_login=&military=1&mb_id='.$username.'&mb_password='.$password);

	//Handle cookies for the login
	curl_setopt($ch, CURLOPT_COOKIEJAR, 'babfull_cookie.txt');
	curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie_file_path);	
	//Setting CURLOPT_RETURNTRANSFER variable to 1 will force cURL
	//not to print out the results of its query.
	//Instead, it will return the results as a string return value
	//from curl_exec() instead of the usual true/false.
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	print('chapter1');
	//execute the request (the login)
	$store = curl_exec($ch);
print($store);












	//the login is now done and you can continue to get the
	//protected content.
	$request_url2 = "http://www.babfull.or.kr/php/ajax_sin_s2_json.php";
	curl_setopt($ch, CURLOPT_URL, $request_url2);
	curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie_file_path);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); // 이 셋팅은 1로 고정하는 것이 정신건강에 좋음
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE); //true로 설정시 일부 https 사이트는 안 열림
	curl_setopt($ch, CURLOPT_SSLVERSION,3); //ssl 셋팅

	

	// 2020.05.02일 현시간부로 code -it
	$i = 0;
	$j = 0;	
curl_setopt($ch, CURLOPT_POST, 1);
	for($j =0; $j <3; $j++){
		for($i = 0 ; $i <300 ; $i++){
				 $stick_date = '2020-05-19';
				 $request_date = strtotime($stick_date.'+'.$i.' days');
				$plus_date = date("Y-m-d",$request_date);
				 $postfields = 'cjs='.$j.'&mode=sin_s2&sdate='.$plus_date;
				 echo $postfields;
				 curl_setopt($ch, CURLOPT_POSTFIELDS,$postfields);
				curl_exec($ch);
			 }
	}
	// $postfields = 'cjs=2&mode=sin_s2&sdate=2020-05-19';

// 	$negative_postfields = 'cjs=1&mode=sin_s2X&sdate=2020-05-17&tit=5&sinxsau=5&msgtxtu=%EC%A3%BC%EB%A7%90%EB%B6%88%EC%8B%9D';
	
	curl_close($ch);
	


 	print("success");

?>







