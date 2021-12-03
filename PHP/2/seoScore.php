<?php

use phpDocumentor\Reflection\DocBlock\Tag;

function seoScore(string $html): int
{



    $doc = new DOMDocument();
    @ $doc->loadHTML($html);
    $tags_index = ['title','h1','h2','h3',];
    foreach( $tags_index as $index)
    {
        $tags = $doc->getElementsByTagName($index);
        var_dump($tags );
        foreach($tags as $tag )
        {   
            
           echo $tag->nodeValue;
        }
        
    }




    /*
  preg_match('/<title>(.*?)<\/title>/s', $html, $match);
  echo $match[0];
  echo $match[1];
  preg_match('/<meta content="description-content">(.*?)<\/meta>/s', $html, $match));
  preg_match('/<meta content="viewport-content">(.*?)<\/meta>/s', $html, $match));
  preg_match('/<meta content="robots-content">(.*?)<\/meta>/s', $html, $match));
  preg_match('/<meta content="charset-value">(.*?)<\/meta>/s', $html, $match));
  preg_match('/<h1>(.*?)<\/h1>/s', $html, $match));
  preg_match('/<h2>(.*?)<\/h2>/s', $html, $match));
  preg_match('/<h3>(.*?)<\/h3>/s', $html, $match));
  echo $match1[0];
  echo $match1[1];
  preg_match('/<header>(.*?)<\/header>/s', $html, $match));
  preg_match('/<section>(.*?)<\/section>/s', $html, $match));
  preg_match('/<footer>(.*?)<\/footer>/s', $html, $match));
  */
    //var_dump (simplexml_load_string($html));
    return 5;
}

$html =
    '<!DOCTYPE html>
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
