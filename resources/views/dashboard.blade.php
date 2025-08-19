@extends('layouts.master')
@section('title', 'Dashboard')
@section('css')
@endsection
@section('content')
<!--begin::Container-->
<div class="container-fluid">
    <!--begin::Row-->
    <div class="row">
        <!--begin::Col-->
        <div class="col-lg-3 col-6">
            <!--begin::Small Box Widget 1-->
            <div class="small-box text-bg-primary">
                <div class="inner">
                <h3>150</h3>
                <p>Authors Listed</p>
                </div>
                <svg class="small-box-icon" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path d="M11.644 1.59a.75.75 0 01.712 0l9.75 5.25a.75.75 0 010 1.32l-9.75 5.25a.75.75 0 01-.712 0l-9.75-5.25a.75.75 0 010-1.32l9.75-5.25z"></path>
                <path d="M3.265 10.602l7.668 4.129a2.25 2.25 0 002.134 0l7.668-4.13 1.37.739a.75.75 0 010 1.32l-9.75 5.25a.75.75 0 01-.71 0l-9.75-5.25a.75.75 0 010-1.32l1.37-.738z"></path>
                <path d="M10.933 19.231l-7.668-4.13-1.37.739a.75.75 0 000 1.32l9.75 5.25c.221.12.489.12.71 0l9.75-5.25a.75.75 0 000-1.32l-1.37-.738-7.668 4.13a2.25 2.25 0 01-2.134-.001z"></path>
                </svg>
                <a
                href="#"
                class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover"
                >
                More info <i class="bi bi-link-45deg"></i>
                </a>
            </div>
            <!--end::Small Box Widget 1-->
        </div>
        <!--end::Col-->
        <div class="col-lg-3 col-6">
            <!--begin::Small Box Widget 2-->
            <div class="small-box text-bg-success">
                <div class="inner">
                <h3>53<sup class="fs-5">%</sup></h3>
                <p>Publishers Listed</p>
                </div>
                <svg
                class="small-box-icon"
                fill="currentColor"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
                aria-hidden="true"
                >
                <path
                    d="M18.375 2.25c-1.035 0-1.875.84-1.875 1.875v15.75c0 1.035.84 1.875 1.875 1.875h.75c1.035 0 1.875-.84 1.875-1.875V4.125c0-1.036-.84-1.875-1.875-1.875h-.75zM9.75 8.625c0-1.036.84-1.875 1.875-1.875h.75c1.036 0 1.875.84 1.875 1.875v11.25c0 1.035-.84 1.875-1.875 1.875h-.75a1.875 1.875 0 01-1.875-1.875V8.625zM3 13.125c0-1.036.84-1.875 1.875-1.875h.75c1.036 0 1.875.84 1.875 1.875v6.75c0 1.035-.84 1.875-1.875 1.875h-.75A1.875 1.875 0 013 19.875v-6.75z"
                ></path>
                </svg>
                <a
                href="#"
                class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover"
                >
                More info <i class="bi bi-link-45deg"></i>
                </a>
            </div>
            <!--end::Small Box Widget 2-->
        </div>
        <!--end::Col-->
        <div class="col-lg-3 col-6">
            <!--begin::Small Box Widget 3-->
            <div class="small-box text-bg-warning">
                <div class="inner">
                <h3>44</h3>
                <p>Categories Listed</p>
                </div>
                <svg
                class="small-box-icon"
                fill="currentColor"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
                aria-hidden="true"
                >
                <path
                    d="M6.25 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM3.25 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM19.75 7.5a.75.75 0 00-1.5 0v2.25H16a.75.75 0 000 1.5h2.25v2.25a.75.75 0 001.5 0v-2.25H22a.75.75 0 000-1.5h-2.25V7.5z"
                ></path>
                </svg>
                <a
                href="#"
                class="small-box-footer link-dark link-underline-opacity-0 link-underline-opacity-50-hover"
                >
                More info <i class="bi bi-link-45deg"></i>
                </a>
            </div>
            <!--end::Small Box Widget 3-->
        </div>
        <!--end::Col-->
        <div class="col-lg-3 col-6">
            <!--begin::Small Box Widget 4-->
            <div class="small-box text-bg-danger">
                <div class="inner">
                <h3>65</h3>
                <p>Books Listed</p>
                </div>
                <svg
                class="small-box-icon"
                fill="currentColor"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
                aria-hidden="true"
                >
                <path
                    clip-rule="evenodd"
                    fill-rule="evenodd"
                    d="M2.25 13.5a8.25 8.25 0 018.25-8.25.75.75 0 01.75.75v6.75H18a.75.75 0 01.75.75 8.25 8.25 0 01-16.5 0z"
                ></path>
                <path
                    clip-rule="evenodd"
                    fill-rule="evenodd"
                    d="M12.75 3a.75.75 0 01.75-.75 8.25 8.25 0 018.25 8.25.75.75 0 01-.75.75h-7.5a.75.75 0 01-.75-.75V3z"
                ></path>
                </svg>
                <a
                href="#"
                class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover"
                >
                More info <i class="bi bi-link-45deg"></i>
                </a>
            </div>
            <!--end::Small Box Widget 4-->
        </div>
        <!--end::Col-->
        <!--end::Col-->
        <div class="col-lg-3 col-6">
            <!--begin::Small Box Widget 3-->
            <div class="small-box text-bg-warning">
                <div class="inner">
                <h3>44</h3>
                <p>Register Students</p>
                </div>
                <svg
                class="small-box-icon"
                fill="currentColor"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
                aria-hidden="true"
                >
                <path
                    d="M6.25 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM3.25 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM19.75 7.5a.75.75 0 00-1.5 0v2.25H16a.75.75 0 000 1.5h2.25v2.25a.75.75 0 001.5 0v-2.25H22a.75.75 0 000-1.5h-2.25V7.5z"
                ></path>
                </svg>
                <a
                href="#"
                class="small-box-footer link-dark link-underline-opacity-0 link-underline-opacity-50-hover"
                >
                More info <i class="bi bi-link-45deg"></i>
                </a>
            </div>
            <!--end::Small Box Widget 3-->
        </div>
        <!--end::Col-->
        <div class="col-lg-3 col-6">
            <!--begin::Small Box Widget 4-->
            <div class="small-box text-bg-danger">
                <div class="inner">
                <h3>65</h3>
                <p>Book Issued</p>
                </div>
                <svg
                class="small-box-icon"
                fill="currentColor"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
                aria-hidden="true"
                >
                <path
                    clip-rule="evenodd"
                    fill-rule="evenodd"
                    d="M2.25 13.5a8.25 8.25 0 018.25-8.25.75.75 0 01.75.75v6.75H18a.75.75 0 01.75.75 8.25 8.25 0 01-16.5 0z"
                ></path>
                <path
                    clip-rule="evenodd"
                    fill-rule="evenodd"
                    d="M12.75 3a.75.75 0 01.75-.75 8.25 8.25 0 018.25 8.25.75.75 0 01-.75.75h-7.5a.75.75 0 01-.75-.75V3z"
                ></path>
                </svg>
                <a
                href="#"
                class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover"
                >
                More info <i class="bi bi-link-45deg"></i>
                </a>
            </div>
            <!--end::Small Box Widget 4-->
        </div>
        <!--end::Col-->
    </div>
    <!--end::Row-->
</div>
<!--end::Container-->
@endsection
@section('js')
<script>
    // Custom JavaScript can be added here
    console.log('Dashboard loaded');
</script>
@endsection
@section('scripts')
<script src="{{ asset('js/dashboard.js') }}"></script>
@endsection
@section('footer')
<footer class="main-footer">
    <div class="float-right d-none d-sm-inline">
        <b>Version</b> 1.0.0
    </div>
    <strong>&copy; 2023 <a href="https://example.com">Library Management System</a>.</strong> All rights reserved.
</footer>
@endsection
