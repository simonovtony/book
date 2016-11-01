<?php

header("Content-type: image/jpeg");
passthru("./convert -blur input.jpg -");

?>