@extends('layouts.layout')
@section('content')
    <div class="container-fluid">
        <div class="login-wrapper">
            <div class="login-form">
                <form action="{{ route('getReport') }}" method="post">
                    @csrf
                    <div class="input-grp">
                        <label for="email">Describe the problem*:</label>
                        <small style="color: gray;">Please provide as much detail as possible so we can better identify
                            the problem.</small>
                        <textarea name="report" id="" rows="8"></textarea>
                    </div>
                    <div class="submit-grp">
                        <button type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
