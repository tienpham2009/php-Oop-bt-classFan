<?php


class Fan
{
    const SLOW = 1;
    const MEDIUM = 2;
    const FAST = 3;
    private int $speed;
    private bool $on;
    private float $radius;
    private string $color;

    /**
     * @return float
     */
    public function getRadius(): float
    {
        return $this->radius;
    }

    /**
     * @param float|int $radius
     */
    public function setRadius(float|int $radius): void
    {
        $this->radius = $radius;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @param string $color
     */
    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    /**
     * @return int
     */
    public function getSpeed(): int
    {
        return $this->speed;
    }

    /**
     * @param int $speed
     */
    public function setSpeed(int $speed): void
    {
        $this->speed = $speed;
    }

    /**
     * @param bool $on
     */
    public function setOn(bool $on)
    {
        $this->on = $on;
    }

    public function __construct()
    {
        $this->speed = self::SLOW;
        $this->on = false;
        $this->radius = 5;
        $this->color = "blue";
    }

    public function __toString(): string
    {
        if ($this->on == true) {
            return "Speed: " . $this->speed . "<br>" .
                "Color: " . $this->color . "<br>" .
               "Radius: ". $this->radius."<br>".
                "fan is on";
       }else{
            return "Color: " . $this->color . "<br>" .
                "Radius: ". $this->radius."<br>".
                "fan is off";
        }

    }

}