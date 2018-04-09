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

    /**
     * @var Organizacao
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Organizacao", inversedBy="filhos")
     *
     * @ORM\JoinColumn(name="parent_id", referencedColumnName="id")
     */
    private $pai;

    /**
     * @var Organizacao
     *
     * @ORM\OneToMany(targetEntity="App\Entity\Organizacao", mappedBy="pai")
     */
    private $filhos;


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

    /**
     * @return Organizacao
     */
    public function getPai(): Organizacao
    {
        return $this->pai;
    }

    /**
     * @param Organizacao $pai
     * @return Organizacao
     */
    public function setPai(Organizacao $pai): Organizacao
    {
        $this->pai = $pai;
        return $this;
    }

    /**
     * @return Organizacao
     */
    public function getFilhos(): Organizacao
    {
        return $this->filhos;
    }

    /**
     * @param Organizacao $filhos
     * @return Organizacao
     */
    public function setFilhos(Organizacao $filhos): Organizacao
    {
        $this->filhos = $filhos;
        return $this;
    }

    

}
