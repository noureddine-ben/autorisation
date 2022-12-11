<!DOCTYPE html>
<html lang="en" dir="">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="csrf_token" content="{{ csrf_token() }}" />

    <title>Basic Action Bar | Gull Admin Template</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet" />
    <link href="../../dist-assets/css/themes/lite-purple.min.css" rel="stylesheet" />
    <link href="../../dist-assets/css/plugins/perfect-scrollbar.min.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

</head>

<body class="text-left">
    <div class="app-admin-wrap layout-sidebar-large">
        @include('header')
       @include('sidebar')
        <div class="main-content-wrap sidenav-open d-flex flex-column">
            <!-- ============ Body content start ============= -->
            <div class="main-content">
                <div class="breadcrumb">
                    <h1>Autorisation</h1>
                    <ul>
                        <li><a href="">HR /</a></li>
                        <li>Vacation</li>
                    </ul>
                </div>
                <div class="row ">
                    <div class="col-md-12 ">
                        <div class="card md-4 text-left">
                            <div class="card-body">
                                <div class="card-title mb-3">Demande d'autorisation</div>
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item"><a class="nav-link active" id="home-basic-tab" data-toggle="tab" href="#homeBasic" role="tab" aria-controls="homeBasic" aria-selected="true">Information</a></li>
                                    <li class="nav-item"><a class="nav-link" id="profile-basic-tab" data-toggle="tab" href="#profileBasic" role="tab" aria-controls="profileBasic" aria-selected="false">Emploi</a></li>
                                    <li class="nav-item"><a class="nav-link" id="contact-basic-tab" data-toggle="tab" href="#contactBasic" role="tab" aria-controls="contactBasic" aria-selected="false">Horaire</a></li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div id="referencere">
                                   
                                </div>
                                    <div class="tab-pane fade show active" id="homeBasic" role="tabpanel" aria-labelledby="home-basic-tab">
                                        <form id="autorisation">
                                            <div class="row">
                                                <div class="col-md-4 form-group mb-1">
                                                    <label for="picker1">Type d'autorisation</label>
                                                    <select id="type_autorisation" name="type_autorisation" class="form-control">
                                                        <option>Option 1</option>
                                                        <option>Option 2</option>
                                                        <option>Option 3</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-4 form-group mb-1">
                                                    <label for="exampleInputEmail1">Date Demande</label>
                                                    <input name="date_autorisation" class="form-control" id="date_autorisation" type="date" placeholder="Date Demande" />
                                                    <!--  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                                </div>
                                                <div class="col-md-4 form-group mb-1">
                                                    <label for="picker1">Type de beneficaire</label>
                                                    <select id="type_beneficiaire" name="type_beneficiaire" class="form-control">
                                                        <option>Option 1</option>
                                                        <option>Option 1</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-3 form-group mb-1">
                                                    <label for="lastName1">Nom</label>
                                                    <input name="nom" class="form-control" id="nom" type="text" placeholder="Nom" />
                                                </div><div class="col-md-3 form-group mb-1">
                                                    <label for="lastName1">Prenom</label>
                                                    <input name="prenom" class="form-control" id="prenom" type="text" placeholder="Prenom" />
                                                </div><div class="col-md-3 form-group mb-1">
                                                    <label for="lastName1">الاسم</label>
                                                    <input name="nom_ar" class="form-control" id="nom_ar" type="text" placeholder="الاسم" />
                                                </div><div class="col-md-3 form-group mb-1">
                                                    <label for="lastName1">النسب</label>
                                                    <input name="prenom_ar" class="form-control" id="prenom_ar" type="text" placeholder="النسب" />
                                                </div>
                                                <div class="col-md-3 form-group mb-1">
                                                    <label for="lastName1">Matricule</label>
                                                    <input name="matricule" class="form-control" id="matricule" type="text" placeholder="matricule" />
                                                </div><div class="col-md-3 form-group mb-1">
                                                    <label for="lastName1">CINE</label>
                                                    <input name="cine" class="form-control" id="cine" type="text" placeholder="CINE" />
                                                </div><div class="col-md-3 form-group mb-1">
                                                    <label for="lastName1">Fonction </label>
                                                    <input name="fonction " class="form-control" id="fonction" type="text" placeholder="fonction " />
                                                </div><div class="col-md-3 form-group mb-1">
                                                    <label for="lastName1">Grade </label>
                                                    <input name="grade " class="form-control" id="grade" type="text" placeholder="grade " />
                                                </div>
                                                <div class="col-md-3 form-group mb-1">
                                                    <label for="lastName1">Type etablaissment d'origine</label>
                                                    <input name="type_etablissment_o" class="form-control" id="type_etablissment_o" type="text" placeholder="Type etablaissment d'origine" />
                                                </div>
                                                <div class="col-md-8 form-group mb-3">
                                                    <label for="credit1">Beneficaire</label>
                                                    <input name="etablissment_o" class="form-control" id="etablissment_o" placeholder="Beneficaire" />
                                                </div>
                                                <div class="col-md-3 form-group mb-1 invisible">
                                                    <label for="lastName1">Type etablaissment d'origine</label>
                                                    <input class="form-control" id="lastName1" type="text" placeholder="Type etablaissment d'origine" />
                                                </div>
                                                <div class="col-md-8 form-group mb-3">
                                                    <label for="credit1">المؤسسة</label>
                                                    <input name="etablissment_o_ar" class="form-control" id="etablissment_o_ar" placeholder="المؤسسة" />
                                                </div>
                                                <div class="col-md-3 form-group mb-1">
                                                    <label for="lastName1">Type etablaissment cible</label>
                                                    <input name="type_etablissment_c" class="form-control" id="type_etablissment_c" type="text" placeholder="Type etablaissment d'origine" />
                                                </div>
                                                <div class="col-md-8 form-group mb-3">
                                                    <label for="credit1">Beneficaire</label>
                                                    <input name="etablissment_c" class="form-control" id="etablissment_c" placeholder="Beneficaire" />
                                                </div>
                                                <div class="col-md-3 form-group mb-1 invisible">
                                                    <label for="lastName1">Type etablaissment d'origine</label>
                                                    <input class="form-control" id="lastName1" type="text" placeholder="Type etablaissment d'origine" />
                                                </div>
                                                <div class="col-md-8 form-group mb-3">
                                                    <label for="credit1">المؤسسة</label>
                                                    <input name="etablissment_c_ar" class="form-control" id="etablissment_c_ar" placeholder="المؤسسة" />
                                                </div>
                                                <div class="col-md-3 form-group mb-1">
                                                    <label for="lastName1">date debut</label>
                                                    <input name="date_debut" class="form-control" id="date_debut" type="date" placeholder="date debut" />
                                                </div>
                                                <div class="col-md-3 form-group mb-1">
                                                    <label for="lastName1">Date fin</label>
                                                    <input name="date_fin" class="form-control" id="date_fin" type="date" placeholder="Date fin" />
                                                </div>
                                                <div class="col-md-3 form-group mb-1">
                                                    <label for="lastName1">Annee universitaire</label>
                                                    <input name="annees_univ" class="form-control" id="annees_univ" type="text" placeholder="Annee universitaire" />
                                                </div>
                                                <div class="col-md-3 form-group mb-1">
                                                    <label for="lastName1">periode</label>
                                                    <input name="periode" class="form-control" id="periode" type="text" placeholder="periode" />
                                                </div>
                                            </form>
                                            <div class="col-md-12 mt-4 ">
                                                <button type="submit" id="butsave" class="btn btn-primary">Valide</button>
                                            </div>
                                            </div>
                                    </div>
                                    <div class="tab-pane fade" id="profileBasic" role="tabpanel" aria-labelledby="profile-basic-tab">
                              <div class="row">
                                
                                        <div class="card-title  ml-4 mb-3">Emploi du temps:</div>
                                        <div class="col text-right">
                                            <button data-toggle="modal" data-target="#emploi" type="button" name="add" id="addemploi" class="btn btn-success ">ajoutez</button> 
                                              </div>
                                              <div class="input-group mb-4">
                                                <div class="form-outline">
                                                  <input type="search" id="empsearch" class="form-control" />
                                                </div>
                                                
                                              </div>
                                    <div class="table-responsive ">
                                        <table id="emploi_table" class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Jours</th>
                                                    <th scope="col">creneau horaire</th>
                                                    <th scope="col">Heure debut</th>
                                                    <th scope="col">Heure fin</th>
                                                    <th scope="col">Type intervention</th>
                                                    <th scope="col">Matiere</th>
                                                    <th scope="col">Section</th>
                                                    <th scope="col">Group</th>
                                                    <th scope="col">Action</th>
                
                
                                                </tr>
                                            </thead>
                                            <tbody>
                                               
            
                                            </tbody>
                                        </table>
                                    
                                    </div>
                                    
                                </div>
                                    </div>
                                    <div class="tab-pane fade" id="contactBasic" role="tabpanel" aria-labelledby="contact-basic-tab">
                                    <div class="row">

                                        <div class="card-title ml-4 mb-3">Volume Horaire demande :</div>
                                        <div class="col text-right">
                                            <button data-toggle="modal"  data-target="#Houraire" type="button" name="add" id="add1" class="btn btn-success ">ajoutez</button> 
                                              </div>
                                        <div class="table-responsive">
                                            <table id="houraireajou" class="table">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Mois</th>
                                                        <th scope="col">Nombre heure</th>
                                                        <th scope="col">Consomme</th>
                                                        <th scope="col">Solde</th>
                                                        <th scope="col">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                 
                            </div>
                        </div>
                    </div>
                
                </div>
                <div class="separator-breadcrumb border-top"></div>
                <!-- begin::basic action bar-->
            </div>
            <div class="flex-grow-1"></div>
           
            <!-- fotter end -->
        </div>
    </div>
    <!-- ============ Nouvelle Emploi ============= -->
    <div class="modal fade" id="emploi" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle-2" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle-2">Nouvelle Emploi</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <form id="emploiform">
                <div class="modal-body">
                    <div class="col form-group">
                        <label for="firstName1">reference</label>
                        <input class="form-control" id="reference" type="text" placeholder="reference" />
                    </div>
                    <div class="col form-group">
                        <label  for="picker1">Jour</label>
                        <select id="jours" name="jours" class="form-control">
                            <option value="Mon">lundi</option>
                             <option value="Tue">mardi</option>
                             <option value="Wed">mercredi</option>
                             <option value="Thu">jeudi</option>
                             <option value="Fri">vendredi</option>
                             <option value="Sat">samedi </option >
                             <option value="Sun">dimanche</option>
                            
                        </select>     </div>
                    <div class="col form-group">
                        <label for="firstName1">creneau horaire</label>
                        <input class="form-control" id="creneau_horaire" type="text" placeholder="creneau horaire" />
                    </div>
                    <div class="col form-group">
                        <label for="lastName1">heure debut</label>
                        <input class="form-control" id="heure_debut" type="text" placeholder="heure debut" />
                    </div>
                    <div class="col form-group">
                        <label for="firstName1">heure fin</label>
                        <input class="form-control" id="heure_fin" type="text" placeholder="heure fin" />
                    </div>
                    <div class="col form-group">
                        <label for="lastName1">section</label>
                        <input class="form-control" id="section" type="text" placeholder="section" />
                    </div>
                    <div class="col form-group">
                        <label for="firstName1">groupe</label>
                        <input class="form-control" id="groupe" type="text" placeholder="groupe" />
                    </div>
                    <div class="col form-group">
                        <label for="firstName1">Matiere</label>
                        <select id="matiere" name="matiere" class="form-control">
                            @foreach ($matiers as $matier)
                            <option value="{{$matier['id']}}">{{$matier['libelle']}}</option>
                            @endforeach
                        </select>   
                        </div>
                    <div class="col form-group">
                        <label for="firstName1">Type intervention</label>
                        <select id="type_intervention" name="jours" class="form-control">
                            @foreach ($intervantions as $intervantion)
                            <option value="{{$intervantion['id']}}">{{$intervantion['libelle']}}</option>
                            @endforeach
                        </select>   
                    </div>
                    <div class="col form-group">
                        <label for="firstName1">Type Emploi</label>
                        <select id="type_emploi" name="jours" class="form-control">
                            @foreach ($emplois as $emploi)
                            <option value="{{$emploi['id']}}">{{$emploi['type_emploi']}}</option>
                            @endforeach
                        </select> 
                    </div>
                    </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">ferme</button>
                    <button class="btn btn-primary ml-2" type="submit">Ajouter</button>
                </div>
            </div>
        </form>
        </div>
    </div>
    <!-- ============ Nouvelle Emploi ============= -->
    <!-- ============ edit Emploi ============= -->
    <div class="modal fade" id="editemploi" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle-2" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle-2">Edit Emploi</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <form id="editemploiform">
                <div class="modal-body">
                    <div class="col form-group d-none">
                        <label for="firstName1">reference</label>
                        <input class="form-control" id="id" type="text" placeholder="reference" />
                    </div>
                    <div class="col form-group">
                        <label  for="picker1">Jour</label>
                        <select id="ejours" name="ejours" class="form-control">
                            <option value="Monday">lundi</option>
                             <option value="Tuesday">mardi</option>
                             <option value="Wednesday">mercredi</option>
                             <option value="Thursday">jeudi</option>
                             <option value="Friday">vendredi</option>
                             <option value="Saturday">samedi </option >
                             <option value="Sunday">dimanche</option>
                            
                        </select>                       
                    </div>
                    <div class="col form-group">
                        <label for="firstName1">creneau horaire</label>
                        <input class="form-control" id="ecreneau_horaire" type="text" placeholder="creneau horaire" />
                    </div>
                    <div class="col form-group">
                        <label for="lastName1">heure debut</label>
                        <input class="form-control" id="eheure_debut" type="text" placeholder="heure debut" />
                    </div>
                    <div class="col form-group">
                        <label for="firstName1">heure fin</label>
                        <input class="form-control" id="eheure_fin" type="text" placeholder="heure fin" />
                    </div>
                    <div class="col form-group">
                        <label for="lastName1">section</label>
                        <input class="form-control" id="esection" type="text" placeholder="section" />
                    </div>
                    <div class="col form-group">
                        <label for="firstName1">groupe</label>
                        <input class="form-control" id="egroupe" type="text" placeholder="groupe" />
                    </div>
                    <div class="col form-group">
                        <label for="firstName1">Matiere</label>
                        <select id="matiere" name="jours" class="form-control">
                            @foreach ($matiers as $matier)
                            <option value="{{$matier['libelle']}}">{{$matier['libelle']}}</option>
                            @endforeach
                        </select>                       

                    </div>
                    <div class="col form-group">
                        <label for="firstName1">Type intervention</label>
                        <input class="form-control" id="etype_intervention" type="text" placeholder="Type intervention	" />
                    </div>
                    <div class="col form-group">
                        <label for="firstName1">Type Emploi</label>
                        <input class="form-control" id="etype_emploi" type="text" placeholder="Type Emploi" />
                    </div>
                   
                    </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">ferme</button>
                    <button class="btn btn-primary ml-2" type="submit">Enregistrer</button>
                </div>
            </div>
        </form>
        </div>
    </div>
    <!-- ============ edit Emploi ============= -->

    <!-- ============ Nouvelle Houraire ============= -->
    <div class="modal fade" id="Houraire" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle-2" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle-2">Nouvelle Volume Houraire</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <form id="Houraireform">
                <div class="modal-body">
                    <div class="col form-group">
                        <label for="firstName1">reference</label>
                        <input class="form-control" id="referenceh" type="text" placeholder="reference" />
                    </div>
                    <div class="col form-group">
                        <label  for="picker1">Mois</label>
                        <select id="moish" name="moish" class="form-control">
                            <option value="Jan">janvier</option>
                             <option value="Feb">février</option>
                             <option value="Mar">mars</option>
                             <option value="Apr">avril</option>
                             <option value="May">mai</option>
                             <option value="Jun">juin</option >
                             <option value="Jul">juillet</option>
                             <option value="Aug">août</option>
                             <option value="Sep">septembre</option>
                             <option value="Oct">octobre</option>
                             <option value="Nov">novembre</option>
                             <option value="Dec">décembre</option>
                        </select>
                    </div>
                    <div class="col form-group">
                        <label for="firstName1">Nombre heure</label>
                        <input class="form-control" id="Nombre_heureh" type="text" placeholder="Nombre heure" />
                        <span id="heureverfy"></span>
                    </div>
                    <div class="col form-group">
                        <label for="lastName1">Consomme</label>
                        <input class="form-control" id="Consommeh" type="text" placeholder="Consomme" />
                    </div>
                    <div class="col form-group">
                        <label for="firstName1">Solde</label>
                        <input class="form-control" id="soldeh" type="text" placeholder="Solde" />
                    </div>
                    
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">ferme</button>
                    <button  class="btn btn-primary ml-2" type="submit">Ajouter</button>
                </div>
            </div>
        </form>
        </div>
    </div>
    <!-- ============ Nouvelle Emploi ============= -->
    <script src="../../dist-assets/js/plugins/jquery-3.3.1.min.js"></script>
    <script src="../../dist-assets/js/plugins/bootstrap.bundle.min.js"></script>
    <script src="../../dist-assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="../../dist-assets/js/scripts/script.min.js"></script>
    <script src="../../dist-assets/js/scripts/sidebar.large.script.min.js"></script>
    <script>
     $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
$(document).ready(function () {
    ///////////////////////////////////////////////////////////////////////////////////////
$('#Houraireform').submit(function(e) {
      e.preventDefault();
        /*  $("#butsave").attr("disabled", "disabled"); */
        let reference=$("#referenceh").val();
        let mois=$("#moish").val();
        let Nombre_heure=$("#Nombre_heureh").val();
        let Consomme=$("#Consommeh").val();
        let solde=$("#soldeh").val();
        
       
       
          $.ajax({
              url: "{{url('ajouter_houraire')}}",
              type: "POST",
              data:{
                reference:reference,
                mois:mois,
                Nombre_heure:Nombre_heure,
                Consomme:Consomme,
                solde:solde},

                success: function(data1){
                  console.log(data1);
                  if(data1){
                    $('#houraireajou tbody').prepend('<tr id="emp'+data1.id+'"><td>'+data1.mois+'</td><td>'+data1.nbre_heure+'</td><td></td><td></td><td><a class="text-success mr-2" href="javascript:void(0)" onclick="getemploi('+data1.id+')"><i class="nav-icon i-Pen-2 font-weight-bold"></i></a><button onclick="deleteemploi('+data1.id+')" class="btn btn-secondary" type="button" >delete</button></td></tr>');
                    $('#Houraireform')[0].reset();
                    $('#Houraire').modal('hide');

                  }
                  else if(data1.statusCode==201){
                     alert("Error occured !");
                  }
                  
              }
          });
      
  });
  /////////////////////////////////////////////////////////////////////////////////////////

///////////////////////////////////////////////////////////////////////////////////////
$('#emploiform').submit(function(e) {
      e.preventDefault();
        /*  $("#butsave").attr("disabled", "disabled"); */
        let Ref=$("#reference").val();
        let jours=$("#jours").val();
        let creneau_horaire=$("#creneau_horaire").val();
        let heure_debut=$("#heure_debut").val();
        let heure_fin=$("#heure_fin").val();
        let section=$("#section").val();
        let groupe=$("#groupe").val();
        let matier=$("#matiere").val();
        let emploi=$("#type_intervention").val();
        let intervantion=$("#type_emploi").val();
        

       
       
          $.ajax({
              url: "{{url('ajouter_emploi')}}",
              type: "POST",
              data:{
                Ref:Ref,
                jours:jours,
                creneau_horaire:creneau_horaire,
                heure_debut:heure_debut,
                heure_fin:heure_fin,
                section:section,
                groupe:groupe,
                matier:matier,
                emploi:emploi,
                intervantion:intervantion,
            },

                success: function(data1){
                  console.log(data1);
                  if(data1){
                    $('#emploi_table tbody').prepend('<tr id="emp'+data1.id+'"><td>'+data1.jours+'</td><td>'+data1.creneau_horaire+'</td><td>'+data1.heure_debut+'</td><td>'+data1.heure_fin+'</td><td>'+data1.type_intervention+'</td><td>'+data1.matieres+'</td><td>'+data1.section+'</td><td>'+data1.groupe+'</td><td><a class="text-success mr-2" href="javascript:void(0)" onclick="getemploi('+data1.id+')"><i class="nav-icon i-Pen-2 font-weight-bold"></i></a><button onclick="deleteemploi('+data1.id+')" class="btn btn-secondary" type="button" >delete</button></td></tr>');
                    $('#emploiform')[0].reset();
                    $('#emploi').modal('hide');

                  }
                  else if(data1.statusCode==201){
                     alert("Error occured !");
                  }
                  
              }
          });
      
  });
  /////////////////////////////////////////////////////////////////////////////////////////
  $('#editemploiform').submit(function(e) {
      e.preventDefault();
        /*  $("#butsave").attr("disabled", "disabled"); */
        let id=$("#id").val();
        let jours=$("#ejours").val();
        let creneau_horaire=$("#ecreneau_horaire").val();
        let heure_debut=$("#eheure_debut").val();
        let heure_fin=$("#eheure_fin").val();
        let section=$("#esection").val();
        let groupe=$("#egroupe").val();
       
       
          $.ajax({
              url:"editemploi/"+id,
              type: "POST",
              data:{
                "_token": "{{ csrf_token() }}",
                id:id,
                jours:jours,
                creneau_horaire:creneau_horaire,
                heure_debut:heure_debut,
                heure_fin:heure_fin,
                section:section,
                groupe:groupe},

                success: function(data1){
                  console.log(data1);
                  if(data1){
                    $('#emploi_table tbody').prepend('<tr id="emp'+data1.id+'"><td>'+data1.jours+'</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a class="text-success mr-2" href="javascript:void(0)" onclick="getemploi('+data1.id+')"><i class="nav-icon i-Pen-2 font-weight-bold"></i></a><button onclick="deleteemploi('+data1.id+')" class="btn btn-secondary" type="button" >delete</button></td></tr>');
                    $('#emploiform')[0].reset();
                    $('#emploi').modal('hide');

                  }
                  else if(data1.statusCode==201){
                     alert("Error occured !");
                  }
                  
              }
          });
      
  });
  /////////////////////////////////////////////////////////////////////////////////////
 
     $('#autorisation').submit(function(e) {
      e.preventDefault();
        /*  $("#butsave").attr("disabled", "disabled"); */
        let Ref=$("#Ref").val();
        let date_autorisation=$("#date_autorisation").val();
        let type_autorisation=$("#type_autorisation").val();
        let type_beneficiaire=$("#type_beneficiaire").val();
        let nom=$("#nom").val();
        let prenom=$("#prenom").val();
        let nom_ar=$("#nom_ar").val();
        let prenom_ar=$("#prenom_ar").val();
        let type_etablissment_o=$("#type_etablissment_o").val();
        let etablissment_o=$("#etablissment_o").val();
        let etablissment_o_ar=$("#etablissment_o_ar").val();
        let type_etablissment_c=$("#type_etablissment_c").val();
        let etablissment_c=$("#etablissment_c").val();
        let etablissment_c_ar=$("#etablissment_c_ar").val();
        let date_debut=$("#date_debut").val();
        let date_fin=$("#date_fin").val();
        let annees_univ=$("#annees_univ").val();
        let periode=$("#periode").val();
        let matricule=$("#matricule").val();
        let cine=$("#cine").val();
        let fonction=$("#fonction").val();
        let grade=$("#grade").val();
        



$.ajax({
              url: "{{url('ajouter_auto')}}",
              type: "POST",
              data:{
                Ref:Ref,
date_autorisation:date_autorisation,
type_autorisation:type_autorisation,
type_beneficiaire:type_beneficiaire,
nom:nom,
prenom:prenom,
nom_ar:nom_ar,
prenom_ar:prenom_ar,
type_etablissment_o:type_etablissment_o,
etablissment_o:etablissment_o,
etablissment_o_ar:etablissment_o_ar,
type_etablissment_c:type_etablissment_c,
etablissment_c:etablissment_c,
etablissment_c_ar:etablissment_c_ar,
date_debut:date_debut,
date_fin:date_fin,
annees_univ:annees_univ,
periode:periode,
matricule:matricule,
cine:cine,
fonction:fonction,
grade:grade

              },
              success: function(data){
                  if(data){
                    $('#autorisation')[0].reset();
                    $('#referencere').prepend('<div class="alert alert-card alert-success" role="alert"><strong class="text-capitalize">envoyer!</strong> votre référence est '+data.reference+'.<button class="close" type="button" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>') 
                                 }
                  else {
                     alert("Error occured !");
                  }
                  
              }
          });
      
  });

            });
    </script>
    <script>
        function deleteemploi(id){

 $.ajax(
    {
        url: "delete_emploi/"+id,
        type: 'get',
        data: {
            id: id,
        },
        success: function (){
            $("#emp"+id).remove();
        }
    });
}
function getemploi(id){
    $.ajax(
    {
        url: "getemploi/"+id,
        type: 'get',
        data: {
            id: id,
        },
        success: function (data){
            $("#ecreneau_horaire").val(data.creneau_horaire);
            $("#ejours").val(data.jours);
            $("#eheure_debut").val(data.heure_debut);
            $("#eheure_fin").val(data.heure_fin);
            $("#esection").val(data.section);
            $("#egroupe").val(data.groupe);
            $("#id").val(data.id);
            $("#editemploi").modal('toggle');
        }
    });

}
    </script>
    <script>
 $(document).ready(function(){
  
  $("#empsearch").keyup(function(){
    let ref=$("#empsearch").val();
    $('#emploi_table tbody').empty();

    $.ajax(
    {
        url: "getemplois/"+ref,
        type: 'get',
        data: {
            ref: ref,
        },
        success: function (emp){
            $.each(emp, function( index, value ) {
                $('#emploi_table tbody').prepend('<tr id="emp'+emp[index].id+'"><td>'+emp[index].jours+'</td><td>'+emp[index].creneau_horaire+'</td><td>'+emp[index].heure_debut+'</td><td>'+emp[index].heure_fin+'</td><td>'+emp[index].type_intervention+'</td><td>'+emp[index].matieres+'</td><td>'+emp[index].section+'</td><td>'+emp[index].groupe+'</td><td><a class="text-success mr-2" href="javascript:void(0)" onclick="getemploi('+emp[index].id+')"><i class="nav-icon i-Pen-2 font-weight-bold"></i></a><button onclick="deleteemploi('+emp[index].id+')" class="btn btn-secondary" type="button" >delete</button></td></tr>');

});
        }
    });
  });
  /////////////////////////////////////////////////////////////////////////////
  $("#Nombre_heureh").keyup(function(){
    let ref=$("#referenceh").val();
    let moish=$("#moish").val();
    let heureh=$("#Nombre_heureh").val();
    let h1 = parseInt(heureh);

    $.ajax(
    {
        url: "getheurses",
        type: 'get',
        data: {
            ref: ref,
            moish:moish,
            heureh:heureh
        },
        success: function (data){
            if(!h1){
                $('#heureverfy').text("saisir un number");
            }
            else if(h1 > data){
            $('#heureverfy').text("le nombre d'heures doit être inférieur ou egale à "+data);
        }else{
            $('#heureverfy').text("nombre d'heures est valide");
        }
        }
        
    });
   
  });
});
    </script>
</body>

</html>