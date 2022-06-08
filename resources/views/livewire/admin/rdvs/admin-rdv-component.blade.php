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
                            <li class="breadcrumb-item active">Appointment</li>
                        </ul>
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
                        <div class="modal-body">Voulez-vous vraiment supprimer ce rendez vous ?
                        </div>
                        <div class="modal-footer">
                            <button wire:click.prevent="deleteRdv()" class="btn btn-danger">Oui</button>
                            <button type="button" class="btn btn-light" data-dismiss="modal">Non</button>
                        </div>
                    </div>
                </div>
            </div>

            <div wire:ignore.self class="modal fade" id="afficherRdv" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg  modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-primary text-light ">
                            <h4 class="title" id="smallModalLabel">Detaills rendez vous </h4>
                        </div>
                        <div class="modal-body">
                            <div class="row clearfix">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label for="name">Nom et prénom</label>
                                        <input disabled wire:model="name" id="name" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label for="phone">Telephone</label>
                                        <input disabled wire:model="phone" id="phone" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label for="date">date</label>
                                        <input disabled wire:model="date" id="date" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label for="time">Durée</label>
                                        <input disabled wire:model="time" id="time" type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button wire:click.prevent="confirmeRdv()" class="btn btn-primary">Confirmée le rendez
                                vous</button>
                            <button wire:click.prevent="refuseRdv()" class="btn btn-danger">Refusée le rendez
                                vous</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- End modals -->

            <!-- Notification -->

            @if (session()->has('rdvDeleted'))
                <script>
                    toastr.error('{{ session('rdvDeleted') }}');
                </script>
            @endif

            @if (session()->has('rdvConfirme'))
                <script>
                    toastr.success('{{ session('rdvConfirme') }}');
                </script>
            @endif

            @if (session()->has('rdvRefuse'))
                <script>
                    toastr.error('{{ session('rdvRefuse') }}');
                </script>
            @endif

            <!-- End Notification -->
            <div class="row clearfix text-center ">
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="card top_counter p-3">
                        <div class="body">
                            <div id="top_counter1" class="carousel vert slide" data-ride="carousel"
                                data-interval="2500">
                                <div class="carousel-inner">
                                    <div class="carousel-item active ">
                                        <div class="icon"><i class="fa fa-calendar"
                                                style="font-size:46px"></i> </div>
                                        <div class="content">
                                            <div class="text">Rendez vous D'aujourd'hui</div>
                                            <h5 class="number">2</h5>
                                        </div>
                                    </div>
                                    <div class="carousel-item  ">
                                        <div class="icon"><i class="fa fa-calendar-check-o"
                                                style="font-size:46px"></i> </div>
                                        <div class="content">
                                            <div class="text">Rendez vous Confirmer</div>
                                            <h5 class="number">0</h5>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="icon"><i class="fa fa-calendar-times-o"
                                                style="font-size:46px"></i> </div>
                                        <div class="content">
                                            <div class="text">Rendez vous Annuler</div>
                                            <h5 class="number">2</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="card top_counter bg-primary p-3">
                        <div class="body text-light">
                            <div class="icon"><i class="fa fa-calendar-check-o" style="font-size:46px"></i>
                            </div>
                            <div class="content">
                                <div class="text ">Rendez vous Confirmer</div>
                                <h5 class="number ">2</h5>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="card top_counter bg-danger p-3">
                        <div class="body text-light">
                            <div class="icon"><i class="fa fa-calendar-times-o" style="font-size:46px"></i>
                            </div>
                            <div class="content">
                                <div class="text ">Rendez vous Annuler</div>
                                <h5 class="number ">2</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>Liste des rendez vous</h2>
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
                                <span class="badge  badge-warning">0 En cour</span>
                                <span class="badge badge-primary">2 Confirmer</span>
                                <span class="badge badge-danger">2 Anuller</span>
                            </p>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table  table-hover js-basic-example dataTable table-custom">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>Nom</th>
                                            <th>Telephone</th>
                                            <th>Adresse email</th>
                                            <th>date</th>
                                            <th>Durée</th>
                                            <th>Statue</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($rendezvous as $item)
                                            <tr>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->phone }}</td>
                                                <td>{{ $item->email }}</td>
                                                <td>{{ $item->date }}</td>
                                                <td>{{ $item->time }}</td>
                                                <th><span
                                                        class="badge badge-{{ $item->status == '0' ? 'warning' : ($item->status == '1' ? 'success' : 'danger') }}">{{ $item->status == '0' ? 'En cours' : ($item->status == '1' ? 'Confirmer' : 'Annuler') }}</span>
                                                </th>
                                                <td>
                                                    <a href="" wire:click.prevent="afficherRdv({{ $item->id }})"
                                                        data-toggle="modal" data-target="#afficherRdv"
                                                        title="Afficher"><i
                                                            class="icon-eye text-primary icon-size"></i></a>
                                                    <a href=""
                                                        wire:click.prevent="confirmDeleteRdv({{ $item->id }})"
                                                        data-toggle="modal" data-target="#confirmationDelete"
                                                        title="Supprimer"><i
                                                            class="icon-trash icon-size text-danger"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                            <div class="d-flex justify-content-center">
                                @if ($rendezvous->count())
                                    {{ $rendezvous->links('livewire-pagination') }}
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
