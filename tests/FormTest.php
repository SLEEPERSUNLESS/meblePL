<?php
use PHPUnit\Framework\TestCase;

class FormTest extends TestCase
{
    public function testLoginButton()
    {
        $url = 'http://localhost/meblePL/login.html'; 
        $html = file_get_contents($url);
        
        $this->assertStringContainsString('Zaloguj', $html);
    }
}

