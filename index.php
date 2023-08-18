<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Text Editor</title>
    <link rel="stylesheet" href="1.css">
</head>

<body>
    <form method="post" action="index.php">
        <div class="center-input">
            <label for="text">Enter your text:</label><br>
            <textarea name="text" id="text" rows="4" cols="50"><?php echo isset($_POST['text']) ? $_POST['text'] : ''; ?></textarea><br>
        </div>

        <label for="size">Select text size (px):</label>
        <input type="number" name="size" id="size" value="<?php echo isset($_POST['size']) ? $_POST['size'] : ''; ?>"><br>

        <label>Text style:</label><br>
        <div class="radio-group">
            <label>
                <input type="checkbox" name="text_styles[]" value="bold" <?php echo (isset($_POST['text_styles']) && in_array('bold', $_POST['text_styles'])) ? 'checked' : ''; ?>> Bold
            </label>
            <label>
                <input type="checkbox" name="text_styles[]" value="italic" <?php echo (isset($_POST['text_styles']) && in_array('italic', $_POST['text_styles'])) ? 'checked' : ''; ?>> Italic
            </label>
            <label>
                <input type="checkbox" name="text_styles[]" value="underline" <?php echo (isset($_POST['text_styles']) && in_array('underline', $_POST['text_styles'])) ? 'checked' : ''; ?>> Underline
            </label>
            <label>
                <input type="checkbox" name="text_styles[]" value="normal" <?php echo (!isset($_POST['text_styles']) || in_array('normal', $_POST['text_styles'])) ? 'checked' : ''; ?>> Normal
            </label>
        </div>

        <label for="color">Select text color:</label>
        <input type="color" name="color" id="color" value="<?php echo isset($_POST['color']) ? $_POST['color'] : '#000000'; ?>"><br>

        <label for="font">Select font family:</label>
        <select name="font" id="font">
            <option value="Arial" <?php echo (isset($_POST['font']) && $_POST['font'] === 'Arial') ? 'selected' : ''; ?>>Arial</option>
            <option value="Times New Roman" <?php echo (isset($_POST['font']) && $_POST['font'] === 'Times New Roman') ? 'selected' : ''; ?>>Times New Roman</option>
            <option value="Verdana" <?php echo (isset($_POST['font']) && $_POST['font'] === 'Verdana') ? 'selected' : ''; ?>>Verdana</option>
            <option value="Helvetica" <?php echo (isset($_POST['font']) && $_POST['font'] === 'Helvetica') ? 'selected' : ''; ?>>Helvetica</option>
            <option value="Georgia" <?php echo (isset($_POST['font']) && $_POST['font'] === 'Georgia') ? 'selected' : ''; ?>>Georgia</option>
            <option value="Tahoma" <?php echo (isset($_POST['font']) && $_POST['font'] === 'Tahoma') ? 'selected' : ''; ?>>Tahoma</option>

        </select><br>

        <button type="submit" name="submit">Send</button>
    </form>

    <hr>

    <label>Formatted Text:</label><br>
    <div>
        <?php include 'process.php'; ?>
    </div>
</body>

</html>
