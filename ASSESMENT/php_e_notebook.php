<?php
// E-Notebook Console Application in PHP
// This application allows users to add and view notes using an array-based approach.

$notes = []; // Array to store notes

// Function to display menu
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

// Function to add a note
function addNote()
{
    global $notes;
    echo "\n Enter your note: ";
    $note = trim(fgets(STDIN)); // Accept user input and remove extra spaces

    if (!empty($note)) {
        $notes[] = $note;
        echo "Note added successfully!\n";
    } else {
        echo "Note cannot be empty. Try again.\n";
    }
}

// Function to view all notes
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

// Main loop to keep the program running until the user exits
while (true) {
    displayMenu();
    $choice = trim(fgets(STDIN)); // Get user choice

    switch ($choice) {
        case '1':
            addNote();
            break;
        case '2':
            viewNotes();
            break;
        case '3':
            echo "Exiting E-Notebook. Thank you!\n";
            exit; // Terminate the program
        default:
            echo "Invalid choice. Please enter 1, 2, or 3.\n";
    }
}
?>
