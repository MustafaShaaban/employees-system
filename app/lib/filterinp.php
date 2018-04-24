<?php
namespace PHPMVC\LIB;
trait FilterInp
{
    // Filter Date
    private function filterStrings($string) {
        return trim(ucfirst(ucwords(strtolower(filter_var(filter_var($string, FILTER_SANITIZE_STRING), FILTER_SANITIZE_FULL_SPECIAL_CHARS)))));
    }
    private function filterEmail($email) {
        return trim(strtolower(filter_var(filter_var(filter_var(filter_var($email, FILTER_SANITIZE_STRING), FILTER_SANITIZE_FULL_SPECIAL_CHARS), FILTER_SANITIZE_EMAIL), FILTER_SANITIZE_URL)));
    }
    private function filterPassword($password) {
        return trim(strtolower(filter_var(filter_var(filter_var(filter_var($password, FILTER_SANITIZE_STRING), FILTER_SANITIZE_FULL_SPECIAL_CHARS), FILTER_SANITIZE_EMAIL), FILTER_SANITIZE_URL)));
    }
    private function filterNumber($number) {
        return trim(strtolower(filter_var(filter_var(filter_var(filter_var($number, FILTER_SANITIZE_STRING), FILTER_SANITIZE_FULL_SPECIAL_CHARS), FILTER_SANITIZE_EMAIL), FILTER_SANITIZE_URL)));
    }
}