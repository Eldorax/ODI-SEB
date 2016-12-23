<?php

namespace AppBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;
use AppBundle\Form\Data\SearchPersonne;

class SearchValidator extends ConstraintValidator
{
    public function validate($search, Constraint $constraint)
    {
        if (empty($search->getNompersonne()) && 
            empty($search->getPrenompersonne()) &&
            empty($search->getEmail())) {
            
            $this->context->buildViolation($constraint->message)
                ->addViolation();
        }
    }
}