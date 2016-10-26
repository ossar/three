<?php

$d = dir(__DIR__);

$self = basename(__FILE__);
while (false !== ($entry = $d->read())) {
    if (!preg_match('/\.(?:php|html?)$/', $entry)) {
        continue;
    }
    if ($entry == $self) {
        continue;
    }
    printf('<a href="%s">%s</a><br>', $entry, $entry);
}
