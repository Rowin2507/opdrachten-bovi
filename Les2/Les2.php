<?php

$teachers = array('ingrid', 'jelle', 'joey');

//echo $teachers[1];

//MAAK VAN JELLE ED
//$teachers[1] = 'ed';

//var_dump($teachers);
//print_r($teachers);

//for($i = 0;$i <3;$i++) {
//    echo '<p>' . $teachers[$i] . '</p>' ;
//}



//ADD ONE
//$teachers[] = 'theo';

//ADD MULTIPLE
array_push($teachers, 'theo', 'hugo', 'paul');


foreach ($teachers as $one_teacher) {
    echo '<p>' . $one_teacher . '</p>';
}


//ASSOCIATIVE ARRAY
$subjects = array('ingrid' => 'bap', 'joey' => 'pro', 'jelle' => 'fro');
//echo $subjects['ingrid'];

foreach ($subjects as $teacher => $lesson) {
    echo $teacher . ' teaches ' . $lesson . '<br>';
}


?>