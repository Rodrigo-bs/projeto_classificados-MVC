<?php

    class Core {
        public function run() {
            $url = '/'.(isset($_GET['url']) ? $_GET['url'] : '');

            if ($url != '/') {
                $url = explode('/', $url);
                array_shift($url);

                $currentController = $url[0] . 'Controller';
                array_shift($url);

                if (!empty($url[0])) {
                    $currentAction = $url[0];
                } else {
                    $currentAction = 'index';
                }

            } else {
                $currentController = 'homeController';
                $currentAction = 'index';
            }

            echo '<th>';
            print_r($currentController);
            echo '<br>';
            print_r($currentAction);
        }
    }