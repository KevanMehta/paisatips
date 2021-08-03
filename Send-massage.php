<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
  </script>
</head>
</html>

<?php
if (isset($_POST['submit'])) {
    $to = "pradeepparmar8949@gmail.com";
    $from = $_POST['email'];
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $message = " Name: " . $name . "\nSubject : " . $subject . " \nMassege:" . "\n" . $_POST['message'];
    $headers = "From:" . $from;
    "From:" . $to;
    $mail_status =  mail($to, $subject, $message, $headers);

    if ($mail_status) {
        echo '<script>swal({
        title: "Message Sent",
        text: "Your message can be sent",
        type: "success"
    }).then(function() {
        window.location = "contact.html";
    });
     </script>';
    } else {
        echo '<script>swal("Message Not Sent");</script>';
    }
}
