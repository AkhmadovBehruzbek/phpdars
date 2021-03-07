<form>
    <select name="g">
        <option>Kurs</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
    </select>
    <input type="submit" name="s1">
</form>

<?php
    $guruh = array (
        array("nomi"=>"650-17", "bola"=>"25", "kurs"=>2),
        array("nomi"=>"651-18", "bola"=>"22", "kurs"=>1),
        array("nomi"=>"652-16", "bola"=>"24", "kurs"=>3),
        array("nomi"=>"653-18", "bola"=>"23", "kurs"=>2),
        array("nomi"=>"654-15", "bola"=>"26", "kurs"=>4),
    );

    if (isset($_GET['s1'])) {
        $g = $_GET['g'];
        $s = 0;
        foreach($guruh as $g1) {
            if ($g == $g1['kurs']) {
                $s = $s + $g1['bola'];
            }
        }
        echo "{$g}- kursdagi bolalar soni: {$s}";
    }
?>