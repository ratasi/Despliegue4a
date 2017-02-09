<?php

namespace AUCBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * equipos
 *
 * @ORM\Table(name="equipos")
 * @ORM\Entity(repositoryClass="AUCBundle\Repository\equiposRepository")
 */
class equipos
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=80)
     */
    private $nombre;

    /**
     * @ORM\OneToMany(targetEntity="jugadores", mappedBy="equipo", fetch="EAGER")
     */
        private $jugador;


    /**
     * @ORM\OneToOne(targetEntity="entrenadores", mappedBy="equipo", fetch="EAGER")
     */

    private $entrenador;



    /**
     * Get id
     *
     * @return int
     */

    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return equipos
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
     * Constructor
     */
    public function __construct()
    {
        $this->jugador = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add jugador
     *
     * @param \AUCBundle\Entity\jugadores $jugador
     *
     * @return equipos
     */
    public function addJugador(\AUCBundle\Entity\jugadores $jugador)
    {
        $this->jugador[] = $jugador;

        return $this;
    }

    /**
     * Remove jugador
     *
     * @param \AUCBundle\Entity\jugadores $jugador
     */
    public function removeJugador(\AUCBundle\Entity\jugadores $jugador)
    {
        $this->jugador->removeElement($jugador);
    }

    /**
     * Get jugador
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getJugador()
    {
        return $this->jugador;
    }

    /**
     * Set entrenador
     *
     * @param \AUCBundle\Entity\entrenadores $entrenador
     *
     * @return equipos
     */
    public function setEntrenador(\AUCBundle\Entity\entrenadores $entrenador = null)
    {
        $this->entrenador = $entrenador;

        return $this;
    }

    /**
     * Get entrenador
     *
     * @return \AUCBundle\Entity\entrenadores
     */
    public function getEntrenador()
    {
        return $this->entrenador;
    }
}
