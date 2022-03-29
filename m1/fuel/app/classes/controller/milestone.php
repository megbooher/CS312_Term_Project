<?php

class Controller_Milestone extends Controller_Template{
    /**
	 * The basic welcome message
	 *
	 * @access  public
	 * @return  Response
	 */

    public function action_index(){
        $this->template->rows = 1;
        $this->template->colors = 1;
        $this->template->title = "My Homepage";
    }

    public function action_color(){
        // load and check number of rows
        if(isset($_GET['n_rows_cols'])){
            $rows = (int) Input::get('n_rows_cols');
            if($rows < 1){
                die("n_rows_cols must be between 1 and 26!");
            }
            elseif($rows > 26){
                die("n_rows_cols must be between 1 and 26!");
            }
        }
        else{
            $rows = 1;
        }
        // load and check number of colors
        if(isset($_GET['n_colors'])){
            $colors = (int) Input::get('n_colors');
            if($colors < 1){
                die("n_colors must be between 1 and 10!");
            }
            elseif($colors > 10){
                die("n_colors must be between 1 and 10!");
            }
        }
        else{
            $colors = 1;
        }

        $this->template->rows = $rows;
        $this->template->colors = $colors;
        $this->template->title="Color Coordinate";

    }    
    

}