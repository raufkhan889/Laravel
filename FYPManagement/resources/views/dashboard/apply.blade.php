@extends('layouts.user-dashboard-app')

@section('user-dashboard')
    <h1 class="text-center">Apply for Project</h1>

    <div class="my-5">
        <form method="POST" action="{{ route('dashboard.apply') }}">
            @csrf
            <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">full Name</label>

                <div class="col-md-6">
                    <input id="name" type="text" class="form-control " name="name" value="" required autocomplete="name"
                        autofocus>
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control " name="email" value="" required autocomplete="email"
                        autofocus>

                </div>
            </div>


            <div class="form-group row">
                <label for="dept" class="col-md-4 col-form-label text-md-right">Department</label>

                <div class="col-md-6">
                    <input id="dept" type="text" class="form-control " name="dept" value="" required autocomplete="email"
                        autofocus>

                </div>
            </div>


            <div class="form-group row">
                <label for="domain" class="col-md-4 col-form-label text-md-right">Domain</label>

                <div class="col-md-6 w-100">
                    <select name="domain" id="" class="form-select w-100 fw-bold c-color py-2" required>
                        <option value="Web Application">Web Application</option>
                        <option value="Mobile Application">Mobile Application</option>
                        <option value="Poster Making">Poster Making</option>
                        <option value="Artificial Intelligence">Artificial Intelligence</option>
                        <option value="Computer Networking">Computer Networking</option>
                        <option value="IOT">IOT</option>
                    </select>

                </div>
            </div>


            <div class="form-group row mb-0">
                <div class="col-md-8 offset-md-4">
                    <button type="submit" class="btn btn-dark">
                        Next
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
