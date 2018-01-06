<?php

class Home extends CI_Controller{

    function index(){
        $this->template->load('dashboard', 'home/view');
    }

}