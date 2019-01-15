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
    public function minifyHtml(string $html, array $options = []): string
    {
        return Minify_HTML::minify($html, $options);
    }

    public function minifyCss(string $css, array $options = []): string
    {
        return Minify_CSSmin::minify($css, $options);
    }

    public function minifyJs(string $js, array $options = []): string
    {
        return JShrink::minify($js, $options);
    }
}
