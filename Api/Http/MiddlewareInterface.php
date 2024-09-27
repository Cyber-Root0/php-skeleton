<?php
namespace CR0\Skeleton\Http;
use CR0\Skeleton\Http\ResponseInterface;
interface MiddlewareInterface {
    public function process(ServerRequestInterface $request, RequestHandlerInterface $handler): ResponseInterface;
}