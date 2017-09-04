<?php

namespace saelaiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Examenasignado
 *
 * @ORM\Table(name="examenasignado", indexes={@ORM\Index(name="fk_examenasignado_grupo", columns={"idGrupo"}), @ORM\Index(name="fk_examenasignado_examen", columns={"idExamen"})})
 * @ORM\Entity
 */
class Examenasignado
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idExamenAsignado", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idexamenasignado;

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
     * @var \Grupo
     *
     * @ORM\ManyToOne(targetEntity="Grupo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idGrupo", referencedColumnName="idGrupo")
     * })
     */
    private $idgrupo;



    /**
     * Get idexamenasignado
     *
     * @return integer
     */
    public function getIdexamenasignado()
    {
        return $this->idexamenasignado;
    }

    /**
     * Set idexamen
     *
     * @param \saelaiBundle\Entity\Examen $idexamen
     *
     * @return Examenasignado
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

    /**
     * Set idgrupo
     *
     * @param \saelaiBundle\Entity\Grupo $idgrupo
     *
     * @return Examenasignado
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
