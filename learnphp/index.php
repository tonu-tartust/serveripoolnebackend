<?php

class Task
{
  public function job(Logger $logger)
  {
    for ($i = 0; $i < 10; $i++) {
      $logger->log("job$i was done");
    }
  }
}

class ConsoleLogger implements Logger
{
  public function log($message)
  {
    echo "$message\n";
  }
}


class NothingLogger implements Logger
{
  public function log($message) {}
}

interface Logger
{
  public function log($message);
}

class FileLogger implements Logger
{
  public function log($message)
  {
    $file = fopen('log.txt', 'a');
    fwrite($file, "message\n");
    fclose($file);
  }
}

$logger = new ConsoleLogger();
$task = new Task();
$task->job($logger);
