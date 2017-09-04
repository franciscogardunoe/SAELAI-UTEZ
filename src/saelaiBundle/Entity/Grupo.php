<?php

namespace saelaiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Grupo
 *
 * @ORM\Table(name="grupo", indexes={@ORM\Index(name="fk_grupo_carrera", columns={"idCarrera"})})
 * @ORM\Entity
 */
class Grupo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idGrupo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idgrupo;

    /**
     * @var integer
     *
     * @ORM\Column(name="cuatrimestre", type="integer", nullable=false)
     */
    private $cuatrimestre;

    /**
     * @var string
     *
     * @ORM\Column(name="grupo", type="string", length=1, nullable=false)
     */
    private $grupo;

    /**
     * @var integer
     *
     * @ORM\Column(name="estado", type="integer", nullable=true)
     */
    private $estado = '1';

    /**
     * @var \Carrera
     *
     * @ORM\ManyToOne(targetEntity="Carrera")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idCarrera", referencedColumnName="idCarrera")
     * })
     */
    private $idcarrera;



    /**
     * Get idgrupo
     *
     * @return integer
     */
    public function getIdgrupo()
    {
        return $this->idgrupo;
    }

    /**
     * Set cuatrimestre
     *
     * @param integer $cuatrimestre
     *
     * @return Grupo
     */
    public function setCuatrimestre($cuatrimestre)
    {
        $this->cuatrimestre = $cuatrimestre;

        return $this;
    }

    /**
     * Get cuatrimestre
     *
     * @return integer
     */
    public function getCuatrimestre()
    {
        return $this->cuatrimestre;
    }

    /**
     * Set grupo
     *
     * @param string $grupo
     *
     * @return Grupo
     */
    public function setGrupo($grupo)
    {
        $this->grupo = $grupo;

        return $this;
    }

    /**
     * Get grupo
     *
     * @return string
     */
    public function getGrupo()
    {
        return $this->grupo;
    }

    /**
     * Set estado
     *
     * @param integer $estado
     *
     * @return Grupo
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
     * Set idcarrera
     *
     * @param \saelaiBundle\Entity\Carrera $idcarrera
     *
     * @return Grupo
     */
    public function setIdcarrera(\saelaiBundle\Entity\Carrera $idcarrera = null)
    {
        $this->idcarrera = $idcarrera;

        return $this;
    }

    /**
     * Get idcarrera
     *
     * @return \saelaiBundle\Entity\Carrera
     */
    public function getIdcarrera()
    {
        return $this->idcarrera;
    }
}
