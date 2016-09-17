<?php

namespace AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
 
/**
 * @ORM\Entity
 * @ORM\Table(name="Clientes")
 */
class Cliente {

    /**
     * @ORM\Column(type="string", length =11)
     * @ORM\Id
     */
    private $cpf;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $nome;

    /**
     * @ORM\Column(type="string", length=15)
     */
    private $telefone;

    /**
     * Set cpf
     *
     * @param string $cpf
     *
     * @return Cliente
     */
    public function setCpf($cpf) {
        $this->cpf = $cpf;

        return $this;
    }

    /**
     * Get cpf
     *
     * @return string
     */
    public function getCpf() {
        return $this->cpf;
    }

    /**
     * Set nome
     *
     * @param string $nome
     *
     * @return Cliente
     */
    public function setNome($nome) {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get nome
     *
     * @return string
     */
    public function getNome() {
        return $this->nome;
    }

    /**
     * Set telefone
     *
     * @param string $telefone
     *
     * @return Cliente
     */
    public function setTelefone($telefone) {
        $this->telefone = $telefone;

        return $this;
    }

    /**
     * Get telefone
     *
     * @return string
     */
    public function getTelefone() {
        return $this->telefone;
    }

}
