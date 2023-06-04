<?php

require_once "./app/routes/routes.php";

if (isset($_GET["url"])) {
	$url = explode("/", $_GET["url"]);
	route($url, $routes);
}else{
	//Index
	$response = [
        "status" => "1",
		"code" => "200",
        "info" => "Webservice is working normally",
    ];
    header("HTTP/1.1 200 OK");
    header("Content-Type: application/json");
    echo json_encode($response);
}

//This function verify the URL and redirect the user
function route($url, $routes){
	$validated = false;
	foreach($routes as $route) {
		$exibir = $route[0];
		$rota = $route[1];
		if($url[0] == $exibir) {
			$validated = true;
			if(file_exists($rota)){
				require_once $rota;
			}else{
				$response = [
					"status" => "0",
					"info" => "Route not found",
				];
				header("HTTP/1.1 404 Not Found");
				header("Content-Type: application/json");
				echo json_encode($response);
			}
		}
	}
	if($validated == false){
		$response = [
			"status" => "0",
			"info" => "Route not found",
		];
		header("HTTP/1.1 404 Not Found");
		header("Content-Type: application/json");
		echo json_encode($response);
	}
}
