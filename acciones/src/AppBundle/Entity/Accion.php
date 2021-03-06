<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Accion
 *
 * @ORM\Table(name="accion")
 * @ORM\Entity
 */
class Accion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="slug", type="string", length=255, nullable=false)
     */
    private $slug;

    /**
     * @var string
     *
     * @ORM\Column(name="texto", type="string", length=255, nullable=false)
     */
    private $texto;

    /**
     * @var boolean
     *
     * @ORM\Column(name="activo", type="boolean", nullable=false)
     */
    private $activo = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="or", type="boolean", nullable=false)
     */
    private $or = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="siglas", type="string", length=255, nullable=false)
     */
    private $siglas;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ver_presupuestar", type="boolean", nullable=false)
     */
    private $verPresupuestar = '0';



    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set slug
     *
     * @param string $slug
     *
     * @return Accion
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set texto
     *
     * @param string $texto
     *
     * @return Accion
     */
    public function setTexto($texto)
    {
        $this->texto = $texto;

        return $this;
    }

    /**
     * Get texto
     *
     * @return string
     */
    public function getTexto()
    {
        return $this->texto;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     *
     * @return Accion
     */
    public function setActivo($activo)
    {
        $this->activo = $activo;

        return $this;
    }

    /**
     * Get activo
     *
     * @return boolean
     */
    public function getActivo()
    {
        return $this->activo;
    }

    /**
     * Set or
     *
     * @param boolean $or
     *
     * @return Accion
     */
    public function setOr($or)
    {
        $this->or = $or;

        return $this;
    }

    /**
     * Get or
     *
     * @return boolean
     */
    public function getOr()
    {
        return $this->or;
    }

    /**
     * Set siglas
     *
     * @param string $siglas
     *
     * @return Accion
     */
    public function setSiglas($siglas)
    {
        $this->siglas = $siglas;

        return $this;
    }

    /**
     * Get siglas
     *
     * @return string
     */
    public function getSiglas()
    {
        return $this->siglas;
    }

    /**
     * Set verPresupuestar
     *
     * @param boolean $verPresupuestar
     *
     * @return Accion
     */
    public function setVerPresupuestar($verPresupuestar)
    {
        $this->verPresupuestar = $verPresupuestar;

        return $this;
    }

    /**
     * Get verPresupuestar
     *
     * @return boolean
     */
    public function getVerPresupuestar()
    {
        return $this->verPresupuestar;
    }
}
