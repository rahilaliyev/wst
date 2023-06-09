<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Sensei\ThirdParty\Symfony\Component\CssSelector\Parser\Handler;

use Sensei\ThirdParty\Symfony\Component\CssSelector\Parser\Reader;
use Sensei\ThirdParty\Symfony\Component\CssSelector\Parser\Token;
use Sensei\ThirdParty\Symfony\Component\CssSelector\Parser\Tokenizer\TokenizerEscaping;
use Sensei\ThirdParty\Symfony\Component\CssSelector\Parser\Tokenizer\TokenizerPatterns;
use Sensei\ThirdParty\Symfony\Component\CssSelector\Parser\TokenStream;
/**
 * CSS selector comment handler.
 *
 * This component is a port of the Python cssselect library,
 * which is copyright Ian Bicking, @see https://github.com/SimonSapin/cssselect.
 *
 * @author Jean-François Simon <jeanfrancois.simon@sensiolabs.com>
 *
 * @internal
 */
class IdentifierHandler implements \Sensei\ThirdParty\Symfony\Component\CssSelector\Parser\Handler\HandlerInterface
{
    private $patterns;
    private $escaping;
    public function __construct(\Sensei\ThirdParty\Symfony\Component\CssSelector\Parser\Tokenizer\TokenizerPatterns $patterns, \Sensei\ThirdParty\Symfony\Component\CssSelector\Parser\Tokenizer\TokenizerEscaping $escaping)
    {
        $this->patterns = $patterns;
        $this->escaping = $escaping;
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\Sensei\ThirdParty\Symfony\Component\CssSelector\Parser\Reader $reader, \Sensei\ThirdParty\Symfony\Component\CssSelector\Parser\TokenStream $stream) : bool
    {
        $match = $reader->findPattern($this->patterns->getIdentifierPattern());
        if (!$match) {
            return \false;
        }
        $value = $this->escaping->escapeUnicode($match[0]);
        $stream->push(new \Sensei\ThirdParty\Symfony\Component\CssSelector\Parser\Token(\Sensei\ThirdParty\Symfony\Component\CssSelector\Parser\Token::TYPE_IDENTIFIER, $value, $reader->getPosition()));
        $reader->moveForward(\strlen($match[0]));
        return \true;
    }
}
