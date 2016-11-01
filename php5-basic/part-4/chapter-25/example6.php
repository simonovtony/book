<?php

header('Set-Cookie: text=Hello%2C%20World!; expires=Wed, 31 Dec 2020 23:59:59 GMT;');

setcookie("cookie", "I promise, by the time you're done eating it, you'll feel right as rain.");
setcookie("other", "Here, take a cookie.", time() + 3600);

?>