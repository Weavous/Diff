<?php

namespace Src;

class Factory
{
    public static function factory(): Self
    {
        return new static();
    }
}
