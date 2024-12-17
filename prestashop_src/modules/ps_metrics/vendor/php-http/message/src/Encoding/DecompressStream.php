<?php

namespace ps_metrics_module_v4_0_8\Http\Message\Encoding;

use ps_metrics_module_v4_0_8\Clue\StreamFilter as Filter;
use Psr\Http\Message\StreamInterface;
/**
 * Stream decompress (RFC 1950).
 *
 * @author Joel Wurtz <joel.wurtz@gmail.com>
 */
class DecompressStream extends FilteredStream
{
    /**
     * @param int $level
     */
    public function __construct(StreamInterface $stream, $level = -1)
    {
        if (!\extension_loaded('zlib')) {
            throw new \RuntimeException('The zlib extension must be enabled to use this stream');
        }
        parent::__construct($stream, ['window' => 15]);
        // @deprecated will be removed in 2.0
        $this->writeFilterCallback = Filter\fun($this->writeFilter(), ['window' => 15, 'level' => $level]);
    }
    protected function readFilter() : string
    {
        return 'zlib.inflate';
    }
    protected function writeFilter() : string
    {
        return 'zlib.deflate';
    }
}
