<?php
//ini_set('display_errors', 1);

$msg = 'Send us a message';

if (isset($_POST['submit'])) {

    $email_to = "amw@amw.nu";
    $email_subject = "Your email subject line";

    if (!isset($_POST['fname']) ||
            !isset($_POST['lname']) ||
            !isset($_POST['email']) ||
            !isset($_POST['phone']) ||
            !isset($_POST['msg'])) {

        echo 'udfyld alle felter';
    } else {
        $first_name = $_POST['fname'];
        $last_name = $_POST['lname'];
        $email_from = $_POST['email'];
        $telephone = $_POST['phone'];
        $comments = $_POST['msg'];

        $email_message = "Form detaljer.\n\n";

        function clean_string($string) {
            $bad = array("content-type", "bcc:", "to:", "cc:", "href");
            return str_replace($bad, "", $string);
        }

        $email_message .= "First Name: " . clean_string($first_name) . "\n";
        $email_message .= "Last Name: " . clean_string($last_name) . "\n";
        $email_message .= "Email: " . clean_string($email_from) . "\n";
        $email_message .= "Telephone: " . clean_string($telephone) . "\n";
        $email_message .= "Comments: " . clean_string($comments) . "\n";

// create email headers
        $headers = 'From: ' . $email_from . "\r\n" .
                'Reply-To: ' . $email_from . "\r\n" .
                'X-Mailer: PHP/' . phpversion();
        if (@mail($email_to, $email_subject, $email_message, $headers)) {
            header('Location:'.$_SERVER['PHP_SELF']);
        }
    }
}
?>
<div class="form_wrapper">
    <div class="lang dk">
        <section ng-app 
                 ng-app="myApp" >
            <form role="form" action="" method="post" name="myForm" novalidate id='form'>
                <h1><?php echo $msg; ?></h1>
                <!--<h3>{{user.fname}}</h3>-->
                <p ng-show="myForm.fname.$invalid && myForm.fname.$touched" class="ui">Indsæt fornavn (kun bogstaver)</p>
                <div class="form-component input--medium">                     
                    <div class="input--with-icon">
                        <i class="fa fa-user"></i>
                        <input type="text" placeholder="Fornavn" class="c-form-subject form-control" id="fname"
                               name="fname" ng-model="user.fname" ng-required="true" ng-pattern="/^(\D)+$/">
                    </div>
                </div>
                <p ng-show="myForm.lname.$invalid && myForm.lname.$touched" class="ui">Indsæt efternavn (kun bogstaver)</p>
                <div class="form-component input--medium">                       
                    <div class="input--with-icon">
                        <i class="fa fa-user"></i>
                        <input type="text" placeholder="Efternavn" class="c-form-subject form-control"  id="lname"
                               name="lname" ng-model="user.lname" ng-required="true" ng-pattern="/^(\D)+$/" >
                    </div>
                </div>
                <p ng-show="myForm.phone.$invalid && myForm.phone.$touched" class="ui">Indsæt telefonnummer</p>
                <div class="form-component input--medium">                       
                    <div class="input--with-icon">
                        <i class="fa fa-phone"></i>
                        <input type="text" placeholder="Telefonnr." class="c-form-subject form-control"   id="phone"
                               name="phone" ng-model="user.phone" ng-required="true" ng-pattern="/^[0-9]*$/" >
                    </div>           
                    <p ng-show="myForm.email.$invalid && myForm.email.$touched" class="ui">Indtast gyldig email adresse</p>
                    <div class="form-component input--medium">
                        <div class="input--with-icon--rev">
                            <i class="fa fa-at"></i>
                            <input type="email" placeholder="Email" class="c-form-subject form-control" id="email"
                                   name="email" ng-model="user.email" ng-required="true">
                        </div>
                    </div>
                    <p ng-show="myForm.msg.$invalid && myForm.msg.$touched" class="ui">Skriv besked</p>
                    <div class="form-component input--medium">                       
                        <div class="input--with-icon">
                            <i class="fa fa-envelope"></i>
                            <textarea placeholder="Besked" class="c-form-subject form-control lang dk"  id="msg"
                                      name="msg" ng-model="user.msg" ng-required="true" ></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success" <?php echo $disabled; ?> name="submit">Send</button>
            </form>
        </section>
    </div>
</div>