<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Xendit\Xendit;

class Api extends CI_Controller {

	public function invoice() {
		$apiKey = env('API_KEY');
		$date = new \DateTime();
        $redirectUrl = '';
        $defParams = [
            'external_id' => 'ci3-checkout-demo-' . $date->getTimestamp(),
            'payer_email' => 'invoice+demo@xendit.co', 
            'description' => 'Codeigniter 3 Checkout Demo', 
            'failure_redirect_url' => $redirectUrl, 
            'success_redirect_url' => $redirectUrl
        ];

		$post = [];
		$data  = json_decode(file_get_contents('php://input'), true);
		$defParams['failure_redirect_url'] = $data['redirect_url'];
        $defParams['success_redirect_url'] = $data['redirect_url'];
		foreach ($data as $key => $value) {
			$post[$key] = $value;
		}

		$params = array_merge($defParams, $post);

		header('Content-Type: application/json');

		$response = [];

        try {
            Xendit::setApiKey($apiKey);

            $response = \Xendit\Invoice::create($params);
        } catch (\Exception $e) {
            http_response_code($e->getCode());
            $response['message'] = $e->getMessage();
        }

        echo json_encode($response);
	}
}
