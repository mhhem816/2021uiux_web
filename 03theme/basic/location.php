<?php

include_once('./_common.php');


	$co_id = "location";

	//상단 메뉴바의 몇번째 1차메뉴에 속해 있는지 지정해 주세요.
	$menuNum = "1";

	//상단 메뉴바의 1차메뉴중 몇번째 2차메뉴에 속해 있는지 지정해 주세요.
	$menuNum2 = "3";

	//본 페이지의 제목을 입력해 주시기 바랍니다.
	$g5['title'] = "오시는 길";


include_once(G5_THEME_PATH.'/head.php');
?>
<script>
$(document).ready(function(){
	$('#snb > li:nth-child(<?php echo $menuNum; ?>)').addClass("co_id<?php echo $co_id; ?> active");
	$('#snb > li:nth-child(<?php echo $menuNum; ?>) > ul > li:nth-child(<?php echo $menuNum2; ?>)').addClass("snb2d_co_id<?php echo $co_id; ?>  active");
	});
</script>

<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi ipsam deleniti inventore veniam recusandae quo minus asperiores saepe voluptatibus enim,
odio consequuntur praesentium adipisci ea illum reprehenderit rem eveniet dignissimos mollitia quos accusantium.
Quae ratione harum ipsum tempora veritatis, corporis fuga, laboriosam nulla minus, sint provident id rerum porro amet, cum consequatur saepe asperiores fugit dolorem nihil dicta eligendi.
Non soluta numquam dolor rem totam quas labore error necessitatibus deserunt quod consequatur vero porro quis pariatur tempora at aperiam,
accusantium ipsa voluptate molestias aliquam perspiciatis atque! Mollitia nihil blanditiis,
illum ut! Quam ab optio neque quaerat inventore modi quae corporis?</div>


<!--
	* 카카오맵 - 약도서비스
	* 한 페이지 내에 약도를 2개 이상 넣을 경우에는
	* 약도의 수 만큼 소스를 새로 생성, 삽입해야 합니다.
-->
<!-- 1. 약도 노드 -->
<div id="daumRoughmapContainer1620962105575" class="root_daum_roughmap root_daum_roughmap_landing"></div>

<!-- 2. 설치 스크립트 -->
<script charset="UTF-8" class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>

<!-- 3. 실행 스크립트 -->
<script charset="UTF-8">
	new daum.roughmap.Lander({
		"timestamp" : "1620962105575",
		"key" : "25r94",
		"mapWidth" : "930",
		"mapHeight" : "400"
	}).render();
</script>

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>
