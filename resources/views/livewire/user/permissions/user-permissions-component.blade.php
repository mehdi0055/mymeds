<div>
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header mb-5">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i
                                    class="fa fa-arrow-left"></i></a> Dashboard</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('user-dashboard') }}"><i
                                        class="icon-home"></i></a></li>
                            <li class="breadcrumb-item active">Permission</li>
                        </ul>
                    </div>

                </div>
            </div>

            <!-- Notification -->
            @if (session()->has('success_message'))
                <script>
                    toastr.success('{{ session('success_message') }}');
                </script>
            @endif

            <!-- End Notification -->

            <div class="row clearfix">
                <div class="col-lg-12">


                    <div class="card">
                        <div class="header">
                            <h2>
                                Liste Des Permissions de role <span
                                    class="font-weight-bold text-primary">{{ $Role->name }}</span>
                            </h2>
                            <ul class="header-dropdown">

                            </ul>
                        </div>
                        <div class="header">

                        </div>
                        <div class="body">
                            <form wire:submit.prevent="changePermission()">
                                <div class="table-responsive">
                                    <table class="table  table-hover js-basic-example dataTable table-custom "
                                        cellspacing="2">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>Module Name</th>
                                                @foreach ($all_permissions as $item)
                                                    <th>{{ $item->name }}</th>
                                                @endforeach
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Module Name</th>
                                                @foreach ($all_permissions as $item)
                                                    <th>{{ $item->name }}</th>
                                                @endforeach
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <tr>
                                                <td>Employee</td>
                                                @foreach ($all_permissions as $item)
                                                    <td><input wire:model="permission" value="{{ $item->id }}"
                                                            name="permission[]" type="checkbox"></td>
                                                @endforeach
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="d-flex justify-content-center mt-5">
                                    <button class="btn btn-info">Modifier</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
