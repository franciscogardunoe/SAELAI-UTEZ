<?php

namespace saelaiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tomaexamen
 *
 * @ORM\Table(name="tomaexamen", indexes={@ORM\Index(name="fk_tomaexamen_alumno", columns={"idAlumno"}), @ORM\Index(name="fk_tomaexamen_examen", columns={"idExamen"})})
 * @ORM\Entity
 */
class Tomaexamen
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idTomaExamen", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtomaexamen;

    /**
     * @var integer
     *
     * @ORM\Column(name="numeroAciertos", type="integer", nullable=true)
     */
    private $numeroaciertos = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="numeroErrores", type="integer", nullable=true)
     */
    private $numeroerrores = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="numeroPreguntaContestada", type="integer", nullable=true)
     */
    private $numeropreguntacontestada = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaAplicacion", type="datetime", nullable=true)
     */
    private $fechaaplicacion = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaModificacion", type="datetime", nullable=true)
     */
    private $fechamodificacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="estado", type="integer", nullable=true)
     */
    private $estado = '1';

    /**
     * @var \Alumno
     *
     * @ORM\ManyToOne(targetEntity="Alumno")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idAlumno", referencedColumnName="idAlumno")
     * })
     */
    private $idalumno;

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
     * Get idtomaexamen
     *
     * @return integer
     */
    public function getIdtomaexamen()
    {
        return $this->idtomaexamen;
    }

    /**
     * Set numeroaciertos
     *
     * @param integer $numeroaciertos
     *
     * @return Tomaexamen
     */
    public function setNumeroaciertos($numeroaciertos)
    {
        $this->numeroaciertos = $numeroaciertos;

        return $this;
    }

    /**
     * Get numeroaciertos
     *
     * @return integer
     */
    public function getNumeroaciertos()
    {
        return $this->numeroaciertos;
    }

    /**
     * Set numeroerrores
     *
     * @param integer $numeroerrores
     *
     * @return Tomaexamen
     */
    public function setNumeroerrores($numeroerrores)
    {
        $this->numeroerrores = $numeroerrores;

        return $this;
    }

    /**
     * Get numeroerrores
     *
     * @return integer
     */
    public function getNumeroerrores()
    {
        return $this->numeroerrores;
    }

    /**
     * Set numeropreguntacontestada
     *
     * @param integer $numeropreguntacontestada
     *
     * @return Tomaexamen
     */
    public function setNumeropreguntacontestada($numeropreguntacontestada)
    {
        $this->numeropreguntacontestada = $numeropreguntacontestada;

        return $this;
    }

    /**
     * Get numeropreguntacontestada
     *
     * @return integer
     */
    public function getNumeropreguntacontestada()
    {
        return $this->numeropreguntacontestada;
    }

    /**
     * Set fechaaplicacion
     *
     * @param \DateTime $fechaaplicacion
     *
     * @return Tomaexamen
     */
    public function setFechaaplicacion($fechaaplicacion)
    {
        $this->fechaaplicacion = $fechaaplicacion;

        return $this;
    }

    /**
     * Get fechaaplicacion
     *
     * @return \DateTime
     */
    public function getFechaaplicacion()
    {
        return $this->fechaaplicacion;
    }

    /**
     * Set fechamodificacion
     *
     * @param \DateTime $fechamodificacion
     *
     * @return Tomaexamen
     */
    public function setFechamodificacion($fechamodificacion)
    {
        $this->fechamodificacion = $fechamodificacion;

        return $this;
    }

    /**
     * Get fechamodificacion
     *
     * @return \DateTime
     */
    public function getFechamodificacion()
    {
        return $this->fechamodificacion;
    }

    /**
     * Set estado
     *
     * @param integer $estado
     *
     * @return Tomaexamen
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
     * Set idalumno
     *
     * @param \saelaiBundle\Entity\Alumno $idalumno
     *
     * @return Tomaexamen
     */
    public function setIdalumno(\saelaiBundle\Entity\Alumno $idalumno = null)
    {
        $this->idalumno = $idalumno;

        return $this;
    }

    /**
     * Get idalumno
     *
     * @return \saelaiBundle\Entity\Alumno
     */
    public function getIdalumno()
    {
        return $this->idalumno;
    }

    /**
     * Set idexamen
     *
     * @param \saelaiBundle\Entity\Examen $idexamen
     *
     * @return Tomaexamen
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
