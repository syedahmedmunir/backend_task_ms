@if(count($all_posts)==0)
    <div class="posty">
        <div class="post-bar no-margin">
            <div class="post_topbar">
                No Posts To Show
            </div>
        </div>
    </div>
@endif


@foreach ($all_posts as $all_post)
    <div class="posty">
        <div class="post-bar no-margin">
            <div class="post_topbar">
                <div class="usy-dt">
                    <img src="{{ asset('assets/images/resources/us-pic.png') }}">
                    <div class="usy-name">
                        <h3>{{ $all_post->user->name }}</h3>
                        <span><img src="{{ asset('assets/images/clock.png') }}">
                            {{ date('l, h:i:s A', strtotime($all_post->created_at)); }}
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
                            {{ $all_post->user->country->nicename }}
                        </span>
                    </li>
                </ul>
            </div>
            <div class="job_descp">
                <h3>{{ $all_post->title }}</h3>
                <ul class="job-dt">
                    <li><a href="#" title="">{{ ucfirst( $all_post->job_type->name )}}</a></li>
                    <li><span>${{ $all_post->rate }} / hr</span></li>
                </ul>

                <p>{{ substr($all_post->description,0,100) }}....<a href="#" title="">view more</a></p>
                
                <ul class="skill-tags">
                    @php
                        $tags = explode(',', $all_post->tags);
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