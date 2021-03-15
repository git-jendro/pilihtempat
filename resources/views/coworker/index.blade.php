@extends('layouts/dashboard')

@section('title')
Coworker
@endsection

@section('header')
List Coworker
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="col-4 py-2">
                <a href="{{route('coworker.create')}}" class="btn btn-primary">Tambah Coworker</a>
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Foto</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 1
                    @endphp
                    @foreach ($coworker as $item)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->address}}</td>
                        <td>{{$item->location}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection