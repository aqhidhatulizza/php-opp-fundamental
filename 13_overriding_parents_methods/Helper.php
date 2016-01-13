<?php
/**
 * Created a Hash
 * @param string $string
 * return string
 */
function getHash($string) {
    return hash('sha256', $string);
}