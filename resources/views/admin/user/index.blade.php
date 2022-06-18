@extends('layouts.master')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold" style="color: black">User Data</h6>
    </div>
    <!-- Card Body -->
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped text-center" style="color: black">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        {{-- <th scope="col">Action</th> --}}
                    </tr>
                </thead>
                <tbody>
                    @forelse ($users as $key => $value)
                    <tr>
                        <th scope="row">{{$key + 1}}</th>
                        <td>{{$value->name}}</td>
                        <td>{{$value->email}}</td>
                        {{-- <td class="d-flex justify-content-center">
                            <a href="" class="btn" style="background-color: black" onclick="event.preventDefault();
                                                    document.getElementById('delete').submit();"><i
                                    class="fas fa-trash text-white"></i></a>
                            <form id="delete" action="{{ route('holiday.destroy', ['holiday' => $value->id]) }}"
                                method="POST">
                                @csrf
                                @method('DELETE')
                            </form>
                        </td> --}}
                    </tr>
                    @empty
                    <tr>
                        <td colspan="9">No Data</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
            <div class="table-responsive">
            </div>
        </div>
    </div>
    @endsection