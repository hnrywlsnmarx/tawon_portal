<?php

namespace App\Http\Controllers\Auth;

use DB;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Models\AktifitasModel;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginehrController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $username = $request->email;
        $password = $request->password;
        $ip_address = $request->ip_address;
        $url = $request->fullUrl();

        $resLogin = $this->toapi($username, $password);

        $dcd = json_decode($resLogin);
        $dtl = get_object_vars($dcd);

        if ($username == '' && $password == '') {
            return redirect('login')->with('error', 'NIK atau password tidak boleh kosong.');
        } else {
            if ($dcd == NULL) {
                return redirect('login')->with('error', 'Oppes! You have entered invalid credentials');
            } else {
                if (isset($dtl['error_description']) == "Bad credentials") {
                    echo "<script type='text/javascript'>alert('NIK atau password salah.');</script>";
                    return redirect('login')->with('error', 'NIK atau password salah.');
                } else {
                    $getuser = $this->getUserapp($username);

                    if (isset($getuser[0]->nik) == $username) {
                        $role = $getuser[0]->role;
                        $status = $getuser[0]->status;

                        $getbranch = $dtl['branch'];
                        $branch = get_object_vars($getbranch);
                        // dd($branch['name']);

                        $getWil = $branch['wilayah'];
                        $wil = get_object_vars($getWil);

                        $getlevel = $dtl['level'];
                        $level = get_object_vars($getlevel);
                        // dd($level);                

                        Session::put('nik', $dtl['nik']);
                        Session::put('nama', $dtl['nama']);
                        Session::put('email', $dtl['email']);
                        Session::put('unit_id', $dtl['unit_id']);
                        Session::put('unit_name', $dtl['unit_name']);
                        Session::put('branch', $branch['id']);
                        Session::put('branchname', $branch['name']);
                        Session::put('status', $status);
                        Session::put('role', $role);
                        Session::put('ip_address', $ip_address);
                        // dd($ip_address);

                        if ($status != "Tidak Aktif") {
                            AktifitasModel::insert([
                                'nik' => $username,
                                'email' => $dtl['email'],
                                'ip_address' => $ip_address,
                                'nama' => $dtl['nama'],
                                'url' => $url,
                                'action' => 'Login',
                                'status' => 'Success',
                                'caused_by' => '',
                                'created_at' => now(),
                                'updated_at' => now(),

                            ]);
                            //print_r($request->session()->get('name'));
                            return redirect('/');
                        }

                        AktifitasModel::insert([
                            'nik' => $username,
                            'email' => $dtl['email'],
                            'ip_address' => $ip_address,
                            'nama' => $dtl['nama'],
                            'url' => $url,
                            'action' => 'Login',
                            'status' => 'Failed',
                            'caused_by' => 'User Not Active',
                            'created_at' => now(),
                            'updated_at' => now(),

                        ]);
                        return redirect('login')->with('error', 'Status user sudah tidak aktif');
                    } else {
                        return redirect('login')->with('error', 'Hak akses tidak diperbolehkan.');
                    }
                }
            }
        }
        //dd($resLogin);	    
    }

    private function getUserapp($nik)
    {
		
        $reports = DB::table('users_bank')
            ->where('nik', $nik)
            ->get();

        return $reports;
    }

    public function logout(Request $request)
    {
        $ip_address = session('ip_address');
        $url = $request->fullUrl();

        $this->guard()->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();
        $request->session()->flush();
        if ($response = $this->loggedOut($request)) {
            AktifitasModel::insert([
                'nik' => session('nik'),
                'email' => session('email'),
                'ip_address' => $ip_address,
                'nama' => session('name'),
                'url' => $url,
                'action' => 'Logout',
                'status' => 'Success',
                'caused_by' => '',
                'created_at' => now(),
                'updated_at' => now(),

            ]);
            return $response;
        }

        return $request->wantsJson()
            ? new JsonResponse([], 204)
            : redirect('/');
    }

    public function logouts(Request $request)
    {
        $nik = session('nik');
        $email = session('email');
        $name = session('nama');
        $ip_address = session('ip_address');
        $url = $request->fullUrl();

        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();

        AktifitasModel::insert([
            'nik' => $nik,
            'email' => $email,
            'ip_address' => $ip_address,
            'nama' => $name,
            'url' => $url,
            'action' => 'Attempt to Logout',
            'status' => 'Success',
            'caused_by' => '',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        return redirect('/');
    }

    protected function loggedOut(Request $request)
    {
        //

    }

    private function toapi($username, $pass)
    {
        $password = urlencode($pass);
        $reqmsg = "username=$username&password=$password&grant_type=password";

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_PORT => "8181",
            CURLOPT_URL => "http://172.28.97.10:8181/beegate/oauth/token",
            // CURLOPT_URL => "http://172.28.97.135:8181/beegate/oauth/token",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 60,
            CURLOPT_SSL_VERIFYHOST => false,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => $reqmsg,
            CURLOPT_HTTPHEADER => array(
                "Accept: application/json",
                "Authorization: Basic YndzY2xpZW50OnBhc3N3b3Jk",
                "Content-Type: application/x-www-form-urlencoded",
                "cache-control: no-cache"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            $hasil = array("rc" => "98", "msg" => str_replace("'", " ", $err));
            return json_encode($hasil);
        } else {
            return $response;
        }
    }
}
