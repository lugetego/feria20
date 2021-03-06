<?php

namespace RegistroBundle\Repository;
use RegistroBundle\Entity\Registro;
use Symfony\Component\PropertyAccess\PropertyAccess;


use Doctrine\ORM\EntityRepository;


/**
 * RegistroRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */

class RegistroRepository extends EntityRepository
{
    public function countActividad($horario)
    {
        $accessor = PropertyAccess::createPropertyAccessor();
        $registros = $this->findByActivo(true);
        $actividad2 = $actividad1 = $actividad3 = $actividad4 = $actividad5 = $actividad6 =
        $actividad7 = $actividad8 = $actividad9 = $actividad10 = $actividad12 = $actividad11 = $actividad13 =
        $actividad14 = $actividad15 = $actividad16 = 0;

        $actividad1mail=$actividad2mail=$actividad3mail=$actividad4mail=$actividad5mail=$actividad6mail=
        $actividad7mail=$actividad8mail=$actividad9mail=$actividad10mail=$actividad11mail=$actividad12mail=
        $actividad13mail=$actividad14mail=$actividad15mail=$actividad16mail="";

        foreach ($registros as $registro) {
            $actividad = array_search(true, $accessor->getValue($registro, $horario));
            switch ($actividad) {
                case 'actividad1':
                    $actividad1 = $actividad1 + 1;
                    $actividad1mail=$registro->getMail() .",". $actividad1mail;
                    break;
                case 'actividad2':
                    $actividad2 = $actividad2 + 1;
                    $actividad2mail=$registro->getMail() .",". $actividad2mail;
                    break;
                case 'actividad3':
                    $actividad3 = $actividad3 + 1;
                    $actividad3mail=$registro->getMail() .",". $actividad3mail;
                    break;
                case 'actividad4':
                    $actividad4 = $actividad4 + 1;
                    $actividad4mail=$registro->getMail() .",". $actividad4mail;
                    break;
                case 'actividad5':
                    $actividad5 = $actividad5 + 1;
                    $actividad5mail=$registro->getMail() .",". $actividad5mail;
                    break;
                case 'actividad6':
                    $actividad6 = $actividad6 + 1;
                    $actividad6mail=$registro->getMail() .",". $actividad6mail;
                    break;
                case 'actividad7':
                    $actividad7 = $actividad7 + 1;
                    $actividad7mail=$registro->getMail() .",". $actividad7mail;
                    break;
                case 'actividad8':
                    $actividad8 = $actividad8 + 1;
                    $actividad8mail=$registro->getMail() .",". $actividad8mail;
                    break;
                case 'actividad9':
                    $actividad9 = $actividad9 + 1;
                    $actividad9mail=$registro->getMail() .",". $actividad9mail;
                    break;
                case 'actividad10':
                    $actividad10 = $actividad10 + 1;
                    $actividad10mail=$registro->getMail() .",". $actividad10mail;
                    break;
                case 'actividad11':
                    $actividad11 = $actividad11 + 1;
                    $actividad11mail=$registro->getMail() .",". $actividad11mail;
                    break;
                case 'actividad12':
                    $actividad12 = $actividad12 + 1;
                    $actividad12mail=$registro->getMail() .",". $actividad12mail;
                    break;
                case 'actividad13':
                    $actividad13 = $actividad13 + 1;
                    $actividad13mail=$registro->getMail() .",". $actividad13mail;
                    break;
                case 'actividad14':
                    $actividad14 = $actividad14 + 1;
                    $actividad14mail=$registro->getMail() .",". $actividad14mail;
                    break;
                case 'actividad15':
                    $actividad15 = $actividad15 + 1;
                    $actividad15mail=$registro->getMail() .",". $actividad15mail;
                    break;
                case 'actividad16':
                    $actividad16 = $actividad16 + 1;
                    $actividad16mail=$registro->getMail() .",". $actividad16mail;
                    break;

            }
        }

        $total = array (
            'actividad1'=> $actividad1,
            'actividad2'=>$actividad2,
            'actividad3'=>$actividad3,
            'actividad4'=>$actividad4,
            'actividad5'=>$actividad5,
            'actividad6'=>$actividad6,
            'actividad7'=>$actividad7,
            'actividad8'=>$actividad8,
            'actividad9'=>$actividad9,
            'actividad10'=>$actividad10,
            'actividad11'=>$actividad11,
            'actividad12'=>$actividad12,
            'actividad13'=>$actividad13,
            'actividad14'=>$actividad14,
            'actividad15'=>$actividad15,
            'actividad16'=>$actividad16,
            'actividad1mail'=>$actividad1mail,
            'actividad2mail'=>$actividad2mail,
            'actividad3mail'=>$actividad3mail,
            'actividad4mail'=>$actividad4mail,
            'actividad5mail'=>$actividad5mail,
            'actividad6mail'=>$actividad6mail,
            'actividad7mail'=>$actividad7mail,
            'actividad8mail'=>$actividad8mail,
            'actividad9mail'=>$actividad9mail,
            'actividad10mail'=>$actividad10mail,
            'actividad11mail'=>$actividad11mail,
            'actividad12mail'=>$actividad12mail,
            'actividad13mail'=>$actividad13mail,
            'actividad14mail'=>$actividad14mail,
            'actividad15mail'=>$actividad15mail,
            'actividad16mail'=>$actividad16mail,


        );

        return $total;

    }


}