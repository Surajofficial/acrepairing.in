<?php
function validate_mobile($mobile)
{
    return preg_match('/^[6-9]{1}[0-9]{9}+$/', $mobile);
}
function validate_email($email)
{
    $regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
    return preg_match($regex, strtolower($email));
}
