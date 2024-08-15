<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    public function list_item()
    {
        $items = Item::all();
        return view('item.list', compact('items'));
    }

    public function ajouter_item()
    {
        return view('item.ajouter');
    }

    public function ajouter_item_traitement(Request $request)
    {
        $request->validate([
            'titre' => 'required',
            'description' => 'required',
        ]);

        $item = new Item();
        $item->titre = $request->titre;
        $item->description = $request->description;
        $item->save();

        return redirect('/ajouter')->with('status', 'L\'item à bien été ajouter dans la base de donnée');
    }

    public function update_item($id)
    {
        $items = Item::find($id);
        return view('item.update', compact('items'));
    }

    public function update_item_traitement(Request $request)
    {
        $request->validate([
            'titre' => 'required',
            'description' => 'required',
        ]);

        $item = Item::find($request->id);
        $item->titre = $request->titre;
        $item->description = $request->description;
        $item->update();

        return redirect('/item')->with('status', 'L\'item à été modifier avec success');
    }
    public function delete_item($id)
    {
        $items = Item::find($id);
        $items->delete();
        return redirect('/item')->with('status', 'L\'item à été supprimer avec success');
    }
}
