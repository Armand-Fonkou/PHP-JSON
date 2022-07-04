<?php
if(file_exists('fichier.json')){
    $filename = 'fichier.json';
    $data = file_get_contents($filename);
    
    $users = json_decode($data);
    print_r($users);

    $colonne = array_column($users, 'age');
    array_multisort($colonne, SORT_ASC, $users);


    print_r($users);
        echo "<h3 class='text-success'>JSON file data</h3>";
    
        
} else{
    echo "<h3 class='text-danger'>JSON file Not found</h3>";
}

?>