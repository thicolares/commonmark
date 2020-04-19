<?php

/*
 * This file is part of the league/commonmark package.
 *
 * (c) Colin O'Dell <colinodell@gmail.com>
 *
 * Original code based on the CommonMark JS reference parser (https://bitly.com/commonmark-js)
 *  - (c) John MacFarlane
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace League\CommonMark\Node\Block;

use League\CommonMark\Parser\ContextInterface;
use League\CommonMark\Parser\Cursor;

/**
 * Interface for a block which can contain line(s) of strings
 */
interface StringContainerInterface
{
    public function addLine(string $line): void;

    public function getStringContent(): string;

    public function handleRemainingContents(ContextInterface $context, Cursor $cursor): void;
}
