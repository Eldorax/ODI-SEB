<?php
namespace AppBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class Search extends Constraint
{
    public $message = 'Fill in at least one field';
 
    // la validation s'applique à la classe entière => un objet sera passé à validate dans SearchValidator.php
    public function getTargets(){
        return self::CLASS_CONSTRAINT;
    }
}
