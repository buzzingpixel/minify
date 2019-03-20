<?php
declare(strict_types=1);

/**
 * @author TJ Draper <tj@buzzingpixel.com>
 * @copyright 2019 BuzzingPixel, LLC
 * @license Apache-2.0
 */

use buzzingpixel\minify\MinifyApi;
use Psr\Container\ContainerInterface;
use buzzingpixel\minify\interfaces\MinifyApiInterface;

return [
    MinifyApi::class => function () {
        return new MinifyApi(getenv('DISABLE_MINIFICATION') !== 'true');
    },
    MinifyApiInterface::class => function (ContainerInterface $di) {
        return $di->get(MinifyApi::class);
    }
];
