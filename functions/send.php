<?php
$adminEmail = 'babypointsardegna@gmail.com';
$userEmail = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$userMessage = '
  <html>
    <head>
      <title>Grazie per averci contattato</title>
    </head>
    <body>
      <h1>Grazie per averci contattato</h1>
      <p>La tua richiesta è stata inoltrata. Ti risponderemo al più presto.</p>
      <p>Lo Staff</p>
    </body>
  </html>
';
$adminMessage = "
  <html>
    <head>
      <title>Messaggio dal sito Baby Point Sardegna</title>
    </head>
    <body>
      <h1>Messaggio dal sito Baby Point Sardegna</h1>
      <ul>
        <li><b>Nome:</b> {$_POST['nome']}</li>
        <li><b>Nome Attività:</b> {$_POST['attività']}</li>
        <li><b>Email:</b> {$_POST['email']}</li>
        <li><b>Messaggio:</b> {$_POST['messaggio']}</li>
      </ul>
    </body>
  </html>
";
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=utf-8';
mail($userEmail, 'Richiesta di contatto effettuata con successo', $userMessage, implode("\r\n", $headers));
mail($adminEmail, 'Richiesta di contatto dal sito web BabyPoint Sardegna', $adminMessage, implode("\r\n", $headers));
header('location: ../index.php?invio=ok');