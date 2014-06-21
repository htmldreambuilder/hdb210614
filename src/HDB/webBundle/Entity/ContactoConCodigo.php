<?php

namespace HDB\webBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ContactoConCodigo
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="HDB\webBundle\Entity\ContactoConCodigoRepository")
 */
class ContactoConCodigo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombreContactoConCodigo", type="string", length=255)
     */
    private $nombreContactoConCodigo;

    /**
     * @var string
     *
     * @ORM\Column(name="emailContactoConCodigo", type="string", length=255)
     */
    private $emailContactoConCodigo;

    /**
     * @var string
     *
     * @ORM\Column(name="mensajeContactoConCodigo", type="text")
     */
    private $mensajeContactoConCodigo;

    /**
     * @var string
     *
     * @ORM\Column(name="codigoContactoConCodigo", type="string", length=9)
     */
    private $codigoContactoConCodigo;


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
     * Set nombreContactoConCodigo
     *
     * @param string $nombreContactoConCodigo
     * @return ContactoConCodigo
     */
    public function setNombreContactoConCodigo($nombreContactoConCodigo)
    {
        $this->nombreContactoConCodigo = $nombreContactoConCodigo;

        return $this;
    }

    /**
     * Get nombreContactoConCodigo
     *
     * @return string 
     */
    public function getNombreContactoConCodigo()
    {
        return $this->nombreContactoConCodigo;
    }

    /**
     * Set emailContactoConCodigo
     *
     * @param string $emailContactoConCodigo
     * @return ContactoConCodigo
     */
    public function setEmailContactoConCodigo($emailContactoConCodigo)
    {
        $this->emailContactoConCodigo = $emailContactoConCodigo;

        return $this;
    }

    /**
     * Get emailContactoConCodigo
     *
     * @return string 
     */
    public function getEmailContactoConCodigo()
    {
        return $this->emailContactoConCodigo;
    }

    /**
     * Set mensajeContactoConCodigo
     *
     * @param string $mensajeContactoConCodigo
     * @return ContactoConCodigo
     */
    public function setMensajeContactoConCodigo($mensajeContactoConCodigo)
    {
        $this->mensajeContactoConCodigo = $mensajeContactoConCodigo;

        return $this;
    }

    /**
     * Get mensajeContactoConCodigo
     *
     * @return string 
     */
    public function getMensajeContactoConCodigo()
    {
        return $this->mensajeContactoConCodigo;
    }

    /**
     * Set codigoContactoConCodigo
     *
     * @param string $codigoContactoConCodigo
     * @return ContactoConCodigo
     */
    public function setCodigoContactoConCodigo($codigoContactoConCodigo)
    {
        $this->codigoContactoConCodigo = $codigoContactoConCodigo;

        return $this;
    }

    /**
     * Get codigoContactoConCodigo
     *
     * @return string 
     */
    public function getCodigoContactoConCodigo()
    {
        return $this->codigoContactoConCodigo;
    }
}
