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