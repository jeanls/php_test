<?php


namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class IncidentRequest extends FormRequest
{
    public function rules()
    {
        return [
            'title' => 'required|max:255',
            'description' => 'required',
            'criticality' => 'required|in:alta,media,baixa',
            'type' => 'required|in:ataque brute force,credenciais vazadas,ataque ddos,atividades anormais de usuários',
            'status' => 'in:aberto,fechado',
        ];
    }
}
