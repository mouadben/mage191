<?php
function deltree($f) {
    if (is_dir($f)) {
        foreach(glob($f.'/*') as $sf) {
            if (is_dir($sf) && !is_link($sf)) {
                deltree($sf);
            } else {
                unlink($sf);
            }
        }
    }
    rmdir($f);
}
deltree('var/cache');
//deltree('var/log');
?>