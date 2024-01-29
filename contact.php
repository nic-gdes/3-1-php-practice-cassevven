<!DOCTYPE html>
<html lang="en">
<?php include('./components/head.php'); ?>

<?php 
if (isset($_POST['submit'])) {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    echo $name . ", " . $email . ", " . $message;

}
?>

<?php $page_title = "Contact";?>

<body>
<?php include('./components/nav.php'); ?>
<div class="contactbody">
<form action="" method="POST">
    <fieldset>
        <legend><h1>Submit your favorite icecream flavor in the text box below!</h1></legend>
        <ol>
            <li><label for="name">Name:</label>
            <input type="text" id="name" name="name">
            <br></li>
            
            <li><label for="email">Email Address:</label>
            <input type="text" id="email" name="email">
             <br></li>
           
            <li><label for="message">Message</label>
            <textarea id="message" name="message" rows="4"></textarea>
            <br></li>
        </ol>
        <input type="submit" value="submit">
</fieldset>
</form>
</div>
<?php include('./components/footer.php'); ?>
</body>
<html>