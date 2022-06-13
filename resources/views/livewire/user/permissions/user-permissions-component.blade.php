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
                            <li class="breadcrumb-item active">Permission</li>
                        </ul>
                    </div>

                </div>
            </div>




            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Liste Des Permissions de role <span class="font-weight-bold">{{ $name }}</span>
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

                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table  table-hover js-basic-example dataTable table-custom">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($all_permissions as $item)
                                            <tr>
                                                <td>{{ $item->id }}</td>
                                                <td>{{ $item->name }}</td>


                                                <td>{{ $item->created_at }}</td>

                                                <td>

                                                    <input type="checkbox" name="">
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="d-flex justify-content-center">
                                {{ $all_permissions->links('livewire-pagination') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
