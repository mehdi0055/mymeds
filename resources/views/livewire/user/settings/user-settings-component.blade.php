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
                            <li class="breadcrumb-item"><a href="#">cabinet</a></li>
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
                                <div class="profile-image mb-3">
                                    <a href=""
                                        onclick="event.preventDefault();document.getElementById('profile').click();"
                                        id="image-upload">
                                        @if ($profile)
                                            <img src="{{ $profile->temporaryUrl() }}" width="100" height="100" alt=""
                                                style="border-radius: 50px;">
                                        @else
                                            <img src="{{ asset('primary/assets/images/cabinets/') }}/{{ $cabinet->logo_cabinet }}"
                                                width="140" class="rounded-circle" alt="">
                                        @endif
                                    </a>

                                    <input id="profile"
                                        style="margin-top:5px;background-color:#f1f2f3;color:#3b3f5c;display:none;"
                                        type="file" name="profile" wire:model="profile" class="form-control">
                                </div>
                                <div>
                                    <h4 class="m-b-0 "><strong>{{ $cabinet->name_cabinet }}</strong></h4>
                                    <span>{{ $cabinet->lname . ' ' . $cabinet->fname }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12">

                        <div class="card">
                            <div class="header">
                                <h5 class="text-primary font-weight-bold">Information de cabinet</h5>
                            </div>
                            <div class="body   ">
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="email_cabinet">Email cabinet</label>
                                            <input wire:model="email_cabinet" id="email_cabinet" type="email"
                                                class="form-control" placeholder="Cabinet@mymed.ma">
                                            @error('email_cabinet')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="phone_cabinet">phone cabinet</label>
                                            <input wire:model="phone_cabinet" id="phone" type="text"
                                                class="form-control" placeholder="06 xx xx xx xx">
                                            @error('phone_cabinet')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-12 col-md-12">
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
                                <div class="row clearfix">

                                    <div class="col-lg-12 col-md-12">

                                        <div class="form-group">
                                            <label for="address">Adresse</label>
                                            <textarea wire:model="address" name="address" id="address" rows="4" class="form-control"></textarea>
                                            @error('address')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix mt-3 text-right">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <button wire:click.prevent="editCabinet()" class="btn btn-primary">Update</button>
                                        <a href="{{ route('user-roles') }}" class="btn btn-danger">Back</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">

                        <div class="card">
                            <div class="header">

                            </div>
                            <div class="body   ">
                                <div class="row clearfix">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label for="name_cabinet">Name cabinet</label>
                                            <input wire:model="name_cabinet" id="name_cabinet" type="text" class="form-control"
                                                placeholder="Cabinet xxxx">
                                            @error('name_cabinet')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label for="theme_cabinet">Théme cabinet</label>
                                            <select wire:model="theme_cabinet" name="theme_cabinet" class="form-control"
                                                id="theme_cabinet">
                                                <option value="">select Théme cabinet</option>

                                                <option>theme-purple</option>
                                                <option>theme-blue</option>
                                                <option>theme-cyan</option>
                                                <option>theme-green</option>
                                                <option>theme-orange</option>
                                            </select>
                                            @error('theme_cabinet')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
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
