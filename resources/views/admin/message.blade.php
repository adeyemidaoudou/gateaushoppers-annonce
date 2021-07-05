@extends('layouts.admin_layout1')
@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Messages</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Message
                    </div>
                    <p class="ml-2">Objet 1 : Pâtissiers voulant vendre. <a href="{{route('accueil.messages',1)}}"><button class="btn btn-default">Voir</button></a></p>
                    <p class="ml-2">Objet 2 : Testeurs de la version bêta. <a href="{{route('accueil.messages',2)}}"><button class="btn btn-default">Voir</button></a></p>
                    <p class="ml-2">Objet 3 : Services de livraison. <a href="{{route('accueil.messages',3)}}"><button class="btn btn-default">Voir</button></a></p>
                    <p class="ml-2">Objet 4 : API pour développeurs. <a href="{{route('accueil.messages',4)}}"><button class="btn btn-default">Voir</button></a></p>
                    <p class="ml-2">Objet 5 : Dire coucou et autres. <a href="{{route('accueil.messages',5)}}"><button class="btn btn-default">Voir</button></a></p>
                    <!-- /.panel-heading -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Contenu du message
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <form role="form">
                                                <div class="form-group">
                                                    <label>Name</label>
                                                    <input readonly class="form-control" value="{{$message->name}}">
                                                </div>
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input readonly class="form-control" value="{{$message->email}}">
                                                </div>
                                                <div class="form-group">
                                                    <label>Message</label>
                                                    <textarea readonly class="form-control" rows="3">{{$message->message}}</textarea>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- /.col-lg-6 (nested) -->

                                    </div>
                                    <!-- /.row (nested) -->
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-12 -->


                </div>
                <!-- /.panel -->
            </div>
        </div>
    </div>
    <!-- /#page-wrapper -->
    <!-- Page-Level Demo Scripts - Tables - Use for reference -->

@endsection