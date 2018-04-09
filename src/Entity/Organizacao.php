<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\OrganizaçãoRepository")
 */
class Organizacao
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    private $nome;

    /**
     * @var Campeonato
     * @ORM\OneToMany(targetEntity="App\Entity\Campeonato", mappedBy="organizacao")
     */
    private $campeonatos;


    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * @param string $nome
     * @return Organizacao
     */
    public function setNome(string $nome): Organizacao
    {
        $this->nome = $nome;
        return $this;
    }

    /**
     * @return Campeonato
     */
    public function getCampeonatos(): Campeonato
    {
        return $this->campeonatos;
    }

    /**
     * @param Campeonato $campeonatos
     * @return Organizacao
     */
    public function setCampeonatos(Campeonato $campeonatos): Organizacao
    {
        $this->campeonatos = $campeonatos;
        return $this;
    }

}
