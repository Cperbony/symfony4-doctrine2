<?php

namespace App\Controller;

use App\Entity\Partida;
use App\Entity\Time;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\VarDumper\VarDumper;

class PartidasController extends Controller
{
    protected $em;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->em = $entityManager;
    }

    /**
     * @Route("/partidas", name="partidas")
     * @Template("partidas/index.html.twig")
     * @return array
     */
    public function index()
    {
        $partidas = $this->em->getRepository(Partida::class)
            ->getPartidasPorData();
//        VarDumper::dump($partidas);
//        exit;
        return [
            'partidas' => $partidas
        ];
    }

    /**
     * @param Time $time
     * @Route("/partidas/listar-por-time/{id}", name="listar-partidas")
     * @Template("partidas/listar-por-time.html.twig")
     * @return array
     */
    public function partidasPorTimes(Time $time)
    {
        $partidas = $this->em->getRepository(Partida::class)
            ->getPartidasPorTime($time);

        return [
            'partidas' => $partidas,
            'time' => $time
        ];
    }
}
