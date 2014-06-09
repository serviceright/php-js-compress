<?php

/*
 * This file is part of HtmlCompress.
 *
 ** (c) 2014 Cees-Jan Kiewiet
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace WyriHaximus\HtmlCompress\Compressor;

/**
 * Class HtmlCompressor
 *
 * @package WyriHaximus\HtmlCompress\Compressor
 */
class HtmlCompressor implements CompressorInterface {

    /**
     * {@inheritdoc}
     */
    public function compress($string) {
        // Replace newlines, returns and tabs with nothing
        $string = str_replace(["\r", "\n", "\t"], '', $string);
        // Replace multiple spaces with a single space
        $string = preg_replace('/(\s+)/m', ' ', $string);

        // Remove spaces that are followed by either > or <
        $string = preg_replace('/ ([<>])/', '$1', $string);
        // Remove spaces that are preceded by either > or <
        $string = preg_replace('/([<>]) /', '$1', $string);

        return trim($string);
    }
}