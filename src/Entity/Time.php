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


}
