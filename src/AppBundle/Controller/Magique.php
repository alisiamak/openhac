<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class Magique
{
    /**
     * @Route("/index")
     */
    public function numeroAction()
    {
        $numero = mt_rand(0, 100);

        return new Response(
            '<html><body>Numero magique : '.$numero.'</body></html>'
        );
    }
}
