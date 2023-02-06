@props(['job'])
<div class="col-xl-4 col-lg-6">
    <div class="card shadow_1">
        <div class="card-body">	
            <div class="media mb-2">
                <div class="media-body">
                    <a href="/user/company/{{$job->company->id}}"><p class="mb-1">{{ $job->company->name }}</p></a>
                    <a href="/user/job/{{$job->id}}"><h4 class="fs-20 text-black">{{$job->title}}</h4></a>
                    <p class="btn btn-xs btn-rounded btn-outline-primary">{{ ucfirst(str_replace('_', '-',$job->location_type)) }}</p>
                </div>
                <img src="{{ asset('storage/'.$job->company->company_logo)}}" alt="" class="me-3" style="width: 25% !important;" width="" height="50">
            </div>
            <?php $user_application_status = $job->applications->where('user_id', '=', auth()->user()->id)->where('job_id', '=', $job->id)->first()?>
            {{dd($user_application_status)}}
            <span class="text-primary font-w500 d-block mb-3">{{ "₦".number_format($job->salary_range->start_range, 0, '.', ',').' - '."₦".number_format($job->salary_range->end_range, 0, '.', ',')}}</span>
            <p class="fs-14">{{ substr_replace($job->summary, "...", 150); }}</p>
            <div class="d-flex align-items-center mt-4">
                <a href="javascript:void(0);" class="btn btn-primary light btn-rounded me-auto" data-bs-toggle="modal" data-bs-target="#apply_now_modal" data-id="{{$job->id}}" data-company-name="{{$job->company->name}}" data-cover-letter-status="{{$job->cover_letter_status}}" <?= (!is_null($user_application_status)) ? "style='pointer-events: none; opacity: 0.3;'" : ''; ?> >Apply Now</a>
                {{-- make it  a class instead --}}
                <span class="text-black font-w500">{{$job->city, $job->country}}</span>
            </div>
        </div>
    </div>
</div>