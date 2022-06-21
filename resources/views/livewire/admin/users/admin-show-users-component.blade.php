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
                            <li class="breadcrumb-item"><a href="{{ route('admin-demandes-all') }}">Utilisateurs</a>
                            </li>
                            <li class="breadcrumb-item active">Détaills Utilisateur</li>
                        </ul>
                    </div>

                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12">
                    <div class="card profile-header">
                        <div class="body text-center "
                            style="background-image: url({{ asset('primary/assets/images/bg-8.png') }});background-size:cover;background-repeat:no-repeat ">
                            <div class="profile-image mb-3"> <img
                                    src="{{ asset('primary/assets/images/users/') }}/{{ $user->profile_photo_path }}"
                                    width="140" class="rounded-circle" alt=""> </div>
                            <div>
                                <h4 class="m-b-0 "><strong>{{ $user->name }}</strong></h4>
                                <span>{{ $user->role->name }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="header">
                            <h5 class="text-primary font-weight-bold">Information Personel</h5>
                        </div>
                        <div class="body   ">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-12">
                                    <h6 class="font-weight-bold">Nom et prénom : </h6>
                                    <p>{{ $user->doctor->lname . ' ' . $user->doctor->fname }}</p>


                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <h6 class="font-weight-bold">Telephone : </h6>
                                    <p>{{ $user->doctor->phone_personel }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-12">
                                    <h6>Address email : </h6>
                                    <p>{{ $user->doctor->email_personel }}</p>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <h6 class="font-weight-bold">Region : </h6>
                                    <p>{{ $user->doctor->state }}</p>
                                </div>
                            </div>
                            <div class="row clearfix mt-3 text-right">
                                <div class="col-sm-12">
                                    <a href="{{ route('admin-editUser', $user->id) }}"
                                        class="btn btn-primary">Modifier</a>
                                    <a href="{{ route('admin-users') }}" class="btn btn-danger">Back</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="header">
                            <h5 class="text-primary font-weight-bold"></h5>
                        </div>
                        <div class="body   ">

                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-12">

                                    <h6 class="font-weight-bold">Code Médecin : </h6>
                                    <p>{{ $user->doctor->code_doctor }}</p>

                                </div>
                                <div class="col-lg-6 col-md-12">

                                    <h6 class="font-weight-bold">Code zip : </h6>
                                    <p>{{ $user->doctor->zipcode }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-12">
                                    <h6 class="font-weight-bold">City : </h6>
                                    <p>{{ $user->doctor->city }}</p>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <h6 class="font-weight-bold">Address : </h6>
                                    <p>{{ $user->doctor->address }} </p>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
