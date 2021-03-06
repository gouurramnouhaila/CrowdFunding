<?php


namespace App\Domain\Project\UseCase\SearchProject;


use App\Domain\Project\Adapters\Gateway\Doctrine\DoctrineProjectRepository;
use App\Domain\Project\Entities\Project;

class SearchProject
{
    public DoctrineProjectRepository $projectRepository;

    public function __construct(DoctrineProjectRepository $projectRepository)
    {
        $this->projectRepository = $projectRepository;
    }

    /**
     * @param SearchProjectRequest $request
     * @param SearchProjectPresenterInterface $presenter
     */
    public function execute(SearchProjectRequest $request, SearchProjectPresenterInterface $presenter) {
        $projects = $this->projectRepository->search($request->keyword);

        $response = new SearchProjectResponse($projects);

        $presenter->present($response);
    }
}