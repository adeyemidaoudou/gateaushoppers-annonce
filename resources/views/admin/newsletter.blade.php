@extends('layouts.admin_layout1')
@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Adresses mails</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Toutes Les Adresses Mails recueillies
                    </div>
                         <!-- /.panel-heading -->
                    <div class="panel-body">
                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>email</th>
                                <th>date de réception</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($newsletters as $newsletter)

                                <tr class="odd gradeX">

                                    <td>#</td>
                                    <td>{{$newsletter->email}}</td>
                                    <td>{{$newsletter->created_at}}</td>
                                </tr>

                            @endforeach
                            </tbody>
                        </table>
                        <!-- /.table-responsive -->
                        <div class="well">
                            <h4>Vous voyez ici toutes les adresses mail receuillies auprès des utilisateurs</h4>
{{--
                            <p>Tous les messages envoyés par les utilisateurs s'afficheront ici</p>
--}}
                        </div>
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
        </div>
    </div>
    <!-- /#page-wrapper -->
    <!-- Page-Level Demo Scripts - Tables - Use for reference -->

@endsection