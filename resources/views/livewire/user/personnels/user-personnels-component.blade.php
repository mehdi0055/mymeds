<div>
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header mb-5">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i
                                    class="fa fa-arrow-left"></i></a> Dashboard</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('user-dashboard') }}"><i
                                        class="icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#">cabinet</a></li>
                            <li class="breadcrumb-item active">Personnels</li>
                        </ul>
                    </div>

                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Liste Personnels
                            </h2>
                            <ul class="header-dropdown">
                                <form id="navbar-search" class="navbar-form search-form">
                                    <input wire:model.debounce.500ms="search" class="form-control"
                                        placeholder="Search here..." type="text">
                                    <button type="button" class="btn btn-default"><i
                                            class="icon-magnifier"></i></button>
                                </form>
                            </ul>
                        </div>
                        <div class="header">
                            <p class="float-md-right">
                                <span class="badge badge-success">0 Has account</span>
                                <span class="badge badge-danger">0 Has no account</span>
                            </p>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table  table-hover js-basic-example dataTable table-custom">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>#</th>
                                            <th>Nom et prénom</th>
                                            <th>Telephone</th>
                                            <th>CIN</th>
                                            <th>Date d'embauche</th>
                                            <th>Profession</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($personnels as $item)
                                            <tr>
                                                <td>{{ $item->id }}</td>
                                                <td>{{ $item->lname }} {{ $item->fname }}</td>
                                                <td>{{ $item->phone_personel }}</td>
                                                <td>{{ $item->cin }}</td>
                                                <td>{{ $item->date_embauche }}</td>
                                                <td><span
                                                    class="badge badge-primary">{{$item->profession}}</span></td>
                                                <td>
                                                    <a href="#"
                                                        wire:click.prevent="confirmDeleteRole({{ $item->id }})"
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
                                {{ $personnels->links('livewire-pagination') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
