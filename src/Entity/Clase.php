<?php

// DONE hacer algo con el precio, poner cuota básica o por default

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ClaseRepository")
 */
class Clase
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     * @Assert\GreaterThanOrEqual(value = 1, message = "El cupo debe ser mayor o igual que 1")
     */
    private $cupo;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Sala", inversedBy="Clases")
     * @ORM\JoinColumn(nullable=false)
     * @Assert\NotNull()
     */
    private $Sala;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Profesor", inversedBy="Clases")
     * @ORM\JoinColumn(nullable=false)
     * @Assert\NotNull()
     */
    private $Profesor;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Actividad")
     * @ORM\JoinColumn(nullable=false)
     * @Assert\NotNull()
     */
    private $Actividad;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2)
     */
    private $cuotaBase;

    /**
     * @ORM\Column(type="boolean")
     */
    private $lunes;

    /**
     * @ORM\Column(type="boolean")
     */
    private $martes;

    /**
     * @ORM\Column(type="boolean")
     */
    private $miercoles;

    /**
     * @ORM\Column(type="boolean")
     */
    private $jueves;

    /**
     * @ORM\Column(type="boolean")
     */
    private $viernes;

    /**
     * @ORM\Column(type="boolean")
     */
    private $sabado;

    /**
     * @ORM\Column(type="time")
     */
    private $horario;

    /**
     * @ORM\Column(type="integer")
     */
    private $duracion;
	
    public function __construct()
    {
        $this->cupo = 50;
        $this->cuotaBase = 500;
        $this->horario = new \DateTime('14:00:00');
        $this->duracion = 120;
        $this->lunes = FALSE;
        $this->martes = FALSE;
        $this->miercoles = FALSE;
        $this->jueves = FALSE;
        $this->viernes = FALSE;
        $this->sabado = FALSE;
    }

    private function getDias(): ?string
    {
        $answer = '';
        if ($this->lunes)
        {
            $answer = $answer.'Lunes ';
        }
        if ($this->martes)
        {
            $answer = $answer.'Martes ';
        }
        if ($this->miercoles)
        {
            $answer = $answer.'Miércoles ';
        }
        if ($this->jueves)
        {
            $answer = $answer.'Jueves ';
        }
        if ($this->viernes)
        {
            $answer = $answer.'Viernes ';
        }
        if ($this->sabado)
        {
            $answer = $answer.'Sábado ';
        }
        return $answer;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getCupo(): ?int
    {
        return $this->cupo;
    }

    public function setCupo(int $cupo): self
    {
        $this->cupo = $cupo;

        return $this;
    }

    public function getSala(): ?Sala
    {
        return $this->Sala;
    }

    public function setSala(?Sala $Sala): self
    {
        $this->Sala = $Sala;

        return $this;
    }

    public function getProfesor(): ?Profesor
    {
        return $this->Profesor;
    }

    public function setProfesor(?Profesor $Profesor): self
    {
        $this->Profesor = $Profesor;

        return $this;
    }

    public function getActividad(): ?Actividad
    {
        return $this->Actividad;
    }

    public function setActividad(?Actividad $Actividad): self
    {
        $this->Actividad = $Actividad;

        return $this;
    }

    public function getCuotaBase()
    {
        return $this->cuotaBase;
    }

    public function setCuotaBase($cuotaBase): self
    {
        $this->cuotaBase = $cuotaBase;

        return $this;
    }

    public function getLunes(): ?bool
    {
        return $this->lunes;
    }

    public function setLunes(bool $lunes): self
    {
        $this->lunes = $lunes;

        return $this;
    }

    public function getMartes(): ?bool
    {
        return $this->martes;
    }

    public function setMartes(bool $martes): self
    {
        $this->martes = $martes;

        return $this;
    }

    public function getMiercoles(): ?bool
    {
        return $this->miercoles;
    }

    public function setMiercoles(bool $miercoles): self
    {
        $this->miercoles = $miercoles;

        return $this;
    }

    public function getJueves(): ?bool
    {
        return $this->jueves;
    }

    public function setJueves(bool $jueves): self
    {
        $this->jueves = $jueves;

        return $this;
    }

    public function getViernes(): ?bool
    {
        return $this->viernes;
    }

    public function setViernes(bool $viernes): self
    {
        $this->viernes = $viernes;

        return $this;
    }

    public function getSabado(): ?bool
    {
        return $this->sabado;
    }

    public function setSabado(bool $sabado): self
    {
        $this->sabado = $sabado;

        return $this;
    }

    public function getHorario(): ?\DateTimeInterface
    {
        return $this->horario;
    }

    public function setHorario(\DateTimeInterface $horario): self
    {
        $this->horario = $horario;

        return $this;
    }

    public function getDuracion(): ?int
    {
        return $this->duracion;
    }

    public function setDuracion(int $duracion): self
    {
        $this->duracion = $duracion;

        return $this;
    }
	public function __toString()
    {
        return 'Prof. '.$this->getProfesor()->getApellido().' - '.$this->getActividad().' - '.$this->getDias().' - '.(string) $this->getHorario()->format('H:i');
    }
}
