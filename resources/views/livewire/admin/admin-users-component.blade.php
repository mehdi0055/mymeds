<div>
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header mb-5">
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
            <div class="row clearfix text-center ">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="card top_counter">
                        <div class="body">
                            <div class="icon"><i class="fa fa-users"
                                    style="width: 40px;height:40px;font-size:35px"></i> </div>
                            <div class="content">
                                <div class="text">Utilisateurs</div>
                                <h5 class="number ">2</h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="card top_counter">
                        <div class="body">
                            <div id="top_counter1" class="carousel vert slide" data-ride="carousel"
                            data-interval="2500">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="icon" ><i class="fa fa-user"  style="width: 40px;height:40px;font-size:35px"></i> </div>
                                    <div class="content">
                                        <div class="text">Utilisateur Active</div>
                                        <h5 class="number">0</h5>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="icon"><i class="fa fa-user-times" style="width: 40px;height:40px;font-size:35px"></i> </div>
                                    <div class="content">
                                        <div class="text">Utilisateur inactive</div>
                                        <h5 class="number">2</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2><button class="btn  btn-primary" href="javascript:void(0);" title="Weekly"><i class="fa fa-plus"></i> Ajouter
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
                                            <th>Avatar</th>
                                            <th>Nom</th>
                                            <th>Adresse email</th>
                                            <th>Statue</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $item)
                                            <tr>
                                                <td><img src="{{ asset('primary/assets/images/users/male.png') }}"
                                                        class="rounded-circle user-photo" alt="User Profile Picture"
                                                        width="40" height="40"></td>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->email }}</td>
                                                <td><span
                                                        class="badge badge-{{ $item->active == '1' ? 'success' : 'danger' }}">{{ $item->active == '1' ? 'Active' : 'Non Active' }}</span>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-warning" title="Edit"><i
                                                            class="icon-note"></i></button>
                                                    <button type="button" class="btn btn-sm btn-danger"
                                                        title="Comment"><i class="icon-trash"></i></button>
                                                    @if ($item->active == 1)
                                                        <button type="button"
                                                            wire:click.prevent="inactiveUser({{ $item->id }})"
                                                            class="btn btn-sm btn-danger" title="Inactiver"><i
                                                                class="icon-refresh"></i></button>
                                                    @else
                                                        <button type="button"
                                                            wire:click.prevent="activeUser({{ $item->id }})"
                                                            class="btn btn-sm btn-success" title="Activer"><i
                                                                class="icon-refresh"></i></button>
                                                    @endif


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
