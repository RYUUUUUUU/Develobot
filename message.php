<?php
 
// 요청을 받아 저장
$data = json_decode(file_get_contents('php://input'), true);
 
// 받은 요청에서 content 항목 설정
$content = $data["content"];
 
 
 
// '시작하기' 버튼 처리
if( $content == "시작하기" ){
echo <<< EOD
	{
        "message": {
            "text": "아직 개발중입니다. 조금만 기다려주세요.;"
        }
    }
EOD;
}
// '도움말' 버튼 처리
else if( $content == "도움말")
{
echo <<< EOD
    {
        "message": {
            "text": "MADE BY YU AND PARK"
        }
    }    
EOD;
}
// '안녕'이란 단어가 포함되었을때 처리
else if( strpos($content, "샘플") !== false )
{
echo <<< EOD
    {
        "message": {
            "text": "https://www.youtube.com/watch?v=yMFUmKJGr80"
        }
    }    
EOD;
}
else if( strpos($content, "줘바") !== false )
{
echo <<< EOD
    {
        "message": {
            "text": "https://www.youtube.com/watch?v=yMFUmKJGr80"
        }
    }    
EOD;
}
// 그밖의 문장일때 
else
{
echo <<< EOD
    {
        "message": {
            "text": "아 기다리라고 이상한거 입력하지말고"
        }
    }    
EOD;
}
 
?>