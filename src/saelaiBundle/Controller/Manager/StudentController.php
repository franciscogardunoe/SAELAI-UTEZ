<?php

namespace saelaiBundle\Controller\Manager;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class StudentController extends Controller {

    public function StudentAction(Request $request) {
        $session = $request->getSession();

        $alumno = new \saelaiBundle\Entity\Alumno();
        $form = $this->createForm(new \saelaiBundle\Form\AlumnoType(), $alumno);

        $em = $this->getDoctrine()->getManager();
        $StudentList = $em->getRepository("saelaiBundle:Alumno")->findAll();
        $GroupList = $em->getRepository("saelaiBundle:Grupo")->findAll();
        $DivisionList = $em->getRepository("saelaiBundle:Division")->findAll();

        $form->handleRequest($request);
        if ($form->isValid()) {
            $alumno->setEstado(1);
            $em = $this->getDoctrine()->getManager();
            $em->persist($alumno);
            $em->flush();
            return $this->redirect($this->generateUrl("saelai_manager_student"));
        }
        return $this->render('saelaiBundle:Manager\Student:Student.html.twig', array(
                    'StudentForm' => $form->createView()
                    , 'StudentList' => $StudentList, 'GroupList' => $GroupList, 'DivisionList' => $DivisionList));
    }

}
