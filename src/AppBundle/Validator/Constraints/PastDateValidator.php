<?php

namespace AppBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class PastDateValidator extends ConstraintValidator
{
    public function validate($value, Constraint $constraint)
    {
        $today = new \DateTime();
        if ($value > $today) {
            $this->context->buildViolation($constraint->message)
                ->setParameter('%string%', $value->format('d-m-Y'))
                ->addViolation();
        }
    }
}