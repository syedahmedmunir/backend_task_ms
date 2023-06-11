@extends('layout.app')

@section('title')
Jobs
@endsection

@section('content')

@push('custom_css')
  <style>
    .nav-pills.tabs-my .nav-link.active, .nav-pills.tabs-my .show>.nav-link {
      background: #e44d3a;
      color: #fff;
    }
    .nav-pills.tabs-my .nav-link {
      color: #e44d3a;
    }
  </style>
@endpush

    <main>
        <div class="main-section">
            <div class="container">
                <div class="main-section-data">
                    <div class="row">
                        <div class="col-lg-3">
                            @include('jobs.partials.search_bar')
                        </div>
                        <div class="col-lg-9">
                            <div class="main-ws-sec">
                                <div class="posts-section">
                                    <ul class="nav nav-pills nav-justified mb-3 tabs-my" id="pills-tab" role="tablist">
                                        <li class="nav-item" >
                                        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">My Post</a>
                                        </li>
                                        <li class="nav-item">
                                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">All Post</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="pills-tabContent">

                                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" >
                                            @include('jobs.partials.my_posts')
                                        </div>

                                        <div class="tab-pane fade" id="pills-profile" role="tabpanel">
                                            @include('jobs.partials.all_posts')
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection