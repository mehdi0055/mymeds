<div>
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i
                                    class="fa fa-arrow-left"></i></a> Dashboard</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index-2.html"><i class="icon-home"></i></a></li>
                            <li class="breadcrumb-item active">Users</li>
                        </ul>
                    </div>

                </div>
            </div>
            <div class="row clearfix text-center">
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="card">
                        <div class="body">
                            <i class="fa fa-users text-primary" style="width: 60px;height:60px;font-size:40px"></i>
                            <h6>Utilisateurs</h6>
                            <span>2</span>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="card">
                        <div class="body">
                            <i class="fa fa-check text-primary"
                                style="width: 60px;height:60px;font-size:40px"></i>
                            <h6>Utilisateurs Active</h6>
                            <span>0 </span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="card">
                        <div class="body">
                            <i class="fa fa-user-times text-danger"
                                style="width: 60px;height:60px;font-size:40px"></i>
                            <h6>Utilisateurs non active</h6>
                            <span>2</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2><button class="btn btn-sm btn-primary" href="javascript:void(0);" title="Weekly">Ajouter
                                    un
                                    utilisateur</button></h2>
                            <ul class="header-dropdown">
                                <input style="border-radius: 5px" class="form-control py-2" type="search"
                                    placeholder=" Search..." id="example-search-input" wire:model="searchTerm">
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table  table-hover js-basic-example dataTable table-custom">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>Nom</th>
                                            <th>Adresse email</th>
                                            <th>Statue</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $item)
                                            <tr>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->email }}</td>
                                                <td><span
                                                        class="badge badge-{{ $item->active == '0' ? 'danger' : 'success' }}">{{ $item->status == '0' ? 'Active' : 'Non Active' }}</span>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-warning" title="Edit"><i
                                                            class="icon-note"></i></button>
                                                    <button type="button" class="btn btn-sm btn-danger"
                                                        title="Comment"><i class="icon-trash"></i></button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                            <div class="d-flex justify-content-center">
                                @if ($users->count())
                                    {{ $users->links('livewire-pagination') }}
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

