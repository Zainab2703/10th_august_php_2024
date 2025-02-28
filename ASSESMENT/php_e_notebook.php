<?php


$notes = []; 


function displayMenu()
{
    echo "\n-------------------------\n";
    echo "PHP E-Notebook Application\n";
    echo "-------------------------------\n";
    echo "1.Add Note\n";
    echo "2.View Notes\n";
    echo "3.Exit\n";
    echo "-----------------------\n";
    echo "Enter your choice: ";
}


function addNote()
{
    global $notes;
    echo "\n Enter your note: ";
    $note = trim(fgets(STDIN)); 

    if (!empty($note)) {
        $notes[] = $note;
        echo "Note added successfully!\n";
    } else {
        echo "Note cannot be empty. Try again.\n";
    }
}


function viewNotes()
{
    global $notes;
    echo "\n Your Notes:\n";
    
    if (empty($notes)) {
        echo "No notes available. Please add some first.\n";
    } else {
        foreach ($notes as $index => $note) {
            echo "Note " . ($index + 1) . ": $note\n";
        }
    }
}


while (true) {
    displayMenu();
    $choice = trim(fgets(STDIN)); 
	
    switch ($choice) {
        case '1':
            addNote();
            break;
        case '2':
            viewNotes();
            break;
        case '3':
            echo "Exiting E-Notebook. Thank you!\n";
            exit;
        default:
            echo "Invalid choice. Please enter 1, 2, or 3.\n";
    }
}
?>
