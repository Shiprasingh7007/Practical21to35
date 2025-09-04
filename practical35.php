<?php
$countries=["India"=>"New Delhi","Germany"=>"Berlin","France"=>"Paris","Japan"=>"Tokyo"];
$search="Paris";
$result=array_search($search,$countries);
echo($result)?"search is capital of $result":"search not found";
?>