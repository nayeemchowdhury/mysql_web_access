<?php
function adminer_object() {
    include_once "./plugins/plugin.php";
    include_once "./plugins/login-password-less.php";
    return new AdminerPlugin(array(
        new AdminerLoginPasswordLess(password_hash("nayeem", PASSWORD_DEFAULT)),
    ));
}
include "./adminer_core.php";
