<?php

namespace App\Controller;

use App\Entity\Ecart;
use App\Form\EcartType;
use App\Repository\EcartRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EcartController extends AbstractController
{

    /**
     * @Route("/", name="ecart_new", methods={"GET","POST"})
     */
    public function index(Request $request, EcartRepository $ecartRepository): Response
    {
        $douzaine1 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];
        $douzaine2 = [13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24];
        $douzaine3 = [25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36];

        $colonne1 = [1, 4, 7, 10, 13, 16, 19, 22, 25, 28, 31, 34];
        $colonne2 = [2, 5, 8, 11, 14, 17, 20, 23, 26, 29, 32, 35];
        $colonne3 = [3, 6, 9, 12, 15, 18, 21, 24, 27, 30, 33, 36];

        $transversale1 = [1, 2, 3, 10, 11, 12, 19, 20, 21, 28, 29, 30];
        $transversale2 = [4, 5, 6, 13, 14, 15, 22, 23, 24, 31, 32, 33];
        $transversale3 = [7, 8, 9, 16, 17, 18, 25, 26, 27, 34, 35, 36];

        $sixain1 = [1, 2, 3, 4, 5, 6];
        $sixain2 = [7, 8, 9, 10, 11, 12];
        $sixain3 = [13, 14, 15, 16, 17, 18];
        $sixain4 = [19, 20, 21, 22, 23, 24];

        $sixain5 = [25, 26, 27, 28, 29, 30];
        $sixain6 = [31, 32, 33, 34, 35, 36];

        $final1 = [1, 2, 3, 11, 12, 13, 21, 22, 23, 31, 32, 33];
        $final2 = [4, 5, 6, 14, 15, 16, 24, 25, 26, 34, 35, 36];
        $final3 = [7, 8, 9, 10, 17, 18, 19, 20, 27, 28, 29, 30];

        $blackColor = [2,4,6,8,10,11,13,15,17,20,22,24,26,28,29,31,33,35] ;
        $redColor = [1,3,5,7,9,12,14,16,18,19,21,23,25,27,30,32,34,36] ;

        $even = [ 2,4,6,8,10,12,14,16,18,20,22,24,26,28,30,32,34,36];
        $odd = [1,3,5,7,9,11,13,15,17,19,21,23,25,27,29,31,33,35];

        $half1 = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18];
        $half2 = [19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36];

        $carre1245 = [1,2,4,5];
        $carre2356 = [2,3,5,6];
        $carre781011 = [7,8,10,11];
        $carre891112 = [8,9,11,12];
        $carre13141617 = [13,14,16,17];
        $carre14151718 = [14,15,17,18];
        $carre19202223 = [19,20,22,23];
        $carre20212324 = [20,21,23,24];
        $carre25262829 = [25,26,28,29];
        $carre26272930 = [26,27,29,30];
        $carre31323435 = [31,32,34,35];
        $carre32333536 = [32,33,35,36];
        

        $ecart = new Ecart();
        $form = $this->createForm(EcartType::class, $ecart);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $repo = $ecartRepository->findOneBy([], array('id' => 'DESC'));

            // COLOR
            if (in_array($ecart->getTirage(), $redColor)){
                $ecart->setColor("danger");
            } else if (in_array($ecart->getTirage(), $blackColor)){
                $ecart->setColor("dark");
            } else if ($ecart->getTirage()==0){
                $ecart->setColor("success");
            } else {$ecart->setColor("white"); }

            // RED BLACK 
            if (!in_array($ecart->getTirage(), $redColor)) {
                $ecart->setRed(($repo->getRed()) + 1);
            }
            if (!in_array($ecart->getTirage(), $blackColor)) {
                $ecart->setBlack(($repo->getBlack()) + 1);
            }

            // EVEN ODD 
            if (!in_array($ecart->getTirage(), $even)) {
                $ecart->setEven(($repo->getEven()) + 1);
            }
            if (!in_array($ecart->getTirage(), $odd)) {
                $ecart->setOdd(($repo->getOdd()) + 1);
            }

            // 1-18 19-36 
            if (!in_array($ecart->getTirage(), $half1)) {
                $ecart->setHalf1(($repo->getHalf1()) + 1);
            }
            if (!in_array($ecart->getTirage(), $half2)) {
                $ecart->setHalf2(($repo->getHalf2()) + 1);
            }

            // CARRES
            if (!in_array($ecart->getTirage(), $carre1245)) {
                $ecart->setCarre1245(($repo->getCarre1245()) + 1);
            }
            if (!in_array($ecart->getTirage(), $carre2356)) {
                $ecart->setCarre2356(($repo->getCarre2356()) + 1);
            }
            if (!in_array($ecart->getTirage(), $carre781011)) {
                $ecart->setCarre781011(($repo->getCarre781011()) + 1);
            }
            if (!in_array($ecart->getTirage(), $carre891112)) {
                $ecart->setCarre891112(($repo->getCarre891112()) + 1);
            }
            if (!in_array($ecart->getTirage(), $carre13141617)) {
                $ecart->setCarre13141617(($repo->getCarre13141617()) + 1);
            }
            if (!in_array($ecart->getTirage(), $carre14151718)) {
                $ecart->setCarre14151718(($repo->getCarre14151718()) + 1);
            }
            if (!in_array($ecart->getTirage(), $carre19202223)) {
                $ecart->setCarre19202223(($repo->getCarre19202223()) + 1);
            }
            if (!in_array($ecart->getTirage(), $carre20212324)) {
                $ecart->setCarre20212324(($repo->getCarre20212324()) + 1);
            }
            if (!in_array($ecart->getTirage(), $carre25262829)) {
                $ecart->setCarre25262829(($repo->getCarre25262829()) + 1);
            }
            if (!in_array($ecart->getTirage(), $carre26272930)) {
                $ecart->setCarre26272930(($repo->getCarre26272930()) + 1);
            }
            if (!in_array($ecart->getTirage(), $carre31323435)) {
                $ecart->setCarre31323435(($repo->getCarre31323435()) + 1);
            }
            if (!in_array($ecart->getTirage(), $carre32333536)) {
                $ecart->setCarre32333536(($repo->getCarre32333536()) + 1);
            }

            // DOUZAINE
            if (!in_array($ecart->getTirage(), $douzaine1)) {
                $ecart->setDouzaine1(($repo->getDouzaine1()) + 1);
            }
            if (!in_array($ecart->getTirage(), $douzaine2)) {
                $ecart->setDouzaine2(($repo->getDouzaine2()) + 1);
            }
            if (!in_array($ecart->getTirage(), $douzaine3)) {
                $ecart->setDouzaine3(($repo->getDouzaine3()) + 1);
            }
            // COLONNE
            if (!in_array($ecart->getTirage(), $colonne1)) {
                $ecart->setColonne1(($repo->getColonne1()) + 1);
            }
            if (!in_array($ecart->getTirage(), $colonne2)) {
                $ecart->setColonne2(($repo->getColonne2()) + 1);
            }
            if (!in_array($ecart->getTirage(), $colonne3)) {
                $ecart->setColonne3(($repo->getColonne3()) + 1);
            }
            // TRANSVERSALE
            if (!in_array($ecart->getTirage(), $transversale1)) {
                $ecart->setTransversale1(($repo->getTransversale1()) + 1);
            }
            if (!in_array($ecart->getTirage(), $transversale2)) {
                $ecart->setTransversale2(($repo->getTransversale2()) + 1);
            }
            if (!in_array($ecart->getTirage(), $transversale3)) {
                $ecart->setTransversale3(($repo->getTransversale3()) + 1);
            }
            // SIXTAIN 1-2-3
            if (!in_array($ecart->getTirage(), $sixain1)) {
                $ecart->setSixain1(($repo->getSixain1()) + 1);
            }
            if (!in_array($ecart->getTirage(), $sixain2)) {
                $ecart->setSixain2(($repo->getSixain2()) + 1);
            }
            if (!in_array($ecart->getTirage(), $sixain3)) {
                $ecart->setSixain3(($repo->getSixain3()) + 1);
            }
            // SIXTAIN 4-5-6
            if (!in_array($ecart->getTirage(), $sixain4)) {
                $ecart->setSixain4(($repo->getSixain4()) + 1);
            }
            if (!in_array($ecart->getTirage(), $sixain5)) {
                $ecart->setSixain5(($repo->getSixain5()) + 1);
            }
            if (!in_array($ecart->getTirage(), $sixain6)) {
                $ecart->setSixain6(($repo->getSixain6()) + 1);
            }
            // FINAL
            if (!in_array($ecart->getTirage(), $final1)) {
                $ecart->setFinal1(($repo->getFinal1()) + 1);
            }
            if (!in_array($ecart->getTirage(), $final2)) {
                $ecart->setFinal2(($repo->getFinal2()) + 1);
            }
            if (!in_array($ecart->getTirage(), $final3)) {
                $ecart->setFinal3(($repo->getFinal3()) + 1);
            }
            // RENITIALISATION
            if ($ecart->getTirage()<0) {
                $ecart->setDouzaine1(0);
                $ecart->setDouzaine2(0);
                $ecart->setDouzaine3(0);
                $ecart->setColonne1(0);
                $ecart->setColonne2(0);
                $ecart->setColonne3(0);
                $ecart->setTransversale1(0);
                $ecart->setTransversale2(0);
                $ecart->setTransversale3(0);
                $ecart->setSixain1(0);
                $ecart->setSixain2(0);
                $ecart->setSixain3(0);
                $ecart->setSixain4(0);
                $ecart->setSixain5(0);
                $ecart->setSixain6(0);       
                $ecart->setFinal1(0);
                $ecart->setFinal2(0);
                $ecart->setFinal3(0);
                $ecart->setRed(0);
                $ecart->setBlack(0);
                $ecart->setEven(0);
                $ecart->setOdd(0);
                $ecart->setHalf1(0);
                $ecart->setHalf2(0);
                $ecart->setCarre1245(0);
                $ecart->setCarre13141617(0);
                $ecart->setCarre14151718(0);
                $ecart->setCarre19202223(0);
                $ecart->setCarre20212324(0);
                $ecart->setCarre2356(0);
                $ecart->setCarre25262829(0);
                $ecart->setCarre26272930(0);
                $ecart->setCarre31323435(0);
                $ecart->setCarre32333536(0);
                $ecart->setCarre781011(0);
                $ecart->setCarre891112(0);
            }
            $entityManager->persist($ecart);
            $entityManager->flush();

            return $this->redirectToRoute('ecart_new', ['ecarts' => $ecartRepository->findOneBy([], array('id' => 'DESC')),], Response::HTTP_SEE_OTHER);
        }

        $response = new Response(null, $form->isSubmitted() ? 422 : 200);

        return $this->render('ecart/new.html.twig', [
            'ecarts' => $ecartRepository->findOneBy([], array('id' => 'DESC')),
            'lastecart' => $ecartRepository->findOneBy([], array('id' => 'DESC')),
            'ecart' => $ecart,
            'form' => $form->createView(),
        ], $response);
    }

    /**
     * @Route("/{id}", name="ecart_show", methods={"GET"})
     */
    public function show(Ecart $ecart): Response
    {
        return $this->render('ecart/show.html.twig', [
            'ecart' => $ecart,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="ecart_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Ecart $ecart): Response
    {
        $form = $this->createForm(EcartType::class, $ecart);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('ecart_new');
        }

        return $this->render('ecart/edit.html.twig', [
            'ecart' => $ecart,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="ecart_delete", methods={"POST"})
     */
    public function delete(Request $request, Ecart $ecart): Response
    {
        if ($this->isCsrfTokenValid('delete' . $ecart->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($ecart);
            $entityManager->flush();
        }

        return $this->redirectToRoute('ecart_index');
    }

    /**
     * @Route("/reinitialize", name="ecart_reinitialize", methods={"POST"})
     */
    public function reinitialize(Ecart $ecart, EcartRepository $ecartRepository)
    {
        $ecart = new Ecart();
        $ecart->setTirage(-1);
        $ecart->setDouzaine1(0);
        $ecart->setDouzaine2(0);
        $ecart->setDouzaine3(0);
        $ecart->setColonne1(0);
        $ecart->setColonne2(0);
        $ecart->setColonne3(0);
        $ecart->setTransversale1(0);
        $ecart->setTransversale2(0);
        $ecart->setTransversale3(0);
        $ecart->setSixain1(0);
        $ecart->setSixain2(0);
        $ecart->setSixain3(0);
        $ecart->setFinal1(0);
        $ecart->setFinal2(0);
        $ecart->setFinal3(0);
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($ecart);
        $entityManager->flush();

        return $this->redirectToRoute('ecart_new', ['ecarts' => $ecartRepository->findOneBy([], array('id' => 'DESC')),], Response::HTTP_SEE_OTHER);
    }
}
