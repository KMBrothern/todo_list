<?php
 
$items = array();
 
do {
    foreach ($items as $key => $item) {
        echo "[{$key}] {$item}\n";
    }
 
    echo '(N)ew item, (S)ort, (R)emove item, (Q)uit : ';
 
    $input = trim(fgets(STDIN));
 
    if ($input == 'N') {
        echo 'Enter item: ';
        $input = trim(fgets(STDIN));

        echo 'Do you want this item to the be (F)irst or (L)ast on the list? ';
       $response = trim(fgets(STDIN));
   
        if ($response == 'F') {
            array_unshift($items, $input);
        } elseif ($response == 'L') {
           array_push($items, $input);

        }
        
    } elseif ($input == 'R') {
        echo 'Enter item number to remove: ';
        $key = trim(fgets(STDIN));
        unset($items[$key]);
    } elseif ($input == 'S') {
        $items = sort_menu($items);
    }
} while ($input != 'Q');
 
echo "Goodbye!\n";
 
exit(0);

function sort_menu($a) {
    echo "Choose a sorting option: (A)-Z, (Z)-A, (O)rder entered, (R)everse order entered: ";
    $menuChoice = trim(fgets(STDIN));

    if ($menuChoice == 'A') {
        asort($a);
        return ($a);
    } elseif ($menuChoice == 'Z') {
        arsort($a);
        return ($a);
    } elseif ($menuChoice == 'O') {
        ksort($a);
        return ($a);
    } elseif ($menuChoice == 'R') {
        krsort($a);
        return ($a);
    }
}

