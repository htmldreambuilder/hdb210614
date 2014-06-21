<?php

namespace HDB\webBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use HDB\webBundle\Entity\ContactoConCodigo;
use Symfony\Component\HttpFoundation\Request;
use HDB\webBundle\Form\Type\ContactoConCodigoType;

class CazaYCampoController extends Controller {

    public function cazaYCampoAction(Request $request) {
        // Creamos el objeto de nuestro formulario
        $contactoConCodigo = new ContactoConCodigo();

        $form = $this->createForm(new ContactoConCodigoType(), $contactoConCodigo);

        $form->handleRequest($request);

        if ($form->isValid()) {

            $nombre = $contactoConCodigo->getNombreContactoConCodigo();
            $correo = $contactoConCodigo->getEmailContactoConCodigo();
            $mensaje = $contactoConCodigo->getMensajeContactoConCodigo();
            $codigo = $contactoConCodigo -> getMensajeContactoConCodigo();

            $message = \Swift_Message::newInstance()     // we create a new instance of the Swift_Message class
                    ->setSubject('Prueba de correo')     // we configure the title
                    ->setFrom('info@htmldreambuilder.com')     // we configure the sender
                    ->setTo('raul.duque.montanez@gmail.com')     // we configure the recipient
                    ->setBody($this->renderView('HDBwebBundle:Forms:ContactoRapido.html.twig', array(
                        'nombre' => $nombre,
                        'correo' => $correo,
                        'mensaje' => $mensaje,
                    )))
            ;
            $this->get('mailer')->send($message);     // then we send the message.

            return $this->render('HDBwebBundle:Default:enviado.html.twig', array(
                        'nombre' => $nombre,
                        'correo' => $correo,
                        'mensaje' => $mensaje
            ));
        }

        return $this->render('HDBwebBundle:Default:cazaycampo.html.twig', array(
                    'form' => $form->createView(),
                    'enviado' => 'ko',
                    'nombre' => 'Dinos tu nombre',
                    'correo' => 'Un correo para contestarte'
        ));
    }

}


