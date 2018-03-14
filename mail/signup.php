CREATE TABLE `newsletter_signups` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `name` text NOT NULL,
 `email` text NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1

<?php

$host="localhost";
$username="root";
$password="";
$databasename="sample";

$connect=mysql_connect($host,$username,$password);
$db=mysql_select_db($databasename);

if(isset($_POST['submit_form']))
{
 $name=$_POST["user_name"];
 $email=$_POST["email"];
 
 mysql_query("insert into short_urls values('','$name','$email')");
 echo "Thank You For Joining Our Newsletter";
}
?>


1
2
3
4
5
6
7
8
9
10
11
12
13
14
15
16
17
18
19
20
21
22
23
24
25
26
27
28
29
30
31
<?php
 
    // Put your MailChimp API and List ID hehe
    $api_key = 'ENTER_YOUR_API_KEY_HERE';
    $list_id = 'ENTER_YOUR_LIST_ID_HERE';
 
    // Let's start by including the MailChimp API wrapper
    include('./inc/MailChimp.php');
    // Then call/use the class
    use \DrewM\MailChimp\MailChimp;
    $MailChimp = new MailChimp($api_key);
 
    // Submit subscriber data to MailChimp
    // For parameters doc, refer to: http://developer.mailchimp.com/documentation/mailchimp/reference/lists/members/
    // For wrapper's doc, visit: https://github.com/drewm/mailchimp-api
    $result = $MailChimp->post("lists/$list_id/members", [
                            'email_address' => $_POST["email"],
                            'merge_fields'  => ['FNAME'=>$_POST["fname"], 'LNAME'=>$_POST["lname"]],
                            'status'        => 'subscribed',
                        ]);
 
    if ($MailChimp->success()) {
        // Success message
        echo "<h4>Thank you, you have been added to our mailing list.</h4>";
    } else {
        // Display error
        echo $MailChimp->getLastError();
        // Alternatively you can use a generic error message like:
        // echo "<h4>Please try again.</h4>";
    }
?>