<?php declare(strict_types=1);

namespace ObjectCalisthenics\Tests\Sniffs\Files;

use ObjectCalisthenics\Tests\CodeSnifferRunner;
use PHPUnit\Framework\TestCase;

/**
 * @covers \ObjectCalisthenics\Sniffs\NamingConventions\FunctionNameLengthSniff
 */
final class FunctionLengthSniffTest extends TestCase
{
    public function test(): void
    {
        $codeSnifferRunner = new CodeSnifferRunner();
        $errorCount = $codeSnifferRunner->detectErrorCountInFileForSniff(
            __DIR__.'/FunctionLengthSniffTest.inc',
            'ObjectCalisthenics.Files.FunctionLength'
        );

        $this->assertSame(2, $errorCount);
    }
}
