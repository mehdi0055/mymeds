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
                                        <li class="{{ $pages == "inbox" ? 'active' : '' }}" >
                                            <a href="javascript:void(0);" wire:click.prevent="folderActive('inbox')">
                                                <i class="icon-envelope"></i>Inbox 
                                                {!! $contact_not_read->count() > 0 ? '<span class="badge badge-primary float-right">'. $contact_not_read->count() .'</span>' : '' !!}
                                            </a>
                                        </li>
                                        <li >
                                            <a href="javascript:void(0);"><i class="icon-cursor"></i>Sent</a>
                                        </li>
                                        <li class="{{ $pages == "archive" ? 'active' : '' }}">
                                            <a href="javascript:void(0);" wire:click.prevent="folderActive('archive')">
                                                <i class="icon-social-dropbox"></i>Archived
                                                {!! $contact_archived->count() > 0 ? '<span class="badge badge-info float-right">'. $contact_archived->count() .'</span>' : '' !!}
                                            </a>
                                        </li>
                                        <li class="{{ $pages == "starred" ? 'active' : '' }}">
                                            <a href="javascript:void(0);" wire:click.prevent="folderActive('starred')">
                                                <i class="icon-star"></i>Starred 
                                                {!! $contact_start->count() > 0 ? '<span class="badge badge-warning float-right">'. $contact_start->count() .'</span>' : '' !!}
                                            </a>
                                        </li>
                                        <li class="{{ $pages == "trash" ? 'active' : '' }}">
                                            <a href="#" wire:click.prevent="folderActive('trash')">
                                                <i class="icon-trash"></i>Trash
                                                {!! $contact_trash->count() > 0 ? '<span class="badge badge-danger float-right">'. $contact_trash->count() .'</span>' : '' !!}
                                            </a>
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
                                <div class="mail-action clearfix">
                                    <div class="pull-left">
                                        <div class="fancy-checkbox d-inline-block">
                                            <label>
                                                <input class="select-all" type="checkbox" name="checkbox">
                                                <span></span>
                                            </label>
                                        </div>
                                        <div class="btn-group">
                                            <a href="#" wire:click.prevent="render()"  class="btn btn-outline-secondary btn-sm hidden-sm">Refresh</a>
                                            <a href="javascript:void(0);" class="btn btn-outline-secondary btn-sm hidden-sm">Archive</a>
                                            <a href="javascript:void(0);" class="btn btn-outline-secondary btn-sm">Trash</a>
                                        </div>

                                        <div class="btn-group">
                                            <button class="btn btn-outline-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">More</button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javascript:void(0);">Mark as read</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Mark as unread</a>
                                                <div role="separator" class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pull-right ml-auto">
                                        <div class="pagination-email d-flex">
                                            <p>{{ $contacts->links() }}</p>
                                            <div class="btn-group m-l-20">
                                                <button type="button" class="btn btn-outline-secondary btn-sm"><i
                                                        class="fa fa-angle-left"></i></button>
                                                <button type="button" class="btn btn-outline-secondary btn-sm"><i
                                                        class="fa fa-angle-right"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mail-list">
                                    <ul class="list-unstyled">
                                        @foreach($contacts as $contact)
                                            <li class="clearfix {{ $contact->read  ? '' : 'unread' }}">
                                                <div class="mail-detail-left">
                                                    <label class="fancy-checkbox">
                                                        <input type="checkbox" name="checkbox" class="checkbox-tick">
                                                        <span></span>
                                                    </label>
                                                    <a href="javascript:void(0);" wire:click.prevent='addStartMessage({{ $contact->id }})' class="mail-star {{ $contact->start ? 'active' : '' }}">
                                                        <i class="{{ $contact->start ? 'fa fa-star' : 'fa fa-star-o' }}"></i>
                                                    </a>
                                                </div>
                                                <div class="mail-detail-right">
                                                    <h6 class="sub">
                                                        <a href="{{ route('admin-show-message',['contact_id'=>$contact->id]) }}" class="mail-detail-expand">Dr. {{ $contact->nameContact }}</a>
                                                    </h6>
                                                    <p class="dep"><span class="m-r-10">[Contact Us]</span>{{$contact->subjectContact}}</p>
                                                    <span class="time">{{ $contact->created_at }}</span>
                                                </div>
                                                <div class="hover-action">
                                                    <a class="btn btn-info mr-2" href="{{ route('admin-show-message',['contact_id'=>$contact->id]) }}"  title="Read">
                                                        <i class="icon-envelope"></i>
                                                    </a>
                                                    <a class="btn btn-warning mr-2" href="javascript:void(0);" wire:click.prevent='AddArchiveMessage({{ $contact->id }})' title="Archive">
                                                        <i class="icon-drawer"></i>
                                                    </a>
                                                    <a href="#"  class="btn btn-danger" wire:click.prevent='sendMessageTrash({{ $contact->id }})' title="Trash">
                                                        <i class="icon-trash"></i>
                                                    </a>
                                                </div>
                                            </li>
                                            
                                        @endforeach
                                        
                                    </ul>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
