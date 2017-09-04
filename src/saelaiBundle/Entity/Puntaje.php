<?php

namespace saelaiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Puntaje
 *
 * @ORM\Table(name="puntaje", uniqueConstraints={@ORM\UniqueConstraint(name="calificacion", columns={"calificacion"})})
 * @ORM\Entity
 */
class Puntaje
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idPuntaje", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idpuntaje;

    /**
     * @var integer
     *
     * @ORM\Column(name="rangoMenor", type="integer", nullable=false)
     */
    private $rangomenor;

    /**
     * @var integer
     *
     * @ORM\Column(name="rangoMayor", type="integer", nullable=false)
     */
    private $rangomayor;

    /**
     * @var string
     *
     * @ORM\Column(name="calificacion", type="string", length=45, nullable=false)
     */
    private $calificacion;



    /**
     * Get idpuntaje
     *
     * @return integer
     */
    public function getIdpuntaje()
    {
        return $this->idpuntaje;
    }

    /**
     * Set rangomenor
     *
     * @param integer $rangomenor
     *
     * @return Puntaje
     */
    public function setRangomenor($rangomenor)
    {
        $this->rangomenor = $rangomenor;

        return $this;
    }

    /**
     * Get rangomenor
     *
     * @return integer
     */
    public function getRangomenor()
    {
        return $this->rangomenor;
    }

    /**
     * Set rangomayor
     *
     * @param integer $rangomayor
     *
     * @return Puntaje
     */
    public function setRangomayor($rangomayor)
    {
        $this->rangomayor = $rangomayor;

        return $this;
    }

    /**
     * Get rangomayor
     *
     * @return integer
     */
    public function getRangomayor()
    {
        return $this->rangomayor;
    }

    /**
     * Set calificacion
     *
     * @param string $calificacion
     *
     * @return Puntaje
     */
    public function setCalificacion($calificacion)
    {
        $this->calificacion = $calificacion;

        return $this;
    }

    /**
     * Get calificacion
     *
     * @return string
     */
    public function getCalificacion()
    {
        return $this->calificacion;
    }
}
