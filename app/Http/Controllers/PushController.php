<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PushController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    Public function debit(Request $request){
        $info_texte = "";
        function randString($length = 10) {
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $charactersLength = strlen($characters);
            $randomString = 'ref.';
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
            return $randomString."_pay";
        }
        function calculeCommission($montant, $devise){
            $commission = 0;
            if ($devise == "CDF") {
                if ($montant < 2000) {
                    $commission = 0;
                } elseif ($montant >= 2000 and $montant <= 50000) {
                    $commission = ($montant * 3) / 100;
                } else {
                    $commission = ($montant * 2) / 100;
                }
            }
            //
            elseif ($devise == "USD") {
                if ($montant < 2) {
                    $commission = 0;
                } elseif ($montant >= 2 and $montant <= 50) {
                    $commission = ($montant * 3) / 100;
                } else {
                    $commission = ($montant * 2) / 100;
                }
            }
            return $commission;
        }
        if ($request->has('num_tel') && $request->has('mobile_money') && !empty($request->has('num_tel')) && !empty($request->has('mobile_money')) && isset($_SESSION["checkout"]["token"]) && !empty($_SESSION["checkout"]["token"])) {
            $transaction = Transasction_marchand::verifieToken(htmlentities($_SESSION["checkout"]["token"]));
            if ($transaction) {

                $merchant_secrete="jzb2#ROzPQJETYiWmb";
                $merchant_id = "j+cn|]@,L5g7A/R4b";
                $amount=$transaction->montant + $commission;
                $action="debit";
                $currency=$request->input('currency');
                $firstname="Maishapay";
                $lastname="Maishapay";
                $reference=randString();
                $customer_number=$request->input('num_tel');
                $email="contact@maishapay.net";
                $method=$request->input('mobile_money');
                $commission = $_SESSION["checkout"]["commission"]; //calculeCommission($transaction->montant, $transaction->monnaie);

                if ($action == "debit" && $method == "mpesa") {
                    $callback_url = "https://momo.maishapay.net/maisha_api/debit_mpsesa_callback.php";
                }
                elseif ($action == "debit" && $method == "orange") {
                    $callback_url = "https://momo.maishapay.net/maisha_api/debit_orange_callback.php";
                }
                elseif ($action == "debit" && $method == "airtel") {
                    $callback_url = "https://momo.maishapay.net/maisha_api/debit_airtel_callback.php";
                }
                elseif ($action == "credit" && $method == "mpesa") {
                    $callback_url = "https://momo.maishapay.net/maisha_api/credit_mpesa_callback.php";
                }
                elseif ($action == "credit" && $method == "orange") {
                    $callback_url = "https://momo.maishapay.net/maisha_api/credit_orange_callback.php";
                }
                elseif ($action == "credit" && $method == "airtel") {
                    $callback_url = "https://momo.maishapay.net/maisha_api/credit_airtel_callback.php";
                }
                $url = 'https://paydrc.gofreshbakery.net/api/v5/';
                $curl_post_data = [
                    "merchant_id" => $merchant_id,
                    "merchant_secrete"=> $merchant_secrete,
                    "amount" => $amount,
                    "action" => $action,
                    "customer_number" => $customer_number,
                    "currency" => $currency,
                    "firstname" =>$firstname,
                    "lastname" => $lastname,
                    "email" => $email,
                    "method" => $method,
                    "reference" => $reference,
                    "callback_url" => $callback_url
                ];

                $data = json_encode($curl_post_data);
                $ch=curl_init();
                curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_MAXREDIRS, 10);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                curl_setopt($ch, CURLOPT_POST, true);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
                curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
                $curl_response = curl_exec($ch);
                $curl_decoded = json_decode($curl_response,true);

                    $comment = $curl_decoded['Comment'];
                    $status = $curl_decoded['Status'];
                    $transaction_id = $curl_decoded['Transaction_id'];
                    $created_at = $curl_decoded['Created_At'];
                    $updated_at = $curl_decoded['Updated_At'];
                    DB::table('momo_transactions')->insert(
                        [
                            'customer_number' => $customer_number,
                            'amount' => $amount,
                            'currency' => $currency,
                            'comment' => $comment,
                            'action' => $action,
                            'method' => $method,
                            'status' => $status,
                            'reference' => $reference,
                            'transaction_id' => $transaction_id,
                            'created_at' => $created_at,
                            'updated_at' => $updated_at
                        ]
                    );

                return $curl_response;

                if ($reponse_api === false or  $reponse_api === null) {
                    $info_texte = ["r" => false, "message" => "Erreur innatendue, verifiez votre connexion!", "data" => []];
                }

                else {

                    $reponse_api = json_decode($reponse_api, true);
                    if ($reponse_api["Status"] == "Success") {
                        $info_texte = ["r" => true, "message" => "En cours ...", "data" => ["token" => $_SESSION["checkout"]["token"]]];
                    } elseif ($reponse_api["Status"] == "Error") {
                        $info_texte = ["r" => false, "message" => $reponse_api["Comment"], "data" => []];
                    }
                }
            }

            else {
                $info_texte = ["r" => false, "message" => "Désolé, erreur de paiement !", "data" => []];
            }
        } 
        else {
            $info_texte = ["r" => false, "message" => "Désolé, veillez remplire tous les champs svp !", "data" => []];
        }
        echo json_encode($info_texte);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
