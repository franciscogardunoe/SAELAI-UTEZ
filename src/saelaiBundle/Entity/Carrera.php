<?php

namespace saelaiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Carrera
 *
 * @ORM\Table(name="carrera", indexes={@ORM\Index(name="fk_carrera_division", columns={"idDivision"})})
 * @ORM\Entity
 */
class Carrera
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idCarrera", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcarrera;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="text", length=65535, nullable=false)
     */
    private $nombre;

    /**
     * @var integer
     *
     * @ORM\Column(name="estado", type="integer", nullable=true)
     */
    private $estado = '1';

    /**
     * @var \Division
     *
     * @ORM\ManyToOne(targetEntity="Division")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idDivision", referencedColumnName="idDivision")
     * })
     */
    private $iddivision;



    /**
     * Get idcarrera
     *
     * @return integer
     */
    public function getIdcarrera()
    {
        return $this->idcarrera;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Carrera
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set estado
     *
     * @param integer $estado
     *
     * @return Carrera
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
     * Set iddivision
     *
     * @param \saelaiBundle\Entity\Division $iddivision
     *
     * @return Carrera
     */
    public function setIddivision(\saelaiBundle\Entity\Division $iddivision = null)
    {
        $this->iddivision = $iddivision;

        return $this;
    }

    /**
     * Get iddivision
     *
     * @return \saelaiBundle\Entity\Division
     */
    public function getIddivision()
    {
        return $this->iddivision;
    }
}
