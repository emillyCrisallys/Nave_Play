<form name="conta" action="contato" method="POST">
    <label>Email</label>
    <input type="email" name="email" id="email" required>
    <button type="submit">
        enviar
    </button>

</form>



<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $email = $_POST["email"] ?? NULL;
     
    function mensagem($msg){
      echo "<script>alert('{$msg}');history.back();</script>";
    };

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      mensagem("Escreva um email válido");
    };

  };

  ?>