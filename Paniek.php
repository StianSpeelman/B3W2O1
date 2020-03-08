<?php include 'assets/included/header.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Er heerst paniek...</title>
</head>
<body>
    
<?php
    if(isset($_GET["post"])){

        if($_GET["post"] == "success"){
            echo $_GET["text"];
            echo "<div style='display: none;'>";
        }elseif($_GET["post"] == "emptyfields"){
            
            echo '<p class="forumerror">Not all fields were filled in</p>';
            
            $pet = htmlspecialchars($_GET["pet"]);
            $miperson = htmlspecialchars($_GET["miperson"]);
            $country = htmlspecialchars($_GET["country"]);
            $bored = htmlspecialchars($_GET["bored"]);
            $toy = htmlspecialchars($_GET["toys"]);
            $teacher = htmlspecialchars($_GET["teacher"]);
            $buy = htmlspecialchars($_GET["buy"]);
            $activity = htmlspecialchars($_GET["activity"]); 
            echo "<div>";  
        }

    }else{echo "<div>";}
?>
    <form action='assets/included/textGenerator.php' method='get'>
    <h1>Er heerst paniek...</h1>

    <span id="questions">
    <p>Welk dier zou je nooit als huisdier willen hebben?: </p>

    <p>Wie is de belangrijkste persoon in je leven?: </p>

    <p>In welk land zou je graag willen wonen?: </p>

    <p>Wat doe je als je je verveelt?: </p>

    <p>Met welk speelgoed speelde je als kind het meest?: </p>

    <p>Bij welke docent spijbel je het liefst?: </p>

    <p>Als je $ 100.000,- had wat zou je dan kopen?: </p>

    <p>Wat is je favoriete bezigheid?: </p>

    </span>

    <span id="input">
    <input type='text' name='pet' value='<?=$pet?>'><br><br>
    <input type='text' name='miperson' value='<?=$miperson?>'><br><br>
    <input type='text' name='country' value='<?=$country?>'><br><br>
    <input type="text" name="bored" value="<?=$bored?>"><br><br>
    <input type="text" name="toys" value="<?=$toy?>"><br><br>
    <input type="text" name="teacher" value="<?=$teacher?>"><br><br>
    <input type="text" name="buy" value="<?=$buy?>"><br><br>
    <input type="text" name="activity" value="<?=$activity?>"><br><br>
    <input type="submit" name="post-ErHeerstPaniek">

    </span>
    </form>
    </div>
</body>
</html>
<?php include 'assets/included/footer.php'?>