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
                                    <img src="{{ asset('primary/assets/images/users/'.$profile) }}" width="100"
                                        height="100" alt="" style="border-radius: 50px;">
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label for="email">Nom et prénom</label>
                                        <input wire:model="name" type="text" class="form-control"
                                            placeholder="First Name">
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label for="email">adresse e-mail</label>
                                        <input disabled wire:model="email" id="email" type="email"
                                            class="form-control" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label for="city">Ville</label>
                                        <input wire:model="city" id="city" type="text" class="form-control"
                                            placeholder="RABAT">
                                        @error('city')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>


                            <div class="row clearfix">

                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
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
                                        <label for="phone">Phone</label>
                                        <input wire:model="phone" id="phone" type="number" class="form-control"
                                            placeholder="0611526658">
                                        @error('phone')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label for="address">Adresse</label>
                                        <textarea name="address" id="address" rows="4" class="form-control"></textarea>
                                        @error('address')
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

                            <div class="row clearfix mt-3">
                                <div class="col-sm-12">
                                    <button wire:click.prevent="update()" type="submit"
                                        class="btn btn-primary">Modifier</button>
                                    <a href="{{ route('admin-users') }}" class="btn btn-danger">Annuler</a>
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
