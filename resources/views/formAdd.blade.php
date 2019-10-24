@extends('layouts.app')
@section('content')
    <form action="{{route('clubs.add')}}" method="post">
        @csrf
        <table class="table">
            <tr>
                <th>
                    <label>NAME CLUB</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter Name Club">
                </th>
            <tr>
                <th>
                    <label>COACH</label>
                    <input type="text" class="form-control" name="coach" placeholder="Enter Coach">
                </th>
            <tr>
                <th>
                    <label>STADIUM</label>
                    <input type="text" class="form-control" name="stadium" placeholder="Enter Stadium">
                </th>
            <tr>
                <th>
                    <button type="submit" class="btn btn-primary">ADD</button>
                </th>
            </tr>
        </table>
    </form>
@endsection
