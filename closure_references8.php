<?php

declare(strict_types=1);

class InputOutput
{
    const RETRY_COUNT = 10;

    protected $manager;

    public function get()
    {
        for ($i = 0; $i < self::RETRY_COUNT; $i++) {
            $data = $this->manager->get();
            if ($data !== null) {
                return $data;
            }
        }

        throw new \Exception();
    }

    public function add()
    {
        for ($i = 0; $i < self::RETRY_COUNT; $i++) {
            $this->manager->add();
            if ($this->manager->getErrorCode() === 0) {
                return;
            }
        }

        throw new \Exception();
    }
}
