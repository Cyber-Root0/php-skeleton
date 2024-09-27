<?php
namespace CR0\Skeleton\Event;
interface EventDispatcherInterface {
    public function dispatch(object $event): object;
}