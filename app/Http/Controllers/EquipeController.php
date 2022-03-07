<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipe;

class EquipeController extends Controller
{
    public function interface(){
        $im = Equipe::all();
        return view ('equipe');
    }
    public function Allmembre(){
        $equipe = Equipe :: all();
        return view('AllEquipe', compact('equipe'));
    }
    public function addMembre(){
      
        return view('membre');
    }
    public function editMembre(){
      
        return view('editMembre');
    }
    
    public function MembreBD(Request $request)
    {
        
            $equipe = new Equipe();
            $equipe->nom_membre=$request->nom_membre;
            $equipe->prenom_membre=$request->prenom_membre;
            $equipe->specialite=$request->specialite;
            $equipe->description_membre=$request->description_membre;
            $equipe->image=$request->image;
            $equipe->contact=$request->contact;
            $equipe->user_id=$request->user;
            if ($request->hasfile('image'))
                {
                    $file=$request->file('image');
                    $ext=$file->getClientOriginalExtension();
                    $filename=time().'.'.$ext;
                    $file->move('images/', $filename);
                    $etudiant->image=$filename;
                }
                $equipe->save();

                return redirect()->route('addMembre')->with('SuccessMessage','Membre ajouté avec succès.');
        }

        public function editMembreBD(Request $request)
    {
        
            $equipe=Equipe::where('id',$request->id)->first();
            $equipe->nom_membre=$request->nom_membre;
            $equipe->prenom_membre=$request->prenom_membre;
            $equipe->specialite=$request->specialite;
            $equipe->description_membre=$request->description_membre;
            $equipe->image=$request->image;
            $equipe->contact=$request->contact;

            if ($request->hasfile('image'))
            {
                $file=$request->file('image');
                $ext=$file->getClientOriginalExtension();
                $filename=time().'.'.$ext;
                $file->move('images/', $filename);
                $equipe->image=$filename;
            }

            $equipe->update();
            return redirect()->route('addMembre')->with('SuccessMessage','Membre modifier avec succès.');
        }

        public function deleteMembreBD(Request $request)
        {
        
            $equipe=Equipe::where('id',$request->id)->first();
            $equipe->delete();
    
            return redirect()->route('addMembre')->with('SuccessMessage','Membre Supprimer avec succès.');
    
        }
    }

    

