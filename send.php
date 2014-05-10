<?php
    $connection = mysql_connect('localhost', 'root', '@Greellow8') or die('Error connecting to the database');
    mysql_select_db('ideasbyb', $connection);
    echo $_POST['message'].'<br>';
    $query = "INSERT INTO Contacts (name, email, message) VALUES ('".$_POST['name']."', '".$_POST['email']."', '".$_POST['message']."')";
    if (isset($_POST['name'], $_POST['email'], $_POST['message'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        require_once('swiftmailer/lib/swift_required.php');
        $transport = Swift_SmtpTransport::newInstance('dedrelay.secureserver.net', 25)
            ->setUsername('ideasbyb@gmail.com')
            ->setPassword('@Greellow8');
        $mailer = Swift_Mailer::newInstance($transport);
        $message = Swift_Message::newInstance('lead email')
            ->setFrom(array('ideasbyb@gmail.com' => 'Contact Person'))
            ->setTo(array('ideasbyb@gmail.com' => 'Bryan'))
            ->setSubject('Contact form filled in')
            ->setBody("Name: ".$name." \n E-mail: ".$email." \n Message: ".$message." \n End of contact form.");
        
        $result = $mailer->send($message);
        echo $result;
    } else {
        echo 'Invalid information';
    }
?>