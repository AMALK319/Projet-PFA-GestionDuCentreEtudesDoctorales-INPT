@extends('layouts.admin')

@section('content')

<div class="content">

   <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <p id="totalLines"></p>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
         <span aria-hidden="true">&times;</span>
      </button>
   </div>
   <div id="dropdown">
      <div class="dropdown ">
         <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
            Choisir Un Sujet
         </button>
         <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
            @foreach($sujets as $key => $sujet)
            <li><a class="dropdown-item " href="#">{{ $sujet->titreSujet ?? ''}}</a></li>

            @endforeach
            
            <li>
                <a class="dropdown-item " href="#">Tous les sujets</a>
            </li>
           
         </ul>
      </div>
   </div>
   <div class="card card-table">
      <div class="card-body">
         <div class="table-responsive">
            <table id="example" class="table table-striped">
               <thead>
                  <tr>
                     <th>candidat</th>
                     <th>Email</th>
                     <th>Date Candidature</th>
                     <th>Profil</th>

                  </tr>
               </thead>
               <tbody>
                  @foreach($candidats as $key => $candidat)
                  <tr>

                     <td>
                        {{ $candidat->nom ?? '' }} {{ $candidat->prenom?? '' }}
                     </td>
                     <td>
                        {{ $candidat->email ?? '' }}
                     </td>

                     <td>
                        22/05/2021
                     </td>
                     <td><a href="">consulter</a></td>
                  </tr>
                  @endforeach


               </tbody>

            </table>


         </div>
      </div>
   </div>
</div>

@endsection








@section('scripts')

<script>
   $(document).ready(function() {
      $('#example').DataTable({
         language: {
            url: "DataTables/media/French.json"
         },
         searching: true,

         ordering: false,


         //compter le nombre de ligne
         "fnDrawCallback": function(settings) {
            totalLines = settings.aoData.length;
            document.getElementById("totalLines").innerHTML = "Le nombre total des candidatures : " + totalLines;
         },
         dom: 'Bfrtip',
         buttons: [{
            extend: 'collection',
            text: 'Export',
            buttons: [
               'excel',
               'csv',
               'pdf',
               'print'
            ]
         }]

      });

   });

   $('#exampleModal').on('show.bs.modal', function(event) {
      var button = $(event.relatedTarget) // Button that triggered the modal
      var recipient = button.data('whatever') // Extract info from data-* attributes
      // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
      // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
      var modal = $(this)
      modal.find('.modal-title').text('New message to ' + recipient)
      modal.find('.modal-body input').val(recipient)
   })

   $('#myAlert').on('closed.bs.alert', function() {
      // do something???
   })
</script>





@endsection

@section('styles')
<style>
   .card {
      padding: 0px;
      margin: 15px;

   }

   .content .add {
      margin: auto;
      width: 200px;
      border-radius: 100px;

   }

   .btn-primary {
      background-color: #037CC2;
      border-color: #037CC2;
   }


   .alert {

      margin-left: 15px;
      margin-right: 15px;
      padding-bottom: 0px;
      background-color: #DCDCDC;
      border-color: #DCDCDC;
   }

   #totalLines {
      font-family: 'Times New Roman', Times, serif;
      color: black;
      font-size: large;

   }

   .dropdown {
      max-width: 15%;
      margin-left: 15px;
   }

   .dropdown-item {
      background-color: white;
      border-color: white;
   }
</style>
@endsection