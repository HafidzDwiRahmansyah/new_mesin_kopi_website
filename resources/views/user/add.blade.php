@extends('template.interface2')
@section('title', 'Tambah User')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <div class="container">
                        <h4 class="text-center py-2">Add User</h4>
                        <form action="/user_add_new" method="post">
                            @csrf
                            <div class="row mt-3">
                                <div class="col-lg-6">
                                    <label class="form-label" for="name">Nama</label>
                                    <input class="form-control" type="text" name="name" id="name" required><br>
                                    <label class="form-label" for="mail">Email</label>
                                    <input class="form-control" type="email" name="email" id="email" required><br>
                                </div>
                                <div class="col-lg-6">
                                    <label class="form-label" for="role">Role</label>
                                    <select class="form-control" name="role" id="role" required>
                                        <option value="admin">Admin</option>
                                        <option value="mesin">Mesin</option>
                                        <option value="monitoring">Monitoring</option>
                                        <option value="owner">Owner</option>
                                    </select><br>
                                    <label class="form-label" for="pass">Password</label>
                                    <input class="form-control" type="password" name="password" id="password"
                                        required><br>
                                </div>
                            </div>
                            <button class="btn btn-primary mx-auto d-block my-4" type="submit">Simpan Data</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection