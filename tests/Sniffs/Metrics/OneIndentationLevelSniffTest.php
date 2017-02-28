<?php declare(strict_types=1);

namespace ObjectCalisthenics\Tests\Sniffs\Metrics;

use ObjectCalisthenics\Tests\CodeSnifferRunner;
use PHPUnit\Framework\TestCase;

/**
 * @covers \ObjectCalisthenics\Sniffs\Metrics\OneIndentationLevelSniff
 */
final class OneIndentationLevelSniffTest extends TestCase
{
    public function test(): void
    {
        $codeSnifferRunner = new CodeSnifferRunner();
        $errorCount = $codeSnifferRunner->detectErrorCountInFileForSniff(
            __DIR__.'/OneIndentationLevelSniffTest.inc',
            'ObjectCalisthenics.Metrics.OneIndentationLevel'
        );

        $this->assertSame(5, $errorCount);
    }
}
