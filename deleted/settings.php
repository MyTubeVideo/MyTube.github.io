<?php
// Initialize a variable to store the theme
$selectedTheme = 'dark';

// Check if the user has submitted the form
if (isset($_POST['theme'])) {
    $selectedTheme = $_POST['theme'];

    // Set a cookie to remember the selected theme for 10 years
    setcookie('selectedTheme', $selectedTheme, time() + 10 * 365 * 24 * 60 * 60);
} elseif (isset($_COOKIE['selectedTheme'])) {
    // If the cookie exists, use the stored theme
    $selectedTheme = $_COOKIE['selectedTheme'];
}

// Apply the selected theme to every other page
echo "<style>";
echo "body {";
switch ($selectedTheme) {
    case 'light':
        echo "background-color: #ffffff;";
        echo "color: #0b031c;";
        break;
    case 'midnight':
        echo "background-color: #0b031c;";
        echo "color: #ffffff;";
        break;
    case 'dark':
    default:
        echo "background-color: #252525;";
        echo "color: #ffffff;";
        break;
}
echo "}";
echo "</style>";

// Display the UI for theme selection
?>
<!DOCTYPE html>
<html>
<head>
    <title>Theme Settings</title>
</head>
<body>
    <h1>Theme Settings</h1>
    <form method="post">
        <label for="theme">Select a Theme:</label>
        <select name="theme" id="theme">
            <option value="dark" <?php if ($selectedTheme === 'dark') echo 'selected'; ?>>Dark</option>
            <option value="light" <?php if ($selectedTheme === 'light') echo 'selected'; ?>>Light</option>
            <option value="midnight" <?php if ($selectedTheme === 'midnight') echo 'selected'; ?>>Midnight</option>
        </select>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
