<?php

namespace App\Controller;


use App\Entity\Campeonato;
use Doctrine\DBAL\DBALException;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CampeonatosController extends Controller
{
    protected $em;

    /**
     * CampeonatosController constructor.
     * @param EntityManagerInterface $entityManager
     */
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->em = $entityManager;
    }

    /**
     * @Route("/campeonatos", name="campeonatos")
     * @Template("campeonatos/index.html.twig")
     */
    public function index()
    {
        $campeonatos = $this->em->getRepository(Campeonato::class)->getAllCampeonatos();

        return [
            'campeonatos' => $campeonatos
        ];
    }

    /**
     * @Route("/campeonatos/classificacao/{id}", name="classificacao")
     * @Template("campeonatos/classificacao.html.twig")
     * @param Campeonato $campeonato
     * @return array|string
     */
    public function classificacao(Campeonato $campeonato)
    {
        try {
            $classificacao = $this->em->getRepository(Campeonato::class)->getClassificacao($campeonato);
        } catch (DBALException $e) {
            return $e->getMessage();
        }

        return [
            'classificacao' => $classificacao,
            'campeonato' => $campeonato
        ];
    }
}
