<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Autorisation;
use App\Models\User;
use App\Models\Emploi;
use App\Models\Matiere;
use App\Models\Type_emploi;
use App\Models\Type_intervention;
use App\Models\Houraire;
use App\Models\Infoprofessionnele;
use App\Models\Infopersonnelle;
use App\Models\Promotion;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function listautorisation(){
        $autorisations= Autorisation::all();
    
        return view('listautorisation',compact('autorisations'));
    }

    public function ajouterautorisation(Request $request){

        // $user = User::find(Auth::id());
        // $autorisations=$user->autorisations;
        /////////////////////Infopersonnelle////////////////////////
                 $data1= new Infopersonnelle();
                 $data1['cine']=$request->cine;
                 $data1['matricule']=$request->matricule;
                 $data1['nom_fr']=$request->nom;
                 $data1['nom_ar']=$request->nom_ar;
                 $data1['prenom_fr']=$request->prenom;
                 $data1['prenom_ar']=$request->prenom_ar;
                 $data1->save();
        ////////////////////////Infoprofessionnele////////////////////////////
                  $data2= new Infoprofessionnele();
                  $data2['fonction']=$request->fonction;
                  $data2['personnelle_id']=$data1['id'];
                  $data2->save();
        ////////////////////////////////Promotion///////////////////////////////
                  $data3= new Promotion();
                  $data3['grade']=$request->grade;
                  $data3['personnelle_id']=$data1['id'];
                  $data3->save();
        // autorisation 
        
        $data= new Autorisation();
        $data['reference']=Str::random(8);;
        $data['date_autorisation']=$request->date_autorisation;
        $data['type_autorisation']=$request->type_autorisation;
        $data['type_beneficiaire']=$request->type_beneficiaire;
        $data['nom']=$request->nom;
        $data['prenom']=$request->prenom;
        $data['nom_ar']=$request->nom_ar;
        $data['prenom_ar']=$request->prenom_ar;
        $data['type_etablissment_o']=$request->type_etablissment_o;
        $data['etablissment_o']=$request->etablissment_o;
        $data['etablissment_o_ar']=$request->etablissment_o_ar;
        $data['type_etablissment_c']=$request->type_etablissment_c;
        $data['etablissment_c']=$request->etablissment_c;
        $data['etablissment_c_ar']=$request->etablissment_c_ar;
        $data['date_debut']=$request->date_debut;
        $data['date_fin']=$request->date_fin;
        $data['annees_univ']=$request->annees_univ;
        $data['periode']=$request->periode;
        $data['personnelle_id']=$data1['id'];
        $data['user_id']=Auth::id();

        
        $data->save();
        
     
        return response()->json($autorisations);
            }
     public function editautorisation(Request $request){



                $data = Autorisation::where('reference',$request->Ref)->first();
            $data['reference']=$request->Ref;
            $data['date_autorisation']=$request->date_autorisation;
            $data['type_autorisation']=$request->type_autorisation;
            $data['type_beneficiaire']=$request->type_beneficiaire;
            $data['nom']=$request->nom;
            $data['prenom']=$request->prenom;
            $data['nom_ar']=$request->nom_ar;
            $data['prenom_ar']=$request->prenom_ar;
            $data['type_etablissment_o']=$request->type_etablissment_o;
            $data['etablissment_o']=$request->etablissment_o;
            $data['etablissment_o_ar']=$request->etablissment_o_ar;
            $data['type_etablissment_c']=$request->type_etablissment_c;
            $data['etablissment_c']=$request->etablissment_c;
            $data['etablissment_c_ar']=$request->etablissment_c_ar;
            $data['date_debut']=$request->date_debut;
            $data['date_fin']=$request->date_fin;
            $data['annees_univ']=$request->annees_univ;
            $data['periode']=$request->periode;
            
            $data->update();
            }
public function getautorisation($id){
                $data = Autorisation::find($id);
                return response()->json($data);
            }
public function ajouteremploi(Request $request){
    $autorisation = Autorisation::where('reference',$request->Ref)->first();
    $user = User::find(Auth::id());
    $autorisations=$user->autorisations;


    $begin = new DateTime( $autorisation['date_debut'] );
        $end   = new DateTime( $autorisation['date_fin'] );
        for($i = $begin; $i <= $end; $i->modify('+1 day')){
           $j =\Carbon\Carbon::parse($i)->format('D');
             if($request->jours == $j  ){
                $data1= new Emploi();   
                $data1['jours']=$i;
                $data1['creneau_horaire']=$request->creneau_horaire;
                $data1['heure_debut']=$request->heure_debut;
                $data1['heure_fin']=$request->heure_fin;
                $data1['section']=$request->section;
                $data1['groupe']=$request->groupe;
                $data1['autorisation_id']=$autorisation['id'];
                $data1['type_emplois']=1;
                $data1['type_intervention']=1;
                $data1['matieres']=1;
                $data1->save();
    
    }
            }
            $emplois=$autorisations->emplois;

            return response()->json($emplois);


        }

      
        

public function ajouterhouraire(Request $request){
    $autorisation = Autorisation::where('reference',$request->reference)->first();
            $data1= new Houraire();   
            $data1['nbre_heure']=$request->Nombre_heure;
            $data1['mois']=$request->mois;
            $data1['autorisation_id']=$autorisation['id'];
            $data1->save();
            return response()->json($data1);
            
}
}
