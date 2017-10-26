<html lang="pt_br">
  <head>
    <meta charset="utf-8">
    <title>Fale Conosco</title>
  </head>
  <body>
    <?php
  include_once("topo.php");
  include_once("menu.php");
  ?>
  <h1>Fale Conosco</h1>
<form action="faleconosco.php" method="post">
  Nome:<br>
  <input type="text" name="name"><br>
  Mensagem:<br>
  <textarea name="message" style="width:200px; height:200px">
</textarea>
  <input type="submit">
</form>
<footer>
  <?php
  include_once("footer.php");
  ?>
</footer>
  </body>
</html>

<?php
  $para = "meusite@sac.br";
  $nome = $_POST["name"];
  $mensagem = $_POST["message"];

  if(mail($para, $nome, $mensagem)){
  echo "mensagem enviada com sucesso";
}
  else{
  echo "Falha no envio da mensagem!";
}
?>