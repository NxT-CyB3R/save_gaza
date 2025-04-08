
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $country = htmlspecialchars($_POST['country']);
    $message = htmlspecialchars($_POST['message']);

    $data = "Name: $name\nCountry: $country\nMessage: $message\n---\n";
    file_put_contents("messages.txt", $data, FILE_APPEND);
    echo "<h2>আপনার বার্তা সংরক্ষিত হয়েছে।</h2>";
    echo "<a href='index.html'>পুনরায় ফিরে যান</a>";
}
?>
