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
                            <li class="breadcrumb-item active">Modifier utilisateur</li>
                        </ul>
                    </div>

                </div>
            </div>

            <!-- Notification -->

            @if (session()->has('userUpdated'))
                <script>
                    swal('success', '{{ session('userUpdated') }}', 'success', {
                        Button: "ok",
                    });
                </script>
            @endif

            <!-- End Notification -->

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2>Modification Utilisateur </h2>
                        </div>
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input wire:model="name" type="text" class="form-control"
                                            placeholder="First Name">
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
                                    <button type="submit" class="btn btn-danger">Cancel</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
