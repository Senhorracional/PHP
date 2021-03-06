<?php

namespace Alura\Cursos\Controller;

use Alura\Cursos\Infra\EntityManagerCreator;

class Persistencia implements InterfaceControladorRequisicao

{
    public function __construct()
    {
        $this->entityManager = (new EntityManagerCreator())
        ->getEntityManager();
    }

    public function processaRequisicao(): void
{
    $curso = new Curso();
    $curso->setDescricao($_POST['descricao']);
    $this->entityManager->persist($curso);
    $this->entityManager->flush();
}
}