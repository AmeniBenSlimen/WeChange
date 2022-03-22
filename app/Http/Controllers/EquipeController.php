<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipe;

class EquipeController extends Controller
{
   /*  public function __construct()
    {
        $this->middleware('auth');
    } */
    
    public function welcome(){

        return view('welcome');
    }
    
    public function interface(){
        $im = Equipe::all();
        return view ('equipe',compact('im'));
    }
    public function Allmembre(){
        $equipe = Equipe :: all();
        return view('AllEquipe', compact('equipe'));
    }
   
    public function modifierMembre($id)
    {
        
        $equipe=Equipe::where('id',$id)->first();
        

        return view('modifierMembre',compact('equipe'));
    }
   
    
        public function addMembre(){
            
            return view ('membre');
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
                    $equipe->image=$filename;
                }
                $equipe->save();

                    return redirect()->route('equipe')->with('success', 'Membre Ajouter avec succèss');
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
            $equipe->user_id=$request->user;

            if ($request->hasfile('image'))
            {
                $file=$request->file('image');
                $ext=$file->getClientOriginalExtension();
                $filename=time().'.'.$ext;
                $file->move('images/', $filename);
                $equipe->image=$filename;
            }

            $equipe->update();
            
            return redirect()->route('Allmembre')->with('success', 'Membre Modifier avec succèss');
        }

        public function deleteMembreBD(Request $request)
        {
        
            $equipe=Equipe::where('id',$request->id)->first();
            $equipe->delete();
    
            return redirect()->route('Allmembre')->with('success', 'Membre Supprimer avec succèss');
    
        }
    }

    

