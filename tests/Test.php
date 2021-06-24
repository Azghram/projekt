<?php

class Testy extends \PHPUnit\Framework\TestCase {
    public function testEmailpos() {

        $email = 'test@gmail.com';
		$emailB = filter_var($email, FILTER_SANITIZE_EMAIL);
        
        $this->assertEquals($email, $emailB);
    }

    public function testEmailneg() {

        $email = 'teśt@gmail.com';
		$emailB = filter_var($email, FILTER_SANITIZE_EMAIL);
        
        $this->assertNotEquals($email, $emailB);
    }

}