

@extends('layouts.theme1.master');

<!-- Left Sidebar -->


<section class="content profile-page">
    <div class="container-fluid">

            <div class="block-header">
                <div class="row">
                    <div class="col-lg-12 col-md-6 col-sm-7">
                        <h2>Profile</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Profile</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-md-12">
                    <div class="boxs-simple">
                        <div class="profile-header">
                            <div class="profile_info">
                                <div class="profile-image"> <img src="{{asset('theme1/assets/images/random-avatar1.jpg')}}" alt=""> </div>
                                <h4 class="mb-0"><strong>John</strong> Deo</h4>
                                <span class="text-muted">Ui UX Designer</span>
                                <div class="mt-10">
                                    <button class="btn btn-raised btn-default bg-blush btn-sm">Follow</button>
                                    <button class="btn btn-raised btn-default bg-green btn-sm">Message</button>
                                </div>
                                <p class="social-icon">
                                    <a title="Twitter" href="#"><i class="zmdi zmdi-twitter"></i></a>
                                    <a title="Facebook" href="#"><i class="zmdi zmdi-facebook"></i></a>
                                    <a title="Google-plus" href="#"><i class="zmdi zmdi-twitter"></i></a>
                                    <a title="Dribbble" href="#"><i class="zmdi zmdi-dribbble"></i></a>
                                    <a title="Behance" href="#"><i class="zmdi zmdi-behance"></i></a>
                                    <a title="Instagram" href="#"><i class="zmdi zmdi-instagram "></i></a>
                                    <a title="Pinterest" href="#"><i class="zmdi zmdi-pinterest "></i></a>
                                </p>
                            </div>
                        </div>
                        <div class="profile-sub-header">
                            <div class="box-list">
                                <ul class="text-center">
                                    <li> <a href="mail-inbox.html" class=""><i class="zmdi zmdi-email"></i>
                                            <p>My Inbox</p>
                                        </a> </li>
                                    <li> <a href="image-gallery.html" class=""><i class="zmdi zmdi-camera"></i>
                                            <p>Gallery</p>
                                        </a> </li>
                                    <li> <a href="#"><i class="zmdi zmdi-attachment"></i>
                                            <p>Collections</p>
                                        </a> </li>
                                    <li> <a href="#"><i class="zmdi zmdi-format-subject"></i>
                                            <p>Tasks</p>
                                        </a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-4 col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2>About Me</h2>
                        </div>
                        <div class="body">
                            <p class="text-default">Lorem Ipsum ince the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                            <blockquote>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                <small>Designer <cite title="Source Title">Source Title</cite></small> </blockquote>
                        </div>
                    </div>
                    <div class="card">
                        <div class="header">
                            <h2>My Portfolio Status</h2>
                        </div>
                        <div class="body">
                            <ul class="list-unstyled">
                                <li class="m-b-15">
                                    <div>Behance</div>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> <span class="sr-only">40% Complete (success)</span> </div>
                                    </div>
                                </li>
                                <li class="m-b-15">
                                    <div>Themeforest</div>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%"> <span class="sr-only">20% Complete</span> </div>
                                    </div>
                                </li>
                                <li class="m-b-15">
                                    <div>Dribbble</div>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"> <span class="sr-only">60% Complete (warning)</span> </div>
                                    </div>
                                </li>
                                <li class="m-b-15">
                                    <div>Pinterest</div>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%"> <span class="sr-only">80% Complete (danger)</span> </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-1">
                    <div class="card">
                        <div class="body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs">
                                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#mypost">My Post</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#timeline">Timeline</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#usersettings">Setting</a></li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="mypost">
                                    <div class="wrap-reset">
                                        <div class="mypost-form">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <textarea rows="4" class="form-control no-resize" placeholder="Please type what you want..."></textarea>
                                                </div>
                                            </div>
                                            <div class="post-toolbar-b">
                                                <a href="#" tooltip="Add File" class="btn btn-raised btn-default btn-sm"><i class="zmdi zmdi-attachment"></i></a>
                                                <a href="#" tooltip="Add Image" class="btn btn-raised btn-default btn-sm"><i class="zmdi zmdi-camera"></i></a>
                                                <a href="#" tooltip="Post it!" class="float-right btn btn-raised btn-success btn-sm">Post</a>
                                            </div>
                                        </div>
                                        <div class="mypost-list">
                                            <div class="post-box"> <span class="text-muted text-small"><i class="zmdi zmdi-alarm"></i> 3 minutes ago</span>
                                                <div class="post-img"><img src="{{asset('theme1/assets/images/puppy-1.jpg')}}" class="img-responsive" alt /></div>
                                                <div>
                                                    <h4 class="">Lorem Ipsum is simply dummy text of the printing</h4>
                                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
                                                    <p> <a href="" class="btn btn-raised btn-info btn-sm"><i class="zmdi zmdi-favorite-outline"></i> Like (5) </a> <a href="" class="btn btn-raised bg-soundcloud btn-sm"><i class="zmdi zmdi-long-arrow-return"></i> Reply</a> </p>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="post-box"> <span class="text-muted text-small"><i class="zmdi zmdi-alarm"></i> 23 minutes ago</span>
                                                <div class="post-img"><img src="{{asset('theme1/assets/images/puppy-2.jpg')}}" class="img-responsive" alt /></div>
                                                <div>
                                                    <h4 class="">Lorem Ipsum is simply dummy text of the printing</h4>
                                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
                                                    <p> <a href="" class="btn btn-raised btn-info btn-sm"><i class="zmdi zmdi-favorite-outline"></i> Like (5) </a> <a href="" class="btn btn-raised bg-soundcloud btn-sm"><i class="zmdi zmdi-long-arrow-return"></i> Reply</a> </p>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="post-box"> <span class="text-muted text-small"><i class="zmdi zmdi-alarm"></i> 45 minutes ago</span>
                                                <div class="post-img"><img src="{{asset('theme1/assets/images/puppy-3.jpg')}}" class="img-responsive" alt /></div>
                                                <div>
                                                    <h4 class="">Lorem Ipsum is simply dummy text of the printing</h4>
                                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
                                                    <p> <a href="" class="btn btn-raised btn-info btn-sm"><i class="zmdi zmdi-favorite-outline"></i> Like (5) </a> <a href="" class="btn btn-raised bg-soundcloud btn-sm"><i class="zmdi zmdi-long-arrow-return"></i> Reply</a> </p>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="text-center"> <a href="#" class="btn btn-raised btn-default btn-sm">Load More …</a> </div>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="timeline">
                                    <div class="timeline-body">
                                        <div class="timeline m-border">
                                            <div class="timeline-item">
                                                <div class="item-content">
                                                    <div class="text-small">Just now</div>
                                                    <p>Finished task #features 4.</p>
                                                </div>
                                            </div>
                                            <div class="timeline-item border-info">
                                                <div class="item-content">
                                                    <div class="text-small">11:30</div>
                                                    <p>@Jessi retwit your post</p>
                                                </div>
                                            </div>
                                            <div class="timeline-item border-warning border-l">
                                                <div class="item-content">
                                                    <div class="text-small">10:30</div>
                                                    <p>Call to customer #Jacob and discuss the detail.</p>
                                                </div>
                                            </div>
                                            <div class="timeline-item border-warning">
                                                <div class="item-content">
                                                    <div class="text-small">3 days ago</div>
                                                    <p>Jessi commented your post.</p>
                                                </div>
                                            </div>
                                            <div class="timeline-item border-danger">
                                                <div class="item-content">
                                                    <div class="text--muted">Thu, 10 Mar</div>
                                                    <p>Trip to the moon</p>
                                                </div>
                                            </div>
                                            <div class="timeline-item border-info">
                                                <div class="item-content">
                                                    <div class="text-small">Sat, 5 Mar</div>
                                                    <p>Prepare for presentation</p>
                                                </div>
                                            </div>
                                            <div class="timeline-item border-danger">
                                                <div class="item-content">
                                                    <div class="text-small">Sun, 11 Feb</div>
                                                    <p>Jessi assign you a task #Mockup Design.</p>
                                                </div>
                                            </div>
                                            <div class="timeline-item border-info">
                                                <div class="item-content">
                                                    <div class="text-small">Thu, 17 Jan</div>
                                                    <p>Follow up to close deal</p>
                                                </div>
                                            </div>
                                            <div class="timeline-item">
                                                <div class="item-content">
                                                    <div class="text-small">Just now</div>
                                                    <p>Finished task #features 4.</p>
                                                </div>
                                            </div>
                                            <div class="timeline-item border-info">
                                                <div class="item-content">
                                                    <div class="text-small">11:30</div>
                                                    <p>@Jessi retwit your post</p>
                                                </div>
                                            </div>
                                            <div class="timeline-item border-warning border-l">
                                                <div class="item-content">
                                                    <div class="text-small">10:30</div>
                                                    <p>Call to customer #Jacob and discuss the detail.</p>
                                                </div>
                                            </div>
                                            <div class="timeline-item border-warning">
                                                <div class="item-content">
                                                    <div class="text-small">3 days ago</div>
                                                    <p>Jessi commented your post.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="usersettings">
                                    <h2 class="card-inside-title">Security Settings</h2>
                                    <div class="row clearfix">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" placeholder="Username">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="password" class="form-control" placeholder="Current Password">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="password" class="form-control" placeholder="New Password">
                                                </div>
                                            </div>
                                            <button class="btn btn-raised btn-success btn-sm">Save Changes</button>
                                        </div>
                                    </div>
                                    <h2 class="card-inside-title">Account Settings</h2>
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" placeholder="First Name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" placeholder="Last Name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <textarea rows="4" class="form-control no-resize" placeholder="Address Line 1"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" placeholder="City">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" placeholder="E-mail">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" placeholder="Country">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group checkbox">
                                                <label>
                                                    <input name="optionsCheckboxes" type="checkbox">
                                                    <span class="checkbox-material"><span class="check"></span></span> Profile Visibility For Everyone </label>
                                            </div>
                                            <div class="form-group checkbox m-t-0">
                                                <label>
                                                    <input name="optionsCheckboxes" checked="" type="checkbox">
                                                    <span class="checkbox-material"><span class="check"></span></span> New task notifications </label>
                                            </div>
                                            <div class="form-group checkbox m-t-0">
                                                <label>
                                                    <input name="optionsCheckboxes" type="checkbox">
                                                    <span class="checkbox-material"><span class="check"></span></span> New friend request notifications </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <button class="btn btn-raised btn-success">Save Changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </div>
</section>
<!-- Jquery Core Js -->
