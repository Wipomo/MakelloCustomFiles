<?php

use Twig\Extension\StagingExtension;

class_exists('Twig\Extension\StagingExtension');

@trigger_error(sprintf('Using the "Twig_SupTwg_Extension_Staging" class is deprecated since Twig version 2.7, use "Twig\Extension\StagingExtension" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\Extension\StagingExtension" instead */
    class Twig_SupTwg_Extension_Staging extends StagingExtension
    {
    }
}
