<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MovimientoRepository")
 */
class Movimiento
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $hora;

    /**
     * @ORM\Column(type="string", length=45)
     */
    private $concepto;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2)
     */
    private $monto;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $tipo;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $anulado;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $observaciones;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Empleado;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Caja", inversedBy="Movimientos")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Caja;

    public function __construct()
    {
        $this->anulado = FALSE;
        $this->hora = new \DateTime();
    }

    public function getValido()
    {
        if (($this->anulado)==TRUE)
        {
            return FALSE;
        }
        return TRUE;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getHora(): ?\DateTimeInterface
    {
        return $this->hora;
    }

    public function setHora(\DateTimeInterface $hora): self
    {
        $this->hora = $hora;

        return $this;
    }

    public function getConcepto(): ?string
    {
        return $this->concepto;
    }

    public function setConcepto(string $concepto): self
    {
        $this->concepto = $concepto;

        return $this;
    }

    public function getMonto()
    {
        return $this->monto;
    }

    public function setMonto($monto): self
    {
        $this->monto = $monto;

        return $this;
    }

    public function getTipo(): ?string
    {
        return $this->tipo;
    }

    public function setTipo(string $tipo): self
    {
        $this->tipo = $tipo;

        return $this;
    }

    public function getAnulado(): ?bool
    {
        return $this->anulado;
    }

    public function setAnulado(bool $anulado): self
    {
        $this->anulado = $anulado;

        return $this;
    }

    public function getObservaciones(): ?string
    {
        return $this->observaciones;
    }

    public function setObservaciones(?string $observaciones): self
    {
        $this->observaciones = $observaciones;

        return $this;
    }

    public function getEmpleado(): ?User
    {
        return $this->Empleado;
    }

    public function setEmpleado(?User $User): self
    {
        $this->Empleado = $User;

        return $this;
    }

    public function getCaja(): ?Caja
    {
        return $this->Caja;
    }

    public function setCaja(?Caja $Caja): self
    {
        $this->Caja = $Caja;

        return $this;
    }    
    
    public function __toString()
    {
        return $this->getTipo().' de '.(string)$this->getMonto().' - '.$this->getConcepto(). (string) $this->getHora()->format('H:i:s');
    }
}
