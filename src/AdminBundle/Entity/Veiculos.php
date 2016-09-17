<?php

namespace AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="Veiculos")
 */
class Veiculos { /**
 * @ORM\Column(type="integer")
 * @ORM\Id
 * @ORM\GeneratedValue(strategy="AUTO")
 */

    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $marca;

    /**
     * @Assert\NotBlank()
     * @Assert\Length(min=3)
     * minMessage('palavra muito pequena')
     * @ORM\Column(type="string", length=100)
     * 
     */
    private $modelo;

    /**
     * @ORM\Column(type="date")
     */
    private $ano;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $cor;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $categoria;

    /**
     * @ORM\ManyToOne(targetEntity="Cidades")
     *  @ORM\JoinColumn(name="Cidade_id", referencedColumnName="id")
     * 
     */
    private $cidade;

    public function getId() {
        return $this->id;
    }

    public function getMarca() {
        return $this->marca;
    }

    public function getModelo() {
        return $this->modelo;
    }

    public function getAno() {
        return $this->ano;
    }

    public function getCor() {
        return $this->cor;
    }

    public function getCategoria() {
        return $this->categoria;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setMarca($marca) {
        $this->marca = $marca;
    }

    public function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    public function setAno($ano) {
        $this->ano = $ano;
    }

    public function setCor($cor) {
        $this->cor = $cor;
    }

    public function setCategoria($categoria) {
        $this->categoria = $categoria;
    }

    /**
     * Set cidade
     *
     * @param \AdminBundle\Entity\Cidades $cidade
     *
     * @return Veiculos
     */
    public function setCidade(\AdminBundle\Entity\Cidades $cidade = null) {
        $this->cidade = $cidade;

        return $this;
    }

    /**
     * Get cidade
     *
     * @return \AdminBundle\Entity\Cidades
     */
    public function getCidade() {
        return $this->cidade;
    }

}
