<?php

if($systemConfig["status"]=="deploy"){
	error_reporting(0);
}elseif($systemConfig["status"]=="dev"){
	error_reporting(E_ERROR);
}elseif($systemConfig["status"]=="debug"){
	error_reporting(E_ALL);
}else{
	error_reporting(0);
}