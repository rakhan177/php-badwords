<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Php Badwords</title>
  </head>
  <body>

    <!-- apro php -->
    <?php
    // salvo testo in variabile:
    $text = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
    // salvo la lunghezza delda variabile text in variabile con il metodo strlen:
    $textLength = strlen($text);
    // recupero l' array GET con la parola scritta nella query in badword:
    $badWord = $_GET['badword'];
    // sostituisco la parola passata in GET con *** con il metodo str_replace:
    $newText = str_replace($badWord, '***', $text);
    ?>
    <!-- nell html vado a stamparmi il risultato: -->

    <div>
      La lunghezza della variabile &text è di: <?php echo $textLength; ?>
    </div>
    <div>
      Questo è il testo con la parola <?php echo $badWord; ?> modificata in ***:
    </div>
    <p><?php echo $newText; ?></p>
  </body>
</html>
