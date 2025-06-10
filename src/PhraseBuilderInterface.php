<?php

namespace Mickeywaugh\PhpCaptcha;

/**
 * Interface for the PhraseBuilder
 *
 * @author Mickeywaugh <g.passault@gmail.com>
 */
interface PhraseBuilderInterface
{
    /**
     * Generates  random phrase of given length with given charset
     */
    public function build();

    /**
     * "Niceize" a code
     */
    public function niceize($str);
}
