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
      <form action="resultOnkunde.php" method="post">
        <p>Wat zou je graag willen kunnen?
        <input class="input" type="text" name="kunnen" value=""></p>
        <p>Met welke persoon kun je goed opschieten?
        <input class="input" type="text" name="persoon" value=""></p>
        <p>Wat is je favoriete getal?
        <input class="input" type="text" name="getal" value=""></p>
        <p>Wat heb je altijd bij je als je op vakantie gaat?
        <input class="input" type="text" name="vakantie" value=""></p>
        <p>Wat is je beste persoonlijke eigenschap?
        <input class="input" type="text" name="goed" value=""></p>
        <p>Wat is je slechtste persoonlijke eigenschap?
        <input class="input" type="text" name="slecht" value=""></p>
        <p>Wat is het ergste dat je kan overkomen?
        <input class="input" type="text" name="ongeluk" value=""></p>
        <input class="input" type="submit" value="Submit">
      </form>
    </main>
    <footer></footer>
  </body>
</html>
