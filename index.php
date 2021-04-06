<?php
$maxfigurines = 76;
$pedSettings = ["Ped Open/Regular DHC", "Ped Finish/No DHC", "Open DHC + Ped Items", "Open DHC"];
$pedSwordSettings = ["No Sword Ped", "Smith Sword Ped", "White Sword Ped", "Red Sword Ped", "Blue Sword Ped", "Four Sword Ped"];
$pedElementsSettings = ["No Element Ped", "1 Element Ped", "2 Element Ped", "3 Element Ped", "4 Element Ped"];
$fusionSettings = ["No normal fusions", "Open fusion mode", "Vanilla Fusions"];
$followerSettings = ["No Follower", "Mailman Follower", "Zelda Follower", "Malon Follower", "Smith Follower", "King Gustaf Follower", "Cow Follower", "Goron Follower", "Anju Follower"];
$follower = $followerSettings[rand(0, 8)];
$fuzzy = rand(0, 15);
if ($fuzzy == 0) {
    $fuzzy = "no";
} else {
    $fuzzy = "fuzz " . $fuzzy;
}
$pedSword = $pedSwordSettings[rand(0, 5)];
$pedElements = $pedElementsSettings[rand(0, 4)];
$fusions = $fusionSettings[rand(0, 2)];
$obscureSpots = selectOne();
if ($fusionSettings == "Open fusion mode" && $obscureSpots == "checked") {
    $maxfigurines = 136;
} else if ($fusionSettings == "Open fusion mode") {
    $maxfigurines = 132;
} else if ($obscureSpots == "checked") {
    $maxfigurines = 102;
}
$figurineHunt = selectOne();
if ($figurineHunt == "checked") {
    $figurineCount = rand(1, $maxfigurines);
    $maxExtra = $maxfigurines - $figurineCount;
    $extraFigurineCount = rand(0, $maxExtra);
    $ped = $pedSettings[rand(0, 1)];
} else {
    $figurineCount = 0;
    $extraFigurineCount = 0;
    $ped = $pedSettings[rand(0, 3)];
}
$rupeemania = selectOne();
$keysanity = selectOne();
$shuffleElements = selectOne();
$disableGlitches = selectOne();
$randomMusic = selectOne();
$damagingItems = selectOne();
$traps = selectOne();
$ohko = selectOne();
$randomLanguage = selectOne();
$rainbowHearts = selectOne();
$tunicColor = randomRGB();
$heartColor = randomRGB();
$splitBarColor = randomRGB();
$fireRod = selectOne();
if ($keysanity == "") {
    $keasy = selectOne();
} else {
    $keasy = "";
}
function randomRGB()
{
    $r = rand(0, 255);
    $g = rand(0, 255);
    $b = rand(0, 255);
    return [$r, $g, $b, "<br/>Red: " . $r . "<br/>Green: " . $g . "<br/>Blue: " . $b];
}
function selectOne()
{
    $num = rand(0, 1);
    if ($num == 1) {
        return "checked";
    } else {
        return "";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <title>TMCR setting randomizer</title>
    <style>
        body {
            background-color: #333;
            color: white;
            font-family: roboto;
        }

        .colorTest {
            height: 15px;
            width: 80px;
            margin: 0 auto;
            border: 2px solid white;
        }

        h1 {
            text-align: center;
            background-color: rgb(red, green, blue);
        }

        p {
            text-align: center;
        }

        table {
            margin-left: auto;
            margin-right: auto;
        }
    </style>
</head>

<body>
    <h1>Minish Cap Randomizer - setting randomizer</h1>
    <p>To re-randomize, just refresh the page</p>
    <table>
        <tr>
            <td><input type="checkbox" <?php echo $keysanity ?>>Keysanity</input></td>
            <td><input type="checkbox" <?php echo $shuffleElements ?>>Shuffle elements into item pool</input></td>
            <td><input type="checkbox" <?php echo $disableGlitches ?>>Disable glitches</input></td>
        </tr>
        <tr>
            <td><input type="checkbox" <?php echo $obscureSpots ?>>Obscure Spots</input></td>
            <td><input type="checkbox" <?php echo $rupeemania ?>>Add available rupees to pool</input></td>
        </tr>
        <tr>
            <td colspan="3"><input type="checkbox" <?php echo $damagingItems ?>>Damaging items other than sword seen as weapons</input></td>
        </tr>
        <tr>
            <td><input type="checkbox" <?php echo $traps ?>>Shuffle traps in itempool</input></td>
            <td><input type="checkbox" <?php echo $ohko ?>>Die in one hit if timer runs out</input></td>
        </tr>
        <tr>
            <td><input type="checkbox" <?php echo $randomMusic ?>>Randomize music</input></td>
            <td><input type="checkbox" <?php echo $figurineHunt ?>>Shuffle figurines into item pool</input></td>
        </tr>
        <tr>
            <th><?php echo $fusions ?></th>
            <th><?php echo $fusionsSkips ?></th>
        </tr>
        <tr>
            <th><?php echo $ped ?></th>
            <th><?php echo "Required Figurines: " .  $figurineCount ?></th>
            <th><?php echo "Extra Figurines: " . $extraFigurineCount ?></th>
        </tr>
        <tr>
            <th><?php echo $pedSword ?></th>
            <th><?php echo $pedElements ?></th>
        </tr>
        <tr>
            <th>&nbsp</th>
        </tr>
        <tr>
            <th colspan="3">Gimmicks!</th>
        </tr>
        <tr>
            <td><input type="checkbox" <?php echo $randomLanguage ?>>Randomize language</input></td>
            <td><input type="checkbox" <?php echo $rainbowHearts ?>>Enable Rainbow Hearts</input></td>
        </tr>
        <tr>
            <th><?php echo "Change Tunic Color" . $tunicColor[3] ?><div class="colorTest" style="background-color: rgb(<?php echo $tunicColor[0] ?>, <?php echo $tunicColor[1] ?>, <?php echo $tunicColor[2] ?>);"></div>
            </th>
            <th><?php echo "Change Heart Color" . $heartColor[3] ?><div class="colorTest" style="background-color: rgb(<?php echo $heartColor[0] ?>, <?php echo $heartColor[1] ?>, <?php echo $heartColor[2] ?>);"></div>
            </th>
            <th><?php echo "Change Split Bar Color" . $splitBarColor[3] ?><div class="colorTest" style="background-color: rgb(<?php echo $splitBarColor[0] ?>, <?php echo $splitBarColor[1] ?>, <?php echo $splitBarColor[2] ?>);"></div>
            </th>
        </tr>
        <tr>
            <th>&nbsp</th>
        </tr>
        <tr>
            <th colspan="3">Extra - use these if you want, info on the discord!</th>
        </tr>
        <tr>
            <td><input type="checkbox" <?php echo $fireRod ?>>FireRod</input></td>
            <td colspan="2"><input type="checkbox" <?php echo $keasy ?>>Keasy</input></td>
        </tr>
        <tr>
            <th>Fuzziness: <?php echo $fuzzy ?></th>
            <th>Follower: <?php echo $follower ?></th>
        </tr>

    </table>
</body>

</html>
