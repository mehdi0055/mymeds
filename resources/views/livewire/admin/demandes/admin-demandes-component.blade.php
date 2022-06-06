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
                                            <h5 class="number">{{ $demandes->count() }}</h5>
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
                        <div class="modal-body">Voulez-vous vraiment supprimer cet demande  ?


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



            <!-- End Notification -->

            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <a href="{{ route('admin-addUser') }}" class="btn  btn-primary" href="javascript:void(0);" title="Weekly"><i
                                        class="fa fa-plus"></i> Ajouter un utilisateur
                                </a>
                            </h2>
                            <ul class="header-dropdown">
                                    <form id="navbar-search" class="navbar-form search-form">
                                        <input wire:model="searchTerm"  class="form-control" placeholder="Search here..." type="text">
                                        <button type="button" class="btn btn-default"><i class="icon-magnifier"></i></button>
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
                                            <th>#</th>
                                            <th>Logo</th>
                                            <th>Nom docteur</th>
                                            <th>Telephone</th>
                                            <th>Email</th>
                                            <th>Date de creation</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($demandes as $item)
                                            <tr>
                                                <td>{{ $item->id }}</td>
                                                <td><img src="{{ asset('primary/assets/images/') }}/{{ $item->cabinet_logo }}"
                                                    class="rounded-circle user-photo" alt="User Profile Picture"
                                                    width="52" height="52"></td>
                                                <td>{{ $item->lname .' ' . $item->fname }}</td>
                                                <td>{{ $item->phone }}</td>
                                                <td>{{ $item->email }}</td>
                                                <td>{{ $item->created_at }}</td>


                                                <td><span
                                                        class="badge badge-{{ $item->status == '1' ? 'success' : 'warning' }}">{{ $item->status == '1' ? 'Valider' : 'En cours' }}</span>
                                                </td>

                                                <td>
                                                    <a href="#"
                                                        title="Afficher"><i class="icon-eye text-primary icon-size "></i></a>
                                                    <a href="#"
                                                        wire:click.prevent="confirmDeleteUser({{ $item->id }})"
                                                        data-toggle="modal" data-target="#confirmationDelete"
                                                        title="Suprimer"><i
                                                            class="icon-trash text-danger icon-size"></i></a>
                                                </td>

                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="d-flex justify-content-center">
                                @if ($demandes->count())
                                    {{ $demandes->links('livewire-pagination') }}
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

