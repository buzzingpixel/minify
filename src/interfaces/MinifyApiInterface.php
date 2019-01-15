<?php
declare(strict_types=1);

/**
 * @author TJ Draper <tj@buzzingpixel.com>
 * @copyright 2019 BuzzingPixel, LLC
 * @license Apache-2.0
 */

namespace buzzingpixel\minify\interfaces;

interface MinifyApiInterface
{
    /**
     * Minifies HTML
     * @param string $html
     * @param array $options
     * @return string
     */
    public function minifyHtml(string $html, array $options = []): string;

    /**
     * Minifies CSS
     * @param string $css
     * @param array $options
     * @return string
     */
    public function minifyCss(string $css, array $options = []): string;

    /**
     * Minifies JavaScript
     * @param string $js
     * @param array $options
     * @return string
     */
    public function minifyJs(string $js, array $options = []): string;
}
