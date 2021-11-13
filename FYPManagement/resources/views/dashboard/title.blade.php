@extends('layouts.user-dashboard-app')

@section('user-dashboard')
    <h1 class="text-center">Select Title</h1>

    <p class="text-center text-muted pt-3">Suggested Title Names</p>
    <div class="my-5">
        <form method="POST" action="{{ route('dashboard.title') }}">
            @csrf

            {{-- <input type="hidden" value="{{ $name }}" name="name"> --}}

            <div class="form-group row">
                <label for="domain" class="col-md-4 col-form-label text-md-right">Title List</label>

                <div class="col-md-6 w-100">
                    <select name="title" id="" class="form-select w-100 fw-bold c-color py-2" required>
                        <option value="University FYP Management">University FYP Management</option>
                        <option value="Emplyee Management">Emplyee Management</option>
                        <option value="Blog Site">Blog Site</option>
                        <option value="Online Exam Managment">Online Exam Managment</option>
                        <option value="Driving School Management System">Driving School Management System</option>
                        <option value="Tranport Management System">Tranport Management System</option>
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
