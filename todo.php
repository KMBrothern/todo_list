<?php
 
// Create array to hold list of todo items
$items = array();
 
// The loop!
do {
    // Iterate through list items
    foreach ($items as $key => $item) {
        // Display each item and a newline
        echo "[{$key}] {$item}\n";
    }
 
    // Show the menu options
    echo '(N)ew item, (S)ort, (R)emove item, (Q)uit : ';
 
    // Get the input from user
    // Use trim() to remove whitespace and newlines
    $input = trim(fgets(STDIN));
 
    // Check for actionable input
    if ($input == 'N') {
        // Ask for entry
        echo 'Enter item: ';
        $input = trim(fgets(STDIN));

        echo 'Do you want this item to the be (F)irst or (L)ast on the list? ';
       $response = trim(fgets(STDIN));
   
        if ($response == 'F') {
            array_unshift($items, $input);
        }elseif($response == 'L') {
           array_push($items, $input);

        }
        // echo 'Enter item: ';
        // Ask user if they want to add to beginning or end of list
        // Add entry to list array
        // $items[] = trim(fgets(STDIN));
    } elseif ($input == 'R') {
        // Remove which item?
        echo 'Enter item number to remove: ';
        // Get array key
        $key = trim(fgets(STDIN));
        // Remove from array
        unset($items[$key]);
        // Sort array by:"(A)"
    } elseif ($input == 'S') {
    // Ask for user input on how they would like to sort
        // echo "(A)-Z, (Z)-A, (O)rder entered, (R)everse order entered: ";
        $items = sort_menu($items);
        }
// Exit when input is (Q)uit
} while ($input != 'Q');
 
// Say Goodbye!
echo "Goodbye!\n";
 
// Exit with 0 errors
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

// function list_position($a){
//        $positionChoice = trim(fgets(STDIN));

//     $listPosition = $items[] = trim(fgets(STDIN));
//         if ($positionChoice == 'F') {
//             echo 'Enter item: ';
//             array_unshift($items, $listPosition);
//         }elseif ($positionChoice == 'L') {
//             echo 'Enter item: ';
//             array_push($items, $listPosition);
            
//         }
// }
