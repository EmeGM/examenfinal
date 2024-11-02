<?php

namespace App\Http\Controllers;

use App\Models\Restaurante;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\RestauranteRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class RestauranteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $restaurantes = Restaurante::paginate();

        return view('restaurante.index', compact('restaurantes'))
            ->with('i', ($request->input('page', 1) - 1) * $restaurantes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $restaurante = new Restaurante();

        return view('restaurante.create', compact('restaurante'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RestauranteRequest $request): RedirectResponse
    {
        Restaurante::create($request->validated());

        return Redirect::route('restaurantes.index')
            ->with('success', 'Restaurante created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $restaurante = Restaurante::find($id);

        return view('restaurante.show', compact('restaurante'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $restaurante = Restaurante::find($id);

        return view('restaurante.edit', compact('restaurante'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RestauranteRequest $request, Restaurante $restaurante): RedirectResponse
    {
        $restaurante->update($request->validated());

        return Redirect::route('restaurantes.index')
            ->with('success', 'Restaurante updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Restaurante::find($id)->delete();

        return Redirect::route('restaurantes.index')
            ->with('success', 'Restaurante deleted successfully');
    }
}
