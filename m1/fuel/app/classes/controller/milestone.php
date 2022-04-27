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
        $this->template->homeStyle = 'active';
        $this->template->aboutStyle = 'normal';
        $this->template->colorStyle = 'normal';

    }

    public function action_color()
    {
        // load and check number of rows
        $rows = null;
        $colors = null;
        $rowError = null;
        $colorError = null;
        $requestMethod = $_SERVER["REQUEST_METHOD"];
        if ($requestMethod === "GET") {
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
        } else {
            if (isset($_POST["n_rows_cols"])) {
                $rows = (int) $_POST["n_rows_cols"];
                if ($rows < 1 || $rows > 26) {
                    $rowError = "n_rows_cols must be between 1 and 26!";
                }
            }

            // load and check number of colors
            if (isset($_POST["n_colors"])) {
                $colors = (int) $_POST["n_colors"];
                if ($colors < 1 || $colors > 10) {
                    $colorError = "n_colors must be between 1 and 10!";
                }
            }
        }
        

        $this->template->content = View::forge("colorcoor.php");
        $this->template->title = "Color Coordinate";
        $this->template->content->rows = $rows;
        $this->template->content->colors = $colors;
        $this->template->content->requestType = $requestMethod;
        $this->template->content->rowError = $rowError;
        $this->template->content->colorError = $colorError;
        $this->template->homeStyle = 'normal';
        $this->template->aboutStyle = 'normal';
        $this->template->colorStyle = 'active';
    }
        

    public function action_about()
    {
        $this->template->content = View::forge('biography.php');
        $this->template->title = "About Page";
        $this->template->homeStyle = 'normal';
        $this->template->aboutStyle = 'active';
        $this->template->colorStyle = 'normal';

    }
}