<?php

class Controller_Milestone extends Controller_Template{
    /**
	 * The basic welcome message
	 *
	 * @access  public
	 * @return  Response
	 */

    public function action_index(){
        if(isset($_GET['direction'])){
            $dir = Input::get('direction');
            $dir = strtolower($dir);
            if($dir == "east"){
                $other = "west";
            }
            elseif($dir=="west"){
                $other = "east";
            }
        }
        else{
            $dir="west";
            $other = "east";
        }
        
        $this->template->dir = $dir;
        $this->template->other = $other;
        $this->template->title = "My Homepage";
    }

    public function action_one(){
        $this->template->title="East Page";

    }    
    
    public function action_two(){
        $this->template->title="West Page";
    }
}