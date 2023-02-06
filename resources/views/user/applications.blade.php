@extends('layouts.user')

@section('content')
<div class="container-fluid">
    <div class="d-flex flex-wrap mb-4 row">
        <div class="col-xl-3 col-lg-4 mb-2">
            <h6 class="text-black fs-16 font-w600 mb-1">Showing {{count($applications)}} Applicantions</h6>
            <span class="fs-14">Based your preferences</span>
        </div>
        <div class="col-xl-9 col-lg-8 d-flex flex-wrap">
            <div class="me-auto">
                <a href="#" class="btn btn-primary btn-rounded me-2 mb-2">ALL</a>
                <a href="#" class="btn btn-primary btn-rounded me-2 light mb-2">Pending</a>
                <a href="#" class="btn btn-primary btn-rounded me-2 light mb-2">On-Hold</a>
                <a href="#" class="btn btn-primary btn-rounded me-2 light mb-2">Candidate</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12">
            <div class="table-responsive">
                <table class="table display mb-4 dataTablesCard table-responsive-xl card-table" id="example5">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ID</th>
                            <th>Date Applied</th>
                            <th>Company</th>
                            <th>Type</th>
                            <th>Postition</th>
                            <th>Contact</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    {{-- $applications --}}
                    <tbody>
                        @foreach ($applications as $application)
                        <tr>
                            <td>{{$loop->iteration }}</td>
                            <td>#APL-0003</td>
                            <td>June 1, 2020, 08:22 AM</td>
                            <td>
                                <div class="media">
                                    <img src="{{ asset('storage/'.$application->job->company->company_logo)}}" alt="" class="me-3" style="width: 25% !important;" width="20" height="40">
                                    <div class="media-body text-nowrap">
                                        <h6 class="text-black font-w600 fs-16 mb-0">{{$application->job->company->name}}</h6>
                                        {{-- <span class="fs-14">{{$application->job->company->name}}</span> --}}
                                    </div>
                                </div>
                            </td>
                            <td>{{strtoupper($application->job->type)}}</td>
                            <td>{{$application->job->title}}</td>
                            <td>
                                <div class="d-flex">
                                    <a class="contact-icon me-3" href="tel:{{$application->job->company->phone_number}}"><i class="fa fa-phone" aria-hidden="true"></i></a>
                                    <a class="contact-icon" href="mailto:{{$application->job->company->email}}"><i class="las la-envelope"></i></a>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a class="btn btn-rounded btn-outline-dark me-3 ms-auto" href="#">{{ucfirst($application->status)}}</a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection