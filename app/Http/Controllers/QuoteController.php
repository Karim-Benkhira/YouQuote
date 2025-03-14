<?php

namespace App\Http\Controllers;

use App\Models\quote;
use Illuminate\Http\Request;

class QuoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $quotes = quote::all();
        return response()->json($quotes);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'author' => 'required',
            'quote' => 'required',
        ]);

        $quote = quote::create($validatedData);
        return response()->json(
            [
                'message' => 'Quote created successfully',
                'quote' => $quote
            ],
            201
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(quote $quote)
    {
        $quote = quote::find($quote->id);
        $quote->vue++;
        $quote->save();
        return response()->json($quote);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(quote $quote)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, quote $quote)
    {
        $validatedData = $request->validate([
            'author' => 'required',
            'quote' => 'required',
        ]);

        $quote->author = $validatedData['author'];
        $quote->quote = $validatedData['quote'];
        $quote->save();

        return response()->json(
            [
                'message' => 'Quote updated successfully',
                'quote' => $quote
            ],
            200
        );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(quote $quote)
    {
        $quote->delete();
        return response()->json(
            [
                'message' => 'Quote deleted successfully'
            ],
            200
        );
    }



    public function getByLength($length)
    {
        $quotes = quote::all()->filter(function ($quote) use ($length) {
            return str_word_count($quote->quote) <= $length;
        });

        return response()->json($quotes);
    }

    
    public function getPopular($nb){
        $quotes = quote::orderBy('vue', 'desc')->limit($nb)->get();
        return response()->json($quotes);
    }


    public function getRandom($nb){
        $quote = quote::inRandomOrder()->limit($nb)->get();
        return response()->json($quote);
    }

}
