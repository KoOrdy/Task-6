<?php
class Validation {
    public static function validateEmail($email) {
        return !empty($email)&&str_contains($email, '@');
    }

    public static function validatePassword($password) {
        return strlen($password) >= 8;
    }

    public static function validateName($name) {
        return !empty($name)&&strlen($name)>5;
    }
}
