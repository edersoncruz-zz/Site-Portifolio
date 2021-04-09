<?php
$name = $_POST['name'];
//pega os dados que foi digitado no ID name.

$email = $_POST['email'];
//pega os dados que foi digitado no ID email.

$subject = $_POST['subject'];
//pega os dados que foi digitado no ID sebject.

$message = $_POST['message'];
//pega os dados que foi digitado no ID message.
$myEmail = "contato@hipnosemidiaexterna.com.br";//é necessário informar um e-mail do próprio domínio
$headers = "From: $myEmail\r\n";
$headers .= "Reply-To: $email\r\n";

/*abaixo contém os dados que serão enviados para o email
cadastrado para receber o formulário*/

$corpo = "Formulário enviado\n";
$corpo .= "Nome: " . $name . "\n";
$corpo .= "Email: " . $email . "\n";
$corpo .= "Comentários: " . $message . "\n";

$email_to = 'hipnosemidia2@hotmail.com';
//não esqueça de substituir este email pelo seu.

$status = mail($email_to, $subject, $corpo, $headers);
//enviando o email.

if ($status) {
  echo "<script> window.location='index.html'; alert('Enviado com sucesso!'); </script>";
  
//mensagem de form enviado com sucesso.

} else {
  echo "<script> window.location='index.html'; alert('Falha ao enviar'); </script>";
  
//mensagem de erro no envio. 

}
?>