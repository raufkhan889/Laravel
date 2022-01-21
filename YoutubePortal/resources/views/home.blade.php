@extends('layouts.main-app')

@section('content')

    <div class="video-block section-padding">
        <div class="row">
            @if (session('message'))
                <div class="col-md-12">
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                </div>
            @endif
            <div class="col-md-12">
                <div class="main-title">
                    <div class="btn-group float-right right-action">
                        <a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            Sort by <i class="fa fa-caret-down" aria-hidden="true"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp;
                                Top Rated</a>
                            <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp;
                                Viewed</a>
                            <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i>
                                &nbsp; Close</a>
                        </div>
                    </div>
                    <h6>All Videos</h6>
                </div>
            </div>
            @foreach ($videos as $video)
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="video-card">
                        <div class="video-card-image image-wrap">
                            <a class="play-icon" href="{{ route('uploads.show', $video->id) }}"><i
                                    class="fas fa-play-circle"></i></a>
                            <a href="{{ route('uploads.show', $video->id) }}">
                                {{-- <img class="img-fluid" src="{{ asset('Uploads/' . $video->video) }}" alt=""> --}}
                                {{-- <iframe autostart="false" class="img-fluid"
                                    src="{{ asset('Uploads/' . $video->video) }}" frameborder="0"></iframe> --}}
                                <video width="244px" height="137.250px" controls>
                                    <source src="{{ asset('Uploads/' . $video->video) }}" type="video/mp4">
                                </video>
                            </a>
                            <div class="time">3:50</div>
                        </div>
                        <div class="video-card-body">
                            <div class="video-title">
                                <a href="{{ route('uploads.show', $video->id) }}">
                                    {{ $video->title }}
                                </a>
                            </div>
                            <div class="video-page text-success">
                                {{ $video->category->name }} <a title="" data-placement="top" data-toggle="tooltip"
                                    href="#" data-original-title="Verified"><i
                                        class="fas fa-check-circle text-success"></i></a>
                            </div>
                            <div class="video-view">
                                {{ $video->views }} views &nbsp;<i class="fas fa-calendar-alt"></i>
                                {{ $video->created_at }}
                            </div>
                            <div>
                                {{-- <a href="{{ route('uploads.downloadvid', $video->id) }}"
                                    class="">Download</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>
    </div>
    <hr class="mt-0">

@endsection
