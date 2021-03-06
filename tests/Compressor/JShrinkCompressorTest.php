<?php

declare(strict_types=1);

namespace WyriHaximus\JsCompress\Tests\Compressor;

use WyriHaximus\Compress\AbstractCompressorTest;
use WyriHaximus\Compress\CompressorInterface;
use WyriHaximus\JsCompress\Compressor\JShrinkCompressor;

/**
 * @internal
 */
final class JShrinkCompressorTest extends AbstractCompressorTest
{
    public function testException(): void
    {
        $input  = "var a = '";
        $output = $this->compressor->compress($input);
        self::assertSame($input, $output);
    }

    protected function getCompressor(): CompressorInterface
    {
        return new JShrinkCompressor();
    }
}
