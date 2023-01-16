<?php

declare(strict_types=1);

namespace App\Controller;

use App\Contract\NotDoubleSubmitAuthenticatedController;
use App\Contract\NotTokenAuthenticatedController;
use App\Service\Util\HttpUtilService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController implements
    NotTokenAuthenticatedController,
    NotDoubleSubmitAuthenticatedController
{
    public function __construct(
        protected HttpUtilService $httpUtilService,
    ) {
    }

    #[Route('/', name: 'app', methods: 'GET')]
    public function index(): JsonResponse
    {
        return $this->httpUtilService->jsonResponse('Blueprint');
    }
}
