<?php

namespace Lib;

class Route{
    private static $routes = [];
    public static function get($url, $method){
        $url = trim($url, "/");
        self::$routes['GET'][$url] = $method;
    }
    public static function post($url, $method){
        self::$routes['POST'][$url] = $method;
    }

        public function display()
    {
        $uri = trim($_SERVER['REQUEST_URI'], '/');

        $method = $_SERVER['REQUEST_METHOD'];

        if (isset(self::$routes[$method])) {
            foreach (self::$routes[$method] as $key => $data) {
                if ($key == $uri) {
                    $data();
                    return;
                }
            }
        }

        $this->displayErrorPage(404, 'Page Not Found');
    }

    private function displayErrorPage($errorCode, $errorMessage)
    {
    http_response_code(response_code: $errorCode);

    echo "<h1>se jodio cuba :(</h1>";
    echo "<p>Error $errorCode<p>";
    echo "<p>$errorMessage</p>";
    echo '<img src="https://media0.giphy.com/media/v1.Y2lkPTc5MGI3NjExMHd6NXlrcmdpa3oxcTRheDNxdTBvcDFnNDNzMmY4OTlhMXdkaDI1ZyZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/8boMf1VXVHoJy/giphy.webp" alt="Error GIF" style="width: 100%; max-width: 300px;"/>';
    
    echo '
    <audio autoplay loop>
        <source  src="./../public/assets/error.mp3" type="audio/mpeg">
        Tu navegador no soporta el elemento de audio.
        </audio>';
    }

}