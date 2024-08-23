<?php
// Redirect back to the contact page if the form is not submitted
if ($_SERVER["REQUEST_METHOD"] != "POST") {
    header("Location: contact.html");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form Submission</title>
</head>
<body>
<?php
// Display a confirmation message
echo "Thank you! Your message has been sent.";
?>
</body>
</html>
