<?php
$flag = 0;

if (isset($_POST['color'])) {
    $FavColor = $_POST['color'];
    setcookie("FavColor", $FavColor);
    switch ($FavColor):
        case 'red':
            echo '<style type="text/css">
                   body{background: red}
                   </style>';
            break;
        case 'yellow':
            echo '<style type="text/css">
                   body{background: yellow}
                   </style>';
            break;
        case 'blue':
            echo '<style type="text/css">
                   body{background: blue}
                   </style>';
            break;
        case 'green':
            echo '<style type="text/css">
                   body{background: green}
                   </style>';
            break;
        case 'cyan':
            echo '<style type="text/css">
                   body{background: cyan}
                   </style>';
            break;
    endswitch;

    echo '<style type="text/css">
        #div {
            display: none;
        }
        </style>';
    $flag = 1;
}

function changeColor()
{
    $FColor = $_COOKIE["FavColor"];
    switch ($FColor):
        case 'red' :
            echo '<style type="text/css">
                   body{background: red}
                   </style>';
            break;
        case 'yellow' :
            echo '<style type="text/css">
                   body{background: yellow}
                   </style>';
            break;
        case 'blue' :
            echo '<style type="text/css">
                   body{background: blue}
                   </style>';
            break;
        case 'green' :
            echo '<style type="text/css">
                   body{background: green}
                   </style>';
            break;
        case 'cyan' :
            echo '<style type="text/css">
                   body{background: cyan}
                   </style>';
            break;
    endswitch;

}

if (isset($_POST['change'])) {
    setcookie("FavColor", "", time() - 3600);
    unset($_COOKIE['FavColor']);
    $flag = 0;
}
if (isset($_COOKIE["FavColor"]))
    $flag = 1;

if ($flag) {
    echo '<style type="text/css">
        #div {
            display: none;
        }
        </style>';
} else
    echo '<style type="text/css">
        #div {
            display: block;
        }
        </style>';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Third Page</title>
</head>
<body>
<?php
if (isset($_COOKIE['FavColor']))
    changeColor();
?>
<div id="div">
    <form action="Third.php" method="post">
        <table>
            <tr>
                <td>Your preferred color is:</td>
            </tr>
            <tr>
                <td><input type="radio" name="color" value="red" id="Red">
                    <label for="Red">Red</label>
                    <input type="radio" name="color" value="yellow" id="Yellow">
                    <label for="Yellow">Yellow</label>
                    <input type="radio" name="color" value="green" id="Green">
                    <label for="Green">Green</label>
                    <input type="radio" name="color" value="blue" id="Blue">
                    <label for="Blue">Blue</label>
                    <input type="radio" name="color" value="cyan" id="Cyan">
                    <label for="Cyan">Cyan</label>
                </td>
            </tr>
            <tr>
                <td><input type="submit" value="Save"></td>
            </tr>
        </table>
    </form>
</div>
<form action="Third.php" method="post">
    <input type="submit" name="change" value="Change FavColor cookie">
</form>
</body>
</html>