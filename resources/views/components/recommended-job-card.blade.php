
@props(['recommendedJob'])

<div class="items" style="min-height: 100% !important;">
    <div class="card shadow">
        <div class="card-body">	
            <div class="media mb-2">
                <div class="media-body">
                    <a href="#"><p class="mb-1">{{$recommendedJob->company->name}}</p></a>
                    <a href="#"><h4 class="fs-20 text-black"> {{$recommendedJob->title}}</h4></a>
                </div>
                
                <img src="{{ asset('storage/'.$recommendedJob->company->company_logo)}}" alt="" class="me-3" style="width: 25% !important;" width="" height="50">
            </div>
            @php if($recommendedJob->salary_status == "public"): @endphp
                <span class="text-primary font-w500 d-block mb-3">{{ "₦".number_format($recommendedJob->salary_range->start_range, 0, '.', ',').' - '."₦".number_format($recommendedJob->salary_range->end_range, 0, '.', ',')}}</span>
            @php else: @endphp
                <span class="text-primary font-w500 d-block mb-3">Pay is Confidential</span>
            @php endif; @endphp
            <p class="fs-14">{{ substr_replace($recommendedJob->summary, "...", 150); }}</p>
            <div class="d-flex align-items-center mt-4">
                <a href="#" class="btn btn-primary light btn-rounded me-auto">{{  strtoupper(str_replace('_', '-',$recommendedJob->location_type)) }}</a>
                <span class="text-black font-w500 ps-3">{{$recommendedJob->company->city}}</span>
            </div>
        </div>
    </div>
</div>