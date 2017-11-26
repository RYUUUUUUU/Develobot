<?php






// 요청을 받아 저장

$data = json_decode(file_get_contents('php://input'), true);
$content = $data["content"];





$mysqli = new mysqli("localhost", "root", "bdb2012",  "DEVELOBOT");
 

// 받은 요청에서 content 항목 설정


$url = "https://www.youtube.com/watch?v=";



if( $content == "test"){
	if ($result = $mysqli->query("SELECT url FROM testtable WHERE name = 1")) {
		while($row = $result->fetch_row()) {
	    	$test_url = $url.$row[0];	
			$start = array(
			"message" => array(
			"text" => $test_url)
			);
		}
	}
	echo(json_encode($start));
}





/*

// 최초 등장 메뉴 -- 2

else if( $content == '검색'){
	echo(json_encode($search));
}

// 샘플이라는 단어가 포함되어 있을 때 but 샘플 vs 샘플2라 할지라도 샘플이 출력되는 것을 볼 수 있음
// string이 긴 것이 앞으로 가면 좋을 듯.
else if( strpos($content, "샘플") !== false ){
	echo(json_encode($data));
}

// 그밖의 문장일때 

else{	
	echo(json_encode($nope));
}
*/
?>










