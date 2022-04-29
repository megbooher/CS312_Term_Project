<?php
function createTable1($n){
    $t = '<table width="80%" cellpadding=5';
    $count = 0;
    $colorsArr = array("Red", "Orange", "Yellow", "Green", "Blue", "Purple", "Teal", "Grey", "Brown", "Black");
    while($count < $n) {
        $t .= '<tr>';
        $t .= '<td width="30%">';
        $t .= ($count === 0) ? "<input type='radio' id='radio' name='radio' checked='checked'></input>" : "<input type='radio' id='radio' name='radio'></input>";
        $t .= "<select>";   
        for($i = 0; $i < 10; $i++) {
            if($i === $count) {
                $t .= "<option value='$colorsArr[$i]' selected>$colorsArr[$i]</option>"; 
            }
            else {
                $t .= "<option value='$colorsArr[$i]'>$colorsArr[$i]</option>"; 
            }
        }
        $t .= "</select>";
        
        $t .= '</td>';
        $t .= '<td></td>';
        $t .= '</tr>';
        $count++;
    }   
    $t .= '</table>';
    return $t;
}
function createTable2($n){
    $t = '<table cellpadding=2';
    $count = 0;
    while($count < $n+1) {
        $t .= '<tr>';
        $t .= ($count === 0) ? "<td class='colorCells'></td>" :"<td class='colorCells'>$count</td>"; 

        if($count === 0) {
            $countAlpha = 0;
            foreach (range('A', 'Z') as $alpha){
                if($countAlpha === $n){
                    break;
                }
                $t .= "<td class='colorCells'>$alpha</td>";
                $countAlpha++;
            }
        } else {
            $countBlank = 0;
            while($countBlank < $n) {
                $t .= "<td class='colorCells'></td>";
                $countBlank++;
            }
        }
        $count++;
    } 
    $t .= '</tr>';
    $t .= '</table>';
    return $t;

}

if(array_key_exists('button1', $_POST)) {
    button1();
}

function button1() {
    echo Asset::css('printView.css');
}

?>

<script>

</script>

<div>
    <form style='margin: auto; text-align:center; width: 400px; border: 2px  solid gray; border-radius: 10px;'
        method="get" action="<?php $controller ?>">
        <h3>Color Coordinate Generation</h3>
        <label for="n_rows_cols" id=' row'>Num Rows & Columns:</label>
        <input type="text" name="n_rows_cols" id="n_rows_cols">
        <br>
        <br>
        <label for="n_colors" id='color'>Num Colors:</label>
        <input type="text" name="n_colors" id="n_colors">
        <br>
        <br>
        <input style='padding: auto' type="submit" id="submit">
        <br>
    </form>



    <div style='color:red; text-align: center;'>
        <br>


        <?php if(empty($colorError) && $colors && $rows)
    {
        ?>

        <form method="post">
            <input type="submit" name="button1" class="button" value="Print" />
        </form>
        <?php
        }
?>


        <?php if($colorError) { echo "$colorError <br>";} ?>
        <?php if($rowError) { echo $rowError;} ?>
        <br>

    </div>

    <?php if (empty($colorError) && $colors) {echo createTable1($colors);} ?>
    <br>
    <?php if (empty($colorError) && $rows) {echo createTable2($rows);} ?>
    <br>


</div>