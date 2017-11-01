<?php

class Test
{
    public function Hello($a)
    {
        return $a;
    }
}

$service = new Yar_Server(new Test);
$service->handle();