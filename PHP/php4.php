<?php
if (isset($_POST['submit'])) {
    $number = $_POST['number'];
    echo '<form action="" method="post">';
    for ($i = 0; $i < $number; $i++) {
        echo '<label for="textbox' . $i . '">Textbox ' . ($i + 1) . '</label>
              <input type="text" name="textboxes[]" id="textbox' . $i . '"><br>';
    }
    echo '<input type="submit" name="submit2" value="Submit">
          </form>';
}
if (isset($_POST['submit2'])) {
    $textboxes = $_POST['textboxes'];
    foreach ($textboxes as $textbox) {
        echo $textbox . "<br>";
    }
}
?>