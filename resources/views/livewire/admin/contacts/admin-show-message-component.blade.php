<div>
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i
                                    class="fa fa-arrow-left"></i></a> Inbox</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin-dashboard') }}"><i class="icon-home"></i></a></li>
                            <li class="breadcrumb-item">Contact</li>
                            <li class="breadcrumb-item active">Inbox</li>
                        </ul>
                    </div>
                    
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="mobile-left">
                            <button type="button" class="btn btn-primary email-left" href="#">Menu</button>
                        </div>
                        <div class="mail-inbox">
                            <div class="mail-left">
                                <div class="mail-compose m-b-20">
                                    <a href="#" class="btn btn-danger btn-block">Compose</a>
                                </div>
                                <div class="mail-side">
                                    <ul class="nav">
                                        <li class="active"><a href="{{ route('admin-contact',['folder'=>'inbox']) }}">
                                            <i class="icon-envelope"></i>Inbox</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="icon-cursor"></i>Sent</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('admin-contact',['folder'=>'Archived']) }}">
                                                <i class="icon-social-dropbox"></i>Archived
                                                {!! $contact_archived->count() > 0 ? '<span class="badge badge-info float-right">'. $contact_archived->count() .'</span>' : '' !!}
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('admin-contact') }}"><i class="icon-action-redo"></i>Outbox</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('admin-contact') }}"><i class="icon-star"></i>Starred</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('admin-contact') }}"><i class="icon-trash"></i>Trash</a>
                                        </li>
                                    </ul>
                                    <h3 style="visibility: hidden" class="label hidden">Labels <a href="#" class="float-right m-r-10"
                                        title="Add New Labels"><i class="icon-plus"></i></a></h3>
                                    <ul class="nav" style="visibility: hidden">
                                        <li class="active">
                                            <a href="javascript:void(0);"><i
                                                    class="fa fa-circle text-danger"></i>Web Design<span
                                                    class="badge badge-primary float-right">5</span></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"><i
                                                    class="fa fa-circle text-info"></i>Recharge</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"><i
                                                    class="fa fa-circle text-dark"></i>Paypal</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"><i
                                                    class="fa fa-circle text-primary"></i>Family</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="mail-right">
                                <div class="header d-flex align-center">
                                    <h2>Inbox</h2>
                                    <form class="ml-auto">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search Mail" aria-label="Search Mail" aria-describedby="search-mail" wire:model="search">
                                            <div class="input-group-append">
                                                <span class="input-group-text" id="search-mail"><i class="icon-magnifier"></i></span>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="mail-detail-full" id="mail-detail-open">
                                    <div class="mail-action clearfix">
                                        <div class="pull-left">
                                            <div class="fancy-checkbox d-inline-block">
                                                <label>
                                                    <input class="select-all" type="checkbox" name="checkbox">
                                                    <span></span>
                                                </label>
                                            </div>
                                            <div class="btn-group">
                                                <a href="javascript:void(0);" class="btn btn-outline-secondary btn-sm hidden-sm">Start</a>
                                                <a href="javascript:void(0);" class="btn btn-outline-secondary btn-sm hidden-sm">Archive</a>
                                                <a href="javascript:void(0);" class="btn btn-outline-secondary btn-sm">Trash</a>
                                            </div>
                                            <div class="btn-group">
                                                <button class="btn btn-outline-secondary btn-sm dropdown-toggle"
                                                    type="button" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">More</button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="javascript:void(0);">Mark as read</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Mark as unread</a>
                                                    <div role="separator" class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pull-right ml-auto">
                                            <a href="{{ route('admin-contact') }}" class="mail-back btn btn-danger btn-sm">
                                                <i class="fa fa-close"></i>
                                            </a>
                                        </div>
                                    </div>
                                    
                                    <div class="detail-header">
                                        <div class="media">
                                            <div class="float-left">
                                                <div class="m-r-20"><img src="{{ asset('primary/assets/images/users/male.png') }}"
                                                        alt=""></div>
                                            </div>
                                            <div class="media-body">
                                                <p class="mb-2">
                                                    <strong class="text-muted m-r-5 ">From:</strong>
                                                    <a class="text-default" href="javascript:void(0);">
                                                        <span class="__cf_email__" >{{ $contact->emailContact }}</span>
                                                    </a>
                                                    <span class="text-muted text-sm float-right">{{ $contact->created_at }}</span>
                                                </p>
                                                <p class="mb-2">
                                                    <strong class="text-muted m-r-5">To:</strong> support@mymed.ma
                                                </p>
                                                <p class="mb-2">
                                                    <strong class="text-muted m-r-5">Subject:</strong>
                                                    <a class="text-default" href="javascript:void(0);">
                                                        <span>{{ $contact->subjectContact }}</span>
                                                    </a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mail-cnt">
                                        <p class="paragraph-mail">{{ $contact->message}} </p>
                                        <hr>
                                        <strong>Click here to</strong>
                                        <a href="app-compose.html">Reply</a> or
                                        <a href="app-compose.html">Forward</a>
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
