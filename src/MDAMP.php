<?php

namespace SitePoint\Sculpin;

use Michelf\MarkdownExtra;
use Sculpin\Core\Converter\ParserInterface;

class MDAMP extends MarkdownExtra implements ParserInterface
{
    public function transform($content)
    {
        return parent::transform($content);
    }
}