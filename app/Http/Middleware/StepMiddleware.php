<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class StepMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->has('ignore')) {
            return $next($request);
        }
        $routeName = $request->route()->getName();

        if ($routeName !== "register" && !session()->has("step")) {
            return redirect()->route("register");
        }

        if (!session()->has("step") && $routeName !== "register") {
            session()->put("step", 0);
            if ($routeName != "avaliar.1") {
                return redirect()->route("avaliar.1");
            }
        }
        if (session()->get("step") === 0 && $routeName !== "avaliar.1" && $routeName !== "vsl") {
            return redirect()->route("avaliar.1");
        }
        if (session()->get("step") === 1 && $routeName !== "vsl" && $routeName !== "pix") {
            return redirect()->route("vsl");
        }

        if (session()->get("step") === 2 && $routeName !== "pix" && $routeName !== "sucesso") {
            return redirect()->route("pix");
        }

        if (session()->get("step") === 3 && $routeName !== "sucesso" && $routeName !== "avaliar.2") {
            return redirect()->route("sucesso");
        }

        if (session()->get("step") === 4 && $routeName !== "avaliar.2" && $routeName !== "saqueFinal") {
            return redirect()->route("avaliar.2");
        }

        if (session()->get("step") === 5 && $routeName !== "saqueFinal" && $routeName !== "concluirSaque") {
            return redirect()->route("saqueFinal");
        }
        return $next($request);
    }
}