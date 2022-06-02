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
                            <li class="breadcrumb-item active">Dashboard</li>
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
            <!-- End Notification -->

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12">
                    <div class="row clearfix">





                        <div class="col-lg-3 col-md-3">
                            <div class="card top_counter  ">
                                <div class="body">
                                    <div id="top_counter1" class="carousel vert slide p-1" data-ride="carousel"
                                        data-interval="2500">
                                        <div class="carousel-inner ">
                                            <div class="carousel-item active">
                                                <div class="icon"><i style="font-size: 30px" class="fa fa-users"></i> </div>
                                                <div class="content">
                                                    <div class="text">Utilisateurs</div>
                                                    <h5 class="number">215</h5>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="icon"><i style="font-size: 30px" class="fa fa-user-times"></i> </div>
                                                <div class="content">
                                                    <div class="text">Utilisateur inactive</div>
                                                    <h5 class="number">21</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div id="top_counter2" class="carousel vert slide p-1" data-ride="carousel"
                                        data-interval="2100">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <div class="icon"><i style="font-size: 30px" class="fa fa-calendar"></i> </div>
                                                <div class="content">
                                                    <div class="text">Rendez vous</div>
                                                    <h5 class="number">06</h5>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="icon"><i style="font-size: 30px" class="fa fa-calendar-times-o"></i>
                                                </div>
                                                <div class="content">
                                                    <div class="text">Rendez vous Annuler</div>
                                                    <h5 class="number">04</h5>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <div class="card top_counter">
                                <div class="body">
                                    <div id="top_counter3" class="carousel vert slide p-1" data-ride="carousel"
                                        data-interval="2300">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <div class="icon"><i style="font-size: 30px" class="fa fa-phone"></i> </div>
                                                <div class="content">
                                                    <div class="text">Contacts</div>
                                                    <h5 class="number">10</h5>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="icon"><i style="font-size: 30px" class="icon-puzzle"></i> </div>
                                                <div class="content">
                                                    <div class="text">Blog</div>
                                                    <h5 class="number">142</h5>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <hr>
                                    <div id="top_counter3" class="carousel vert slide p-1" data-ride="carousel"
                                        data-interval="2100">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <div class="icon"><i style="font-size: 30px" class="fa fa-eye"></i> </div>
                                                <div class="content">
                                                    <div class="text">Total Visitors</div>
                                                    <h5 class="number">10K</h5>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="icon"><i style="font-size: 30px" class="fa fa-eye"></i> </div>
                                                <div class="content">
                                                    <div class="text">Today Visitors</div>
                                                    <h5 class="number">142</h5>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="icon"><i class="fa fa-eye"></i> </div>
                                                <div class="content">
                                                    <div class="text">Month Visitors</div>
                                                    <h5 class="number">2,087</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="col-lg-3 col-md-3 col-sm-12 ">
                            <div class="card ">

                                <div class="body bg-danger text-center text-light p-5 rounded ">
                                    <i class="fa fa-calendar" style="font-size:35px"></i>
                                    <h5>120</h5>
                                    <span>Rendez vous</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12 ">
                            <div class="card ">

                                <div class="body bg-primary text-center text-light p-5 rounded ">
                                    <i class="fa fa-user-md" style="font-size:35px"></i>
                                    <h5>120</h5>
                                    <span>Medecins</span>
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
                            <h2>Liste Utilisateur</h2>

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
                                                        class="badge badge-{{ $item->active == '1' ? 'success' : 'danger' }}">{{ $item->active == '1' ? 'Active' : 'Inactive' }}</span>
                                                </td>
                                                <td>
                                                    @if ($item->active == 1)
                                                        <a href="#"
                                                            wire:click.prevent="inactiveUser({{ $item->id }})"
                                                            title="Inactive"><i
                                                                class="fa fa-toggle-on text-success icon-size"
                                                                style="font-size:1.2em"></i></a>
                                                    @else
                                                        <a href="#"
                                                            wire:click.prevent="activeUser({{ $item->id }})"
                                                            title="Active"><i
                                                                class="fa fa-toggle-off text-danger icon-size"
                                                                style="font-size:1.2em"></i></a>
                                                    @endif
                                                </td>

                                                <td>
                                                    <a href="{{ route('admin-editUser', $item->id) }}" title="Edit"><i
                                                            class="icon-note text-primary icon-size"></i></a>
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

            <div class="row clearfix">

                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>Liste Rendez vous</h2>

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
                                                <td>{{ $item->date }}</td>
                                                <td>{{ $item->time }}</td>
                                                <td><span
                                                        class="badge badge-{{ $item->status == '0' ? 'warning' : ($item->status == '1' ? 'success' : 'danger') }}">{{ $item->status == '0' ? 'En cours' : ($item->status == '1' ? 'Confirmer' : 'Annuler') }}</span>
                                                </td>
                                                <td>
                                                    <a   title="Edit"><i
                                                            class="icon-note icon-size text-primary"></i></a>
                                                    <a
                                                        title="Comment"><i class="icon-trash icon-size text-danger"></i></a>
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
