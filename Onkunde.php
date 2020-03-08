<?php include 'assets/includes/header.php'?>
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

            $skill = htmlspecialchars($_GET["skill"]);
            $friend = htmlspecialchars($_GET["friend"]);
            $number = htmlspecialchars($_GET["number"]);
            $vacation = htmlspecialchars($_GET["vacation"]);
            $pp = htmlspecialchars($_GET["pp"]);
            $bp = htmlspecialchars($_GET["bp"]);
            $overcome = htmlspecialchars($_GET["overcome"]);
            echo "<div>";  
        }

    }else{echo "<div>";}
?>
    <form action='assets/includes/textGenerator.php' method='get'>
    <h1>Onkunde</h1>

    <span id="questions">
    <p>Wat zou je graag willen kunnen?: </p>

    <p>Met welke persoon kun je goed opschieten?: </p>

    <p>Wat is je favoriete getal?: </p>

    <p>Wat heb je altijd bij als je op vakantie gaat?: </p>

    <p>Wat is je beste persoonlijke eigenschap: </p>

    <p>Wat is je slechtste persoonlijke eigenschap?: </p>

    <p>Wat is het ergste dat je kan overkomen?: </p>

    </span>

    <span id="input">
    <input type='text' name='skill' value='<?=$skill?>'><br><br>
    <input type='text' name='friend' value='<?=$friend?>'><br><br>
    <input type='text' name='number' value='<?=$number?>'><br><br>
    <input type="text" name="vacation" value="<?=$vacation?>"><br><br>
    <input type="text" name="pp" value="<?=$pp?>"><br><br>
    <input type="text" name="bp" value="<?=$bp?>"><br><br>
    <input type="text" name="overcome" value="<?=$overcome?>"><br><br>
    <input type="submit" name="post-onkunde">

    </span>
    </form>
    </div>
</body>
</html>
<?php include 'assets/includes/footer.php'?>