<?php
  $arr=["Roll-no"=>1, "Age"=>20];
  $key="Age";
  if(array_key_exists($key,$arr)){
    echo"This key exists";}
    else{
        echo"Does not exists";
    }
  ?>