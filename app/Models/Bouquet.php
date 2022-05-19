<?php

namespace App\Models;

use App\Framework\Position;
use App\Framework\Positions;

abstract class Bouquet
{
    protected array $positions = [];
    /**
     * @var Positions[]
     */
    protected array $positionsIndexes = [];


    public function __construct()
    {
        $this->positions = array_fill_keys(
            array_map(
                fn($item)=> $item->value,
                $this->positionsIndexes
            ),
            null
        );
    }
    /**
     * @return Positions[]
     */
    public function getPositions(): array
    {
        return $this->positionsIndexes;
    }

    public function getPosition(Positions $position): Position|null|false
    {
        $index =  $position->value;
        if(!key_exists($index, $this->positions))
            return false;
        return  $this->positions[$index];
    }

    public function addPosition(Position $position): void
    {
        $this->positions[$position->getPosition()->value] = $position;
    }

    public function render(): string
    {
        $positionHtmlArray = array_map(
            fn($position)=>$this->renderPosition(positionIndex: $position)
            ,$this->positions
        );
        return "<div class='".$this->getName()."'>".implode("",$positionHtmlArray)."</div>";
    }
    private  function getName() {
        $path = explode('\\', __CLASS__);
        return array_pop($path);
    }

    private function renderPosition(Positions $positionIndex)
    {
        $position = $this->getPosition($positionIndex);
        $flowerHtmlArray = array_map(
            fn($flower)=>$flower->render(),
            $position->getFlowers()
        );
        return "<div class='".$positionIndex."'>".implode("",$flowerHtmlArray)."</div>";
    }
}
