<?php

namespace App\Http\Requests;

use App\Http\Controllers\ProfileUserController;
use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfileUserUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $otroControlador = new ProfileUserController();

        // Obtener el ID del usuario desde OtroControlador
        $idUsuarioParaIgnorar = $otroControlador->obtenerIdUsuario();
        // dd($otroControlador);
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', Rule::unique(User::class)->ignore($idUsuarioParaIgnorar)],
        ];
    }
}
