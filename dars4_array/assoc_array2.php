<form action="">
    <select name="g">
        <option>-</option>
        <option>650-18</option>
        <option>651-18</option>
        <option>652-18</option>
        <option>653-18</option>
        <option>654-18</option>
    </select>
    <input type="submit" name="s1">
</form>

<?php
    $guruh = array (
        array("nomi"=>"650-18", "bola"=>"25"),
        array("nomi"=>"651-18", "bola"=>"22"),
        array("nomi"=>"652-18", "bola"=>"28"),
        array("nomi"=>"653-18", "bola"=>"23"),
        array("nomi"=>"654-18", "bola"=>"26"),
    );

    if (isset($_GET['s1'])) {
        $g = $_GET['g'];
        foreach ($guruh as $g1) {
            if ($g1["nomi"]==$g) {
                echo $g1['bola'];
            }
        }
    }
?>