<html>
    <head>
        <meta charset="utf-8" />
        <title>Exercise</title>
    </head>
    <body>
      <p>Traduire ce code avec des if et des else :</p>
      <p><code>echo ($gender != 'Homme') ? 'C\'est une développeuse !!!' : 'C\'est un développeur !!!';</code></p>
      <p>
        <?php
        $gender = "Homme";
        if ($gender = "Homme") {
        echo "C'est un développeur !!!";
        } else {
          echo "C'est une développeuse !!!";
        }
         ?>
      </p>
    </body>
</html>
