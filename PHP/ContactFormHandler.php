<?php
    if (isset($_POST['submit'])){
        $name = $_POST['name'];
        $mailFrom = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $mailTo = "Add sweetheart pantries email";
        $headers = "From: ".$mailFrom;
        $txt = "You have recieved an email from ".$name.".\n\n".$message;

        mail($mailTo, $subject, $txt, $headers);
        header("Location: index.html?mailsend");
    }
?>