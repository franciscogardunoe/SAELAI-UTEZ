<?php

namespace saelaiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Alumno
 *
 * @ORM\Table(name="alumno", uniqueConstraints={@ORM\UniqueConstraint(name="matricula", columns={"matricula"})}, indexes={@ORM\Index(name="fk_alumno_grupo", columns={"idGrupo"})})
 * @ORM\Entity
 */
class Alumno
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idAlumno", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idalumno;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=45, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="apellidoP", type="string", length=45, nullable=false)
     */
    private $apellidop;

    /**
     * @var string
     *
     * @ORM\Column(name="apellidoM", type="string", length=45, nullable=true)
     */
    private $apellidom;

    /**
     * @var string
     *
     * @ORM\Column(name="matricula", type="string", length=10, nullable=false)
     */
    private $matricula;

    /**
     * @var string
     *
     * @ORM\Column(name="contrasena", type="string", length=16, nullable=false)
     */
    private $contrasena;

    /**
     * @var integer
     *
     * @ORM\Column(name="estado", type="integer", nullable=true)
     */
    private $estado = '1';

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
     * Get idalumno
     *
     * @return integer
     */
    public function getIdalumno()
    {
        return $this->idalumno;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Alumno
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
     * Set apellidop
     *
     * @param string $apellidop
     *
     * @return Alumno
     */
    public function setApellidop($apellidop)
    {
        $this->apellidop = $apellidop;

        return $this;
    }

    /**
     * Get apellidop
     *
     * @return string
     */
    public function getApellidop()
    {
        return $this->apellidop;
    }

    /**
     * Set apellidom
     *
     * @param string $apellidom
     *
     * @return Alumno
     */
    public function setApellidom($apellidom)
    {
        $this->apellidom = $apellidom;

        return $this;
    }

    /**
     * Get apellidom
     *
     * @return string
     */
    public function getApellidom()
    {
        return $this->apellidom;
    }

    /**
     * Set matricula
     *
     * @param string $matricula
     *
     * @return Alumno
     */
    public function setMatricula($matricula)
    {
        $this->matricula = $matricula;

        return $this;
    }

    /**
     * Get matricula
     *
     * @return string
     */
    public function getMatricula()
    {
        return $this->matricula;
    }

    /**
     * Set contrasena
     *
     * @param string $contrasena
     *
     * @return Alumno
     */
    public function setContrasena($contrasena)
    {
        $this->contrasena = $contrasena;

        return $this;
    }

    /**
     * Get contrasena
     *
     * @return string
     */
    public function getContrasena()
    {
        return $this->contrasena;
    }

    /**
     * Set estado
     *
     * @param integer $estado
     *
     * @return Alumno
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
     * Set idgrupo
     *
     * @param \saelaiBundle\Entity\Grupo $idgrupo
     *
     * @return Alumno
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
