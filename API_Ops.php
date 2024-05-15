<?php

$API_KEY = "906f85c445msh8de16a4b7cb624dp1e8200jsna6657474b57f";

function getBirthdays($Month, $Day, $API_KEY)
{
    $curl = curl_init();

    curl_setopt_array($curl, [
        CURLOPT_URL => "https://online-movie-database.p.rapidapi.com/actors/list-born-today?month=$Month&day=$Day",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => [
            "X-RapidAPI-Host: online-movie-database.p.rapidapi.com",
            "X-RapidAPI-Key: $API_KEY"
        ],
    ]);

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        echo  "cURL Error #:" . $err;;
    } else {
        return $response;
    }
}

function getBio($nconst, $API_KEY)
{
    $curl = curl_init();

    curl_setopt_array($curl, [
        CURLOPT_URL => "https://online-movie-database.p.rapidapi.com/actors/get-bio?nconst=$nconst",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => [
            "X-RapidAPI-Host: online-movie-database.p.rapidapi.com",
            "X-RapidAPI-Key: $API_KEY"
        ],
    ]);

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        echo "cURL Error #:" . $err;
    } else {
        return json_decode($response, true);
    }
}

$actors1 = getBirthdays($_GET['month'], $_GET['day'], $API_KEY);

preg_match_all('/\/name\/([a-z0-9]+)/i', $actors1, $matches);

$response = $matches[1];

$res = array("actors" => array());

$counter = 0; 

foreach ($response as $id) {
    if ($counter == 5) break; 

    $actorData = getBio($id, $API_KEY);
    if ($actorData && isset($actorData['name'])) {
        $res['actors'][] = array(
            'name' => $actorData['name']
        );
        $counter++;
    }
}
echo json_encode($res);

?>

