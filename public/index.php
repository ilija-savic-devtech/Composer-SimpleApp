<?php
require_once '..\bootstrap\bootstrap.php';

$loader = new Twig_Loader_Filesystem('..\views');
$twig = new Twig_Environment($loader);
$klein = new \Klein\Klein();

//Handler for errors
$klein->onHttpError(function ($code) use ($twig) {
    if ($code >= 400 && $code < 500) {
        echo $twig->render('error.twig', array(
            'code' => $code
        ));
    }
});

//Homepage mapping
$klein->respond('/', function () use ($twig) {
    echo $twig->render('home.twig');
});

//Student mapping
$klein->respond('/student', function () use ($twig) {
    $student = new \classes\Student();
    $student->setName("Petar")->setSurname("Petrovic")->setAverage("8.3")->setIndexNo(456123);
    echo $twig->render('student.twig', array(
        'student' => $student));
});

//Professor mapping
$klein->respond('/professor', function () use ($twig) {
    $professor = new \classes\Professor();
    $professor->setName("Marko")->setSurname("Markovic")->setNumberOfScientificWork(4)->setSubject("Data Science");
    echo $twig->render('professor.twig', array(
        'professor' => $professor));
});

//Student with id mapping
$klein->respond('/student/[i:id]', function ($request) use ($twig) {
    echo $twig->render('studentId.twig', array(
        'id' => $request->id
    ));
});

$klein->dispatch();
