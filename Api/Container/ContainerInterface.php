<?php
namespace CR0\Skeleton\Container;
interface ContainerInterface {
    public function get(string $id): mixed;
    public function has(string $id): bool;
}