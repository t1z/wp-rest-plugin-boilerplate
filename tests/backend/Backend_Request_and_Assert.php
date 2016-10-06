
<?php

trait Backend_Request_and_Assert {

    protected function request_get($url, $expected_status, $expected_data) {
        $request = new WP_REST_Request( 'GET', '/bhubr/v1' . $url );
        $response = $this->server->dispatch( $request );
        $error = array_key_exists('error', $response->data) ? $response->data['error'] : '';
        $this->assertEquals( $expected_status, $response->status, "Unexpected error {$response->status} => $error" );
        $this->assertEquals( $expected_data, $response->data );
    }
    protected function request_post($url, $data, $expected_status, $expected_data) {
        $request = new WP_REST_Request( 'POST', '/bhubr/v1' . $url );
        $request->set_header( 'Content-Type', 'application/json' );
        $request->set_body(json_encode($data));
        // var_dump($request->get_content_type());
        // var_dump($request->get_body());
        $response = $this->server->dispatch( $request );
        // echo "RESPONSE\n";
        $error = array_key_exists('error', $response->data) ? $response->data['error'] : '';
        $this->assertEquals( $expected_status, $response->status, "Unexpected error {$response->status} => $error" );
        $this->assertEquals( $expected_data, $response->data );
    }


}