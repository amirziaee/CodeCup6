<?php

use PHPUnit\Framework\TestCase;

final class QCliSampleTest extends TestCase
{
    public function testSimpleCommand()
    {
        shell_exec('php qcli make:command Custom custom:command');
        $output = shell_exec('php qcli custom:command');
        $filepath = __DIR__ . '/../core/Commands/Custom.php';
        if (file_exists($filepath)) {
            unlink($filepath);
        }
        $this->assertEquals('Command custom:command is ready to implement', $output);
    }
}
