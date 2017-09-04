<?php

namespace saelaiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Respuesta
 *
 * @ORM\Table(name="respuesta", indexes={@ORM\Index(name="pk_respuesta_pregunta", columns={"idPregunta"})})
 * @ORM\Entity
 */
class Respuesta
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idRespuesta", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idrespuesta;

    /**
     * @var string
     *
     * @ORM\Column(name="respuesta", type="text", length=65535, nullable=false)
     */
    private $respuesta;

    /**
     * @var integer
     *
     * @ORM\Column(name="correcta", type="integer", nullable=true)
     */
    private $correcta = '0';

    /**
     * @var \Pregunta
     *
     * @ORM\ManyToOne(targetEntity="Pregunta")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idPregunta", referencedColumnName="idPregunta")
     * })
     */
    private $idpregunta;



    /**
     * Get idrespuesta
     *
     * @return integer
     */
    public function getIdrespuesta()
    {
        return $this->idrespuesta;
    }

    /**
     * Set respuesta
     *
     * @param string $respuesta
     *
     * @return Respuesta
     */
    public function setRespuesta($respuesta)
    {
        $this->respuesta = $respuesta;

        return $this;
    }

    /**
     * Get respuesta
     *
     * @return string
     */
    public function getRespuesta()
    {
        return $this->respuesta;
    }

    /**
     * Set correcta
     *
     * @param integer $correcta
     *
     * @return Respuesta
     */
    public function setCorrecta($correcta)
    {
        $this->correcta = $correcta;

        return $this;
    }

    /**
     * Get correcta
     *
     * @return integer
     */
    public function getCorrecta()
    {
        return $this->correcta;
    }

    /**
     * Set idpregunta
     *
     * @param \saelaiBundle\Entity\Pregunta $idpregunta
     *
     * @return Respuesta
     */
    public function setIdpregunta(\saelaiBundle\Entity\Pregunta $idpregunta = null)
    {
        $this->idpregunta = $idpregunta;

        return $this;
    }

    /**
     * Get idpregunta
     *
     * @return \saelaiBundle\Entity\Pregunta
     */
    public function getIdpregunta()
    {
        return $this->idpregunta;
    }
}
