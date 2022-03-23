<?php

class Controller_m1 extends Controller_Template
{
    public function action_index(){

        $data = array();
        $this->template->title = 'Main Page';
        $this->template->main_css=Asset::css('main.css');
        $this->template->content=View::forge('m1/index.php',$data);
    }
}
