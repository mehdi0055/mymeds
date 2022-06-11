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
                            <li class="breadcrumb-item active">Utilisateurs</li>
                        </ul>
                    </div>

                </div>
            </div>
            <div class="row clearfix text-center ">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="card top_counter p-3">
                        <div class="body ">
                            <div id="top_counter1" class="carousel vert slide" data-ride="carousel"
                                data-interval="2500">
                                <div class="carousel-inner">
                                    <div class="carousel-item active ">
                                        <div class="icon"><i class="icon-users"
                                                style="font-size:46px"></i> </div>
                                        <div class="content">
                                            <div class="text">Utilisateur</div>
                                            <h5 class="number">{{ $users->count() }}</h5>
                                        </div>
                                    </div>
                                    <div class="carousel-item  ">
                                        <div class="icon"><i class="icon-user-following"
                                                style="font-size:46px"></i> </div>
                                        <div class="content">
                                            <div class="text">Utilisateur Active</div>
                                            <h5 class="number">0</h5>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="icon"><i class="icon-user-unfollow"
                                                style="font-size:46px"></i> </div>
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

                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="card top_counter bg-primary p-3">
                        <div class="body text-light">
                            <div class="icon"><i class="icon-user-following" style="font-size:46px"></i>
                            </div>
                            <div class="content">
                                <div class="text">Utilisateur Active</div>
                                <h5 class="number ">2</h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="card top_counter bg-danger p-3">
                        <div class="body text-light">
                            <div class="icon"><i class="icon-user-unfollow" style="font-size:46px"></i> </div>
                            <div class="content">
                                <div class="text">Utilisateur inactive</div>
                                <h5 class="number ">2</h5>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

            <!-- modals -->

            <div wire:ignore.self class="modal fade" id="confirmationDelete" tabindex="-1" role="dialog">
                <div class="modal-dialog  modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-danger text-light ">
                            <h4 class="title" id="smallModalLabel">Confirmation</h4>
                        </div>
                        <div class="modal-body">Voulez-vous vraiment supprimer cet utilisateur {{ $name }} ?


                        </div>
                        <div class="modal-footer">
                            <button wire:click.prevent="delete()" class="btn btn-danger">Oui</button>
                            <button type="button" class="btn btn-light" data-dismiss="modal">Non</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- End modals -->

            <!-- Notification -->

            @if (session()->has('userDeleted'))
                <script>
                    toastr.error('{{ session('userDeleted') }}');
                </script>
            @endif
            @if (session()->has('userActive'))
                <script>
                    toastr.success('{{ session('userActive') }}');
                </script>
            @endif
            @if (session()->has('userInactive'))
                <script>
                    toastr.error('{{ session('userInactive') }}');
                </script>
            @endif

            <!-- End Notification -->

            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <a href="{{ route('admin-addUser') }}" class="btn  btn-primary"
                                    href="javascript:void(0);" title="Weekly"><i class="fa fa-plus"></i> Ajouter un
                                    utilisateur
                                </a>
                            </h2>
                            <ul class="header-dropdown">
                                <form id="navbar-search" class="navbar-form search-form">
                                    <input wire:model="searchTerm" class="form-control" placeholder="Search here..."
                                        type="text">
                                    <button type="button" class="btn btn-default"><i
                                            class="icon-magnifier"></i></button>
                                </form>
                            </ul>
                        </div>
                        <div class="header">
                            <p class="float-md-right">
                                <span class="badge badge-success">0 Active</span>
                                <span class="badge badge-danger">2 Inactive</span>
                            </p>
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
                                            <th>Activation</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $item)
                                            <tr>
                                                <td><img src="{{ asset('primary/assets/images/users/' . $item->profile_photo_path) }}"
                                                        class="rounded-circle user-photo" alt="User Profile Picture"
                                                        width="52" height="52"></td>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->email }}</td>
                                                <td><span
                                                        class="badge badge-{{ $item->active == '0' ? 'success' : 'danger' }}">{{ $item->active == '0' ? 'Active' : 'Inactive' }}</span>
                                                </td>

                                                <td>
                                                    <a href="#" wire:click.prevent="changeStatus({{ $item->id }})"
                                                        title="{{ $item->active == 0 ? 'incative' : 'active' }}"><i
                                                            class="{{ $item->active == 0 ? 'fa fa-toggle-on text-success' : 'fa fa-toggle-off text-danger' }} icon-size"></i></a>
                                                </td>
                                                <td>
                                                    <a href="{{ route('admin-editUser', $item->id) }}"
                                                        title="Edit"><i
                                                            class="icon-note text-primary icon-size "></i></a>
                                                    <a href="#"
                                                        wire:click.prevent="confirmDeleteUser({{ $item->id }})"
                                                        data-toggle="modal" data-target="#confirmationDelete"
                                                        title="Comment"><i
                                                            class="icon-trash text-danger icon-size"></i></a>
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
