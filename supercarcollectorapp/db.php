<?php

require_once '../db.php';
use PHPUnit\Framework\TestCase;

class db extends TestCase
{
   public function testDisplaySupercarData_success()
    {
        $input = [
            [
                'make' => 'Aston Martin',
                'model' => 'One-77',
                'bhp' => '750',
                'top_speed_mph' => '220'
            ]
        ];

        $expected = '<div class="section"><div class="supercarSection">'
            . '<p>' . 'Make: ' . '<span>' . 'Aston Martin' . '</span>' . '</p>'
            . '<p>' . 'Model: ' . '<span>' . 'One-77' . '</span>' . '</p>'
            . '<p>' . 'BHP: ' . '<span>' . '750' . '</span>' . '</p>'
            . '<p>' . 'Top Speed (mph): ' . '<span>' . '220' . '</span>' . '</p>'
            . '</div></div>';

        $result = displaySupercarData($input);
        $this->assertEquals($expected, $result);
    }

    public function testDisplaySupercarEmpty_failure()
    {
        $input = [];
        $result = displaySupercarData($input);
        $expected = '<div class="section"></div>';
        $this->assertEquals($expected, $result);
    }

    public function testDisplaySupercar_malform()
    {
        $input = '';
        $this->expectException(TypeError::class);
        displaySupercarData($input);
    }
}