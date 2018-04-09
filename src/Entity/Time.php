<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TimeRepository")
 */
class Time
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
     * @var string
     * @ORM\Column(type="string", name="brasao")
     */
    private $escudo;

    /**
     * @var boolean
     * @ORM\Column(type="boolean")
     */
    private $ativo = 1;

    /**
     * @var Campeonato
     *
     * @ORM\ManyToMany(targetEntity="App\Entity\Campeonato", mappedBy="times")
     */
    private $campeonatos;

    /**
     * @var Partida
     *
     * @ORM\OneToMany(targetEntity="App\Entity\Partida", mappedBy="time_casa")
     */
    private $partidas_casa;

    /**
     * @var Partida
     *
     * @ORM\OneToMany(targetEntity="App\Entity\Partida", mappedBy="time_visitante")
     */
    private $partidas_visitante;


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
     * @return Time
     */
    public function setNome(string $nome): Time
    {
        $this->nome = $nome;
        return $this;
    }

    /**
     * @return string
     */
    public function getEscudo(): string
    {
        return $this->escudo;
    }

    /**
     * @param string $escudo
     * @return Time
     */
    public function setEscudo(string $escudo): Time
    {
        $this->escudo = $escudo;
        return $this;
    }

    /**
     * @return bool
     */
    public function isAtivo(): bool
    {
        return $this->ativo;
    }

    /**
     * @param bool $ativo
     * @return Time
     */
    public function setAtivo(bool $ativo): Time
    {
        $this->ativo = $ativo;
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
     * @return Time
     */
    public function setCampeonatos(Campeonato $campeonatos): Time
    {
        $this->campeonatos = $campeonatos;
        return $this;
    }

    /**
     * @return Partida
     */
    public function getPartidasCasa(): Partida
    {
        return $this->partidas_casa;
    }

    /**
     * @param Partida $partidas_casa
     * @return Time
     */
    public function setPartidasCasa(Partida $partidas_casa): Time
    {
        $this->partidas_casa = $partidas_casa;
        return $this;
    }

    /**
     * @return Partida
     */
    public function getPartidasVisitante(): Partida
    {
        return $this->partidas_visitante;
    }

    /**
     * @param Partida $partidas_visitante
     * @return Time
     */
    public function setPartidasVisitante(Partida $partidas_visitante): Time
    {
        $this->partidas_visitante = $partidas_visitante;
        return $this;
    }






}
