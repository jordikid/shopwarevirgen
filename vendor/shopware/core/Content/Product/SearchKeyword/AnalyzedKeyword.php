<?php declare(strict_types=1);

namespace Shopware\Core\Content\Product\SearchKeyword;

use Shopware\Core\Framework\Struct\Struct;

class AnalyzedKeyword extends Struct
{
    /**
     * @var string
     */
    protected $keyword;

    /**
     * @var float
     */
    protected $ranking;

    public function __construct(string $keyword, float $ranking)
    {
        $this->keyword = $keyword;
        $this->ranking = $ranking;
    }

    public function getKeyword(): string
    {
        return $this->keyword;
    }

    public function getRanking(): float
    {
        return $this->ranking;
    }

    public function setRanking(float $ranking): void
    {
        $this->ranking = $ranking;
    }
}
