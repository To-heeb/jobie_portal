
@props(['featuredCompany'])

<div class="items">
    <div class="card">
        <div class="card-body">
            <div class="media">
                <img src="{{ asset('storage/'.$featuredCompany->company_logo)}}" alt="" class="me-3" style="width: 25% !important;" width="20" height="60">
                <div class="media-body">
                    <a href="#"><h6 class="fs-16 text-black font-w600">{{$featuredCompany->name}}</h6></a>
                    <span class="text-primary font-w500">{{$featuredCompany->country}}</span>
                </div>
            </div>
        </div>
    </div>
</div>