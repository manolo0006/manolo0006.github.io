<?php
// Controlla se le credenziali dell'amministratore sono valide (questo è solo un esempio, dovresti utilizzare un metodo sicuro per autenticare gli amministratori)
$admin_username = "admin";
$admin_password = "password";

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === $admin_username && $password === $admin_password) {
        // Credenziali corrette, reindirizza l'amministratore alla pagina riservata agli amministratori
        header("Location: pagina_amministratori.php");
        exit;
    } else {
        // Credenziali non corrette, reindirizza altrove (ad esempio, pagina di errore)
        header("Location: pagina_errore.php");
        exit;
    }
} else {
    // Se non sono stati inviati username e password, reindirizza altrove
    header("Location: pagina_errore.php");
    exit;
}
?>

