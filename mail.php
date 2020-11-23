<?php header('Content-Type: text/html; charset=utf-8');
if(isset($_POST['contact'])){
//  print_r($_POST);
    $to = "vlados3702@gmail.com"; // ����� ����� �������� e-mail, ���� ����� ��������� ������
    $from = $_POST['contact']; // this is the sender's Email address
    $message = $from  . "\n";
    $me = 'New client';

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    function mail_utf8($to, $subject, $message, $from) {
        $header = 'MIME-Version: 1.0' . "\n" . 'Content-type: text/plain; charset=UTF-8'
            . "\n" . 'From: Client'.">\n";
        mail($to, '=?UTF-8?B?'.base64_encode($subject).'?=', $message, $header);
    }
    $success = mail_utf8("vlados3702@gmail.com", "New Client", $message, $from);
    if (!$success) {
        $errorMessage = error_get_last()['message'];
    }
}
else{
    echo "Error";
    echo $errorMessage;
    error_log("Вы ошиблись!", 3, "/var/tmp/my-errors.log");
//  echo print_r($_POST);
}

?>