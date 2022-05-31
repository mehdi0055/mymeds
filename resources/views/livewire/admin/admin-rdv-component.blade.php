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
                            <li class="breadcrumb-item active">Appointment</li>
                        </ul>
                    </div>

                </div>
            </div>
            <div class="row clearfix text-center">
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="card">
                        <div class="body">
                            <i class="fa fa-calendar text-primary" style="width: 60px;height:60px;font-size:40px"></i>
                            <h6>Rendez vous D'aujourd'hui</h6>
                            <span>2</span>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="card">
                        <div class="body">
                            <i class="fa fa-calendar-check-o text-primary"
                                style="width: 60px;height:60px;font-size:40px"></i>
                            <h6>Rendez vous Confirmer</h6>
                            <span>2 </span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="card">
                        <div class="body">
                            <i class="fa fa-calendar-times-o text-danger"
                                style="width: 60px;height:60px;font-size:40px"></i>
                            <h6>Rendez vous Annuler</h6>
                            <span>0</span>
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
                                    rendez vous</button></h2>
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
