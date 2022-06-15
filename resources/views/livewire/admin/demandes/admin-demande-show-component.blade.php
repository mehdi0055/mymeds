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
                            <li class="breadcrumb-item"><a href="{{ route('admin-demandes-all') }}">Demandes</a></li>
                            <li class="breadcrumb-item active">Détaills demande</li>
                        </ul>
                    </div>

                </div>
            </div>

            <!-- Notification -->

            @if (session()->has('message_success'))
                <script>
                    toastr.success('{{ session('message_success') }}');
                </script>
            @endif

            @if (session()->has('message_danger'))
                <script>
                    toastr.error('{{ session('message_danger') }}');
                </script>
            @endif

            <!-- End Notification -->

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12">
                    <div class="card profile-header">
                        <div class="body text-center "
                            style="background-image: url({{ asset('primary/assets/images/bg-8.png') }});background-size:cover;background-repeat:no-repeat ">
                            <div class="profile-image mb-3"> <img
                                    src="{{ asset('primary/assets/images/cabinet/') }}/{{ $demandes->logo_cabinet }}"
                                    width="140" class="rounded-circle" alt=""> </div>
                            <div>
                                <h4 class="m-b-0 "><strong>{{ $demandes->name_cabinet }}</strong></h4>
                                <span>{{ $demandes->lname . ' ' . $demandes->fname }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-4 col-md-12">

                    <div class="card">
                        <div class="header">
                            <h5 class="text-primary font-weight-bold">Information de cabinet</h5>
                        </div>
                        <div class="body   ">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-12">
                                    <h6 class="font-weight-bold">Nom de cabinet : </h6>
                                    <p>{{ $demandes->name_cabinet }}</p>
                                    <h6 class="font-weight-bold">Address email de cabinet : </h6>
                                    <p>{{ $demandes->email_cabinet }}</p>

                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <h6 class="font-weight-bold">Telephone de cabinet : </h6>
                                    <p>{{ $demandes->phone_cabinet }}</p>
                                    <h6 class="font-weight-bold">Date de creation : </h6>
                                    <p>{{ $demandes->created_at->format('Y-m-d') }}</p>

                                </div>
                            </div>
                            <hr>
                            <div class="row clearfix">
                                <div class="col-lg-12 col-md-12">
                                    <h6 class="font-weight-bold">Type : </h6>
                                    <p>{{ $demandes->typeCabinet->name }}</p>
                                </div>
                            </div>
                            <div class="row clearfix">

                                <div class="col-lg-12 col-md-12">

                                    <h6 class="font-weight-bold">Address : </h6>
                                    <p>{{ $demandes->address }}</p>

                                </div>
                            </div>

                            <div class="row clearfix">

                                <div class="col-lg-12 col-md-12">

                                    <h6 class="font-weight-bold">Status : </h6>
                                    <p  class="badge  badge-{{ $demandes->status == '1' ? 'success' : ($demandes->status == '2' ? 'danger' : 'warning') }}">
                                        {{ $demandes->status == '1' ? 'demandes valider' : ($demandes->status == '2' ? 'demandes refusée' : 'demandes en cours') }}</p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12">

                    <div class="card">
                        <div class="header">
                            <h5 class="text-primary font-weight-bold">Validation</h5>
                        </div>
                        <div class="body  text-left  ">
                            <div class="row clearfix">
                                <div class="col-lg-12 col-md-12 ">
                                    <div class="">
                                        <button wire:click.prevent="valideDemande({{ $demandes->id }})"
                                            class="btn btn-lg btn-primary mr-3">Accepter la demandes</button>
                                        <button wire:click.prevent="refuseDemande({{ $demandes->id }})"
                                            class="btn btn-lg btn-danger">Refuser la demandes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="header">
                            <h5 class="text-primary font-weight-bold">Information Personel</h5>
                        </div>
                        <div class="body   ">
                            <div class="row clearfix">
                                <div class="col-lg-4 col-md-12">
                                    <h6 class="font-weight-bold">Nom et prénom : </h6>
                                    <p>{{ $demandes->lname . ' ' . $demandes->fname }}</p>
                                    <h6>Address email : </h6>
                                    <p>{{ $demandes->email }}</p>

                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <h6 class="font-weight-bold">Telephone : </h6>
                                    <p>{{ $demandes->phone }}</p>
                                    <h6 class="font-weight-bold">Date de création : </h6>
                                    <p>{{ $demandes->created_at->format('Y-m-d') }}</p>

                                </div>
                            </div>
                            <hr>
                            <div class="row clearfix">
                                <div class="col-lg-4 col-md-12">
                                    <h6 class="font-weight-bold">CIN : </h6>
                                    <p>{{ $demandes->cin }}</p>
                                    <h6 class="font-weight-bold">Code Médecin : </h6>
                                    <p>{{ $demandes->code_doctor }}</p>

                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <h6 class="font-weight-bold">Ville : </h6>
                                    <p>{{ $demandes->city }}</p>
                                    <h6 class="font-weight-bold">Code zip : </h6>
                                    <p>{{ $demandes->zipcode }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row clearfix">
                                <div class="col-lg-12 col-md-12">
                                    <h6 class="font-weight-bold">Region : </h6>
                                    <p>{{ $demandes->state }}</p>
                                </div>
                            </div>

                            <div class="row clearfix">
                                <div class="col-lg-12 col-md-12">
                                    <h6 class="font-weight-bold">Address : </h6>
                                    <p>{{ $demandes->address_cabinet }} </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
