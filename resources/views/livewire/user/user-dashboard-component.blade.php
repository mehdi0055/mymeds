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
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ul>
                    </div>

                </div>
            </div>

            <!-- modals -->

            <!-- End modals -->

            <!-- Notification -->

            <!-- End Notification -->

            <div class="row clearfix">
                <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="body"
                            style="background-image: url({{ asset('primary/assets/images/bg-11.png') }});background-size:cover">
                            <div class="d-flex flex-nowrap">
                                <div class=""><img src="{{ asset('primary/assets/images/bg-9.png') }}"
                                        class="user-photo" alt="User Profile Picture" width="200"></div>
                                <div class="p-5">
                                    <h2 class="font-weight-normal"><span class="font-weight-bold">Bienvenu</span>  medecin dans votre cabinet </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12">
                    <div class="row clearfix">

                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                            <div class="card top_counter  ">
                                <div class="body">
                                    <div id="top_counter1" class="carousel vert slide p-1" data-ride="carousel"
                                        data-interval="2500">
                                        <div class="carousel-inner ">
                                            <div class="carousel-item active">
                                                <div class="icon"><i style="font-size: 30px"
                                                        class="icon-users"></i> </div>
                                                <div class="content">
                                                    <div class="text">Utilisateurs</div>
                                                    <h5 class="number">215</h5>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="icon"><i style="font-size: 30px"
                                                        class="icon-user-unfollow"></i> </div>
                                                <div class="content">
                                                    <div class="text">Utilisateur inactive</div>
                                                    <h5 class="number">21</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div id="top_counter2" class="carousel vert slide p-1" data-ride="carousel"
                                        data-interval="2100">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <div class="icon"><i style="font-size: 30px"
                                                        class="fa fa-calendar"></i> </div>
                                                <div class="content">
                                                    <div class="text">Rendez vous</div>
                                                    <h5 class="number">06</h5>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="icon"><i style="font-size: 30px"
                                                        class="fa fa-calendar-times-o"></i>
                                                </div>
                                                <div class="content">
                                                    <div class="text">Rendez vous Annuler</div>
                                                    <h5 class="number">04</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                            <div class="card top_counter">
                                <div class="body">
                                    <div id="top_counter3" class="carousel vert slide p-1" data-ride="carousel"
                                        data-interval="2300">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <div class="icon"><i style="font-size: 30px"
                                                        class="fa fa-phone"></i> </div>
                                                <div class="content">
                                                    <div class="text">Contacts</div>
                                                    <h5 class="number">10</h5>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="icon"><i style="font-size: 30px"
                                                        class="icon-puzzle"></i> </div>
                                                <div class="content">
                                                    <div class="text">Blog</div>
                                                    <h5 class="number">142</h5>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <hr>
                                    <div id="top_counter3" class="carousel vert slide p-1" data-ride="carousel"
                                        data-interval="2100">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <div class="icon"><i style="font-size: 30px"
                                                        class="fa fa-eye"></i> </div>
                                                <div class="content">
                                                    <div class="text">Total Visitors</div>
                                                    <h5 class="number">10K</h5>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="icon"><i style="font-size: 30px"
                                                        class="fa fa-eye"></i> </div>
                                                <div class="content">
                                                    <div class="text">Today Visitors</div>
                                                    <h5 class="number">142</h5>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="icon"><i class="fa fa-eye"></i> </div>
                                                <div class="content">
                                                    <div class="text">Month Visitors</div>
                                                    <h5 class="number">2,087</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>








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
