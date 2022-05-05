<?php

class Controller_Milestone extends Controller_Template
{
    /**
     * The basic welcome message
     *
     * @access  public
     * @return  Response
     */

    public function action_index()
    {
        $this->template->content = View::forge("homepage.php");
        $this->template->title = "Homepage";

        $this->template->header = View::forge("header.php");
        $this->template->header->homeStyle = 'active';
        $this->template->header->aboutStyle = 'normal';
        $this->template->header->colorStyle = 'normal';

    }

    public function action_color()
    {
        // load and check number of rows
        $rows = null;
        $colors = null;
        $rowError = null;
        $colorError = null;

        if (isset($_GET["n_rows_cols"])) {
            $rows = (int) Input::get("n_rows_cols");
            if ($rows < 1 || $rows > 26) {
                $rowError = "n_rows_cols must be between 1 and 26!";
            }
        }

        // load and check number of colors
        if (isset($_GET["n_colors"])) {
            $colors = (int) Input::get("n_colors");
            if ($colors < 1 || $colors > 10) {
                $colorError = "n_colors must be between 1 and 10!";
            }
        }
        
        

        $this->template->content = View::forge("colorcoor.php");
        $this->template->title = "Color Coordinate";
        $this->template->content->rows = $rows;
        $this->template->content->colors = $colors;
        $this->template->content->rowError = $rowError;
        $this->template->content->colorError = $colorError;

        $this->template->header = View::forge("header.php");
        $this->template->header->homeStyle = 'normal';
        $this->template->header->aboutStyle = 'normal';
        $this->template->header->colorStyle = 'active';
        $this->template->header->rows = $rows;
        $this->template->header->colors = $colors;
    }
        

    public function action_about()
    {
        $this->template->content = View::forge('biography.php');
        $this->template->title = "About Page";

        $this->template->header = View::forge("header.php");
        $this->template->header->homeStyle = 'normal';
        $this->template->header->aboutStyle = 'active';
        $this->template->header->colorStyle = 'normal';

    }

    public function action_print()
    {
        $this->template->content = View::forge("printView.php");
        $this->template->content->tables = View::forge("colorcoor.php");
        // $this->template->title = "Print";
        $this->template->content->print = true;

    }
	
	public function manage_color()
	{
		
		$colName = null;
		$hexVal = null;
		$colNameEr = null;
		$hexValEr = null;
		
		if (isset($_POST["colorName"])) {
            $colName = (string) $POST["colorName"];
            
        }
		
		if (isset($_POST["hexVal"])) {
            $hexVal = (string) $POST["hexVal"];
            if (preg_match('/^#[a-f0-9]{6}$/i', $hexVal)) {
                echo "Valid hex value!";
            }
			else {
				echo "Invalid hex value!";
			}
        }
		
	}
}