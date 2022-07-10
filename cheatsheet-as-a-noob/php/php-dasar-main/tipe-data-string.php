<?php

echo 'Single Quote : ';
echo 'This is single quote';
echo "\n";

echo "Double Quote : ";
echo "Double quote has : special\t good\t effects\n";

/* HEREDOC Multiline*/
echo <<<LEARN
This is a multiline
and you are learning php
right now, enjoy!

LEARN;

/* NOWDOC Multiline */
echo <<<'LEARN'
This is a multiline
and you are learning php
right now, enjoy!

LEARN;
