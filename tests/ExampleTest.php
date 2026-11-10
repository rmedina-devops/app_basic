<?php
declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class ExampleTest extends TestCase {
    public function testDemo(): void{
       $this->assertSame("Hello", "Hello");
    }
}
