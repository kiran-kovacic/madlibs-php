<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Madlibs</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <nav>
      <a href="index.php">Er heest paniek</a>
      <a href="onkunde.php">Onkunde</a>
    </nav>
    <main>
      <h1>Er heerst paniek</h1>
      <p>Er heerst paniek in het koningkrijk <?php echo $_POST["land"]; ?>. Koning <?php echo $_POST[spijbel]; ?> is ten einde raad en als koning <?php echo $_POST[spijbel]; ?> ten einde raad is, dan roept hij zijn ten-einde-raadsheer <?php echo $_POST[persoon]; ?>.</p>
      <p>"<?php echo $_POST[persoon]; ?>! Het is een ramp! Het is een schande!"</p>
      <p>"Sire, Majesteit. Uwe luidruchtigheid, wat is er aan de hand?"</p>
      <p>"mijn <?php echo $_POST["dier"]; ?> is verdwenen! Zo maar, zonder waarschuwing. En ik had net <?php echo $_POST[speelgoed]; ?> voor hem gekocht!"</p>
      <p>"Majesteit, uw <?php echo $_POST[persoon]; ?> komt vast vanzelf weer terug?"</p>
      <p>"Ja, da's leuk en aardig, maar hoe moet ik in de tussentijd <?php echo $_POST[bezigheid]; ?> leren?"</p>
      <p>"Maar Sire, daar kunt u toch uw <?php echo $_POST[kopen]; ?> voor gebruiken."</p>
      <p>"<?php echo $_POST[persoon]; ?>, je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had."</p>
      <p>"<?php echo $_POST[vervelen]; ?>, Sire"</p>
    </main>
    <footer></footer>
  </body>
</html>
