<?php
/**
 * Eruption of Light
 * Find Email Domain
 */

function findEmailDomain($address) {
    return end(explode("@", $address));
}

var_dump(findEmailDomain("\"very.unusual.@.unusual.com\"@usual.com"));