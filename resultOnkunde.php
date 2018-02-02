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
      <h1>Onkunde</h1>
      <p>Er zijn veel mensen die niet kunnen <?= $_POST[kunnen]; ?>. Neem nou <?= $_POST[persoon]; ?>.Zelfs met de hulp van een <?= $_POST[vakantie]; ?> of zelfs <?= $_POST[getal]; ?> kan <?= $_POST[persoon]; ?> niet <?= $_POST[kunnen]; ?>.</p>
        <p>Dat heeft niet te maken met een gebrek aan <?= $_POST[goed]; ?>, maar met een te veel aan <?= $_POST[slecht]; ?>.Te veel <?= $_POST[slecht]; ?> leidt tot <?= $_POST[ongeluk]; ?> en dat is niet goed als je wilt <?= $_POST[kunnen];
        ?>. Helaas voor <?= $_POST[persoon]; ?>. </p>
    </main>
    <footer></footer>
  </body>
</html>
