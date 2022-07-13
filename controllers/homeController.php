<?php

    class homeController extends controller {
        public function index() {
            $dados = [
                'quantidade' => 5
            ];
            
            $this->loadTemplate('home', $dados);
        }
    }