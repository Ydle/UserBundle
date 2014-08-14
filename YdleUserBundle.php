<?php

namespace Ydle\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class YdleUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
