<?php

namespace App\Controller;

use App\Form\RandomType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="main")
     */
    public function index(Request $request)
    {
        $form = $this->createForm(RandomType::class);
        $form->handleRequest($request);
        $result = -1;

        if($form->isSubmitted() && $form->isValid()){
            $number = (int)$form->getData()['random'];

            // In case user manually changed from input console
            if($number < 0){
                return $this->render('main/index.html.twig', [
                    'form' => $form->createView(),
                    'result' => $result,
                    'error' => 'Please enter positive integer only'
                ]);
            }

            if ($request->get('first') == 'first') {
                $result = $this->get_sum($number,'ODD');
            }
            if ($request->get('second') == 'second') {
                $result = $this->get_sum($number,'EVEN');
            }
            if ($request->get('third') == 'third') {
                $result = $this->get_sum($number,'BOTH');
            }
        }
        return $this->render('main/index.html.twig', [
            'form' => $form->createView(),
            'result' => $result
        ]);
    }

    private function get_sum($number,$type){
        $total = 0;
        for($i = 0;$i < strlen((string) $number); $i++){
            if($type == 'ODD' && $i%2 == 0){
                $total += (int) substr($number,$i,1);
            }
            if($type == 'EVEN' && $i%2 != 0){
                $total += (int) substr($number,$i,1);
            }
            if($type == 'BOTH'){
                $total += (int) substr($number,$i,1);
            }
        }
        return $total;
    }
}
