<?php
 
// 요청을 받아 저장
$data = json_decode(file_get_contents('php://input'), true);
 
// 받은 요청에서 content 항목 설정
$content = $data["content"];
 
$url = 'https://www.youtube.com/watch?v=r_EAbsHL-gA';



$start = array(
	"message" => array(
		"text" => "검색을 통해 영상을 추천받을 수 있습니다.")
);

$info = array(
	"message" => array(
		"text" => "MADE BY Jay Yu and Woojin Park")
);

$data = array(
	"message" => array(
		"text" => $url)
);

$nope = array(
	"message" => array(
		"text" => "검색어를 찾을 수 없습니다. 아직 데이터 입력 중이니 양해부탁드립니다.")
);



 
 

// 최초 등장 메뉴 -- 1
if( $content == "영상 추천"){
	echo(json_encode($start));
}

// 최초 등장 메뉴 -- 2
else if( $content == "정보"){
	echo(json_encode($info));
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
 
?>










