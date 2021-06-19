@extends('admin.layouts.admin')

@section('content')

<div class="container">
    <div class="main-body">
        <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                            <div class="mt-3">
                                <h4>Nom Prenom</h4>
                                <p class="text-secondary mb-1">Professeur</p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mt-3">

                </div>
            </div>
            <div class="col-md-8">
                <div class="card mb-3">
                    <div class="card-body">

                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Email</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                email@gmail.com
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">numero de telephone</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                0602164976678
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Roles</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                Professeur
                                <br>
                                <br>
                                directeur de These
                                <br>
                                <br>
                                Chef d'equipe
                            </div>


                        </div>

                    </div>
                </div>


                <div class="col-sm-6 mb-3">

                </div>



            </div>
        </div>

    </div>
    <div class="add">
        <button type="button" class="fav btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Modifier Mot de Passe</button>


        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modifier Mot de Passe</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Taper le mot de passe actuel :</label>
                                <input type="password" class="form-control" id="recipient-name" required>
                            </div>
                            <div class="form-group">
                                <label for="file" class="col-form-label">Tapez le nouveau mot de passe :</label>
                                <input type="password" class="form-control" id="file" required>
                            </div>
                            <div class="form-group">
                                <label for="file" class="col-form-label">Retapez le nouveau mot de passe :</label>
                                <input type="password" class="form-control" id="file" required>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary">Enregistrer</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection








@section('scripts')

@endsection

@section('styles')
<style>
    .btn-primary {
        background-color: #037CC2;
        border-color: #037CC2;
    }
    .add {
      margin: auto;
      width: 200px; 
      border-radius: 100px;

   }
</style>
@endsection