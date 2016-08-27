<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="product")
 */
class Veiculos
{     /**
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
     * @ORM\Column(type="string", length=100)
     */
   private $modelo;
     /**
     * @ORM\Column(type="date", )
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

   
   
}
