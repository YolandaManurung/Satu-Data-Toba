@extends('layouts.app', ['activePage' => 'luas_tanaman_dan_produksi_andaliman_dan_nilam', 'title' => 'Sistem Informasi Pusat Statistik', 'navName' => 'Table List', 'activeButton' => 'laravel'])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
               
                <div class="col-md-12"> 
                    <div class="card strpied-tabled-witd align="center"-hover">
                        <div class="card-header ">
                            
                       
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                             <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                             <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                      
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                            <div id="charts"></div> 
                            </div>

                            <div class="carousel-item">
                            <div id="charts1"></div>   
                            </div>

                            <div class="carousel-item">
                            <div id="charts2"></div>   
                            </div>

                            <div class="carousel-item">
                            <div id="charts3"></div>   
                            </div>

                            <div class="carousel-item">
                            <div id="charts4"></div>   
                            </div>

                            <div class="carousel-item">
                            <div id="charts5"></div>   
                            </div>


                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>


<!--                             
                            <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="no-icon">{{ __('Lainnya') }}</span>
                    </a> -->
                    <!-- <div class="col-12 text-right">
                                <a href="{{url('/tambah_luas_tanaman_dan_produksi_andaliman_dan_nilam')}}" class="btn btn-sm btn-primary">Tambahkan Data</a>
                            </div> -->
                    <!-- <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                   
                    <a class="dropdown-item" href="{{url('/luas_dan_produksi_kopi_dan_kakao')}}">Luas Tanaman dan Produksi Kopi dan Kakao Tanaman Perkebunan Rakyat Menurut Kecamatan</a>
                    <a class="dropdown-item" href="{{url('/luas_tanaman_dan_produksi_karet_dan_kelapa_sawit')}}">Luas Tanaman dan Produksi Karet dan Kelapa Sawit Tanaman Perkebunan Rakyat Menurut Kecamatan</a>
                    <a class="dropdown-item" href="{{url('/luas_tanaman_dan_produksi_andaliman_dan_nilam')}}">Luas Tanaman dan Produksi Aren dan Kemiri Tanaman Perkebunan Rakyat Menurut Kecamatan</a>
                    <a class="dropdown-item" href="{{url('/luas_tanaman_dan_produksi_kelapa_dan_pinang')}}">Luas Tanaman dan Produksi Kelapa dan Pinang Tanaman Perkebunan Rakyat Menurut Kecamatan</a>
                    <a class="dropdown-item" href="{{url('/luas_tanaman_dan_produksi_andaliman_dan_nilam')}}">Luas Tanaman dan Produksi Andaliman dan Nilam Tanaman Perkebunan Rakyat Menurut Kecamatan</a>
                  
                    
            -->
                        <!-- <div class="divider"></div>
                        <a class="dropdown-item" href="#">{{ __('Separated link') }}</a> -->
                    <!-- </div> -->
<!-- </div> -->
               


                      
                        <h4 class="card-title" align="center">Luas Tanaman dan Produksi Andaliman dan Nilam Tanaman Perkebunan Rakyat Menurut Kecamatan</h4>


                            <!-- <p class="card-category">Here is a subtitle for td align="center"is table</p> -->
                        <!-- </div> -->
                        <div class="card-body table-full-widtd align="center" table-responsive" >
                            <table class="table table-hover table-striped">
                            <a href="/luas_tanaman_dan_produksi_andaliman_dan_nilam/exportpdf12" class="btn btn-sm btn-warning"   >CETAK PDF</a>
                                <thead>
                                <tr>
                                    <td rowspan="2"><b>No</td>
                                    <td rowspan="2"><b>Kecamatan</td>
                                    <td align="center" colspan="3"><b>Andaliman</td>
                                    <td align="center" colspan="3"><b>Nilam</td>
                                    <td align="center" rowspan="2"><b>Tahun</td>
                                    <!-- <td align="center" rowspan="2"><b>Status</td>
                                    <td align="center" rowspan="2"><b>Aksi</td> -->
                                    </tr>

                                <tr>
                                    <td align="center" ><b>Luas Areal</td>
                                    <td align="center"><b>Produksi (Ton)</td>
                                    <td align="center"><b>Produktivitas (Kg/Ha)</td>
                      
                                    <td align="center" ><b>Luas Areal</td>
                                    <td align="center"><b>Produksi (Ton)</td>
                                    <td align="center"><b>Produktivitas (Kg/Ha)</td>

                                </tr>
                                </thead>
                                   
                               
                                <tbody>
                                @foreach($tbl12 as $tabel12)
                                    <tr>
                                        <td scope="row">{{$loop->iteration}}</td>                                    
                                        <td>{{$tabel12->kecamatan}}</td>
                                        <td align="center">{{number_format($tabel12->luas_areal_andaliman,3,",",".")}}</td>
                                        <td align="center">{{number_format($tabel12->produksi_andaliman,3,",",".")}}</td>
                                        <td align="center">{{number_format($tabel12->produktivitas_andaliman,3,",",".")}}</td>
                                        <td align="center">{{number_format($tabel12->luas_areal_nilam,3,",",".")}}</td>
                                        <td align="center">{{number_format($tabel12->produksi_nilam,3,",",".")}}</td>
                                        <td align="center">{{number_format($tabel12->produktivitas_nilam,3,",",".")}}</td>
                                        <td align="center">{{$tabel12->tahun}}</td>
                                        <!-- <td align="center">{{$tabel12->status}}</td>
                                        <td>
                                        <a href="{{ url('/edit12/'.$tabel12->id) }}" class="btn btn-sm btn-success">Edit</a>
                            &nbsp
                                   
                            <a href="/luas_tanaman_dan_produksi_andaliman_dan_nilam/hapus12/{{ $tabel12->id }}" class="btn btn-sm btn-danger">Hapus</a>
                    </td> -->
                                    </tr>
                                    @endforeach
                                    
                                      
                                    <tr>
                                    <td></td>
                                    <td scope="row">Jumlah</td>
                                    <td align="center">{{number_format($jumlah49,3,",",".")}}</td>
                                    <td align="center">{{number_format($jumlah50,3,",",".")}}</td>
                                    <td align="center">{{number_format($jumlah51,3,",",".")}}</td>
                                    <td align="center">{{number_format($jumlah52,3,",",".")}}</td>
                                    <td align="center">{{number_format($jumlah53,3,",",".")}}</td>
                                    <td align="center">{{number_format($jumlah54,3,",",".")}}</td>
                                  
                                    <td></td>    
                                    <td></td>
                                    <td></td>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
  
            </div>
        </div>


        <nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item">
      <a class="page-link" href="{{url('/luas_tanaman_dan_produksi_kelapa_dan_pinang1')}}" tabindex="-1" aria-disabled="true">Previous</a>
    </li>
    
    <li class="page-item"><a class="page-link" href="{{url('/luas_dan_produksi_kopi_dan_kakao1')}}">1</a></li>
    <li class="page-item"><a class="page-link" href="{{url('/luas_tanaman_dan_produksi_karet_dan_kelapa_sawit1')}}">2</a></li>
    <li class="page-item"><a class="page-link" href="{{url('/luas_tanaman_dan_produksi_aren_dan_kemiri1')}}">3</a></li>
    <li class="page-item"><a class="page-link" href="{{url('/luas_tanaman_dan_produksi_kelapa_dan_pinang1')}}">4</a></li>
    <li class="page-item"><a class="page-link" href="{{url('/luas_tanaman_dan_produksi_andaliman_dan_nilam1')}}">5</a></li>
   


    <li class="page-item disabled">
      <a class="page-link" href="{{url('/luas_tanaman_dan_produksi_andaliman_dan_nilam1')}}">Next</a>
    </li>
  </ul>
</nav>









    </div>
@endsection


@section('charts')
<script src="https://code.highcharts.com/highcharts.js"></script>
<script>
Highcharts.chart('charts', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Luas Areal Andaliman Menurut Kecamatan'
    },
    subtitle: {
        text: 'Kabupaten Toba'
    },
    xAxis: {
        categories: {!!json_encode($categories12)!!},
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Jumlah'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.0f}</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: 'Luas Areal Andaliman',
        data: {!!json_encode($data12)!!}

    }
  
    
    ]
});
    
    </script>
@stop

@section('charts1')
<script src="https://code.highcharts.com/highcharts.js"></script>
<script>
Highcharts.chart('charts1', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Produksi Andaliman Menurut Kecamatan'
    },
    subtitle: {
        text: 'Kabupaten Toba'
    },
    xAxis: {
        categories: {!!json_encode($categories12)!!},
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Jumlah'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.0f}</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: 'Produksi Andaliman',
        data: {!!json_encode($data12a)!!}

    }
  
    
    ]
});
    
    </script>
@stop


@section('charts2')
<script src="https://code.highcharts.com/highcharts.js"></script>
<script>
Highcharts.chart('charts2', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Produktivitas Andaliman Menurut Kecamatan'
    },
    subtitle: {
        text: 'Kabupaten Toba'
    },
    xAxis: {
        categories: {!!json_encode($categories12)!!},
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Jumlah'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.0f}</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: 'Produktivitas Andaliman',
        data: {!!json_encode($data12b)!!}

    }
  
    
    ]
});
    
    </script>
@stop

@section('charts3')
<script src="https://code.highcharts.com/highcharts.js"></script>
<script>
Highcharts.chart('charts3', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Luas Areal Nilam Menurut Kecamatan'
    },
    subtitle: {
        text: 'Kabupaten Toba'
    },
    xAxis: {
        categories: {!!json_encode($categories12)!!},
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Jumlah'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.0f}</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: 'Luas Areal Nilam',
        data: {!!json_encode($data12c)!!}

    }
  
    
    ]
});
    
    </script>
@stop

@section('charts4')
<script src="https://code.highcharts.com/highcharts.js"></script>
<script>
Highcharts.chart('charts4', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Produksi Nilam Menurut Kecamatan'
    },
    subtitle: {
        text: 'Kabupaten Toba'
    },
    xAxis: {
        categories: {!!json_encode($categories12)!!},
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Jumlah'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.0f}</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: 'Produksi Nilam',
        data: {!!json_encode($data12d)!!}
    }
  
    
    ]
});
    
    </script>
@stop

@section('charts5')
<script src="https://code.highcharts.com/highcharts.js"></script>
<script>
Highcharts.chart('charts5', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Produktivitas Nilam Menurut Kecamatan'
    },
    subtitle: {
        text: 'Kabupaten Toba'
    },
    xAxis: {
        categories: {!!json_encode($categories12)!!},
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Jumlah'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.0f}</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {  
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: 'Produktivitas Nilam',
        data: {!!json_encode($data12e)!!}
    }
  
    
    ]
});
    
    </script>
@stop