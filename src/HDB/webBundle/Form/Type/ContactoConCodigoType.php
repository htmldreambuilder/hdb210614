<?php

// src/HDB/webBundle/Form/Type/ContactoRapidoType.php

namespace HDB\webBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ContactoConCodigoType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) 
    {
        $builder
        ->add('nombreContactoConCodigo', 'text')
        ->add('emailContactoConCodigo', 'text')
        ->add('mensajeContactoConCodigo', 'textarea')
        ->add('codigoContactoConCodigo', 'text')
        ->add('cuentanosloContactoConCodigo', 'submit');
    }

    public function getName() {
        return 'nombreContactoConCodigo';
    }
    
}
