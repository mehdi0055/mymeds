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
                <div class="col-lg-12">
                    <div class="card">
                        <div class="body"
                            style="background-image: url({{ asset('primary/assets/images/bg-5.png') }}) ">
                            <div class="d-flex flex-nowrap">
                                <div class=" p-2"><img src="{{ asset('primary/assets/images/bg-6.png') }}"
                                        class="user-photo" alt="User Profile Picture" width="160"></div>
                                <div class=" p-5">
                                    <h2 class="font-weight-normal">Bienvenu <span class="font-weight-bold">DR.{{ Auth::user()->name }}</span>  dans votre  {{ Auth::user()->doctor->cabinet->typeCabinet->name }} </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12">
                    <div class="row clearfix">

                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 ">
                            <div class="card ">

                                <div class="body  text-center text-light p-5 rounded bg-info " >
                                    <i class="fa fa-calendar" style="font-size:40px"></i>
                                    <h5>120</h5>
                                    <span>Rendez vous</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 ">
                            <div class="card ">

                                <div class="body bg-primary text-center text-light p-5 rounded ">
                                    <i class="fa fa-user-md" style="font-size:40px"></i>
                                    <h5>120</h5>
                                    <span>Medecins</span>
                                </div>
                            </div>
                        </div>
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
                            <h2 class="text-primary font-weight-bold">Liste Utilisateur</h2>

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
                                            <th>Ville</th>
                                            <th>Telephone</th>

                                            <th>Statue</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $item)
                                            <tr>
                                                <td><img src="{{ asset('primary/assets/images/users/' . $item->profile_photo_path) }}"
                                                        class="rounded-circle user-photo" alt="User Profile Picture"
                                                        width="45" height="45"></td>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->email }}</td>
                                                <td>{{ $item->city }}</td>
                                                <td>{{ $item->phone }}</td>
                                                <td><span
                                                        class="badge badge-{{ $item->active == '1' ? 'success' : 'danger' }}">{{ $item->active == '1' ? 'Active' : 'Inactive' }}</span>
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
