<?php
namespace AppBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class PastDate extends Constraint
{
    public $message = 'La date "%string%" doit être inférieure à la date du jour ';
       
}
