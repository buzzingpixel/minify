<?php
declare(strict_types=1);

/**
 * @author TJ Draper <tj@buzzingpixel.com>
 * @copyright 2019 BuzzingPixel, LLC
 * @license Apache-2.0
 */

namespace buzzingpixel\minify;

use Minify_HTML;
use Minify_CSSmin;
use Minify\JS\JShrink;
use buzzingpixel\minify\interfaces\MinifyApiInterface;

class MinifyApi implements MinifyApiInterface
{
    private $enableMinification;

    public function __construct(bool $enableMinification = true)
    {
        $this->enableMinification = $enableMinification;
    }

    /**
     * Minifies HTML if constructor $enableMinification argument is true. Returns
     * incoming $html unmodified if constructor $enableMinification is false
     * @param string $html
     * @param array $options
     * @return string
     */
    public function minifyHtml(string $html, array $options = []): string
    {
        if (! $this->enableMinification) {
            return $html;
        }

        return Minify_HTML::minify($html, $options);
    }

    /**
     * Minifies CSS if constructor $enableMinification argument is true. Returns
     * incoming $css unmodified if constructor $enableMinification is false
     * @param string $css
     * @param array $options
     * @return string
     */
    public function minifyCss(string $css, array $options = []): string
    {
        if (! $this->enableMinification) {
            return $css;
        }

        return Minify_CSSmin::minify($css, $options);
    }

    /**
     * Minifies JS if constructor $enableMinification argument is true. Returns
     * incoming $js unmodified if constructor $enableMinification is false
     * @param string $js
     * @param array $options
     * @return string
     */
    public function minifyJs(string $js, array $options = []): string
    {
        if (! $this->enableMinification) {
            return $js;
        }

        return JShrink::minify($js, $options);
    }
}
