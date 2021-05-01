<?php
namespace Psalm\Storage;

use Psalm\CodeLocation;
use Psalm\Internal\Analyzer\ClassLikeAnalyzer;
use Psalm\Type;

class EnumCaseStorage
{
    /**
     * @var CodeLocation
     */
    public $location;

    /**
     * @var list<AttributeStorage>
     */
    public $attributes = [];

    /**
     * @var int|string|null
     */
    public $value;
}
