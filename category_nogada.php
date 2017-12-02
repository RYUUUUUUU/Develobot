<?php

// 요청을 받아 저장
$data = json_decode(file_get_contents('php://input'), true);

// 받은 요청에서 content 항목 설정
$content = $data["content"];


$video = "비디오";
$podcast = "팟케스트";
$blog = "블로그";
$book = "책";





if($content == "처음으로"){
	echo <<< EOD
	{
		"message":{
			"text": "초기화면입니다!"
		},
		"keyboard": {
			"type": "buttons",
			"buttons": ["시작하기", "도움말"]
		}
	}
EOD;



//*******************************************************************
//초기 화면
}else if($content == "시작하기"){
	echo <<<EOD
	{
		"message": {
			"photo":{
            	"url":"http://www.motivateplay.com/wp-content/uploads/2013/04/motivation.jpg",
                "width":240,
                "height":240
                },
			"text" : "WELCOME TO DEVELOBOT\\n\\n\\n원하시는 메뉴를 선택하세요."
		},
		"keyboard":{
			"type":"buttons",
			"buttons":["직접 검색","카테고리별 검색","인기 컨텐츠 추천"]
		}
	}
EOD;
}else if($content == "도움말"){
	echo<<<EOD
	{
		"message": {	
			"text": "도움말입니다."
		},
		"keyboard":{
			"type":"buttons",
			"buttons":["처음으로"]
		}
	}
EOD;
}
//
//*******************************************************************








//*******************************************************************
// 초기 메뉴 1단계의 응답 


else if( $content == "직접 검색" )
{
echo <<< EOD
    {
        "message": {
            "text": "검색어를 입력하세요.\\n처음으로 돌아가시려면 [처음으로]를 입력해주세요!"
        }
    }
EOD;

	
}else if(($content == "카테고리별 검색")||($content == "상위 카테고리 메뉴로")){
	echo <<< EOD
		{
			"message": {
				"text": "카테고리별 검색!"
			},
			"keyboard":{
				"type" : "buttons",
				"buttons" : ["비디오","팟케스트","블로그","책","처음으로"]
			}
		}   
EOD;
}else if( $content == "추천"){
	echo <<< EOD
		{
			"message": {
				"text": "현재 순위 추천!"
			},	
			"keyboard":{
				"type":"buttons",
				"buttons":["비디오 인기차트","블로그 인기차트","팟케스트 인기차트","책 인기차트","처음으로"]
			}
		}    
EOD;
}else if( $content == "등록하기"){
	echo <<< EOD
		{
			"message": {
				"text": "등록하실 내용을 선택하세요"
			},
			"keyboard":{
				"type":"buttons",
				"buttons":["비디오 등록","블로그 등록","팟케스트 등록","처음으로"]
			}
		}    
EOD;
}
//
//*******************************************************************



function UpMenu1($medium){
	$temp1 = "상위 ";
	$temp2 = " 메뉴로"
	
	return $temp1.$medium.$temp2;
}

function Depth1($medium){

}





//*******************************************************************
//카테고리에 대한 내용 

else if(($content == $video)||($content == UpMenu1($video))){
	echo <<< EOD
	{
		"message": {	
			"text": "카테고리 - 비디오 입니다."
		},
		"keyboard":{
			"type":"buttons",
			"buttons":["자기계발 비디오","언어공부 비디오","시사상식 비디오","기술동향 비디오","상위 카테고리 메뉴로"]
		}
	} 
EOD;
}else if(($content == $podcast)||($content == UpMenu1($podcast))){
	echo <<< EOD
	{
		"message": {	
			"text": "카테고리 - 팟케스트 입니다."   
		},
		"keyboard":{
			"type":"buttons",
			"buttons":["자기계발 팟케스트","언어공부 팟케스트","시사상식 팟케스트","기술동향 팟케스트","상위 카테고리 메뉴로"]
		}
	} 
EOD;
}else if(($content == $blog)||($content == UpMenu1($blog))){
	echo <<< EOD
	{
		"message": {	
			"text": "카테고리 - 블로그 입니다."
		},
		"keyboard":{
			"type":"buttons",
			"buttons":["자기계발 블로그","언어공부 블로그","시사상식 블로그","기술동향 블로그","상위 카테고리 메뉴로"]
		}
	} 
EOD;
}else if(( $content == $book)||($content == UpMenu1($book))){
	echo <<< EOD
	{
		"message": {	
			"text": "카테고리 - 책 입니다."
		},
		"keyboard":{
			"type":"buttons",
			"buttons":["자기계발 책","언어공부 책","시사상식 책","기술동향 책","상위 카테고리 메뉴로"]
		}
	}  
EOD;
}

//*******************************************************************






//*******************************************************************
//비디오 세부카테고리 (length = 1)


else if( $content == "자기계발 비디오"){
	echo <<< EOD
	{
		"message": {	
			"text": "자기계발 비디오입니다."
		},
		"keyboard":{
			"type":"buttons",
			"buttons":["동기부여 비디오","자존감 회복 비디오","독서 비디오","상위 비디오 메뉴로"]
		}
	}  
EOD;
}else if( $content == "언어공부 비디오"){
	echo <<< EOD
	{
		"message": {	
			"text": "언어공부 비디오입니다."
		},
		"keyboard":{
			"type":"buttons",
			"buttons":["영어공부 비디오","중국어공부 비디오","일본어공부 비디오","상위 비디오 메뉴로"]
		}
	}  
EOD;
}else if( $content == "시사상식 비디오"){
	echo <<< EOD
	{
		"message": {	
			"text": "시사상식 비디오입니다."
		},
		"keyboard":{
			"type":"buttons",
			"buttons":["정치 비디오","경제 비디오","시사 비디오","상위 비디오 메뉴로"]
		}
	}  
EOD;
}else if( $content == "기술동향 비디오"){
	echo <<< EOD
	{
		"message": {	
			"text": "기술동향 비디오입니다."
		},
		"keyboard":{
			"type":"buttons",
			"buttons":["테크 비디오","인공지능 비디오","스타트업 비디오","상위 비디오 메뉴로"]
		}
	}  
EOD;
}


//*******************************************************************









//*******************************************************************
//팟케스트 세부카테고리 (length = 1)

else if( $content == "자기계발 팟케스트"){
	echo <<< EOD
	{
		"message": {	
			"text": "자기계발 팟케스트입니다."
		},
		"keyboard":{
			"type":"buttons",
			"buttons":["동기부여 팟케스트","자존감 회복 팟케스트","독서 팟케스트","상위 팟케스트 메뉴로"]
		}
	}  
EOD;
}else if( $content == "언어공부 팟케스트"){
	echo <<< EOD
	{
		"message": {	
			"text": "언어공부 팟케스트입니다."
		},
		"keyboard":{
			"type":"buttons",
			"buttons":["영어공부 팟케스트","중국어공부 팟케스트","일본어공부 팟케스트","상위 팟케스트 메뉴로"]
		}
	}  
EOD;
}else if( $content == "시사상식 팟케스트"){
	echo <<< EOD
	{
		"message": {	
			"text": "시사상식 팟케스트입니다."
		},
		"keyboard":{
			"type":"buttons",
			"buttons":["정치 팟케스트","경제 팟케스트","시사 팟케스트","상위 팟케스트 메뉴로"]
		}
	}  
EOD;
}else if( $content == "기술동향 팟케스트"){
	echo <<< EOD
	{
		"message": {	
			"text": "기술동향 팟케스트입니다."
		},
		"keyboard":{
			"type":"buttons",
			"buttons":["테크 팟케스트","인공지능 팟케스트","스타트업 팟케스트","상위 팟케스트 메뉴로"]
		}
	}  
EOD;
}




//*******************************************************************










//*******************************************************************
//블로그 세부카테고리 (length = 1)

else if( $content == "자기계발 블로그"){
	echo <<< EOD
	{
		"message": {	
			"text": "자기계발 블로그입니다."
		},
		"keyboard":{
			"type":"buttons",
			"buttons":["동기부여 블로그","자존감 회복 블로그","독서 블로그","상위 블로그 메뉴로"]
		}
	}  
EOD;
}else if( $content == "언어공부 블로그"){
	echo <<< EOD
	{
		"message": {	
			"text": "언어공부 블로그입니다."
		},
		"keyboard":{
			"type":"buttons",
			"buttons":["영어공부 블로그","중국어공부 블로그","일본어공부 블로그","상위 블로그 메뉴로"]
		}
	}  
EOD;
}else if( $content == "시사상식 블로그"){
	echo <<< EOD
	{
		"message": {	
			"text": "시사상식 블로그입니다."
		},
		"keyboard":{
			"type":"buttons",
			"buttons":["정치 블로그","경제 블로그","시사 블로그","상위 블로그 메뉴로"]
		}
	}  
EOD;
}else if( $content == "기술동향 블로그"){
	echo <<< EOD
	{
		"message": {	
			"text": "기술동향 블로그입니다."
		},
		"keyboard":{
			"type":"buttons",
			"buttons":["테크 블로그","인공지능 블로그","스타트업 블로그","상위 블로그 메뉴로"]
		}
	}  
EOD;
}


//*******************************************************************










//*******************************************************************
//책 세부카테고리 (length = 1)

else if( $content == "자기계발 비디오"){
	echo <<< EOD
	{
		"message": {	
			"text": "자기계발 비디오입니다."
		},
		"keyboard":{
			"type":"buttons",
			"buttons":["동기부여 비디오","자존감 회복 비디오","독서 비디오","상위 비디오 메뉴로"]
		}
	}  
EOD;
}else if( $content == "언어공부 비디오"){
	echo <<< EOD
	{
		"message": {	
			"text": "자기계발 비디오입니다."
		},
		"keyboard":{
			"type":"buttons",
			"buttons":["영어공부 비디오","중국어공부 비디오","일본어공부 비디오","상위 비디오 메뉴로"]
		}
	}  
EOD;
}else if( $content == "시사상식 비디오"){
	echo <<< EOD
	{
		"message": {	
			"text": "자기계발 비디오입니다."
		},
		"keyboard":{
			"type":"buttons",
			"buttons":["정치 비디오","경제 비디오","시사 비디오","상위 비디오 메뉴로"]
		}
	}  
EOD;
}else if( $content == "기술동향 비디오"){
	echo <<< EOD
	{
		"message": {	
			"text": "자기계발 비디오입니다."
		},
		"keyboard":{
			"type":"buttons",
			"buttons":["테크 비디오","인공지능 비디오","스타트업 비디오","상위 비디오 메뉴로"]
		}
	}  
EOD;
}








//*******************************************************************

























//*******************************************************************








else if($content == "영어 공부 비디오"){
	echo <<< EOD
	{
		"message": {	
			"text": "https://www.youtube.com/watch?v=_iGn9DGWvIE"
		},
		"keyboard":{
			"type":"buttons",
			"buttons":["상위 비디오 메뉴로"]
		}
	} 
EOD;
}

else if( strpos($content, "영어") !== false )
{
echo <<< EOD
    {
        "message": {
            "text": "영어검색스"
        }
    }    
EOD;
}


?>
