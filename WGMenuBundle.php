<?php

namespace WG\MenuBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class WGMenuBundle extends Bundle
{
    public function getNamespace()
    {
        return __NAMESPACE__;
    }
    
    public function getPath()
    {
        return strtr(__DIR__, '\\', '/');
    }
}

