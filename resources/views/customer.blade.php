@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-sm-12 ">
            <div class="card">
                <div class="card-header">
                    <h4>Customer lists</h4>
                </div>
                <div class="gaadiex-list">
                    <div class="gaadiex-list-item">
                        <a href="#">
                            <img class="gaadiex-list-item-img" src="http://www.free-icons-download.net/images/commercial-male-user-icon-32765.png" alt="List user">
                        </a>
                        <div class="gaadiex-list-item-text">
                            <h3>GAFO001</h3>
                            <h4>Store 1</h4>
                            <small>location</small>
                        </div>
                    </div>
                    <hr class="bg-dark">
                    <div class="gaadiex-list-item">
                        <a href="#">
                            <img class="gaadiex-list-item-img" src="http://www.free-icons-download.net/images/commercial-male-user-icon-32765.png" alt="List user">
                        </a>
                        <div class="gaadiex-list-item-text">
                            <h3>GAFO001</h3>
                            <h4>Store 1</h4>
                            <small>location</small>
                        </div>
                    </div>
                    <hr class="bg-dark">
                    <div class="gaadiex-list-item">
                        <a href="#">
                            <img class="gaadiex-list-item-img" src="http://www.free-icons-download.net/images/commercial-male-user-icon-32765.png" alt="List user">
                        </a>
                        <div class="gaadiex-list-item-text">
                            <h3>GAFO001</h3>
                            <h4>Store 1</h4>
                            <small>location</small>
                        </div>
                    </div>
                    <hr class="bg-dark">
                    <div class="gaadiex-list-item">
                        <a href="#">
                            <img class="gaadiex-list-item-img" src="http://www.free-icons-download.net/images/commercial-male-user-icon-32765.png" alt="List user">
                        </a>
                        <div class="gaadiex-list-item-text">
                            <h3>GAFO001</h3>
                            <h4>Store 1</h4>
                            <small>location</small>
                        </div>
                    </div>
                    <hr class="bg-dark">
                    <div class="gaadiex-list-item">
                        <a href="#">
                            <img class="gaadiex-list-item-img" src="http://www.free-icons-download.net/images/commercial-male-user-icon-32765.png" alt="List user">
                        </a>
                        <div class="gaadiex-list-item-text">
                            <h3>GAFO001</h3>
                            <h4>Store 1</h4>
                            <small>location</small>
                        </div>
                    </div>
                    <hr class="bg-dark">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


<style>

    body {background:#e2e2e2;}
    /********card frame **************/
    .card {position: relative; border-radius: 3px; background-color: #fff;color: #4f5256;border: 1px solid #f2f2f2;margin-bottom: 16px;background:#fff;}
    .card-header{ padding: 16px;margin:0px;}
    .card-body {position: relative; padding: 16px;}

    .gaadiex-list {list-style-type: none; margin: 0;padding: 0;}
    .gaadiex-list>.gaadiex-list-item {padding: 0 22px;}
    .gaadiex-list-item-img  {
        float: left;
        width: 58px;
        height: 58px;
        margin-top: 20px;
        margin-bottom: 8px;
        margin-right: 20px;
        border-radius: 50%;
    }
    .gaadiex-list-item i  {
        float: left;
        font-size:48px;
        width: 58px;
        height: 58px;
        margin-top: 20px;
        margin-bottom: 8px;
        margin-right: 20px;
        border-radius: 50%;
    }
    .border-b-1 {border-bottom: 1px solid rgba(162,162,162,.16);}
</style>
