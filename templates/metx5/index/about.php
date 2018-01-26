<!--<?php
echo <<<EOT
-->
<!--
EOT;
$tem_about = tmpcentarr($lang_about_id);
if($lang_about_img1)$tem_aboutimg[1]  = $lang_about_img1;
if($lang_about_img2)$tem_aboutimg[2]  = $lang_about_img2;
if($lang_about_img3)$tem_aboutimg[3]  = $lang_about_img3;
$txtwd100 = $tem_aboutimg||$lang_about_video?'':'txtwd100';
$tem_wp1 = $lang_waypointsok==1?'tem_wp1':'';
echo <<<EOT
-->
<section class="tem_index_about">
	<div class="tem_inner" style = 'display:none;'>
		<h3 class="tem_index_title">
			<span>
				{$lang_about_title}
				<p></p>
			</span>
		</h3>
		<div class="tem_index_about_cont {$tem_wp1}">
			<div class="tem_index_about_txt {$txtwd100}">
				<div class="met_editor">
					{$lang_about_content}<div class="met_clear"></div>
					<h4 class="tem_index_about_more"><a href="{$tem_about[url]}" title="{$lang_about_more}" {$metblank}>{$lang_about_more}</a></h4>
				</div>
			</div>
<!--
EOT;
if($lang_about_video){
echo <<<EOT
-->
			<div class="tem_index_about_video">
				{$lang_about_video}
			</div>
<!--
EOT;
}elseif($tem_aboutimg){
$noe = count($tem_aboutimg)==1?'class="tem_index_about_img_noe"':'';
echo <<<EOT
-->	
			<div class="tem_index_about_img">
				<ul {$noe}>
<!--
EOT;
foreach($tem_aboutimg as $key=>$val){
echo <<<EOT
-->
					<li><img src="{$val}" /></li>
<!--
EOT;
}
echo <<<EOT
-->
				</ul>
<!--
EOT;
if(count($tem_aboutimg)>1){
echo <<<EOT
-->	
				<ol>
<!--
EOT;
$i=0;
foreach($tem_aboutimg as $key=>$val){
if($val){
$i++;
$tem_now = $i==1?'class="tem_now"':'';
echo <<<EOT
-->
					<li {$tem_now}><img src="{$val}" /><i class="fa fa-caret-left"></i></li>
<!--
EOT;
}}
echo <<<EOT
-->
				</ol>
<!--
EOT;
}
echo <<<EOT
-->	
			</div>
<!--
EOT;
}
$zm_img = "upload/201506/1434445675845961.png";
echo <<<EOT
-->	
			<div class="met_clear"></div>
		</div>
	</div>
	<br>
	<div style = 'text-align:center;margin:0 auto; width:1000px'>
		<center>
			<h1 style = 'font-size:35px;color:black;margin-top:10px;'>膳食营养<span style ='color:#095830;letter-spacing:2px;'>解决方案</span></h1>	
			<h3 style = 'font-size:23px;margin-top:15px;'>Dietary nutrition solution</h3>	
			<ol style = 'list-style-type:none;margin-top:18px'>
				<li  style = 'float:left; width:11%'><img src="upload/image/1.png" width="90%" /><br><br><p style = 'font-size:20px;font-weight:bold'>骨骼关节<p></li>
				<li  style = 'float:left; width:11%'><img src="upload/image/2.png" width="90%" /><br><br><p style = 'font-size:20px;font-weight:bold'>心脑血管<p></li>
				<li  style = 'float:left; width:11%'><img src="upload/image/3.png" width="90%" /><br><br><p style = 'font-size:20px;font-weight:bold'>血糖管理<p></li>
				<li  style = 'float:left; width:11%'><img src="upload/image/4.png" width="90%" /><br><br><p style = 'font-size:20px;font-weight:bold'>美颜乌发<p></li>
				<li  style = 'float:left; width:11%'><img src="upload/image/5.png" width="90%" /><br><br><p style = 'font-size:20px;font-weight:bold'>体重管理<p></li>
				<li  style = 'float:left; width:11%'><img src="upload/image/6.png" width="90%" /><br><br><p style = 'font-size:20px;font-weight:bold'>肝部健康<p></li>
				<li  style = 'float:left; width:11%'><img src="upload/image/7.png" width="90%" /><br><br><p style = 'font-size:20px;font-weight:bold'>肌肉萎缩<p></li>
				<li  style = 'float:left; width:11%'><img src="upload/image/8.png" width="90%" /><br><br><p style = 'font-size:20px;font-weight:bold'>男性健康<p></li>
				<li  style = 'float:left; width:11%'><img src="upload/image/9.png" width="90%" /><br><br><p style = 'font-size:20px;font-weight:bold'>女性健康<p></li>
			</ol>
		<center>
	</div>
	<div class="met_clear"></div>
	<div class="met_clear"></div>
</section>
<!--
EOT;

?>