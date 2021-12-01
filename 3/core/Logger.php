<?php

namespace Core;

class Logger
{
    private  $filepath ;

    public function __construct(string $filepath)
    {
        $this->filepath = realpath( $filepath);
        
    }

    public function writeLog(string $log): void
    {
        file_put_contents(realpath( $this->filepath.'/app.log'),$log,FILE_APPEND);
    }

    public function getLog(): string
    {
        return file_get_contents(realpath( $this->filepath.'/app.log'));
    }
}