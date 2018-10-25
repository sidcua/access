@extends('layouts.app')
@section('title', 'Accounts')
@section('content')
    @include('inc.navbar_admin')
    <div class="container-fluid pt-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="jumbotron bg-white">
                    <h1 class="display-5 text-primary">Accounts</h1>
                    <hr class="my-4">
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addAccount"><i class="fa fa-plus"></i> Add Account</button>
                <hr>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="table-responsive">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="tblAccount">
                        </tbody>
                    </table>
                </div>
                
            </div>
        </div>
    </div>

    
    
    {{-- Modals --}}
    {{-- Add account --}}
    <div class="modal fade" id="addAccount" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-primary" id="exampleModalCenterTitle">Add Account</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="addAccount-error" class="alert alert-danger hide">
                    </div>
                    <form class="needs-validation" id="add-account-form">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" id="email" class="form-control" name="email" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="">Position</label>
                            <select name="position" id="slctposition" class="custom-select">
                            </select>
                        </div>
                        
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" id="save-account-button" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>

    {{-- Edit account --}}
    <div class="modal fade" id="editAccount" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-warning" id="exampleModalCenterTitle">Edit Account</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="editAccount-error" class="alert alert-danger hide">
                    </div>
                    <form class="needs-validation" id="add-account-form">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" id="email" class="form-control" name="email" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="">Position</label>
                            <select name="position" id="slctposition" class="custom-select">
                            </select>
                        </div>
                        
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" id="edit-account-button" class="btn btn-warning">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    {{-- Delete account --}}
    <div class="modal fade" id="deleteAccount" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-danger" id="exampleModalCenterTitle">Delete Account</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h4>Are you sure you want to delete this account?</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" id="delete-account-button" class="btn btn-danger">Confirm</button>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script type='text/javascript'>

        var token = $(document).find('input[name="_token"]').prop('value');

        console.log(token);

        $(document).ready(function(){
            listAccount();
            $("#addAccount").on('hidden.bs.modal', function (){
                $("#addAccount-error").html('');
                $("#addAccount-error").hide();
            });
            $("#editAccount").on('hidden.bs.modal', function (){
                $("#editAccount-error").html('');
                $("#editAccount-error").hide();
            });
            $("#addAccount").on('show.bs.modal', function (){
                listPosition();
            });
            $("#editAccount").on('show.bs.modal', function (){
                listPosition();
            });
        });
        $('#save-account-button').on('click', addAccount);

        var selectedAccount = null;

        var deleteAccountButton = $('#delete-account-button');

        $(document).off('click.delete-account-btn').on('click.delete-account-btn', '.delete-account-btn', function(){
            selectedAccount = accounts[$(this).data('index')];
        });

        $(document).off('click.edit-account-button').on('click.edit-account-button', '.edit-account-button', function(){
            if(accounts.length > 0){
                console.log(accounts[$(this).data('index')]);
                //fill form
            }
        });



        deleteAccountButton.off().click(function(){
            if(selectedAccount){
                deleteAccount(selectedAccount.accountID);
            }
        });
    </script>
@endsection