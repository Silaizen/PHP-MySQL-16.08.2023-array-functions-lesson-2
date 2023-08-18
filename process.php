<?php
if (isset($_POST['submit'])) {
    $text = $_POST["text"];
    $size = $_POST["size"] . "px";
    $textStyles = isset($_POST["text_styles"]) ? $_POST["text_styles"] : array("normal");
    $color = in_array("normal", $textStyles) ? "#000000" : $_POST["color"];
    $font = $_POST["font"];

    $formattedText = "<span style='font-size: $size; color: $color; font-family: $font;";

    if (in_array("bold", $textStyles)) {
        $formattedText .= " font-weight: bold;";
    }
    if (in_array("italic", $textStyles)) {
        $formattedText .= " font-style: italic;";
    }
    if (in_array("underline", $textStyles)) {
        $formattedText .= " text-decoration: underline;";
    }
    if (in_array("normal", $textStyles)) {
        $formattedText .= " font-weight: normal; font-style: normal; text-decoration: none;";
    }

    $formattedText .= "'>";
    $formattedText .= $text;
    $formattedText .= "</span>";

    echo $formattedText;
}
?>
