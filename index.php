<?php 
function verificarURL($url) {
return $url == parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
}
function verificarMetodo($metodo){
return $metodo == $_SERVER['REQUEST_METHOD'];
}
$rotas = [
[   
"url" => "/",
"metodo" => "GET",
"conteudo" => "pagina principal"
],
[   
    "url" => "/perfil",
    "metodo" => "GET",
    "conteudo" => "pagina de perfil"
],
    [
    "url" => "/perfil/amigos",
    "metodo" => "GET",
    "conteudo" => "pagina de amigos"
    ]
    ];
        
      foreach ($rotas as $rota) {
      if(verificarURL($rota['url']) && verificarMetodo($rota['metodo'])) {
        echo $rota['conteudo'];
      }

      }







?>