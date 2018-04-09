<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CampeonatoRepository")
 */
class Campeonato
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    private $nome;

    /**
     * @var Organizacao
     * @ORM\ManyToOne(targetEntity="App\Entity\Organizacao", inversedBy="campeonatos")
     *
     */
    private $organizacao;



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
     * @return Campeonato
     */
    public function setNome(string $nome): Campeonato
    {
        $this->nome = $nome;
        return $this;
    }

    /**
     * @return Organizacao
     */
    public function getOrganizacao(): Organizacao
    {
        return $this->organizacao;
    }

    /**
     * @param Organizacao $organizacao
     * @return Campeonato
     */
    public function setOrganizacao(Organizacao $organizacao): Campeonato
    {
        $this->organizacao = $organizacao;
        return $this;
    }


}
