<?php include 'inc/config.php'; ?>
<?php include 'inc/template_start.php'; ?>
<?php
if (empty($_COOKIE['username']))
{
    header ("Location:login.php");
}
$cookie_name = 'password';
unset($_COOKIE[$cookie_name]);
// empty value and expiration one hour before
$res = setcookie($cookie_name, '', time() - 3600);
?>

    <div id="login-picture" align="center" class="<?php
    if(isset($_GET["fail"]))
    {
        echo '';
    }
    else{
        echo 'animation-fadeIn';
    }
    ?>"><img src="img/logo.png"></div>

    <!-- Login Container -->
<div id="login-container" class="<?php
if(isset($_GET["fail"]))
{
    echo 'animation-hatch';
}
else{
    echo 'animation-fadeIn';
}
?>">
    <?php
    if(isset($_GET["fail"]))
    {
        echo '
                <!-- Danger Alert Content -->
                <div class="animation-floating alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h4><i class="fa fa-times-circle"></i> Error</h4> Oh no! Password is incorrect</a>!
                </div>
                <!-- END Danger Alert Content -->
';
    }
    ?>
    <!-- Login Title -->
    <div class="login-title text-right">
        <h1>
            <img id="lock-pic" src="<?php
            $filename = "upload/{$_COOKIE["username"]}.png";

            if (file_exists($filename)) {
                $img = $filename;
            } else {
                $img = "upload/icon114.png";
            }
            ?>" alt="avatar" class="img-circle pull-left">
            <strong><?php echo $_COOKIE["username"]; ?></strong><br>
            <small>
                <a href="javascript:void(0)" class="btn btn-xs btn-default" data-toggle="tooltip" data-placement="bottom" title="Profile"><i class="fa fa-user"></i></a>
                <a href="javascript:void(0)" class="btn btn-xs btn-default" data-toggle="tooltip" data-placement="bottom" title="Settings"><i class="fa fa-cog"></i></a>
                <a href="javascript:void(0)" class="btn btn-xs btn-success" data-toggle="tooltip" data-placement="bottom" title="5 New Messages"><i class="fa fa-envelope"></i> 5</a>
            </small>
        </h1>
    </div>
    <!-- END Login Title -->

    <!-- Login Block -->
    <div class="block">
        <form action="checkpassword.php" method="post" class="form-horizontal push">
            <div class="form-group">
                <div class="col-xs-12">
                    <div class="input-group">
                        <input type="password" id="unlock-password" name="unlock-password" class="form-control" placeholder="Password" required>
                        <div class="input-group-btn">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-unlock-alt"></i> Unlock</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <p class="text-center" data-toggle="tooltip" data-placement="bottom" title="Logout">
            <a href="logout.php"><small>Not <?php echo $_COOKIE["username"]; ?>?</small></a>
        </p>
    </div>
    <!-- END Login Block -->
   </div>
<?php include 'inc/template_scripts.php'; ?>
<?php include 'inc/template_end.php'; ?>