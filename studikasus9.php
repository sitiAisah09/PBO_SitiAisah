<?php
// Custom Exception for email validation
class EmailValidationException extends Exception {
    public function errorMessage() {
        // Custom error message for invalid emails
        return $this->getMessage() . " is no valid E-Mail address";
    }
}

// Custom Exception for missing 'lab4' or 'lab5' keywords
class LabKeywordException extends Exception {
    public function errorMessage() {
        // Custom error message when 'lab4' or 'lab5' is not found in the email
        return $this->getMessage() . " tidak mengandung kata 'lab4/lab5' dan tidak valid";
    }
}

// Array of sample emails
$emails = [
    "lab4a@polsub.ac.id",
    "lab4b@polsub.ac.id",
    "lab5a@polsub.ac.id",
    "lab5b@polsub.ac.id",
    "lab5c@polsub.ac.id",
    "someone@example.com"
];

// Counters
$lab4Count = 0;
$lab5Count = 0;
$otherCount = 0;
$invalidCount = 0;

foreach ($emails as $email) {
    try {
        // Validate email format
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new EmailValidationException($email);
        }

        // Check if email contains 'lab4' or 'lab5'
        if (strpos($email, 'lab4') !== false) {
            echo "$email mengandung kata 'lab4' dan E-mail valid<br>";
            $lab4Count++;
        } elseif (strpos($email, 'lab5') !== false) {
            echo "$email mengandung kata 'lab5' dan E-mail valid<br>";
            $lab5Count++;
        } else {
            throw new LabKeywordException($email);
        }
    } catch (EmailValidationException $e) {
        // Catch invalid email format error
        echo "Error caught on line " . $e->getLine() . " in " . $e->getFile() . ": " . $e->errorMessage() . "<br>";
        $invalidCount++;
    } catch (LabKeywordException $e) {
        // Catch email not containing 'lab4' or 'lab5'
        echo "Error caught on line " . $e->getLine() . " in " . $e->getFile() . ": " . $e->errorMessage() . "<br>";
        $otherCount++;
    }
}

// Final output for counts
echo "<br>Terdapat $lab4Count email lab 4 dan $lab5Count email lab 5<br>";
echo "Terdapat $otherCount email bukan lab4/5<br>";
?>
