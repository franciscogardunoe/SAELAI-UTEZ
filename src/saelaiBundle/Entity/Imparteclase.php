<?php

namespace saelaiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Imparteclase
 *
 * @ORM\Table(name="imparteclase", indexes={@ORM\Index(name="fk_imparteclase_grupo", columns={"idGrupo"}), @ORM\Index(name="fk_imparteclase_carrera", columns={"idCarrera"})})
 * @ORM\Entity
 */
class Imparteclase
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idImparteClase", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idimparteclase;

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
     * @var \Grupo
     *
     * @ORM\ManyToOne(targetEntity="Grupo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idGrupo", referencedColumnName="idGrupo")
     * })
     */
    private $idgrupo;



    /**
     * Get idimparteclase
     *
     * @return integer
     */
    public function getIdimparteclase()
    {
        return $this->idimparteclase;
    }

    /**
     * Set idcarrera
     *
     * @param \saelaiBundle\Entity\Carrera $idcarrera
     *
     * @return Imparteclase
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

    /**
     * Set idgrupo
     *
     * @param \saelaiBundle\Entity\Grupo $idgrupo
     *
     * @return Imparteclase
     */
    public function setIdgrupo(\saelaiBundle\Entity\Grupo $idgrupo = null)
    {
        $this->idgrupo = $idgrupo;

        return $this;
    }

    /**
     * Get idgrupo
     *
     * @return \saelaiBundle\Entity\Grupo
     */
    public function getIdgrupo()
    {
        return $this->idgrupo;
    }
}
