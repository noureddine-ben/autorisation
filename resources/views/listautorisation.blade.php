<!DOCTYPE html>
<html lang="en" dir="">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Basic Action Bar | Gull Admin Template</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet" />
    <link href="../../dist-assets/css/themes/lite-purple.min.css" rel="stylesheet" />
    <link href="../../dist-assets/css/plugins/perfect-scrollbar.min.css" rel="stylesheet" />
</head>

<body class="text-left">
    <div class="app-admin-wrap layout-sidebar-large">
        @include('header')
       @include('sidebar')
        <div class="main-content-wrap sidenav-open d-flex flex-column">
            <!-- ============ Body content start ============= -->
            <div class="main-content">
                <div class="breadcrumb">
                    <h1>List des autorisation</h1>
                   
                </div>
                <div class="separator-breadcrumb border-top"></div>
               <a href="{{url('demande')}}"  class="btn btn-primary btn-block m-1 mb-3">Nouvelle autorisation</a> 
            </div>
    <!-- end of row-->
    <div class="row mb-4 ">
        <div class="col">
            <div class="card text-left">
                <div class="card-body">
                    <div class="input-group mb-4">
                        <div class="form-outline">
                          <input type="search" id="usermpsearch" class="form-control" />
                        </div>
                        
                      </div>
                    <div class="table-responsive">
                        <table  id="auto_table" class="table">
                            <thead>
                                <tr>
                                    <th scope="col">N</th>
                                    <th scope="col">Type d'autorisation</th>
                                    <th scope="col">beneficaire</th>
                                    <th scope="col">Date Demande</th>
                                    <th scope="col">Annee universitaire</th>
                                    <th scope="col">etat</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Action</th>


                                </tr>
                            </thead>
                            <tbody>
                                {{-- @foreach ($autorisations as $autorisation)
                                <tr>
                                    <th scope="row">{{$autorisation['id']}}</th>
                                    <td>{{$autorisation['type_autorisation']}}</td>
                                    <td>{{$autorisation['nom']." ".$autorisation['prenom']}}</td>
                                    <td>{{\Carbon\Carbon::parse('2022-03-23')->format('M')}}</td>
                                    <td>{{$autorisation['annees_univ']}}</td>
                                    <td>@if ($autorisation['annees_univ'] != null)
                                    <span class="badge badge-warning">encore</span>
                                    @else
                                    <span class="badge badge-success">Approuver</span>
                                    @endif
                                       
                                    </td>
                                    <td></td>
                                    <td><a class="text-success mr-2" href="javascript:void(0)" onclick="getpointage({{$autorisation['id']}})"><i class="text-20 i-Eye"></i></a><a class="text-success mr-2"  data-toggle="modal" data-target=".bd-example-modal-lg" href="javascript:void(0)" onclick="getautorisation({{$autorisation['id']}})"><i class="nav-icon i-Pen-2 font-weight-bold"></i></a><a class="text-danger mr-2" href="#"><i class="nav-icon i-Close-Window font-weight-bold"></i></a></td>
                                </tr>
                                @endforeach --}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <div class="row mb-4 ">
        <div class="col">
            <div class="card text-left">
                <div class="card-body">
                    
                          <div class="input-group mb-4">
                            <div class="form-outline">
                                <label  for="picker1">Mois</label>
                                <select id="mois" name="mois" class="form-control">
                                    <option value="janvier">janvier</option>
                                     <option value="février">février</option>
                                     <option value="mars">mars</option>
                                     <option value="avril">avril</option>
                                     <option value="mai">mai</option>
                                     <option value="juin">juin</option >
                                     <option value="juillet">juillet</option>
                                     <option value="août">août</option>
                                     <option value="février">septembre</option>
                                     <option value="octobre">octobre</option>
                                     <option value="novembre">novembre</option>
                                     <option value="décembre">décembre</option>
                                </select>
                            </div>
                            
                          </div>     
                          <div class="card-title  ml-4 mb-3">Pointage:</div>

                    <div class="table-responsive">
                        <table id="pointage_t" class="table">
                            <thead>
                                <tr>
                                    <th scope="col">N</th>
                                    <th scope="col">Jours</th>
                                    <th scope="col">creneau horaire	</th>
                                    <th scope="col">Heure debut	</th>
                                    <th scope="col">Heure fin</th>
                                    <th scope="col">Total Heures</th>
                                    <th scope="col">Action</th>


                                </tr>
                            </thead>
                            <tbody>
                               
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-md-3 form-group mb-1">
                            <label for="picker1">Plafond</label>
                            <input id="plafond" name="Ref" class="form-control" type="text" placeholder="Plafond" />
                        </div>
                        <div class="col-md-3 form-group mb-1">
                            <label for="exampleInputEmail1">Aautorisation</label>
                            <input name="date_autorisation" class="form-control" id="autorisation" type="text" placeholder="Aautorisation" />
                            <!--  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                        </div>
                        <div class="col-md-3 form-group mb-1">
                            <label for="lastName1">Toutal des heures</label>
                            <input id="Ref" name="Ref" class="form-control" type="text" placeholder="totalheures" />
                        </div>
                        <div class="col-md-3 form-group mb-1">
                            <label for="picker1">Heures du Mois</label>
                            <input id="heuremoi" name="Ref" class="form-control" type="text" placeholder="Heures du Mois" />
                        </div>  
                    </div>
                </div>
            </div>
        </div>
        
    </div>
       
    <!-- end of row-->   
            <div class="flex-grow-1"></div>
           
            <!-- fotter end -->
        </div>
    </div>
    <!-- ============ Search UI Start ============= -->
           
           <!-- ============ edit Emploi ============= -->
           <div class="modal fade" id="editemploip" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle-2" aria-hidden="true">
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
                            <label for="lastName1">jours</label>
                            <input class="form-control" id="ejours" type="date" placeholder="Enter your last name" />
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
                            <input class="form-control" id="ematiere" type="text" placeholder="Matiere" />
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
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <div class="tab-pane fade show active" id="homeBasic" role="tabpanel" aria-labelledby="home-basic-tab">
                        <form id="editautorisation">
                            <div class="row">
                                <div class="col-md-3 form-group mb-1">
                                    <label for="picker1">Type d'autorisation</label>
                                    <select id="type_autorisation" name="type_autorisation" class="form-control">
                                        <option>Option 1</option>
                                        <option>Option 2</option>
                                        <option>Option 3</option>
                                    </select>
                                </div>
                                <div class="col-md-3 form-group mb-1">
                                    <label for="lastName1">Ref , Demande</label>
                                    <input id="Ref" name="Ref" class="form-control" type="text" placeholder="Ref , Demande" />
                                </div>
                                <div class="col-md-3 form-group mb-1">
                                    <label for="exampleInputEmail1">Date Demande</label>
                                    <input name="date_autorisation" class="form-control" id="date_autorisation" type="date" placeholder="Date Demande" />
                                    <!--  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                </div>
                                <div class="col-md-3 form-group mb-1">
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
                                <div class="col-md-3 form-group mb-1">
                                    <label for="lastName1">Etat Sous Ordon</label>
                                    <input name="etat_sous_ordon" class="form-control" id="etat_sous_ordon" type="text" placeholder="Etat Sous Ordon" />
                                </div><div class="col-md-3 form-group mb-1">
                                    <label for="lastName1">Date Signature Sous Ordon</label>
                                    <input name="date_signature_sous_ordon" class="form-control" id="date_signature_sous_ordon" type="text" placeholder="Date Signature Sous Ordon" />
                                </div><div class="col-md-3 form-group mb-1">
                                    <label for="lastName1">Etat Ordon</label>
                                    <input name="etat_ordon" class="form-control" id="etat_ordon" type="text" placeholder="Etat Ordon" />
                                </div><div class="col-md-3 form-group mb-1">
                                    <label for="lastName1">Date Signature Ordon</label>
                                    <input name="date_signature_ordon" class="form-control" id="date_signature_ordon" type="text" placeholder="Date Signature Ordon" />
                                </div>
                            
                            
                            </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                    <button type="submit" id="butsave" class="btn btn-primary">Valide</button>
                </div>
            </form>
            </div>
        </div>
 
    <!-- ============ Search UI End ============= -->
    <script src="../../dist-assets/js/plugins/jquery-3.3.1.min.js"></script>
    <script src="../../dist-assets/js/plugins/bootstrap.bundle.min.js"></script>
    <script src="../../dist-assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="../../dist-assets/js/scripts/script.min.js"></script>
    <script src="../../dist-assets/js/scripts/sidebar.large.script.min.js"></script>

  <script>
    function getautorisation(id){

$.ajax(
{
    url: "getautorisation/"+id,
    type: 'get',
    data: {
        id: id,
    },
    success: function (data){
        $("#Ref").val(data.reference);
$("#date_autorisation").val(data.date_autorisation);
$("#type_autorisation").val(data.type_autorisation);
$("#type_beneficiaire").val(data.type_beneficiaire);
$("#nom").val(data.nom);
$("#prenom").val(data.prenom);
$("#nom_ar").val(data.nom_ar);
$("#prenom_ar").val(data.prenom_ar);
$("#type_etablissment_o").val(data.type_etablissment_o);
$("#etablissment_o").val(data.etablissment_o);
$("#etablissment_o_ar").val(data.etablissment_o_ar);
$("#type_etablissment_c").val(data.type_etablissment_c);
$("#etablissment_c").val(data.etablissment_c);
$("#etablissment_c_ar").val(data.etablissment_c_ar);
$("#date_debut").val(data.date_debut);
$("#date_fin").val(data.date_fin);
$("#annees_univ").val(data.annees_univ);
$("#periode").val(data.periode);
$("#matricule").val(data.matricule);
$("#cine").val(data.cine);
$("#fonction").val(data.fonction);
$("#grade").val(data.grade);
$("#etat_sous_ordon").val(data.etat_sous_ordon);
$("#date_signature_sous_ordon").val(data.date_signature_sous_ordon);
$("#etat_ordon").val(data.etat_ordon);
$("#date_signature_ordon").val(data.date_signature_ordon);

        
    }
});
}
////////////////////////////////////////////////////////////////////////////////////
function pointer(id,ind){
    let total =  $("#total_heures"+ind).val();
    $.ajax(
    {
        url: "pointer/",
        type: 'post',
        data: {
            id: id,
            total:total,
        },
        success: function (data){
            console.log(data);
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
            $("#editemploip").modal('toggle');
        }
    });

}
///////////////////////////////////////////////////////////////////////////////////
function getpointage(id){
    $('#pointage_t tbody').empty();

    $.ajax(
{
    url: "getpointage/"+id,
    type: 'get',
    data: {
        id: id,
    },
    success: function (emp){  
        $.each(emp, function( index, value ) {
            var f1 = parseInt(emp[index].heure_debut);
            var f2 = parseInt(emp[index].heure_fin);
            var res = f2 - f1;

                $('#pointage_t tbody').prepend('<tr id="emploi"><td>'+emp[index].id+'</td><td>'+emp[index].jours+'</td><td>'+emp[index].creneau_horaire+'</td><td>'+emp[index].heure_debut+'</td><td>'+emp[index].heure_fin+'</td><td><input class="form-control" id="total_heures'+index+'" type="text" placeholder="Total Heures" /></td><td><a href="javascript:void(0)" onclick="pointer('+emp[index].id+','+index+')"><i class="text-20 mr-1 i-CMYK"></i></a><a class="text-success mr-2" href="javascript:void(0)" onclick="getemploi('+emp[index].id+')"><i class="nav-icon i-Pen-2 mr-1 font-weight-bold"></i></a><a href="javascript:void(0)" onclick="deleteemploi('+emp[index].id+')"><i class="nav-icon i-Close-Window font-weight-bold"></i></a></td>  </tr>');

});    
    }
});

}
$(document).ready(function () {
    //////////////////////////////////////////////////////////////////////////////////////////
    $("#usermpsearch").keyup(function(){
    let cne=$("#usermpsearch").val();
    $('#auto_table tbody').empty();

    $.ajax(
    {
        url: "usermpsearch/"+cne,
        type: 'get',
        data: {
            cne: cne,
        },
        success: function (data){
            $('#auto_table tbody').empty();

            $.each(data, function( index, value ) {

                if (data[index].date_signature_sous_ordon === null && data[index].date_signature_ordon == null) {
                    var  etat = "Encore";
                    var  type = "warning";
                    
                   } else
                   {
                    var  etat = "Approuvé"
                    var  type = "success";
                   }
                $('#auto_table tbody').prepend('<tr id="emp'+data[index].id+'"><td>'+data[index].type_autorisation+'</td><td>'+data[index].nom+'</td><td>'+data[index].date_autorisation+'</td><td>'+data[index].annees_univ+'</td><td><span class="badge badge-'+type+'">'+etat+'</span></td><td>'+data[index].type_autorisation+'</td><td>'+data[index].type_autorisation+'</td><td><a class="text-success mr-2" href="javascript:void(0)" onclick="getpointage('+data[index].id+')"><i class="text-20 i-Eye"></i></a><a class="text-success mr-2"  data-toggle="modal" data-target=".bd-example-modal-lg" href="javascript:void(0)" onclick="getautorisation('+data[index].id+')"><i class="nav-icon i-Pen-2 font-weight-bold"></i></a><a class="text-danger mr-2" href="#"><i class="nav-icon i-Close-Window font-weight-bold"></i></a></td></tr>');

});
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
                    $('#emploi_table tbody').prepend('<tr id="emp'+data1.id+'"><td>'+data1.jours+'</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a class="text-success mr-2" href="javascript:void(0)" onclick="getemploi('+data1.id+')"><i class="nav-icon i-Pen-2 font-weight-bold"></i></a><a href="javascript:void(0)" onclick="deleteemploi('+data1.id+')"><i class="nav-icon i-Close-Window font-weight-bold"></i></a></td></tr>');
                    $('#editemploip').modal('hide');

                  }
                  else if(data1.statusCode==201){
                     alert("Error occured !");
                  }
                  
              }
          });
      
  });
  /////////////////////////////////////////////////////////////////////////////////////
$('#editautorisation').submit(function(e) {
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
        let etat_sous_ordon=$("#etat_sous_ordon").val();
        let date_signature_sous_ordon=$("#date_signature_sous_ordon").val();
        let etat_ordon=$("#etat_ordon").val();
        let date_signature_ordon=$("#date_signature_ordon").val();
        



$.ajax({
              url: "{{url('edit_auto')}}",
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
grade:grade,
date_signature_ordon,
etat_ordon,
date_signature_sous_ordon,
etat_sous_ordon
              },
              success: function(data){
                    $('#bd-example-modal-lg').modal('hide');
   
               
              }
          });
      
  });

});

</script>
   
</body>

</html>