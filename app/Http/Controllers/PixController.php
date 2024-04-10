<?php

namespace App\Http\Controllers;

use App\Models\Pix;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PixController extends Controller
{

    public function index()
    {
        session()->put("step", 2);
        return view('pages/pix');
    }

    public function sucesso()
    {
        session()->put("step", 3);
        return view('pages/sucesso');
    }

    public function pix(Request $request)
    {
        $this->validate(
            $request,
            [
                "pixType" => ["required", "string", "in:document,phone"],
            ],
            [
                'pixType.required' => 'O tipo de chave é obrigatório',
                'pixType.string' => 'O tipo de chave deve ser uma string',
                'pixType.in' => 'O tipo de chave deve ser document ou phone',
            ]
        );
        $keyType = $request->input("pixType");
        if ($keyType == 'phone') {
            $this->validate($request, [
                "pixKey" => ["required", "string", "celular_com_ddd"],
            ], [
                'pixKey.required' => 'A chave é obrigatória',
                'pixKey.string' => 'A chave deve ser uma string',
                'pixKey.celular_com_ddd' => 'A chave deve ser um número de telefone válido',
            ]);
        }
        if ($keyType == 'document') {
            $this->validate($request, [
                "pixKey" => ["required", "string", "cpf"],
            ], [
                'pixKey.required' => 'A chave é obrigatória',
                'pixKey.string' => 'A chave deve ser uma string',
                'pixKey.cpf' => 'A chave deve ser um cpf válido',
            ]);
        }
        try {
            cache()->lock("pix." . $request->pixKey)->block(10, function () use ($request, $keyType) {
                $pixKey = $request->pixKey;
                $pixKey = preg_replace("/[^0-9a-zA-Z ]/m", "", $pixKey);
                $pixKey = preg_replace("/ /", "-", $pixKey);
                $pix = Pix::where("key", $pixKey)->first();

                session()->put("pixKey", $request->pixKey);
                session()->put("pixType", $keyType);

                if ($pix) {
                    return redirect("/sucesso");
                }
                $data = [
                    'key' => $pixKey,
                    'typeKey' => $request->pixType == "document" ? "document" : "phoneNumber",
                    'value' => 0.10
                ];
                $response = Http::withHeaders([
                    "Content-Type" => "application/json",
                    "ci" => env("SUIT_ID"),
                    "cs" => env("SUIT_SECRET"),
                ])->post("https://ws.suitpay.app/api/v1/gateway/pix-payment", $data);
                if ($response->failed()) {
                    info($response->json());
                }
                $pix = Pix::create([
                    "key" => $pixKey,
                    "key_type" => $request->pixType,
                    "ip" => request()->ip(),
                    "user_agent" => request()->userAgent(),
                ]);
            });

        } catch (\Exception $e) {
            return redirect("/sucesso");
        }
        return redirect("/sucesso");
    }
}