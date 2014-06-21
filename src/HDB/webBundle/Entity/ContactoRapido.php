<?php

namespace HDB\webBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ContactoRapido
 */
class ContactoRapido
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nombreContactoRapido;

    /**
     * @var string
     */
    private $emailContactoRapido;

    /**
     * @var string
     */
    private $mensajeContactoRapido;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombreContactoRapido
     *
     * @param string $nombreContactoRapido
     * @return ContactoRapido
     */
    public function setNombreContactoRapido($nombreContactoRapido)
    {
        $this->nombreContactoRapido = $nombreContactoRapido;

        return $this;
    }

    /**
     * Get nombreContactoRapido
     *
     * @return string 
     */
    public function getNombreContactoRapido()
    {
        return $this->nombreContactoRapido;
    }

    /**
     * Set emailContactoRapido
     *
     * @param string $emailContactoRapido
     * @return ContactoRapido
     */
    public function setEmailContactoRapido($emailContactoRapido)
    {
        $this->emailContactoRapido = $emailContactoRapido;

        return $this;
    }

    /**
     * Get emailContactoRapido
     *
     * @return string 
     */
    public function getEmailContactoRapido()
    {
        return $this->emailContactoRapido;
    }

    /**
     * Set mensajeContactoRapido
     *
     * @param string $mensajeContactoRapido
     * @return ContactoRapido
     */
    public function setMensajeContactoRapido($mensajeContactoRapido)
    {
        $this->mensajeContactoRapido = $mensajeContactoRapido;

        return $this;
    }

    /**
     * Get mensajeContactoRapido
     *
     * @return string 
     */
    public function getMensajeContactoRapido()
    {
        return $this->mensajeContactoRapido;
    }
}
