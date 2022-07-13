<?php

    class Core {
        public function run() {
            $url = '/'.(isset($_GET['url']) ? $_GET['url'] : '');
            $params = [];

            if ($url != '/') {
                $url = explode('/', $url);
                array_shift($url);

                $currentController = $url[0] . 'Controller';
                array_shift($url);

                if (!empty($url[0])) {
                    $currentAction = $url[0];
                    array_shift($url);
                } else {
                    $currentAction = 'index';
                }

                if (count($url) > 0 && !empty($url[0])) {
                    $params = $url;
                }
            } else {
                $currentController = 'homeController';
                $currentAction = 'index';
            }

           $controller = new $currentController();
           call_user_func_array([$controller, $currentAction], $params);
        }
    }