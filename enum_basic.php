<?php
declare(strict_types=1);

enum Colors
{
    case Red;
    case Blue;
    case Green;
    
    public function getColor(): string
    {
        return $this->name;
    }
}

function paintColor(Colors $colors): void
{
    echo "Paint : " . $colors->getColor() . PHP_EOL;
}

paintColor(Colors::Red);
paintColor(Colors::Blue);
paintColor(Colors::Green);