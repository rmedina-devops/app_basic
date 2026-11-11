<?php
declare(strict_types=1);
use App\Controller\AuthController;
use flight\Engine;
use GuzzleHttp\Client;
use PHPUnit\Framework\TestCase;

final class AuthControllerTest extends TestCase {

    private Client $client;
    private AuthController $auth;
    private Engine $app;
    protected function setUp(): void {
        $this->client = new Client([
            'base_uri'      => 'https://localhost',
            'timeout'       => 2.0,
            'verify'        => false,
            'http_errors'   => false
        ]);
        $this->app = new Engine();
        $this->auth = new AuthController($this->app);
    }
    public function testLoginPage(): void{
       $response  = $this->client->request('GET', '/login');
       $this->assertEquals(200, $response->getStatusCode());
    }

    public function testAccessLogin(): void {
        $response = $this->client->request('POST', '/validate', [
            'form_params' => [
                'email'     => 'medinast30@gmail.com',
                'password'  => '1234'
            ]
        ]);
        $body = json_decode((string) $response->getBody(), true);
        $this->assertSame(203, $body['status']);
        $this->assertSame('Login success', $body['message']);
    }

    public function testFailAccesslogin(): void {
        $response = $this->client->request('POST', '/validate', [
            'form_params' => [
                'email'     => 'medinast30@gmail.com',
                'password'  => '12344545'
            ]
        ]);
        $body = json_decode((string) $response->getBody(), true);
         $this->assertEquals(200, $response->getStatusCode());
        $this->assertSame(405, $body['status']);
        $this->assertSame('Data is incorrect', $body['message']);
    }
}
