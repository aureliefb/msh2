<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\NewsletterRepository")
 */
class Newsletter
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @ORM\Column(type="string", length=128)
     */
    private $email;
    ///getters et setters
    public function getEmail(){
        return $this->email;
    }
    public function setEmail($email){
        return $this->email = $email;
    }
}