<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FichaMedicaRepository")
 */
class FichaMedica
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     */
    private $fecha;

    /**
     * @ORM\Column(type="boolean")
     */
    private $enfermedadesCardiacas;

    /**
     * @ORM\Column(type="boolean")
     */
    private $lesionesCronicas;

    /**
     * @ORM\Column(type="boolean")
     */
    private $rehabilitacion;

    /**
     * @ORM\Column(type="boolean")
     */
    private $perderPeso;

    /**
     * @ORM\Column(type="boolean")
     */
    private $diabetes;

    /**
     * @ORM\Column(type="boolean")
     */
    private $bajoTratamiento;

    /**
     * @ORM\Column(type="boolean")
     */
    private $cirugia;

    /**
     * @ORM\Column(type="boolean")
     */
    private $dieta;

    /**
     * @ORM\Column(type="boolean")
     */
    private $conoceImc;

    /**
     * @ORM\Column(type="boolean")
     */
    private $problemasArticulares;

    /**
     * @ORM\Column(type="boolean")
     */
    private $problemasEspalda;

    /**
     * @ORM\Column(type="boolean")
     */
    private $dolores;

    /**
     * @ORM\Column(type="boolean")
     */
    private $sobrepeso;

    /**
     * @ORM\Column(type="boolean")
     */
    private $hipertenso;

    /**
     * @ORM\Column(type="boolean")
     */
    private $medicamentos;

    /**
     * @ORM\Column(type="boolean")
     */
    private $embarazada;

    /**
     * @ORM\Column(type="boolean")
     */
    private $hernias;

    /**
     * @ORM\Column(type="boolean")
     */
    private $hidratado;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $peso;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $altura;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $talla;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $observaciones;

    /**
     * @ORM\Column(type="string", length=30, nullable=true)
     */
    private $tiempoEmbarazo;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $listaMedicamentos;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $listaEnfermedades;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Alumno", inversedBy="fichasMedicas")
     * @ORM\JoinColumn(nullable=false)
     */
    private $alumno;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Telefono", mappedBy="fichaMedica")
     */
    private $telefonos;

    public function __construct()
    {
        $this->telefonos = new ArrayCollection();
    }

    public function getId()
    {
        return $this->id;
    }

    public function getFecha(): ?\DateTimeInterface
    {
        return $this->fecha;
    }

    public function setFecha(\DateTimeInterface $fecha): self
    {
        $this->fecha = $fecha;

        return $this;
    }

    public function getEnfermedadesCardiacas(): ?int
    {
        return $this->enfermedadesCardiacas;
    }

    public function setEnfermedadesCardiacas(int $enfermedadesCardiacas): self
    {
        $this->enfermedadesCardiacas = $enfermedadesCardiacas;

        return $this;
    }

    public function getLesionesCronicas(): ?bool
    {
        return $this->lesionesCronicas;
    }

    public function setLesionesCronicas(bool $lesionesCronicas): self
    {
        $this->lesionesCronicas = $lesionesCronicas;

        return $this;
    }

    public function getRehabilitacion(): ?bool
    {
        return $this->rehabilitacion;
    }

    public function setRehabilitacion(bool $rehabilitacion): self
    {
        $this->rehabilitacion = $rehabilitacion;

        return $this;
    }

    public function getPerderPeso(): ?bool
    {
        return $this->perderPeso;
    }

    public function setPerderPeso(bool $perderPeso): self
    {
        $this->perderPeso = $perderPeso;

        return $this;
    }

    public function getDiabetes(): ?bool
    {
        return $this->diabetes;
    }

    public function setDiabetes(bool $diabetes): self
    {
        $this->diabetes = $diabetes;

        return $this;
    }

    public function getBajoTratamiento(): ?bool
    {
        return $this->bajoTratamiento;
    }

    public function setBajoTratamiento(bool $bajoTratamiento): self
    {
        $this->bajoTratamiento = $bajoTratamiento;

        return $this;
    }

    public function getCirugia(): ?bool
    {
        return $this->cirugia;
    }

    public function setCirugia(bool $cirugia): self
    {
        $this->cirugia = $cirugia;

        return $this;
    }

    public function getDieta(): ?bool
    {
        return $this->dieta;
    }

    public function setDieta(bool $dieta): self
    {
        $this->dieta = $dieta;

        return $this;
    }

    public function getConoceImc(): ?bool
    {
        return $this->conoceImc;
    }

    public function setConoceImc(bool $conoceImc): self
    {
        $this->conoceImc = $conoceImc;

        return $this;
    }

    public function getProblemasArticulares(): ?bool
    {
        return $this->problemasArticulares;
    }

    public function setProblemasArticulares(bool $problemasArticulares): self
    {
        $this->problemasArticulares = $problemasArticulares;

        return $this;
    }

    public function getProblemasEspalda(): ?bool
    {
        return $this->problemasEspalda;
    }

    public function setProblemasEspalda(bool $problemasEspalda): self
    {
        $this->problemasEspalda = $problemasEspalda;

        return $this;
    }

    public function getDolores(): ?bool
    {
        return $this->dolores;
    }

    public function setDolores(bool $dolores): self
    {
        $this->dolores = $dolores;

        return $this;
    }

    public function getSobrepeso(): ?bool
    {
        return $this->sobrepeso;
    }

    public function setSobrepeso(bool $sobrepeso): self
    {
        $this->sobrepeso = $sobrepeso;

        return $this;
    }

    public function getHipertenso(): ?bool
    {
        return $this->hipertenso;
    }

    public function setHipertenso(bool $hipertenso): self
    {
        $this->hipertenso = $hipertenso;

        return $this;
    }

    public function getMedicamentos(): ?bool
    {
        return $this->medicamentos;
    }

    public function setMedicamentos(bool $medicamentos): self
    {
        $this->medicamentos = $medicamentos;

        return $this;
    }

    public function getEmbarazada(): ?bool
    {
        return $this->embarazada;
    }

    public function setEmbarazada(bool $embarazada): self
    {
        $this->embarazada = $embarazada;

        return $this;
    }

    public function getHernias(): ?bool
    {
        return $this->hernias;
    }

    public function setHernias(bool $hernias): self
    {
        $this->hernias = $hernias;

        return $this;
    }

    public function getHidratado(): ?bool
    {
        return $this->hidratado;
    }

    public function setHidratado(bool $hidratado): self
    {
        $this->hidratado = $hidratado;

        return $this;
    }

    public function getPeso(): ?float
    {
        return $this->peso;
    }

    public function setPeso(?float $peso): self
    {
        $this->peso = $peso;

        return $this;
    }

    public function getAltura(): ?float
    {
        return $this->altura;
    }

    public function setAltura(?float $altura): self
    {
        $this->altura = $altura;

        return $this;
    }

    public function getTalla(): ?string
    {
        return $this->talla;
    }

    public function setTalla(?string $talla): self
    {
        $this->talla = $talla;

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

    public function getTiempoEmbarazo(): ?string
    {
        return $this->tiempoEmbarazo;
    }

    public function setTiempoEmbarazo(string $tiempoEmbarazo): self
    {
        $this->tiempoEmbarazo = $tiempoEmbarazo;

        return $this;
    }

    public function getListaMedicamentos(): ?string
    {
        return $this->listaMedicamentos;
    }

    public function setListaMedicamentos(?string $listaMedicamentos): self
    {
        $this->listaMedicamentos = $listaMedicamentos;

        return $this;
    }

    public function getListaEnfermedades(): ?string
    {
        return $this->listaEnfermedades;
    }

    public function setListaEnfermedades(?string $listaEnfermedades): self
    {
        $this->listaEnfermedades = $listaEnfermedades;

        return $this;
    }

    public function getAlumno(): ?Alumno
    {
        return $this->alumno;
    }

    public function setAlumno(?Alumno $alumno): self
    {
        $this->alumno = $alumno;

        return $this;
    }

    /**
     * @return Collection|Telefono[]
     */
    public function getTelefonos(): Collection
    {
        return $this->telefonos;
    }

    public function addTelefono(Telefono $telefono): self
    {
        if (!$this->telefonos->contains($telefono)) {
            $this->telefonos[] = $telefono;
            $telefono->setFichaMedica($this);
        }

        return $this;
    }

    public function removeTelefono(Telefono $telefono): self
    {
        if ($this->telefonos->contains($telefono)) {
            $this->telefonos->removeElement($telefono);
            // set the owning side to null (unless already changed)
            if ($telefono->getFichaMedica() === $this) {
                $telefono->setFichaMedica(null);
            }
        }

        return $this;
    }
}
