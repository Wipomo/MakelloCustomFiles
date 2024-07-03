<?php

use Twig\Lexer;

class_exists('Twig\Lexer');

@trigger_error(sprintf('Using the "Twig_SupTwg_Lexer" class is deprecated since Twig version 2.7, use "Twig\Lexer" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\Lexer" instead */
    class Twig_SupTwg_Lexer extends Lexer
    {
    }
}
