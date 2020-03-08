<?php
if (isset($_GET['post-erHeerstPaniek'])) {

    $pet = htmlspecialchars($_GET["pet"]);
    $miperson = htmlspecialchars($_GET["miperson"]);
    $kingdom = htmlspecialchars($_GET["country"]);
    $bored = htmlspecialchars($_GET["bored"]);
    $toy = htmlspecialchars($_GET["toys"]);
    $king = htmlspecialchars($_GET["teacher"]);
    $buy = htmlspecialchars($_GET["buy"]);
    $activity = htmlspecialchars($_GET["activity"]);

    if(empty($pet)||empty($miperson)||empty($kingdom)||empty($bored)||empty($toy)||empty($king)||empty($buy)||empty($activity)){
        header("Location: ../../ErHeerstPaniek.php?post=emptyfields&pet=$pet&miperson=$miperson&country=$kingdom&bored=$bored&toys=$toy&teacher=$king&buy=$buy&activity=$activity");
        exit();
    }
    
    $newContent = '<h1>Er heerst paniek...</h1> <br> Er heerst paniek in het koninkrijk '.$kingdom.'. Koning '.$king.' is ten einde raad en als koning '.$king.' ten einde raad is, dan roept hij zijn ten-einde-raadsheer '.$miperson.'.<br><br>"'.$miperson.'! Het is een ramp! Het is een schande!"<br><br>"Sire, Majesteit, Uwe Luidruchtigheid, wat is er aan de hand?"<br><br>"Mijn '.$pet.' is verdwenen! Zo maar, zonder waarschuwing. En ik had net '.$toy.' voor hem gekocht!"<br><br>"Majesteit, uw '.$pet.' komt vast vanzelf weer terug?<br><br>"Ja, das`s leuk en aardig, maar hoe moet ik in de tussentijd '.$activity.' leren " <br><br>"Maar Sire, daar kunt u toch uw '.$buy.' voor gebruiken."<br><br>"'.$miperson.', je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had."<br><br>"'.$bored.', Sire"';
    header("Location: ../../ErHeerstPaniek.php?post=success&text=$newContent");
    exit();
}elseif(isset($_GET['post-onkunde'])){

    $skill = htmlspecialchars($_GET["skill"]);
    $friend = htmlspecialchars($_GET["friend"]);
    $number = htmlspecialchars($_GET["number"]);
    $item = htmlspecialchars($_GET["vacation"]);
    $pp = htmlspecialchars($_GET["pp"]);
    $bp = htmlspecialchars($_GET["bp"]);
    $overcome = htmlspecialchars($_GET["overcome"]);

    if(empty($skill)||empty($friend)||empty($number)||empty($item)||empty($pp)||empty($bp)||empty($overcome)){
        echo "you didn't fill in all the fields!";
        header("Location: ../../Onkunde.php?post=emptyfields&skill=$skill&friend=$friend&number=$number&item=$item&pp=$pp&bp=$bp&overcome=$overcome");
        exit();
    }
    
    $newContent = "<h1>Onkunde</h1> Er zijn veel mensen die niet kunnen $skill. Neem nou $friend.<br> Zelfs met de hulp van een $item of zelfs $number kan $friend niet $skill.<br><br> Dat heeft niet te maken met een gebrek aan $pp, maar met een te veel aan $bp. <br>Te veel $bp leidt tot $overcome en dat is niet goed als je wilt $skill. Helaas voor $friend.";
    header("Location: ../../Onkunde.php?post=success&text=$newContent");
    exit();

}else{
    header("Location: ../../ErHeerstPaniek.php?post=notCorrect");
    exit();
}