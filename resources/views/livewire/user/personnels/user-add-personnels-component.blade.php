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
                            <li class="breadcrumb-item"><a href="#">Personnels</a></li>
                            <li class="breadcrumb-item active">Add personnel</li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>

        <div class="row clearfix ">
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2>Ajouter un Personnel </h2>
                    </div>
                    <div class="body">
                        <form wire:submit.prevent="store()">

                            <div class="row clearfix">
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label for="lname">Nom</label>
                                        <input wire:model="lname" id="lname" name="lname" type="text" class="form-control"
                                            placeholder="Alaoui">
                                        @error('lname')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label for="fname">Prenom</label>
                                        <input wire:model="fname" id="fname" name="fname" type="text" class="form-control"
                                            placeholder="Ahmed">
                                        @error('fname')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                            </div>
                            <div class="row clearfix">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label for="email_personel">adresse e-mail</label>
                                        <input wire:model="email_personel" id="email_personel" type="text" name="email_personel"
                                            class="form-control" placeholder="Ahmed@mymed.ma">
                                        @error('email_personel')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row clearfix">
                                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label for="cin">CIN</label>
                                        <input wire:model="cin" id="cin" name="cin" type="text" class="form-control"
                                            placeholder="xxxxxxxx">
                                        @error('cin')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label for="phone_personel">Telephone</label>
                                        <input wire:model="phone_personel" id="phone_personel" name="phone_personel" type="text" class="form-control"
                                            placeholder="06 xx xx xx xx">
                                        @error('phone_personel')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
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
                            </div>

                            <div class="row clearfix">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label for="has_account">A un compte</label>
                                        <select wire:model="has_account" name="has_account" id="has_account" class="form-control">
                                            <option value="1">Oui</option>
                                            <option value="0">Non</option>
                                        </select>
                                        @error('has_account')
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
                        <h2>Liste Des personnels</h2>
                        <p class="float-md-right">
                            <span class="badge badge-success">0 Has account</span>
                            <span class="badge badge-danger">0 Has non account</span>
                        </p>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table  table-hover js-basic-example dataTable table-custom">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Nom et prénom</th>
                                        <th>Telephone</th>
                                        <th>CIN</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($personnels as $item)
                                        <tr>
                                            <td>{{ $item->lname }} {{ $item->fname }}</td>
                                            <td>{{ $item->phone_personel }}</td>
                                            <td>{{ $item->cin }}</td>
                                            <td>

                                                <a href="#"
                                                    wire:click.prevent="confirmDeleteRole({{ $item->id }})"
                                                    data-toggle="modal" data-target="#confirmationDelete"
                                                    title="delete"><i class="icon-trash text-danger icon-size"></i></a>
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
