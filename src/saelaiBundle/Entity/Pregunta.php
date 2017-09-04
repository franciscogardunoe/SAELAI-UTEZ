<?php

namespace saelaiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pregunta
 *
 * @ORM\Table(name="pregunta", indexes={@ORM\Index(name="fk_pregunta_examen", columns={"idExamen"})})
 * @ORM\Entity
 */
class Pregunta
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idPregunta", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idpregunta;

    /**
     * @var string
     *
     * @ORM\Column(name="reactivo", type="text", length=65535, nullable=false)
     */
    private $reactivo;

    /**
     * @var integer
     *
     * @ORM\Column(name="estado", type="integer", nullable=true)
     */
    private $estado = '1';

    /**
     * @var \Examen
     *
     * @ORM\ManyToOne(targetEntity="Examen")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idExamen", referencedColumnName="idExamen")
     * })
     */
    private $idexamen;



    /**
     * Get idpregunta
     *
     * @return integer
     */
    public function getIdpregunta()
    {
        return $this->idpregunta;
    }

    /**
     * Set reactivo
     *
     * @param string $reactivo
     *
     * @return Pregunta
     */
    public function setReactivo($reactivo)
    {
        $this->reactivo = $reactivo;

        return $this;
    }

    /**
     * Get reactivo
     *
     * @return string
     */
    public function getReactivo()
    {
        return $this->reactivo;
    }

    /**
     * Set estado
     *
     * @param integer $estado
     *
     * @return Pregunta
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return integer
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set idexamen
     *
     * @param \saelaiBundle\Entity\Examen $idexamen
     *
     * @return Pregunta
     */
    public function setIdexamen(\saelaiBundle\Entity\Examen $idexamen = null)
    {
        $this->idexamen = $idexamen;

        return $this;
    }

    /**
     * Get idexamen
     *
     * @return \saelaiBundle\Entity\Examen
     */
    public function getIdexamen()
    {
        return $this->idexamen;
    }
}
