<?php

declare(strict_types=1);

namespace K911\Swoole\Tests\Fixtures\Symfony\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HMRTestController extends Controller
{
    private const BASH_REPLACE_PATTERN = 'Wrong response!';

    /**
     * @Route(
     *     methods={"GET"},
     *     path="/test/hmr"
     * )
     *
     * @return Response
     */
    public function index(): Response
    {
        return new Response(self::BASH_REPLACE_PATTERN, 200, ['Content-Type' => 'text/plain']);
    }
}