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

    /**
     * @var Time
     *
     * @ORM\ManyToMany(targetEntity="App\Entity\Time", inversedBy="campeonatos")
     * @ORM\JoinTable(name="campeonato_time")
     */
    private $times;

    /**
     * @var Partida
     *
     * @ORM\OneToMany(targetEntity="App\Entity\Partida", mappedBy="campeonato")
     */
    private $partidas;


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

    /**
     * @return Time
     */
    public function getTimes(): Time
    {
        return $this->times;
    }

    /**
     * @param Time $times
     * @return Campeonato
     */
    public function setTimes(Time $times): Campeonato
    {
        $this->times = $times;
        return $this;
    }

    /**
     * @return Partida
     */
    public function getPartidas(): Partida
    {
        return $this->partidas;
    }

    /**
     * @param Partida $partidas
     * @return Campeonato
     */
    public function setPartidas(Partida $partidas): Campeonato
    {
        $this->partidas = $partidas;
        return $this;
    }



}
