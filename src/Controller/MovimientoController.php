<?php

namespace App\Controller;

use App\Entity\Movimiento;

class MovimientoController extends AdminController
{
    public function prePersistEntity($entity)
    {
        parent::prePersistEntity($entity);
        $entity->setEmpleado($this->get('security.token_storage')->getToken()->getUser());
        #$entityManager = $this->getDoctrine()->getManager();
        #$entityManager->persist($entity);
        #$entityManager->flush();
    }
    
}
?>