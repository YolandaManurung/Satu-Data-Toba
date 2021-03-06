@extends('layouts.app', ['activePage' => 'formulir-panjang-jalan', 'title' => 'Sistem Informasi Pusat Statistik', 'navName' => 'Table List', 'activeButton' => 'laravel'])

@section('content')
    <div class="content">
    @if(session('error'))
            <div class="alert alert-error">
            {{ session('error') }}
            </div>
            @endif

            @if(count($errors) > 0)
            <div class="alert alert-danger">
            <strong>Perhatian !!!</strong>
            <br>
            <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
            </div>
            @endif
        <div class="container-fluid">
            <div class="section-image">
                <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
                <div class="row">

                    <div class="card col-md-8">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <h4 class="mb-0">{{ __('Jenis Daur Ulang Sampah') }}</h4>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                                <table  class="table table-borderless">
                                                                              
                        <tbody>
                            <tr>
                                <th>Kecamatan</th>
                                <td>{{ $tabel60->kecamatan }}</td>
                            </tr>
                                                                                                                                       
                            <tr>
                                <th>Daur Ulang</th>
                                <td>{{ $tabel60->daur_ulang }}</td>
                            </tr>
                            <tr>
                                <th>Ton</th>
                                <td>{{ $tabel60->ton }}</td>
                            </tr>
                            <tr>
                                <th>Produksi</th>
                                <td>{{ $tabel60->produksi }}</td>
                            </tr>
                            
                            <tr>
                                <th scope="row">Tahun</th>
                                <td>{{ $tabel60->tahun }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Status</th>
                                <td>{{ $tabel60->status}}</td>
                            </tr>
                                                                                                                                        
                        </tbody>
                        </table>   
                        @if($tabel60->status=='Requested')
            <div class="footer"> 
            <div class="col-md-4">
            <form action="/lindup_jenis_daur_ulang_sampah/{{$tabel60->id}}/accept60" method="post" class="d-inline">
            @method('patch')
             @csrf
            <button type="submit" class="btn btn-primary">Accept</button>
            </form>

            <form action="/lindup_jenis_daur_ulang_sampah/{{$tabel60->id}}/reject60" method="post" class="d-inline">
            @method('patch')
            @csrf
            <button type="submit" class="btn  btn-danger">Reject</button>
            </form>
        </div>
        @elseif($tabel60->status=='Accepted')
        <div class="col-md-5">
        <button type="submit" class="btn  btn-primary disabled"> <b> Sudah Di Accepted </b></button>
        <form action="/lindup_jenis_daur_ulang_sampah/{{$tabel60->id}}/reject60" method="post" class="d-inline">
            @method('patch')
            @csrf
        <button type="submit" class="btn  btn-danger">Reject</button>
        </form>
       
        </div>
        @else
        <div class="col-md-4">
        <button type="submit" class="btn  btn-danger disabled"> <b>Data di Reject </b></button>
            
        @endif               
        
                            <hr class="my-4" />
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection                           