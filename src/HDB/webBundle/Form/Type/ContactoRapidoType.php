<?php

// src/HDB/webBundle/Form/Type/ContactoRapidoType.php

namespace HDB\webBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ContactoRapidoType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) 
    {
        $builder
        ->add('nombreContactoRapido', 'text')
        ->add('emailContactoRapido', 'text')
        ->add('mensajeContactoRapido', 'textarea')
        ->add('cuentanosloContactoRapido', 'submit');
    }

    public function getName() {
        return 'nombreContactoRapido';
    }
    
}
