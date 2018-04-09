<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PartidaRepository")
 */
class Partida
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(type="text")
     */
    private $descricao;

    /**
     * @var integer
     * @ORM\Column(type="integer")
     */
    private $placar_visitante;

    /**
     * @var integer
     * @ORM\Column(type="integer")
     */
    private $placar_casa;

    /**
     * @var \DateTime
     * @ORM\Column(type="datetime")
     */
    private $data_partida;

    /**
     * @var Campeonato
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Campeonato"))
     */
    private $campeonato;

    /**
     * @var Time
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Time", inversedBy="partidas_casa")
     */
    private $time_casa;

    /**
     * @var Time
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Time", inversedBy="partidas_visitante")
     */
    private $time_visitante;

    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getDescricao(): string
    {
        return $this->descricao;
    }

    /**
     * @param string $descricao
     * @return Partida
     */
    public function setDescricao(string $descricao): Partida
    {
        $this->descricao = $descricao;
        return $this;
    }

    /**
     * @return int
     */
    public function getPlacarVisitante(): int
    {
        return $this->placar_visitante;
    }

    /**
     * @param int $placar_visitante
     * @return Partida
     */
    public function setPlacarVisitante(int $placar_visitante): Partida
    {
        $this->placar_visitante = $placar_visitante;
        return $this;
    }

    /**
     * @return int
     */
    public function getPlacarCasa(): int
    {
        return $this->placar_casa;
    }

    /**
     * @param int $placar_casa
     * @return Partida
     */
    public function setPlacarCasa(int $placar_casa): Partida
    {
        $this->placar_casa = $placar_casa;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDataPartida(): \DateTime
    {
        return $this->data_partida;
    }

    /**
     * @param \DateTime $data_partida
     * @return Partida
     */
    public function setDataPartida(\DateTime $data_partida): Partida
    {
        $this->data_partida = $data_partida;
        return $this;
    }

    /**
     * @return Campeonato
     */
    public function getCampeonato(): Campeonato
    {
        return $this->campeonato;
    }

    /**
     * @param Campeonato $campeonato
     * @return Partida
     */
    public function setCampeonato(Campeonato $campeonato): Partida
    {
        $this->campeonato = $campeonato;
        return $this;
    }

    /**
     * @return Time
     */
    public function getTimeCasa(): Time
    {
        return $this->time_casa;
    }

    /**
     * @param Time $time_casa
     * @return Partida
     */
    public function setTimeCasa(Time $time_casa): Partida
    {
        $this->time_casa = $time_casa;
        return $this;
    }

    /**
     * @return Time
     */
    public function getTimeVisitante(): Time
    {
        return $this->time_visitante;
    }

    /**
     * @param Time $time_visitante
     * @return Partida
     */
    public function setTimeVisitante(Time $time_visitante): Partida
    {
        $this->time_visitante = $time_visitante;
        return $this;
    }





}
