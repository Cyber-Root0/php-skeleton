<?php
namespace CR0\Skeleton\Http;
use CR0\Skeleton\Http\MessageInterface;
interface ResponseInterface extends MessageInterface {
    public function getStatusCode(): int;
    public function withStatus(int $code, string $reasonPhrase = ''): self;
}