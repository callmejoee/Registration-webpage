<?php
$birthdate = $_POST['birthdate'] ?? date("Y-m-d"); 

$curl = curl_init();

curl_setopt_array($curl, [
    CURLOPT_URL => "https://online-movie-database.p.rapidapi.com/actors/list-born-today?month=" . date("m", strtotime($birthdate)) . "&day=" . date("d", strtotime($birthdate)),
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => [
        "X-RapidAPI-Host: online-movie-database.p.rapidapi.com",
        "X-RapidAPI-Key: 5e5dd03998msh835196ce43a9cacp15e7c5jsnf9583b16acd4"
    ],
]);

$response = curl_exec($curl);
$err = curl_error($curl);
$actors = [];

if ($err) {
    echo json_encode(["error" => "cURL Error: " . $err]); 
} else {
    foreach (json_decode($response) as $value) {
        $nconst = explode("/", $value)[2];
        curl_setopt($curl, CURLOPT_URL, "https://online-movie-database.p.rapidapi.com/actors/get-bio?nconst=$nconst");
        $response = curl_exec($curl);
        $err = curl_error($curl);
        if ($err) {
            echo json_encode(["error" => "cURL Error: " . $err]); 
        } else {
            $name = json_decode($response)->name;
            $actors[] = $name;
        }
    }
    
    echo json_encode($actors);
}

curl_close($curl);
?>






