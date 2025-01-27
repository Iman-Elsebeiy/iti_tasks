<?php
if (isset($_GET['line'])) {
    $lineIndex = intval($_GET['line']); // Get the line index from the query string and convert to integer

    $filename = 'info.txt';

    if (file_exists($filename)) {
        // Read all lines from the file
        $lines = file($filename, FILE_IGNORE_NEW_LINES); // Get the file as an array of lines without \n

        if (isset($lines[$lineIndex])) {
            // Remove the specific line based on the index
            unset($lines[$lineIndex]);

            // Rewrite the file with the remaining lines
            file_put_contents($filename, implode(PHP_EOL, $lines) . PHP_EOL);

            // Redirect to the main page with a success message
            header("Location: info.php?success=Student deleted successfully");
            exit;
        } else {
            header("Location: info.php?error=Student not found");
            exit;
        }
    } else {
        header("Location: info.php?error=File not found");
        exit;
    }
} else {
    header("Location: info.php?error=Invalid request");
    exit;
}
