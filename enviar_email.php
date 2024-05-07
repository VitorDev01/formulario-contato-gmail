<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Endereço de e-mail para onde a mensagem será enviada (seu e-mail do Gmail)
    $to = "victorskw440@gmail.com";

    // Assunto do e-mail
    $subject = "Mensagem de contato de $name";

    // Conteúdo da mensagem
    $body = "Nome: $name\n";
    $body .= "E-mail: $email\n";
    $body .= "Mensagem:\n$message";

    // Cabeçalhos do e-mail
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Tentar enviar o e-mail
    if (mail($to, $subject, $body, $headers)) {
        // Se o e-mail for enviado com sucesso, exiba uma mensagem de sucesso
        echo "enviado";
    } else {
        // Se ocorrer um erro no envio do e-mail, exiba uma mensagem de erro
        echo "erro";
    }
} else {
    // Se o método de requisição não for POST, redirecione de volta para a página de contato
    header("Location: contato.html");
}
?>
