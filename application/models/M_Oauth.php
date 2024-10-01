<?php  
defined('BASEPATH') or exit('No direct script access allowed');

Class M_Oauth extends CI_Model
{
    private $client_id = 'hVBbBqhIKaZ3r93afLJDKo9M0UhOaS7saArneEek-uQ54KaN8dog=';
    private $redirect_uri = 'https://unj.ikatanalumniakuntansi.com/';
    private $grant_type = 'authorization_code';
    private $base_url = 'https://oauth.digifile.id/';

    function getToken($code){
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $this->base_url . 'login/gettoken',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array(
                'client_id' => $this->client_id,
                'redirect_uri' => $this->redirect_uri,
                'grant_type' => $this->grant_type,
                'code' => $code
            ),
        ));

        $data = curl_exec($curl);
        $response = json_decode($data);
        curl_close($curl);
        return $response;
	}

    function getIdentity($token)
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $this->base_url . 'login/getidentity',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array(
                'token' => $token
            ),
        ));

        $data = curl_exec($curl);
        $response = json_decode($data);

        curl_close($curl);
        return $response;
    }
}