<?php


namespace SOLID\LSP;


class Square extends Rectangle
{
    /**
     * @param int $height
     */
    public function setHeight(int $height): void
    {
        $this->height = $height;
        $this->width = $height;
    }

    /**
     * @param int $width
     */
    public function setWidth(int $width): void
    {
        $this->height = $width;
        $this->width = $width;
    }
}