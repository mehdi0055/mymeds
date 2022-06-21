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
                            <li class="breadcrumb-item"><a href="{{ route('admin-users') }}">Utilisateurs</a></li>
                            <li class="breadcrumb-item active">Modifier utilisateur</li>
                        </ul>
                    </div>

                </div>
            </div>

            <!-- Notification -->
            @if (session()->has('userUpdated'))
                <script>
                    toastr.warning('{{ session('userUpdated') }}');
                </script>
            @endif
            <!-- End Notification -->

            <div class="row clearfix">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2>Modification Utilisateur </h2>
                        </div>
                        <div class="body">
                            <div class="row clearfix mb-4">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <img src="{{ asset('primary/assets/images/users/' . $profile) }}" width="100"
                                        height="100" alt="" style="border-radius: 50px;">
                                </div>
                            </div>
                            <h6 class="mb-3 mt-3 font-weight-bold text-primary">Information perssonnel </h6>
                            <div class="row clearfix">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label for="email">Nom et prénom</label>
                                        <input wire:model="name" type="text" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="row clearfix">
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label for="phone">Telephone</label>
                                        <input wire:model="phone" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label for="city">City</label>
                                        <input wire:model="city" type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label for="email">adresse e-mail</label>
                                        <input wire:model="email" id="email" type="email" class="form-control"
                                            disabled>
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label for="city">CIN</label>
                                        <input wire:model="cin" id="cin" type="text" class="form-control">
                                        @error('cin')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label for="gender">Gender</label>
                                        <select wire:model="gender" name="gender" id="gender" class="form-control">
                                            <option value="male">Homme</option>
                                            <option value="female">Femme</option>
                                        </select>
                                        @error('gender')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>



                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label for="phone">Code medecin</label>
                                        <input wire:model="code_doctor" id="code_doctor" type="text"
                                            class="form-control">
                                        @error('code_doctor')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                            </div>
                            <h6 class="mb-3 mt-3 font-weight-bold text-primary">Information Cabinet </h6>
                            <div class="row clearfix">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label for="name_cabinet">Name cabinet</label>
                                        <input wire:model="name_cabinet" id="name_cabinet" type="text"
                                            class="form-control">
                                        @error('name_cabinet')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row clearfix">
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label for="email_cabinet">Email cabinet</label>
                                        <input wire:model="email_cabinet" id="email_cabinet" type="email"
                                            class="form-control" disabled>
                                        @error('email_cabinet')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label for="phone_cabinet">phone cabinet</label>
                                        <input wire:model="phone_cabinet" id="phone" type="text"
                                            class="form-control">
                                        @error('phone_cabinet')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row clearfix">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label for="type_id">Type cabinet</label>
                                        <select wire:model="type_id" name="type_id" class="form-control"
                                            id="type_id">
                                            <option value="">select type cabinet</option>
                                            @foreach ($types as $item)
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('type_id')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <!-- <div class="row clearfix">
                                <div class="col-lg-12">
                                    <input type="file" class="dropify">
                                </div>
                            </div> -->

                            <div class="row clearfix mt-3 text-right">
                                <div class="col-sm-12">
                                    <button wire:click.prevent="update()" type="submit"
                                        class="btn btn-primary">Update</button>
                                    <a href="{{ route('admin-users') }}" class="btn btn-danger">Back</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
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
                                                        class="badge badge-{{ $item->active == '0' ? 'success' : 'danger' }}">{{ $item->active == '0' ? 'Active' : 'Inactive' }}</span>
                                                </td>
                                                <td>
                                                    <a href="#"
                                                        wire:click.prevent="changeStatus({{ $item->id }})"
                                                        title="{{ $item->active == 0 ? 'incative' : 'active' }}"><i
                                                            class="{{ $item->active == 0 ? 'fa fa-toggle-on text-success' : 'fa fa-toggle-off text-danger' }} icon-size"></i></a>
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
