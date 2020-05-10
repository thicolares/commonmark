<?php

declare(strict_types=1);

/*
 * This file is part of the league/commonmark package.
 *
 * (c) Colin O'Dell <colinodell@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace League\CommonMark\Extension\CommonMark\Node\Block;

use League\CommonMark\Node\Block\AbstractBlock;
use League\CommonMark\Node\StringContainerInterface;

class HtmlBlock extends AbstractBlock implements StringContainerInterface
{
    // Any changes to these constants should be reflected in .phpstorm.meta.php
    public const TYPE_1_CODE_CONTAINER = 1;
    public const TYPE_2_COMMENT        = 2;
    public const TYPE_3                = 3;
    public const TYPE_4                = 4;
    public const TYPE_5_CDATA          = 5;
    public const TYPE_6_BLOCK_ELEMENT  = 6;
    public const TYPE_7_MISC_ELEMENT   = 7;

    /** @var int */
    protected $type;

    /** @var string */
    protected $literal = '';

    public function __construct(int $type)
    {
        $this->type = $type;
    }

    public function getType(): int
    {
        return $this->type;
    }

    public function setType(int $type): void
    {
        $this->type = $type;
    }

    public function getLiteral(): string
    {
        return $this->literal;
    }

    public function setLiteral(string $literal): void
    {
        $this->literal = $literal;
    }
}