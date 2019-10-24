@extends('layouts.app')
@section('content')
        <form action="{{route('clubs.update',$clubs->id)}}" method="post">
            @csrf
            <table class="table">
                <tr>
                    <th>
                        <label>NAME CLUB</label>
                        <input type="text" class="form-control" value="{{$clubs->name}}" name="name">
                    </th>
                <tr>
                    <th>
                        <label>COACH</label>
                        <input type="text" class="form-control" value="{{$clubs->coach}}" name="coach" >
                    </th>
                <tr>
                    <th>
                        <label>STADIUM</label>
                        <input type="text" class="form-control" value="{{$clubs->stadium}}" name="stadium">
                    </th>
                <tr>
                    <th>
                        <button type="submit" class="btn btn-primary">SAVE</button>
                    </th>
                </tr>
            </table>
        </form>
    @endsection



