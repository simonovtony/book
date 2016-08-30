<?php

$text = 'Ссылка: (http://thematrix.com), www.ru?"a"=b, http://lozhki.net.';

echo hrefActive($text);

function hrefCallback($p) {
    $name = htmlspecialchars($p[0]);
    $href = !empty($p[1]) ? $name : "http://$name";
    return "<a href=\"$href\">$name</a>";
}

function hrefActive($text) {
    return preg_replace_callback(
        '
            {
                (?:
                    (\w+://)
                    |
                    www\.
                )
                [\w-]+(\.[\w-]+)*
                (?: : \d+)?
                [^<>"\'()\[\]\s]*
                (?:
                    (?<! [[:punct:]])
                    |
                    (?<= [-/&+*])
                )
            }xis
        ',
        "hrefCallback",
        $text
    );
}

?>