
@props(['featuredCompany'])

<div class="items" style="min-height: 100% !important;">
    <div class="card">
        <div class="card-body">
            <div class="media">
                <img src="{{ asset('storage/'.$featuredCompany->company_logo)}}" alt="" class="me-3" style="width: 25% !important;" width="20" height="60">
                <div class="media-body">
                    <h6 class="fs-16 text-black font-w600">{{$featuredCompany->name}}</h6>
                    <span class="text-primary font-w500">{{$featuredCompany->country}}</span>
                </div>
            </div>
        </div>
    </div>
</div>