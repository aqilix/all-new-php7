<?php
/**
 * PHP 7 Anonymous Claasess
 * https://www.tutorialspoint.com/php7/php7_anonymous_classes.htm
 */
declare(strict_types = 1);

interface Logger
{
    public function log(string $msg);
}

class Application
{
    private $logger;

    public function getLogger(): Logger
    {
        return $this->logger;
    }

    public function setLogger(Logger $logger)
    {
        $this->logger = $logger;
    }
}

$app = new Application;
$app->setLogger(new class implements Logger {
    public function log(string $msg)
    {
        print($msg);
    }
});

$app->getLogger()->log("My first Log Message");
