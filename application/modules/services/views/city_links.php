<?php
$link=$this->uri->segment(1);

$keywords=array(
	array("link"=>"web-design-in-".strtolower(str_replace(" ", "-", $city)),"label"=>"Web Design Training in $city"),
	array("link"=>"ui-ux-in-".strtolower(str_replace(" ", "-", $city)),"label"=>"UI/UX Development in $city"),
	array("link"=>"frontend-in-".strtolower(str_replace(" ", "-", $city)),"label"=>"Frontend Training in $city"),
	array("link"=>"backend-in-".strtolower(str_replace(" ", "-", $city)),"label"=>"Backend Training in $city"),
	array("link"=>"graphic-design-in-".strtolower(str_replace(" ", "-", $city)),"label"=>"Graphic Design in $city"),
	array("link"=>"software-in-".strtolower(str_replace(" ", "-", $city)),"label"=>"Software Developer in $city"),
);

$htmldata="<style>.mylists li a{color:#fff}.mylists li{    background: #f30404;
    border: 3px solid #dbdbdd;
    margin: 5px 10px 5px 0px;
    display: inline-block;
    padding: 5px 15px;
    border-radius: 27px;}</style>
<ul class='inline mylists'>";
foreach ($keywords as $k){
	if($k['link']==$link)
		continue;
	else $htmldata.="<li><a href='".$k['link']."'>".$k['label']."</a></li>";
}
echo $htmldata."</ul>";