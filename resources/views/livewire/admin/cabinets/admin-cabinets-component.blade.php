<div>
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header mb-5">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i
                                    class="fa fa-arrow-left"></i></a> Dashboard</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin-dashboard') }}"><i class="icon-home"></i></a></li>
                            <li class="breadcrumb-item active">Cabinets</li>
                        </ul>
                    </div>

                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <a href="" class="btn  btn-primary" href="javascript:void(0);" title="Weekly">
                                    <i class="fa fa-plus"></i> Ajouter un utilisateur
                                </a>
                            </h2>
                            <ul class="header-dropdown">
                                    <form id="navbar-search" class="navbar-form search-form">
                                        <input wire:model.debounce.500ms="search"  class="form-control" placeholder="Search here..." type="text" >
                                        <button type="button" class="btn btn-default"><i class="icon-magnifier"></i></button>
                                    </form>
                            </ul>
                        </div>
                        <div class="header">
                            <p class="float-md-right">
                                <span class="badge badge-success">{{ $active_cabinets->count() }} Active</span>
                                <span class="badge badge-danger">{{ $desactive_cabinets->count() }} Inactive</span>
                            </p>
                        </div>
                        @if (session()->has('success_message'))
                            <script>
                                toastr.success("{{ session('success_message') }}");
                            </script>
                        @endif
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table  table-hover js-basic-example dataTable table-custom">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>#</th>
                                            <th>name</th>
                                            <th>Status</th>
                                            <th>Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($active_cabinets as $cabinet)
                                            <tr>
                                                <td>{{ $cabinet->id }}</td>
                                                <td>{{ $cabinet->name }}</td>
                                                <td></td>
                                                <td>{{ $cabinet->created_at }}</td>
                                                <td>
                                                    <a href=""><i class="fa fa-edit text-info icon-size"> </i></a>
                                                    <a href=""><i class="fa fa-trash-o text-danger icon-size"> </i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="d-flex justify-content-center">
                                {{ $active_cabinets->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

