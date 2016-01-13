<?php
/**
 * Created a hash.
 * @param string $string
 * @return string
 */
fuction getHash($string){
        return hash('sha256',$string);
}