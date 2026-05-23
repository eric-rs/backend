<p>Excluindo o índice usuário no cookie.</p>
<?php
    // Define a expiraçãopara 1 hora atrás.
    setcookie("usuario", "", time() - 3600, "/");
?>