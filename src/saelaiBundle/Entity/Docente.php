<?php

namespace saelaiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Docente
 *
 * @ORM\Table(name="docente", uniqueConstraints={@ORM\UniqueConstraint(name="correoElectronico", columns={"correoElectronico"})}, indexes={@ORM\Index(name="fk_docente_roldocente", columns={"idRolDocente"})})
 * @ORM\Entity
 */
class Docente
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idDocente", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iddocente;

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
     * @ORM\Column(name="correoElectronico", type="string", length=100, nullable=false)
     */
    private $correoelectronico;

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
     * @var \Rol
     *
     * @ORM\ManyToOne(targetEntity="Rol")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idRolDocente", referencedColumnName="idRolDocente")
     * })
     */
    private $idroldocente;



    /**
     * Get iddocente
     *
     * @return integer
     */
    public function getIddocente()
    {
        return $this->iddocente;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Docente
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
     * @return Docente
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
     * @return Docente
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
     * Set correoelectronico
     *
     * @param string $correoelectronico
     *
     * @return Docente
     */
    public function setCorreoelectronico($correoelectronico)
    {
        $this->correoelectronico = $correoelectronico;

        return $this;
    }

    /**
     * Get correoelectronico
     *
     * @return string
     */
    public function getCorreoelectronico()
    {
        return $this->correoelectronico;
    }

    /**
     * Set contrasena
     *
     * @param string $contrasena
     *
     * @return Docente
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
     * @return Docente
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
     * Set idroldocente
     *
     * @param \saelaiBundle\Entity\Rol $idroldocente
     *
     * @return Docente
     */
    public function setIdroldocente(\saelaiBundle\Entity\Rol $idroldocente = null)
    {
        $this->idroldocente = $idroldocente;

        return $this;
    }

    /**
     * Get idroldocente
     *
     * @return \saelaiBundle\Entity\Rol
     */
    public function getIdroldocente()
    {
        return $this->idroldocente;
    }
}
