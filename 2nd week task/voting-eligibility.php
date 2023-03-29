<form method="post" action="voting-eligibility.php">
        <label for="age">Enter your age:</label>
        <input type="number" id="age" name="age"><br>

        <label for="has_pvc">Do you have a PVC?</label>
        <input type="radio" id="yes" name="has_pvc" value="1">
        <label for="yes">Yes</label>
        <input type="radio" id="no" name="has_pvc" value="0">
        <label for="no">No</label><br>

        <label for="ward">Enter your ward:</label>
        <input type="text" id="ward" name="ward"><br>

        <input type="submit" value="Check Eligibility">
    </form>
<?php
// Get input data from the form
$voter_age = $_POST["age"];
$has_pvc = $_POST["has_pvc"];
$voter_ward = $_POST["ward"];

// Validate the input data
if ($voter_age < 18) {
    echo "Sorry, you must be 18 years or older to vote.";
} elseif (!$has_pvc) {
    echo "Sorry, you must have a PVC to vote.";
} elseif ($voter_ward !== "020") {
    echo "Sorry, you are not registered to vote in this ward.";
} else {
    echo "Voter eligible to vote";
}
?>
