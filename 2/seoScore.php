<?php

function seoScore(string $html): int
{
    var_dump (simplexml_load_string($html));
    return 5;
}

$html =
    '<!DOCTYPE html>a
    <html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Quera</title>
        <meta name="description" content="quera-codecup-college-magnet">
        <meta name="robots" content="index, follow">
    </head>
    <body>
    <header>
        <h1>1</h1>
    </header>
    <section>
        <h2>Quera</h2>
        <h3>Quera</h3>
        <h3>Quera</h3>
        <h3>Quera</h3>
    </section>
    <footer>
        <h2>Quera</h2>
    </footer>
    </body>
    </html>';

    seoScore($html);