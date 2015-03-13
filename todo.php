<?php
 
// Create array to hold list of todo items
$items = array('review array functions', 'add sorting functionality');
 
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
        // Add entry to list array
        $items[] = trim(fgets(STDIN));
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

