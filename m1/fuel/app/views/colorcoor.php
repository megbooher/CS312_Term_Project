<?php
function createTable1($n){
    echo "<script>var colorsUsed = []; console.log('createTable1');</script>";
    $t = '<table width="80%" cellpadding=5';
    $count = 0;
    $colorsArr = array("Red", "Orange", "Yellow", "Green", "Blue", "Purple", "Teal", "Grey", "Brown", "Black");
    while($count < $n) {
        $t .= '<tr>';
        $t .= '<td width="30%">';
        $t .= ($count === 0) ? "<input type='radio' id='radio-$count' name='radio' checked='checked' value=$colorsArr[$count]></input>" : "<input value=$colorsArr[$count] type='radio' id='radio-$count' name='radio'></input>";
        $t .= "<select id='select-$count'>";   
        for($i = 0; $i < 10; $i++) {
                if($i === $count) {
                    $t .= "<option id='option-$i' value='$colorsArr[$i]' selected>$colorsArr[$i]</option>"; 
                    $c = $colorsArr[$i];
                    echo "<script>window.colorsUsed.push('$c');</script>";
                }
                else {
                    $t .= "<option id='option-$i' value='$colorsArr[$i]'>$colorsArr[$i]</option>"; 
                }
                
        }
        $t .= "</select>";
        
        $t .= '</td>';
        $t .= "<td id ='row-$count'></td>";
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
        $t .= ($count === 0) ? "<td class='colorCells'></td>" : "<td class='cells'>$count</td>";
        $countAlpha = 0;
        foreach (range('A', 'Z') as $alpha){
            if($countAlpha === $n){
                break;
            }
            $t .=  ($count === 0) ? "<td id='$alpha$count' class='cells'>$alpha</td>":"<td id='$alpha$count' class='colorCells'></td>" ;
            $countAlpha++;
        }
        $count++;
    } 
    $t .= '</tr>';
    $t .= '</table>';
    return $t;
}

?>

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
        <a href="#"
            onclick="document.getElementById('cssfile').href='<?=Uri::create('assets/css/printView.css')?>';">Print</a>
        <?php
        }
?>
        <?php if($colorError) { echo "$colorError <br>";} ?>
        <?php if($rowError) { echo $rowError;} ?>
        <br>

    </div>
    <?php if (empty($colorError) && $colors) {echo createTable1($colors);} ?>
    <br>
    <p id='errorMessage' class='errorMessage'></p>
    <?php if (empty($colorError) && $rows) {echo createTable2($rows);} ?>
    <br>

    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script type="text/javascript">
    let selectedArr = [];
    $(document).ready(function() {
        let previous;
        $("select").on("focus click", function() {
            previous = this.value;
            document.getElementById("errorMessage").innerHTML = '';
        }).change(function(event) {
            const id = $(this).attr("id");
            const chosenSelection = $(this).val();
            const index = window.colorsUsed.indexOf(chosenSelection);
            if (index > -1) {
                document.getElementById("errorMessage").innerHTML =
                    'No two drop downs can select the same color at the same time';
                $(`#${id}`).val(previous);
            } else {
                const replacementIndex = window.colorsUsed.indexOf(previous);
                window.colorsUsed[replacementIndex] = chosenSelection;
                const [s, i] = id.split('-');
                $(`#radio-${i}`).val(chosenSelection);
                if (`radio-${i}` === $("input[type='radio'][name='radio']:checked").attr('id')) {
                    $(`.colorCells.selected`).get().map((a, i) => {
                        $(`.colorCells.selected`).get(i).style.setProperty("--color",
                            chosenSelection);
                    })
                }
            }
        });
        $('.colorCells').click(function(event) {
            const id = $(this).attr("id");
            const classes = $(`#${id}`).attr("class").split(" ");
            const selected = classes.includes('selected');
            if (selected) {
                $(`#${id}`).removeClass('selected');
                const index = selectedArr.indexOf(id);

                rows = ['row-0', 'row-1', 'row-2','row-3', 'row-4', 'row-5', 'row-6', 'row-7', 'row-8', 'row-9'];
                for(var i = 0, j = rows.length; i < j; i++) {
                    if(classes.includes(rows[i])) {
                        document.getElementById(rows[i]).innerHTML = document.getElementById(rows[i]).innerHTML.replace(`${id} `, '');                        break;
                    }
                }
                

                if (index > -1) {
                    selectedArr.splice(index, 1);
                }
            } else {
                $(`#${id}`).addClass('selected');
                const selectedColor = $("input[type='radio'][name='radio']:checked").val();
                const origRow = 'row-' + $("input[type='radio'][name='radio']:checked").attr("id").substring(6)
                $(`#${id}`).addClass(origRow);

                $(`#${id}`).get(0).style.setProperty("--color", selectedColor);
                selectedArr.push(id);
                document.getElementById(origRow).innerHTML += `${id} `;
            }
        });

        $('input[type=radio][name=radio]').change(function() {
            const selectedColor = $("input[type='radio'][name='radio']:checked").val();
        });

    });
    </script>
</div>