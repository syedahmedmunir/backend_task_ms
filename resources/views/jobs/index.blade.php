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
                            <form method="GET" action="{{ route('job.index') }}">
                              <div class="filter-secs">
                                  <div class="filter-heading">
                                      <h3>Filters</h3>
                                      <a href="{{ route('job.index') }}" title="">Clear all filters</a>
                                  </div>
                                  <div class="paddy">
                                      <div class="filter-dd">
                                          <div class="filter-ttl">
                                              <h3>Skills</h3>
                                          </div>
                                              <input class="form-control form-control-sm" type="text" name="search_skills" placeholder="Search skills" value="{{ request()->get('search_skills') }}">
                                      </div>
                                      <div class="filter-dd">
                                          <div class="filter-ttl">
                                              <h3>Availabilty</h3>
                                          </div>
                                          <ul class="avail-checks">
                                              <li>
                                                  <input @if(request()->get('availability')== 'hourly' ) checked @endif type="radio" name="availability" value="hourly" id="c1">
                                                  <label for="c1">
                                                      <span></span>
                                                  </label>
                                                  <small>Hourly</small>
                                              </li>
                                              <li>
                                                  <input @if(request()->get('availability')== 'part time' ) checked @endif type="radio" name="availability" value="part time" id="c2">
                                                  <label for="c2">
                                                      <span></span>
                                                  </label>
                                                  <small>Part Time</small>
                                              </li>
                                              <li>
                                                  <input @if(request()->get('availability')== 'full time' ) checked @endif type="radio" name="availability" value="full time" id="c3">
                                                  <label for="c3">
                                                      <span></span>
                                                  </label>
                                                  <small>Full Time</small>
                                              </li>
                                          </ul>
                                      </div>
                                      <div class="filter-dd">
                                          <div class="filter-ttl">
                                              <h3>Job Type</h3>
                                          </div>
                                              <select class="form-control form-control-sm" name="job_type">
                                                <option value="">Select Job Type</option>
                                                    @foreach ($job_types as  $job_type)
                                                        <option @if(request()->get('job_type')== $job_type->id) selected @endif value="{{ $job_type->id }}">{{ $job_type->name }}</option>
                                                    @endforeach
                                              </select>
                                      </div>
                                      <div class="filter-dd">
                                          <div class="filter-ttl">
                                              <h3>Pay Rate / Hr ($)</h3>
                                          </div>
                                          <div class="rg-slider">
                                              <input class="rn-slider slider-input" type="hidden" value="{{ request()->get('rate')??'5,50' }}" name="rate"/>
                                          </div>
                                          <div class="rg-limit">
                                              <h4>1</h4>
                                              <h4>100+</h4>
                                          </div>
                                      </div>
                                      <div class="filter-dd">
                                          <div class="filter-ttl">
                                              <h3>Countries</h3>
                                          </div>
                                              <select class="form-control form-control-sm all_countries" name="country_id">
                                                <option value="">Select Country</option>
                                                    @foreach ($countries as  $country)
                                                        <option @if(request()->get('country_id')== $country->id) selected @endif value="{{ $country->id }}">{{ $country->nicename }}</option>
                                                    @endforeach
                                              </select>
                                      </div>
                                      <input class="btn btn-block text-white" type="submit" value="Filter" style="background-color: #e44d3a;">
                                  </div>
                              </div>
                            </form>
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
                                          <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

                                            @foreach ($my_posts as $my_post)
                                            <div class="posty">
                                                <div class="post-bar no-margin">
                                                    <div class="post_topbar">
                                                        <div class="usy-dt">
                                                            <img src="{{ asset('assets/images/resources/us-pc2.png') }}">
                                                            <div class="usy-name">
                                                                <h3>{{ $my_post->user->name }}</h3>
                                                                <span><img src="{{ asset('assets/images/clock.png') }}">
                                                                    {{ date('l, h:i:s A', strtotime($my_post->created_at)); }}
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="ed-opts">
                                                            <a href="#" title="" class="ed-opts-open">
                                                              <i class="la la-ellipsis-v"></i>
                                                            </a>
                                                            <ul class="ed-options">
                                                                <li><a href="#" title="">Edit Post</a></li>
                                                                <li><a href="#" title="">Unsaved</a></li>
                                                                <li><a href="#" title="">Unbid</a></li>
                                                                <li><a href="#" title="">Close</a></li>
                                                                <li><a href="#" title="">Hide</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="epi-sec">
                                                        <ul class="descp">
                                                            <li><img src="{{ asset('assets/images/icon8.png') }}"><span>Epic Coder</span>
                                                            </li>
                                                            <li><img src="{{ asset('assets/images/icon9.png') }}">
                                                                <span>
                                                                    {{ $my_post->user->country->nicename }}
                                                                </span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="job_descp">
                                                        <h3>{{ $my_post->title }}</h3>
                                                        <ul class="job-dt">
                                                            <li><a href="#" title="">{{ ucfirst( $my_post->job_type->name )}}</a></li>
                                                            <li><span>${{ $my_post->rate }} / hr</span></li>
                                                        </ul>

                                                        <p>{{ substr($my_post->description,0,100) }}....<a href="#" title="">view more</a></p>
                                                       
                                                        <ul class="skill-tags">
                                                            @php
                                                                $tags = explode(',', $my_post->tags);
                                                            @endphp

                                                             @foreach ($tags as $tag)
                                                                <li><a href='#' title='{{ $tag }}'>{{ $tag }}</a> </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                    <div class="job-status-bar">
                                                        <ul class="like-com">
                                                            <li>
                                                                <a href="#" class="active"><i class="fas fa-heart"></i> Like</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                           
                                          </div>
                                          <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                            @foreach ($all_posts as $my_post)
                                            <div class="posty">
                                                <div class="post-bar no-margin">
                                                    <div class="post_topbar">
                                                        <div class="usy-dt">
                                                            <img src="{{ asset('assets/images/resources/us-pic.png') }}">
                                                            <div class="usy-name">
                                                                <h3>{{ $my_post->user->name }}</h3>
                                                                <span><img src="{{ asset('assets/images/clock.png') }}">
                                                                    {{ date('l, h:i:s A', strtotime($my_post->created_at)); }}
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="ed-opts">
                                                            <a href="#" title="" class="ed-opts-open">
                                                              <i class="la la-ellipsis-v"></i>
                                                            </a>
                                                            <ul class="ed-options">
                                                                <li><a href="#" title="">Edit Post</a></li>
                                                                <li><a href="#" title="">Unsaved</a></li>
                                                                <li><a href="#" title="">Unbid</a></li>
                                                                <li><a href="#" title="">Close</a></li>
                                                                <li><a href="#" title="">Hide</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="epi-sec">
                                                        <ul class="descp">
                                                            <li><img src="{{ asset('assets/images/icon8.png') }}"><span>Epic Coder</span>
                                                            </li>
                                                            <li><img src="{{ asset('assets/images/icon9.png') }}">
                                                                <span>
                                                                    {{ $my_post->user->country->nicename }}
                                                                </span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="job_descp">
                                                        <h3>{{ $my_post->title }}</h3>
                                                        <ul class="job-dt">
                                                            <li><a href="#" title="">{{ ucfirst( $my_post->job_type->name )}}</a></li>
                                                            <li><span>${{ $my_post->rate }} / hr</span></li>
                                                        </ul>

                                                        <p>{{ substr($my_post->description,0,100) }}....<a href="#" title="">view more</a></p>
                                                       
                                                        <ul class="skill-tags">
                                                            @php
                                                                $tags = explode(',', $my_post->tags);
                                                            @endphp

                                                             @foreach ($tags as $tag)
                                                                <li><a href='#' title='{{ $tag }}'>{{ $tag }}</a> </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                    <div class="job-status-bar">
                                                        <ul class="like-com">
                                                            <li>
                                                                <a href="#" class="active"><i class="fas fa-heart"></i> Like</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
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