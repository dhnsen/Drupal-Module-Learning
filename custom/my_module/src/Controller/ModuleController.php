<?php

namespace Drupal\my_module\Controller;

use Symfony\Component\HttpFoundation\Response;

class ModuleController
{

    public function myMethod()
    {
        return new Response('My method');
    }

}

?>