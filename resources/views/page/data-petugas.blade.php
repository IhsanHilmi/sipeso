@extends('template.base')
@section('content')
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card">
                <div class="header">
                    <h2> Data Petugas </h2>
                    <ul class="header-dropdown">
                        <li class="dropdown"><a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more-vert"></i> </a>
                            <ul class="dropdown-menu pull-right">
                                <li><a href="javascript:void(0);" data-toggle="modal" data-target="#tambahModal">Tambah</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="body">
                    <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Level</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Nama</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Level</th>
                                <th></th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @for ($i = 0; $i < 96; $i++)
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>
                                        <button type="button" class="btn btn-raised bg-green waves-effect waves-light" data-toggle="modal" data-target="#editModal"> <i class="material-icons">mode_edit</i> </button>
                                        <button type="button" class="btn btn-raised bg-red waves-effect waves-light" data-type="cancel"> <i class="material-icons">delete</i> </button>
                                    </td>
                                </tr>
                            @endfor
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Tambah Data -->
    <div class="modal fade" id="tambahModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="largeModalLabel">Tambah Petugas</h4>
                </div>
                <form action="" class="">
                    <div class="modal-body">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" placeholder="Nama Petugas" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" placeholder="Username" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="email" class="form-control" placeholder="Email" />
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="form-group col-sm-6">
                                    <div class="form-line">
                                        <input type="password" class="form-control" placeholder="Password" />
                                    </div>
                                </div>
                                <div class="form-group col-sm-6">
                                    <div class="form-line">
                                        <input type="password" class="form-control" placeholder="Konfirmasi Password" />
                                    </div>
                                </div>
                            </div>
                            <select class="form-control show-tick">
                                <option>Mustard</option>
                                <option>Ketchup</option>
                                <option>Relish</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">Tutup</button>
                        <input type="submit" class="btn btn-link waves-effect" value="Simpan">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal Edit Data -->
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="largeModalLabel">Tambah Petugas</h4>
                </div>
                <form action="" class="">
                    <div class="modal-body">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" placeholder="Nama Petugas" value="Nama Sebelumnya"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" placeholder="Username"  value="Nama Sebelumnya"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="email" class="form-control" placeholder="Email"  value="Nama Sebelumnya"/>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="form-group col-sm-6">
                                    <div class="form-line">
                                        <input type="password" class="form-control" placeholder="Password"  value="Nama Sebelumnya"/>
                                    </div>
                                </div>
                                <div class="form-group col-sm-6">
                                    <div class="form-line">
                                        <input type="password" class="form-control" placeholder="Konfirmasi Password"  value="Nama Sebelumnya"/>
                                    </div>
                                </div>
                            </div>
                            <select class="form-control show-tick">
                                <option>Mustard</option>
                                <option>Ketchup</option>
                                <option>Relish</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">Tutup</button>
                        <input type="submit" class="btn btn-link waves-effect" value="Simpan">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection