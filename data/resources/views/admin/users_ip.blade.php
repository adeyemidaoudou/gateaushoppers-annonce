@extends('layouts.admin_layout1')

@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Statistiques de visite - Page {{$page}} - Date : {{$date}}</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <!-- /.row -->
        <div class="panel-body">
            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Adresse IP</th>
                    <th> Pays</th>
                    <th>Longitude</th>
                    <th>User Agent</th>
                </tr>
                </thead>
                <tbody>
                @if($data[1][0])
                @for($i=0; $i<count($data[1]);$i++)
                    <tr class="odd gradeX">
                        <td>{{$i+1}}</td>
                        <td>{{$data[1][$i]->ip}}</td>
                        <td>{{$data[1][$i]->countryName}}</td>
                        <td class="center">{{$data[1][$i]->longitude}}</td>
                        <td class="center">{{$data[0][$i]->agent}}</td>
                    </tr>
                @endfor
                    @endif
                </tbody>
            </table>
            <!-- /.table-responsive -->
            <div class="well">
                <h4>Vous voyez ici les statistiques du nombre de vues de la page {{$page}}</h4>
                <p>Toutes les statistiques</p>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /#page-wrapper -->
@endsection