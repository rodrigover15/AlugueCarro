<?php
namespace AdminBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 *@ORM\Entity
 * @ORM\Table(name="Cidades")
 */
class Cidades
{
       /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
     /**
     * @ORM\Column(type="string", length=100)
     */
    private $nome;
     /**
     * @ORM\Column(type="string", length=100)
     */
    private $estado;
    
    public function __toString() {
       return $this->nome ;
    }
    
    
    public function getId() {
        return $this->id;
    }

   public function getNome() {
        return $this->nome;
    }

    public function getEstado() {
        return $this->estado;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setEstado($estado) {
        $this->estado = $estado;
    }


}
