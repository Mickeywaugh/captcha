<?php

namespace Mickeywaugh\Captcha;

/**
 * Generates random phrase
 *
 * @author Mickeywaugh <g.passault@gmail.com>
 */
class PhraseBuilder implements PhraseBuilderInterface
{
    /**
     * @var int
     */
    public int $length;

    /**
     * @var string
     */
    public string $charset;
    /**
     * Constructs a PhraseBuilder with given parameters
     */
    public function __construct($length = 5, $charset = 'abcdefghijklmnpqrstuvwxyz123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ')
    {
        $this->length = $length;
        $this->charset = $charset;
    }

    /**
     * Generates  random phrase of given length with given charset
     */
    public function build($length = null, $charset = null): string
    {
        if ($length !== null) {
            $this->length = $length;
        }
        if ($charset !== null) {
            $this->charset = $charset;
        }

        $phrase = '';
        $chars = str_split($this->charset);

        for ($i = 0; $i < $this->length; $i++) {
            $phrase .= $chars[array_rand($chars)];
        }

        return $phrase;
    }

    /**
     * "Niceize" a code
     */
    public function niceize($str): string
    {
        return self::doNiceize($str);
    }

    /**
     * A static helper to niceize
     */
    public static function doNiceize($str): string
    {
        return strtr(strtolower($str), '01', 'ol');
    }

    /**
     * A static helper to compare
     */
    public static function comparePhrases($str1, $str2): bool
    {
        return self::doNiceize($str1) === self::doNiceize($str2);
    }
}
