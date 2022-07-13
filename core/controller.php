<?php

    class controller  {
        public function loadView($viewName, $viewData = []) {
            extract($viewData); // Vai pegar a key do array e transformando em uma variavel
            require 'views/'. $viewName . '.php';
        }

        public function loadTemplate($viewName, $viewData = []) {
            require 'views/template.php';
        }

        public function loadViewInTemplate($viewName, $viewData = []) {
            extract($viewData);
            $this->loadView($viewName, $viewData);
        }
    }