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
                    <div class="card top_counter bg-info p-3">
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
                    <div class="card top_counter bg-primary p-3">
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
                            <h2><button class="btn btn-primary" href="javascript:void(0);" title="Weekly"><i
                                        class="fa fa-plus"></i> Ajouter
                                    un
                                    rendez vous</button></h2>
                            <ul class="header-dropdown">
                                <input style="border-radius: 5px" class="form-control py-2" type="search"
                                    placeholder=" Search..." id="example-search-input" wire:model="searchTerm">
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
                                                    <a title="Edit"><i class="icon-note icon-size text-primary"></i></a>
                                                    <a title="Comment"><i
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
