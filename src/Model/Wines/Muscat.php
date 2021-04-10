<?php
declare(strict_types=1);


namespace KubaEnd\Model\Wines;


use KubaEnd\Model\Abstracts\FoodTypes;
use KubaEnd\Model\Interfaces\StrainInterface;

class Muscat extends FoodTypes implements StrainInterface
{
    public function query()
    {
        self::dairyPungentCheese();
        self::herbsBaking();
        self::sweetChocolate();
    }
    public function option()
    {
        self::meatCuredMeat();
        self::dairySoftCheese();
        self::starchWhiteStarches();
        self::sweetFruit();
        self::sweetVanilla();
    }
}