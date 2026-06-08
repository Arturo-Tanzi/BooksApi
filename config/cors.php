<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Cross-Origin Resource Sharing (CORS) Configuration
    |--------------------------------------------------------------------------
    |
    | Here you may configure your settings for cross-origin resource sharing
    | or "CORS". This determines what cross-origin operations may execute
    | in web browsers. You are free to adjust these settings as needed.
    |
    | To learn more: https://developer.mozilla.org/en-US/docs/Web/HTTP/CORS
    |
    */

    'paths' => ['api/*'],

    'allowed_methods' => ['GET', 'POST', 'PUT', 'DELETE', 'OPTIONS'], //Sono tutti i metodi HTTP che vuoi consentire per le richieste cross-origin, ovvero le richieste che provengono da un dominio diverso da quello del tuo server.

    'allowed_origins' => ['http://localhost:3000'], //Sono gli URL dei domini da cui vuoi consentire le richieste cross-origin. In questo caso, stai consentendo le richieste provenienti da "http://localhost:3000". Puoi aggiungere più URL se necessario.

    'allowed_origins_patterns' => [],

    'allowed_headers' => ['Authorization', 'Content-Type'], 

    'exposed_headers' => ['Authorization'], //Quali Header possono essere esposti al browser. Authorization è un header che viene spesso utilizzato per inviare token di autenticazione.

    'max_age' => 60, //Sono il numero di secondi che il browser deve mantenere la risposta di una richiesta cross-origin in cache.

    'supports_credentials' => true,

];
