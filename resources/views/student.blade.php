@extends('layouts.layout')
  
@section('content')

<div class="container">
    <h1 class="md-3">Daftar Orang</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Alamat</th>
                <th width="300px;">Action</th>
            </tr>
        </thead>
        <tbody>
            @if(!empty($data) && $data->count())
                @foreach($data as $key => $value)
                    <tr>
                        <td>{{ $value->name }}</td>
                        <td>{{ $value->address_info }}</td>
                        <td>
                            <button class="btn btn-success">Detail</button>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="10">There are no data.</td>
                </tr>
            @endif
        </tbody>
    </table>
         
    {!! $data->links() !!}
</div>

@endSection