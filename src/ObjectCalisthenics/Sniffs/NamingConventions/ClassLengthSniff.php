<?php declare(strict_types=1);

namespace ObjectCalisthenics\Sniffs\NamingConventions;

use ObjectCalisthenics\AbstractIdentifierLengthSniff;
use PHP_CodeSniffer_File;
use PHP_CodeSniffer_Sniff;

/**
 * Class name length sniffer, part of "Do not abbreviate" object calisthenics rule.
 */
final class ClassLengthSniff extends AbstractIdentifierLengthSniff implements PHP_CodeSniffer_Sniff
{
    /**
     * @var string
     */
    protected $tokenString = 'class';

    /**
     * @var int
     */
    protected $tokenTypeLengthFactor = 0;

    protected function isValid(PHP_CodeSniffer_File $file, int $position): bool
    {
        $previousTClassPosition = $file->findPrevious(T_CLASS, ($position - 1), null, false, null, true);
        if ($previousTClassPosition === false) {
            return false;
        }

        $textAfterTClass = $file->getTokensAsString(
            $previousTClassPosition + 1,
            $position - $previousTClassPosition - 1
        );

        return trim($textAfterTClass) === '';
    }
}
