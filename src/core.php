<?php 

//* Edit this array to add your own servers. Please note: Each key of the array must be unique. (Server1, Server2, Server3)
// game => garrysmod | minecraft | ETC
// ip => ip:port
$servers = [
    "Example" => [ 
        "game" => "garrysmod",
        "ip" => "192.168.1.1:27015",
    ]
];

//! Dont edit below this line unless you know what your doing
//? It is important to acknowledge that the availability of this API cannot be guaranteed indefinitely.
//? To ensure long-term accessibility and control, you have the option of hosting your own instance.
//? You can access the source code at the following GitHub repository: https://github.com/Whogivsachit/personal-multiuse-api
function serverInfo($game, $ip) {
    $api = "https://api.chitterengine.com/serverinfo/$game/$ip";
    $curl = curl_init($api);
    $headers = array(
        'Content-Type: application/json',
    );
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($curl);
    $responseData = json_decode($response, true);
    
    $data = [
        "status" => $responseData['status'] ?? "Offline",
        "name" => $responseData['data']['name'] ?? "Unknown",
        "players" => $responseData['data']['players'] ?? 0,
        "maxplayers" => $responseData['data']['maxplayers'] ?? 0,
    ];
    return $data;
};