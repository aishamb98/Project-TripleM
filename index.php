<?php
if (! empty($_SESSION['logged_in']))
{
    ?>

    <!-- <p>here is my super-secret content</p> -->
    <!-- <a href='logout.php'>Click here to log out</a> -->
    
    <?php
    $_SESSION['include'] = true;
}
else
{
    echo 'You are not logged in. <a href="signUpQuestion.html">Click here</a> to log in.';
}