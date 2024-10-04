<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Alumni extends CI_Controller {
	function __construct()
    {
        parent::__construct();  
		$this->load->model('m_alumni', 'alumni');
		$this->load->model('Generate_Code', 'generate_code');
        $this->load->library( 'email' ) ;
    }
	public function index()
	{
		$data['email'] = $this->session->userdata('email');
		$email = $this->session->userdata('email');
		// var_dump($email);die;
		$data['profil'] = $this->db->get('profil')->result_array();
		$data['user'] = $this->alumni->getsDataUsers($email);
		if(!empty($email)){
			// var_dump($data);
			$this->load->view('components/header');
			$this->load->view('components/menu', $data);
			$this->load->view('pages/alumni/data_alumni', $data);
			$this->load->view('components/footer');
		}else{
			$this->load->view('errors/error');
		}
	}

	function import()
	{
		if(!empty($_FILES)){
            $permitted_chars = 'abcdefghijklmnopqrstuvwxyz';
            $permitted_chars1 = '0123456789';
            $permitted_chars2 = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $permitted_chars3 = '`!"$%&*-_=+#@;:,./?<>()~{}[]';

			// $permitted_chars1 = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ`!"$%&*-_=+#@;:,./?<>()~{}';
            $path       = FCPATH.'asset/';
            $response       = [];
            $config['upload_path']      = $path;       
            $config['allowed_types']    = 'csv|CSV|xlsx|XLSX|xls|XLS';
            $config['max_filename']     = '255';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('file')) {
                $response = [
                    'error_message' => $this->upload->display_errors(),
                ];

            } else {
                $file_data  = $this->upload->data();
                $file_name  = $path.$file_data['file_name'];
                $arr_file   = explode('.', $file_name);
                $extension  = end($arr_file);
                if('csv' == $extension) {
                    $reader     = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
                } else {
                    $reader     = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
                }
                $spreadsheet    = $reader->load($file_name);
                $sheet_data     = $spreadsheet->getActiveSheet()->toArray();
                $list           = [];
                $fileName = explode('.', $file_data['file_name']);
                // echo count($sheet_data);die;
                if(!empty($sheet_data)){
                    for($i=0; $i <count($sheet_data) ; $i++){
                        if($i>0){
							$id_anggota = 'IKAA'.date('dmy').strtoupper(substr(str_shuffle($permitted_chars), 0, 3));
                            $list []= [
                                'id_anggota' => $id_anggota,
                                'nama_lengkap' => $sheet_data[$i][0],
                                'tempat_lahir' => $sheet_data[$i][1],
                                'tanggal_lahir' => $sheet_data[$i][2],
                                'alamat' => $sheet_data[$i][3],
                                'angkatan' => $sheet_data[$i][4],
                                'program_studi' => $sheet_data[$i][5],
                                'no_hp' => $sheet_data[$i][6],
                                'email' => $sheet_data[$i][7],
                                'pekerjaan' => $sheet_data[$i][8],
                                'jabatan' => $sheet_data[$i][9],
                                'nama_instansi' => $sheet_data[$i][10],
                            ];
                            $pas1 = substr(str_shuffle($permitted_chars), 0, 3);
                            $pas2 = substr(str_shuffle($permitted_chars1), 0, 3);
                            $pas3 = substr(str_shuffle($permitted_chars2), 0, 3);
                            $pas4 = substr(str_shuffle($permitted_chars3), 0, 3);
                            
                            $password = $pas1.$pas2.$pas3.$pas4;
							$list1 []= [
								'email' => $sheet_data[$i][7],
								'username' => $sheet_data[$i][7],
								'password' => password_hash($password, PASSWORD_DEFAULT),
							];
                            $this->sendmail($sheet_data[$i][7], $password, $sheet_data[$i][0]);
                        }
                    }
                }else{
                    $response = "Tidak Ada";
                }

                if(file_exists($file_name)){
                    unlink($file_name);
                }
				if(count($list) > 0) {
					// var_dump($email);die;
                    $result = $this->db->insert_batch('profil', $list);
					$result = $this->db->insert_batch('user', $list1);
                    if($result) {
						redirect('alumni');
                        // $response = [
                        //     'success' => true,
                        //     'message' => 'Data berhasil disimpan!',
                        //     'code' => 200,
                        // ];
                    } else {
                        $response = [
                            'success' => true,
                            'message' => 'Something went wrong. Please try again.',
                            'code' => 402,
                        ];
                    }
                    echo json_encode($response);
                } else {
                    $response = [
                        'success' => true,
                        'message' => 'No new record is found.',
                    ];
                    echo json_encode($response);
                }
            }
        }else{
            $this->load->view('errors/error');
        }
	}

    // function oke()
    // {
    //     $permitted_chars = 'abcdefghijklmnopqrstuvwxyz';
	// 	$permitted_chars1 = '0123456789';
	// 	$permitted_chars2 = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
	// 	$permitted_chars3 = '`!"$%&*-_=+#@;:,./?<>()~{}[]';

    //     $pas1 = substr(str_shuffle($permitted_chars), 0, 3);
    //     $pas2 = substr(str_shuffle($permitted_chars1), 0, 3);
    //     $pas3 = substr(str_shuffle($permitted_chars2), 0, 3);
    //     $pas4 = substr(str_shuffle($permitted_chars3), 0, 3);
    //     $password = $pas1.$pas2.$pas3.$pas4;
    //     echo str_shuffle($password);
    // }

    function sendmail($email, $password, $nama)
    {
        // Load PHPMailer library
        $this->load->library('phpmailer_lib');
        
        // PHPMailer object
        $mail = $this->phpmailer_lib->load();

        // SMTP configuration
        $mail->isSMTP();
        $mail->Host     = 'mail.ikatanalumniakuntansi.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'no-replay@ikatanalumniakuntansi.com';
        $mail->Password = 'no-replay123';
        $mail->SMTPSecure = 'ssl';
        $mail->Port     = 465;
        
        $mail->setFrom('no-replay@ikatanalumniakuntansi.com', 'IKAA UNJ');
        // $mail->addReplyTo('no-replay@ikatanalumniakuntansi.com', 'IKAA UNJ');
        
        // Add a recipient
        $mail->addAddress($email);
        
        // Add cc or bcc 
        // $mail->addCC('no-replay@ikatanalumniakuntansi.com');
        // $mail->addBCC('bcc@example.com');
        
        // Email subject
        $mail->Subject = 'Data login Ikatan Alumni Akuntansi UNJ';
        
        // Set email format to HTML
        $mail->isHTML(true);
        
        $mailContent = '
            <table width="600" border="0" cellspacing="0" cellpadding="0" style="border-collapse:collapse;border:1px solid #cccccc">
                <tbody>
                    <tr>
                        <td>
                            <div style="background-color: #2bd16c; text-align: center; align-content: center; padding: 20px;"><h2><b>Ikatan Alumni Akuntansi <br> Universitas Negeri Jakarta</b></h2></div>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:20px 40px 20px 40px;text-align:left;font-size:16px;line-height:1.6">
                            Hai '.$nama.', Selamat anda sekarang tergabung dalam platform IKAA UNJ <br> (Ikatan Alumni Akuntansi Universitas Negeri Jakarta)
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:20px 40px 20px 40px;text-align:left;font-size:16px;line-height:1.6">
                            Berikut email dan password anda :
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:20px 40px 20px 40px;text-align:left;font-size:16px;line-height:1.6">
                            Email<span style="padding-right: 20px; padding-left: 50px;">:</span>'.$email.'
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:20px 40px 20px 40px;text-align:left;font-size:16px;line-height:1.6">
                            Password<span style="padding-right: 20px; padding-left: 20px;">:</span>'.$password.'
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:0px 40px 0px 40px">
                            <br>
                            <br>
                            <div style="width:80%">
                                Silahkan login ke website resmi <a href="https://unj.ikatanalumniakuntansi.com/">IKAA UNJ</a>  menggunakan email dan password diatas.
                            </div>
                            <br>
                            <br>
                        </td>
                    </tr>
                </tbody>
            </table>';
        $mail->Body = $mailContent;
        
        // Send email
        if(!$mail->send()){
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }else{
            echo 'Message has been sent';
        }
    }
}
