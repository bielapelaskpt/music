<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    public function index()
    {
        return view("pages/register");
    }
    public function register(Request $request)
    {
        $request->validate(
            [
                "name" => "required",
                "email" => "required|email",
                "phone" => "nullable|celular_com_ddd",
                "password" => "required|min:4",
            ],
            [
                'name.required' => 'O nome é obrigatório!',
                'email.required' => 'O email é obrigatório!',
                'email.email' => 'O email deve ser válido!',
                'phone.celular_com_ddd' => 'O telefone deve ser válido!',
                'password.required' => 'A senha é obrigatória!',
                'password.min' => 'A senha deve ter no mínimo 4 caracteres!',
            ]
        );
        $lead = Lead::create([
            "name" => Str::title($request->name),
            "email" => $request->email,
            "phone" => $request->phone ?? "",
            "password" => Hash::make($request->password)
        ]);

        session()->put("lead", $lead->id);
        session()->put("lead_name", $lead->name);
        session()->flash("welcome", true);
        session()->put("step", 0);

        return redirect()->route("avaliar.1");
    }
}