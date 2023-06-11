@if(count($my_posts)==0)
    <div class="posty">
        <div class="post-bar no-margin">
            <div class="post_topbar">
                You Haven't Posted Anything Yet.
                <p> But You Can Check Other Posts.</p>
            </div>
        </div>
    </div>
@endif


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

