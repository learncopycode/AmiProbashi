<?php
$fullname = $_POST["fullname"];
$email= $_POST["email"];
$messages= $_POST["messages"];


if(!empty($username)||!empty($email)||!empty($messages)){

    $host="localhost:3306 ";
    $dbUsername="thane_primary";
    $dbPassword="Thanex_2020";
    $dbname="thane_emailsThanex";

    $conn=new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if(mysqli_connect_error()){

        die('connect error ('.mysqli_connect_error().')'.mysqli_connect_error());   
    }

    else{

        $SELECT= "SELECT email From contactForm Where email=? Limit 1" ;
        $INSERT = "INSERT INTO contactForm (fullname, email, messages ) values(?,?,?)";

        $stmt=$conn ->prepare($SELECT);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->bind_result($email);
        $stmt->store_result();
        $rnum=$stmt->num_rows;

        if($rnum==0){
            $stmt->close();
            $stmt=$conn ->prepare($INSERT);
            $stmt->bind_param("sss", $fullname, $email, $messages);
            $stmt->execute();
            echo '<script>
            alert("We\'ll get in touch with you shortly."); 
            window.history.go(-1);
            </script>';
            $to = "info@thanexint.com";
            $subject = "Thanex: New Inquiry by $fullname";
            $message = "Hello! $fullname just filled up our contact from. You can contact $fullname at $email. $fullname dropped the followin message in the form: <br/>"."Name:$fullname <br/>"."Email: $email <br/>"."Message: $messages";
            $from = "thanex.contactus.mailbot@thanex.com";
            $headers = "From: $from ". "\r\n" .
            "Subject = $subject";
            mail($to,$subject,$message,$headers);
    

        }
        else{
            echo "<script>
            alert('Please try again.'); 
            window.history.go(-1);
            </script>";


        }
        $stmt->close();
        $conn->close();





    }

}

else{

    echo "All fields are required to submit the form. Please try again.";
    die();
}