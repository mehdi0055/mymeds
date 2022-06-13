<div>
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header mb-5">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i
                                    class="fa fa-arrow-left"></i></a> Dashboard</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin-dashboard') }}"><i
                                        class="icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin-cabinets-all') }}">All roles</a></li>
                            <li class="breadcrumb-item active">Add role</li>
                        </ul>
                    </div>

                </div>
            </div>

            <!-- modals -->
            <div wire:ignore.self class="modal fade" id="confirmationDelete" tabindex="-1" role="dialog">
                <div class="modal-dialog  modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-danger text-light">
                            <h4 class="title" id="smallModalLabel">Confirmation</h4>
                        </div>
                        <div class="modal-body">Voulez-vous vraiment supprimer cet role ?


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
            @if (session()->has('success_message'))
                <script>
                    toastr.success("{{ session('success_message') }}");
                </script>
            @endif
            @if (session()->has('danger_message'))
            <script>
                toastr.error("{{ session('danger_message') }}");
            </script>
        @endif
            <!-- End Notification -->

            <div class="row clearfix ">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2>Ajouter role </h2>
                        </div>
                        <div class="body">
                            <form wire:submit.prevent="store()">

                                <div class="row clearfix">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label for="name">Name role</label>
                                            <input wire:model="name" id="name" type="text" class="form-control"
                                                placeholder="Name Role">
                                            @error('name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                </div>
                                <div class="row clearfix">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label for="description">Description</label>
                                            <input wire:model="description" id="description" type="text"
                                                class="form-control" placeholder="Description">
                                            @error('description')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label for="isActive">Status</label>
                                            <select wire:model="isActive" name="isActive" id="isActive"
                                                class="form-control">
                                                <option value="">select status</option>
                                                <option value="0">Active</option>
                                                <option value="1">Inactive</option>
                                            </select>
                                            @error('isActive')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix mt-3 text-right">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <button class="btn btn-primary">Add</button>
                                        <a href="{{ route('user-roles') }}" class="btn btn-danger">Back</a>
                                    </div>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="card">

                        <div class="header">
                            <h2>Liste Roles</h2>
                            <p class="float-md-right">
                                <span class="badge badge-success">{{ $active_role->count() }} Active</span>
                                <span class="badge badge-danger">{{ $desactive_role->count() }} Inactive</span>
                            </p>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table  table-hover js-basic-example dataTable table-custom">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>#</th>
                                            <th>name</th>
                                            <th>Description</th>
                                            <th>Status</th>
                                            <th>Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($all_roles as $item)
                                            <tr>
                                                <td>{{ $item->id }}</td>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->description }}</td>
                                                <td>
                                                    <span
                                                        class="{{ $item->isActive == 0 ? 'badge badge-success' : 'badge badge-danger' }}">
                                                        {{ $item->isActive == 0 ? 'Active' : 'Desactive' }}
                                                    </span>
                                                </td>
                                                <td>{{ $item->created_at->format('Y-m-d') }}</td>
                                                <td>
                                                    {{-- <a href="" title="show"><i class="fa fa-eye text-warning icon-size"> </i></a> --}}
                                                    <a href="" title="permission"><i
                                                            class="fa fa-key text-info icon-size"> </i></a>
                                                    <a href="#"
                                                        wire:click.prevent="confirmDeleteRole({{ $item->id }})"
                                                        data-toggle="modal" data-target="#confirmationDelete"
                                                        title="delete"><i
                                                            class="icon-trash text-danger icon-size"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="d-flex justify-content-center">
                                {{ $all_roles->links('livewire-pagination') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
