@extends('layouts.main-app')

@section('content')
    <div class="video-block section-padding">
        <div class="row">
            <div class="col-md-8">
                <div class="single-video-left">
                    <div class="single-video">
                        <iframe width="100%" height="315" src="{{ asset('Uploads/' . $video->video) }}" frameborder="0"
                            allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    </div>
                    <div class="single-video-title box mb-3">
                        <h2><a href="javascript:void(0)">{{ $video->title }}</a></h2>
                        <p class="mb-0"><i class="fas fa-eye"></i> {{ $video->views }} views</p>
                    </div>
                    <div class="single-video-author box mb-3">
                        <div class="float-right"><button class="btn btn-danger" type="button">Subscribe
                                <strong>1.4M</strong></button> <button class="btn btn btn-outline-danger" type="button"><i
                                    class="fas fa-bell"></i></button></div>
                        <img class="img-fluid" src="img/s4.png" alt="">
                        <p><a href="javascript:void(0)"><strong>
                                    {{ $video->user->name }}
                                </strong></a> <span title="" data-placement="top" data-toggle="tooltip"
                                data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></span></p>
                        <small>Published on {{ $video->created_at }}</small>
                    </div>
                    <div class="single-video-info-content box mb-3">

                        <h6>Category :</h6>
                        <p>{{ $video->category->name }}</p>
                        <h6>About :</h6>
                        <p>{{ $video->description }}</p>

                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-video-right">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="adblock">
                                <div class="img">
                                    Google AdSense<br>
                                    336 x 280
                                </div>
                            </div>
                            <div class="main-title">
                                <div class="btn-group float-right right-action">
                                    <a href="javascript:void(0)" class="right-action-link text-gray" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        Sort by <i class="fa fa-caret-down" aria-hidden="true"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="javascript:void(0)"><i
                                                class="fas fa-fw fa-star"></i> &nbsp; Top
                                            Rated</a>
                                        <a class="dropdown-item" href="javascript:void(0)"><i
                                                class="fas fa-fw fa-signal"></i> &nbsp;
                                            Viewed</a>
                                        <a class="dropdown-item" href="javascript:void(0)"><i
                                                class="fas fa-fw fa-times-circle"></i> &nbsp;
                                            Close</a>
                                    </div>
                                </div>
                                <h6>Up Next</h6>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="video-card video-card-list">
                                <div class="video-card-image">
                                    <a class="play-icon" href="javascript:void(0)"><i
                                            class="fas fa-play-circle"></i></a>
                                    <a href="javascript:void(0)"><img class="img-fluid" src="img/v1.png" alt=""></a>
                                    <div class="time">3:50</div>
                                </div>
                                <div class="video-card-body">
                                    <div class="btn-group float-right right-action">
                                        <a href="javascript:void(0)" class="right-action-link text-gray"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="javascript:void(0)"><i
                                                    class="fas fa-fw fa-star"></i> &nbsp; Top
                                                Rated</a>
                                            <a class="dropdown-item" href="javascript:void(0)"><i
                                                    class="fas fa-fw fa-signal"></i> &nbsp;
                                                Viewed</a>
                                            <a class="dropdown-item" href="javascript:void(0)"><i
                                                    class="fas fa-fw fa-times-circle"></i>
                                                &nbsp; Close</a>
                                        </div>
                                    </div>
                                    <div class="video-title">
                                        <a href="javascript:void(0)">Here are many variati of passages of Lorem</a>
                                    </div>
                                    <div class="video-page text-success">
                                        Education <a title="" data-placement="top" data-toggle="tooltip"
                                            href="javascript:void(0)" data-original-title="Verified"><i
                                                class="fas fa-check-circle text-success"></i></a>
                                    </div>
                                    <div class="video-view">
                                        1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                                    </div>
                                </div>
                            </div>
                            <div class="video-card video-card-list">
                                <div class="video-card-image">
                                    <a class="play-icon" href="javascript:void(0)"><i
                                            class="fas fa-play-circle"></i></a>
                                    <a href="javascript:void(0)"><img class="img-fluid" src="img/v2.png" alt=""></a>
                                    <div class="time">3:50</div>
                                </div>
                                <div class="video-card-body">
                                    <div class="btn-group float-right right-action">
                                        <a href="javascript:void(0)" class="right-action-link text-gray"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="javascript:void(0)"><i
                                                    class="fas fa-fw fa-star"></i> &nbsp; Top
                                                Rated</a>
                                            <a class="dropdown-item" href="javascript:void(0)"><i
                                                    class="fas fa-fw fa-signal"></i> &nbsp;
                                                Viewed</a>
                                            <a class="dropdown-item" href="javascript:void(0)"><i
                                                    class="fas fa-fw fa-times-circle"></i>
                                                &nbsp; Close</a>
                                        </div>
                                    </div>
                                    <div class="video-title">
                                        <a href="javascript:void(0)">Duis aute irure dolor in reprehenderit in.</a>
                                    </div>
                                    <div class="video-page text-success">
                                        Education <a title="" data-placement="top" data-toggle="tooltip"
                                            href="javascript:void(0)" data-original-title="Verified"><i
                                                class="fas fa-check-circle text-success"></i></a>
                                    </div>
                                    <div class="video-view">
                                        1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                                    </div>
                                </div>
                            </div>
                            <div class="video-card video-card-list">
                                <div class="video-card-image">
                                    <a class="play-icon" href="javascript:void(0)"><i
                                            class="fas fa-play-circle"></i></a>
                                    <a href="javascript:void(0)"><img class="img-fluid" src="img/v3.png" alt=""></a>
                                    <div class="time">3:50</div>
                                </div>
                                <div class="video-card-body">
                                    <div class="btn-group float-right right-action">
                                        <a href="javascript:void(0)" class="right-action-link text-gray"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="javascript:void(0)"><i
                                                    class="fas fa-fw fa-star"></i> &nbsp; Top
                                                Rated</a>
                                            <a class="dropdown-item" href="javascript:void(0)"><i
                                                    class="fas fa-fw fa-signal"></i> &nbsp;
                                                Viewed</a>
                                            <a class="dropdown-item" href="javascript:void(0)"><i
                                                    class="fas fa-fw fa-times-circle"></i>
                                                &nbsp; Close</a>
                                        </div>
                                    </div>
                                    <div class="video-title">
                                        <a href="javascript:void(0)">Culpa qui officia deserunt mollit anim</a>
                                    </div>
                                    <div class="video-page text-success">
                                        Education <a title="" data-placement="top" data-toggle="tooltip"
                                            href="javascript:void(0)" data-original-title="Verified"><i
                                                class="fas fa-check-circle text-success"></i></a>
                                    </div>
                                    <div class="video-view">
                                        1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                                    </div>
                                </div>
                            </div>
                            <div class="video-card video-card-list">
                                <div class="video-card-image">
                                    <a class="play-icon" href="javascript:void(0)"><i
                                            class="fas fa-play-circle"></i></a>
                                    <a href="javascript:void(0)"><img class="img-fluid" src="img/v4.png" alt=""></a>
                                    <div class="time">3:50</div>
                                </div>
                                <div class="video-card-body">
                                    <div class="btn-group float-right right-action">
                                        <a href="javascript:void(0)" class="right-action-link text-gray"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="javascript:void(0)"><i
                                                    class="fas fa-fw fa-star"></i> &nbsp;
                                                Top Rated</a>
                                            <a class="dropdown-item" href="javascript:void(0)"><i
                                                    class="fas fa-fw fa-signal"></i> &nbsp;
                                                Viewed</a>
                                            <a class="dropdown-item" href="javascript:void(0)"><i
                                                    class="fas fa-fw fa-times-circle"></i>
                                                &nbsp; Close</a>
                                        </div>
                                    </div>
                                    <div class="video-title">
                                        <a href="javascript:void(0)">Deserunt mollit anim id est laborum.</a>
                                    </div>
                                    <div class="video-page text-success">
                                        Education <a title="" data-placement="top" data-toggle="tooltip"
                                            href="javascript:void(0)" data-original-title="Verified"><i
                                                class="fas fa-check-circle text-success"></i></a>
                                    </div>
                                    <div class="video-view">
                                        1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                                    </div>
                                </div>
                            </div>
                            <div class="video-card video-card-list">
                                <div class="video-card-image">
                                    <a class="play-icon" href="javascript:void(0)"><i
                                            class="fas fa-play-circle"></i></a>
                                    <a href="javascript:void(0)"><img class="img-fluid" src="img/v5.png" alt=""></a>
                                    <div class="time">3:50</div>
                                </div>
                                <div class="video-card-body">
                                    <div class="btn-group float-right right-action">
                                        <a href="javascript:void(0)" class="right-action-link text-gray"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="javascript:void(0)"><i
                                                    class="fas fa-fw fa-star"></i> &nbsp;
                                                Top Rated</a>
                                            <a class="dropdown-item" href="javascript:void(0)"><i
                                                    class="fas fa-fw fa-signal"></i> &nbsp;
                                                Viewed</a>
                                            <a class="dropdown-item" href="javascript:void(0)"><i
                                                    class="fas fa-fw fa-times-circle"></i>
                                                &nbsp; Close</a>
                                        </div>
                                    </div>
                                    <div class="video-title">
                                        <a href="javascript:void(0)">Exercitation ullamco laboris nisi ut.</a>
                                    </div>
                                    <div class="video-page text-success">
                                        Education <a title="" data-placement="top" data-toggle="tooltip"
                                            href="javascript:void(0)" data-original-title="Verified"><i
                                                class="fas fa-check-circle text-success"></i></a>
                                    </div>
                                    <div class="video-view">
                                        1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                                    </div>
                                </div>
                            </div>
                            <div class="video-card video-card-list">
                                <div class="video-card-image">
                                    <a class="play-icon" href="javascript:void(0)"><i
                                            class="fas fa-play-circle"></i></a>
                                    <a href="javascript:void(0)"><img class="img-fluid" src="img/v6.png" alt=""></a>
                                    <div class="time">3:50</div>
                                </div>
                                <div class="video-card-body">
                                    <div class="btn-group float-right right-action">
                                        <a href="javascript:void(0)" class="right-action-link text-gray"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="javascript:void(0)"><i
                                                    class="fas fa-fw fa-star"></i> &nbsp;
                                                Top Rated</a>
                                            <a class="dropdown-item" href="javascript:void(0)"><i
                                                    class="fas fa-fw fa-signal"></i> &nbsp;
                                                Viewed</a>
                                            <a class="dropdown-item" href="javascript:void(0)"><i
                                                    class="fas fa-fw fa-times-circle"></i>
                                                &nbsp; Close</a>
                                        </div>
                                    </div>
                                    <div class="video-title">
                                        <a href="javascript:void(0)">There are many variations of passages of Lorem</a>
                                    </div>
                                    <div class="video-page text-success">
                                        Education <a title="" data-placement="top" data-toggle="tooltip"
                                            href="javascript:void(0)" data-original-title="Verified"><i
                                                class="fas fa-check-circle text-success"></i></a>
                                    </div>
                                    <div class="video-view">
                                        1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                                    </div>
                                </div>
                            </div>
                            <div class="adblock mt-0">
                                <div class="img">
                                    Google AdSense<br>
                                    336 x 280
                                </div>
                            </div>
                            <div class="video-card video-card-list">
                                <div class="video-card-image">
                                    <a class="play-icon" href="javascript:void(0)"><i
                                            class="fas fa-play-circle"></i></a>
                                    <a href="javascript:void(0)"><img class="img-fluid" src="img/v2.png" alt=""></a>
                                    <div class="time">3:50</div>
                                </div>
                                <div class="video-card-body">
                                    <div class="btn-group float-right right-action">
                                        <a href="javascript:void(0)" class="right-action-link text-gray"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="javascript:void(0)"><i
                                                    class="fas fa-fw fa-star"></i> &nbsp;
                                                Top Rated</a>
                                            <a class="dropdown-item" href="javascript:void(0)"><i
                                                    class="fas fa-fw fa-signal"></i> &nbsp;
                                                Viewed</a>
                                            <a class="dropdown-item" href="javascript:void(0)"><i
                                                    class="fas fa-fw fa-times-circle"></i>
                                                &nbsp; Close</a>
                                        </div>
                                    </div>
                                    <div class="video-title">
                                        <a href="javascript:void(0)">Duis aute irure dolor in reprehenderit in.</a>
                                    </div>
                                    <div class="video-page text-success">
                                        Education <a title="" data-placement="top" data-toggle="tooltip"
                                            href="javascript:void(0)" data-original-title="Verified"><i
                                                class="fas fa-check-circle text-success"></i></a>
                                    </div>
                                    <div class="video-view">
                                        1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
