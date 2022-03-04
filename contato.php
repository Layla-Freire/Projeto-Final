<?php
$firstname = $_POST['fname'];
$lastname = $_POST['lname'];
$e-mail = $_POST['email'];
$subject = $_POST['subject'];

$assunto = "Message";
$seuemail = "layla.freire@al.infnet.edu.br";

$corpo = "<span style='font-weight: bold'>Fist-name:</span> $fname<br>";
$corpo .= "Last-name: $lname<br>";
$corpo .= "E-mail: $email<br>";
$corpo .= "Subject: $subject";

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

mail($seuemail, $assunto, $corpo, $headers);
?>
<script>
    alert('Message sent successfully!');
    location.href="contact.html";
</script>