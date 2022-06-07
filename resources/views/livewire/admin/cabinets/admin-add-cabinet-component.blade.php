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
                            <li class="breadcrumb-item"><a href="{{ route('admin-cabinets-all') }}">All Type Cabinets</a></li>
                            <li class="breadcrumb-item active">Add type cabinet</li>
                        </ul>
                    </div>

                </div>
            </div>

            <!-- Notification -->
            @if (session()->has('success_message'))
                <script>
                    toastr.success("{{ session('success_message') }}");
                </script>
            @endif
            <!-- End Notification -->

            <div class="row clearfix ">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2>Ajouter Cabinet </h2>
                        </div>
                        <div class="body">
                            <form wire:submit.prevent="store()">
                                
                                <div class="row clearfix">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label for="name">Type Cabinet Name</label>
                                            <input wire:model="name" required id="name" type="text" class="form-control" placeholder="Type Cabinet Name">
                                            @error('name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                </div>
                                <div class="row clearfix">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label for="slug">adresse e-mail</label>
                                            <input wire:model="slug" id="slug" required type="text" class="form-control" placeholder="slug">
                                            @error('slug')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label for="email">Status</label>
                                            <select wire:model="status" name="status" id="status" class="form-control" required>
                                                <option value="">select status</option>
                                                <option value="0">Active</option>
                                                <option value="1">Inactive</option>
                                            </select>   
                                            @error('status')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix mt-3 text-right">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <button class="btn btn-primary">Add</button>
                                        <a href="{{ route('admin-cabinets-all') }}" class="btn btn-danger">Back</a>
                                    </div>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="card">

                        <div class="header">
                            <h2>Liste Cabinets</h2>
                            <p class="float-md-right">
                                <span class="badge badge-success">{{ $active_cabinets->count() }} Active</span>
                                <span class="badge badge-danger">{{ $desactive_cabinets->count() }} Inactive</span>
                            </p>
                        </div>
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
                                        @foreach($all_cabinets as $cabinet)
                                            <tr>
                                                <td>{{ $cabinet->id }}</td>
                                                <td>{{ $cabinet->name }}</td>
                                                <td>
                                                    <span class="{{ $cabinet->status == 0  ? 'badge badge-success' : 'badge badge-danger' }}">
                                                        {{ $cabinet->status == 0  ? 'Active' : 'Desactive' }}
                                                    </span>
                                                </td>
                                                <td>{{ $cabinet->created_at }}</td>
                                                <td>
                                                    {{-- <a href="" title="show"><i class="fa fa-eye text-warning icon-size"> </i></a> --}}
                                                    <a href="" title="edit"><i class="fa fa-edit text-info icon-size"> </i></a>
                                                    <a href="" title="delete"><i class="fa fa-trash-o text-danger icon-size"> </i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="d-flex justify-content-center">
                                    {{ $all_cabinets->links('livewire-pagination') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
