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
                            <li class="breadcrumb-item active">Demandes</li>
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
                                        <div class="icon"><i class="icon-docs"
                                                style="font-size:46px"></i> </div>
                                        <div class="content">
                                            <div class="text">Demandes</div>
                                            <h5 class="number">{{ $CountAllDemandes }}</h5>
                                        </div>
                                    </div>
                                    <div class="carousel-item  ">
                                        <div class="icon"><i class=" icon-check"
                                                style="font-size:46px"></i> </div>
                                        <div class="content">
                                            <div class="text">Demandes Accepter</div>
                                            <h5 class="number">{{ $CountdemandeValider }}</h5>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="icon"><i class="icon-ban"
                                                style="font-size:46px"></i> </div>
                                        <div class="content">
                                            <div class="text">Demandes Refuser</div>
                                            <h5 class="number">{{ $CountdemandeRefuser }}</h5>
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
                            <div class="icon"><i class=" icon-check" style="font-size:46px"></i>
                            </div>
                            <div class="content">
                                <div class="text">Demandes Accepter</div>
                                <h5 class="number ">{{ $CountdemandeValider }}</h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="card top_counter bg-danger p-3">
                        <div class="body text-light">
                            <div class="icon"><i class=" icon-ban" style="font-size:46px"></i> </div>
                            <div class="content">
                                <div class="text">Demandes Refuser</div>
                                <h5 class="number ">{{ $CountdemandeRefuser }}</h5>
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
                        <div class="modal-body">Voulez-vous vraiment supprimer ce demande  ?
                        </div>
                        <div class="modal-footer">
                            <button wire:click.prevent="deleteDemande()" class="btn btn-danger">Oui</button>
                            <button type="button" class="btn btn-light" data-dismiss="modal">Non</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- End modals -->

            <!-- Notification -->

            @if (session()->has('demandeDeleted'))
                <script>
                    toastr.error('{{ session('demandeDeleted') }}');
                </script>
            @endif

            <!-- End Notification -->

            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h6 class="font-weight-bold">Liste Des demandes En cours </h6>
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
                                <span class="badge badge-success">{{ $CountdemandeValider }} Demandes Accepte</span>
                                <span class="badge badge-danger">{{ $CountdemandeRefuser }} Demandes Refuse</span>
                                <span class="badge badge-warning">{{ $CountdemandeEncours }} Demandes En cours</span>
                            </p>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table  table-hover js-basic-example dataTable table-custom">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>#</th>
                                            <th>Logo</th>
                                            <th>Nom et Prénom</th>
                                            <th>Telephone</th>
                                            <th>Adresse email</th>
                                            <th>Date de creation</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($demandesEncours as $item)
                                            <tr>
                                                <td>{{ $item->id }}</td>
                                                <td><img src="{{ asset('primary/assets/images/') }}/{{ $item->logo_cabinet }}"
                                                        class="rounded-circle user-photo" alt="User Profile Picture"
                                                        width="52" height="52"></td>
                                                <td>{{ $item->lname . ' ' . $item->fname }}</td>
                                                <td>{{ $item->phone }}</td>
                                                <td>{{ $item->email }}</td>
                                                <td>{{ $item->created_at->format('Y-m-d') }}</td>


                                                <td><span
                                                        class="badge badge-{{ $item->status == '1' ? 'success' : 'warning' }}">{{ $item->status == '1' ? 'Valider' : 'En cours' }}</span>
                                                </td>

                                                <td>
                                                    <a href="{{ route('admin-demandes-show', $item->id) }}"
                                                        title="Afficher"><i
                                                            class="icon-eye text-primary icon-size "></i></a>
                                                    <a href="#"
                                                        wire:click.prevent="confirmDeleteDemande({{ $item->id }})"
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
                                @if ($demandesEncours->count())
                                    {{ $demandesEncours->links('livewire-pagination') }}
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h6 class="font-weight-bold">Liste Des demandes validée</h6>
                            <ul class="header-dropdown">
                                <form id="navbar-search" class="navbar-form search-form">
                                    <input wire:model="searchTerm1" class="form-control" placeholder="Search here..."
                                        type="text">
                                    <button type="button" class="btn btn-default"><i
                                            class="icon-magnifier"></i></button>
                                </form>
                            </ul>
                        </div>
                        <div class="header">
                            <p class="float-md-right">
                                <span class="badge badge-success">{{ $CountdemandeValider }} Demandes Accepte</span>

                            </p>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table  table-hover js-basic-example dataTable table-custom">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>#</th>
                                            <th>Logo</th>
                                            <th>Nom et Prénom</th>
                                            <th>Telephone</th>
                                            <th>Adresse email</th>
                                            <th>Date de creation</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($demandesValider as $item)
                                            <tr>
                                                <td>{{ $item->id }}</td>
                                                <td><img src="{{ asset('primary/assets/images/') }}/{{ $item->logo_cabinet }}"
                                                        class="rounded-circle user-photo" alt="User Profile Picture"
                                                        width="52" height="52"></td>
                                                <td>{{ $item->lname . ' ' . $item->fname }}</td>
                                                <td>{{ $item->phone }}</td>
                                                <td>{{ $item->email }}</td>
                                                <td>{{ $item->created_at->format('Y-m-d') }}</td>


                                                <td><span
                                                        class="badge badge-{{ $item->status == '1' ? 'success' : 'warning' }}">{{ $item->status == '1' ? 'Valider' : 'En cours' }}</span>
                                                </td>

                                                <td>
                                                    <a href="{{ route('admin-demandes-show', $item->id) }}"
                                                        title="Afficher"><i
                                                            class="icon-eye text-primary icon-size "></i></a>
                                                    <a href="#"
                                                        wire:click.prevent="confirmDeleteDemande({{ $item->id }})"
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
                                @if ($demandesValider->count())
                                    {{ $demandesValider->links('livewire-pagination') }}
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h6 class="font-weight-bold">Liste Des demandes Refusée</h6>
                            <ul class="header-dropdown">
                                <form id="navbar-search" class="navbar-form search-form">
                                    <input wire:model="searchTerm2" class="form-control" placeholder="Search here..."
                                        type="text">
                                    <button type="button" class="btn btn-default"><i
                                            class="icon-magnifier"></i></button>
                                </form>
                            </ul>
                        </div>
                        <div class="header">
                            <p class="float-md-right">

                                <span class="badge badge-danger">{{ $CountdemandeRefuser }} Demandes Refuse</span>

                            </p>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table  table-hover js-basic-example dataTable table-custom">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>#</th>
                                            <th>Logo</th>
                                            <th>Nom et Prénom</th>
                                            <th>Telephone</th>
                                            <th>Adresse email</th>
                                            <th>Date de creation</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($demandesRefuser as $item)
                                            <tr>
                                                <td>{{ $item->id }}</td>
                                                <td><img src="{{ asset('primary/assets/images/') }}/{{ $item->logo_cabinet }}"
                                                        class="rounded-circle user-photo" alt="User Profile Picture"
                                                        width="52" height="52"></td>
                                                <td>{{ $item->lname . ' ' . $item->fname }}</td>
                                                <td>{{ $item->phone }}</td>
                                                <td>{{ $item->email }}</td>
                                                <td>{{ $item->created_at->format('Y-m-d') }}</td>


                                                <td><span
                                                        class="badge badge-{{ $item->status == '1' ? 'success' : 'warning' }}">{{ $item->status == '1' ? 'Valider' : 'En cours' }}</span>
                                                </td>

                                                <td>
                                                    <a href="{{ route('admin-demandes-show', $item->id) }}"
                                                        title="Afficher"><i
                                                            class="icon-eye text-primary icon-size "></i></a>
                                                    <a href="#"
                                                        wire:click.prevent="confirmDeleteDemande({{ $item->id }})"
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
                                @if ($demandesRefuser->count())
                                    {{ $demandesRefuser->links('livewire-pagination') }}
                                @endif
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
