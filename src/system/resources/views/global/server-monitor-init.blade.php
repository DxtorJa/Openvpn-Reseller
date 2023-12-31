@extends('layouts.master')
@section('title', 'Monitor Server ' . $ip)
@section('body')

@section('css')
<style>
@keyframes placeHolderShimmer{
    0%{
        background-position: -468px 0
    }
    100%{
        background-position: 468px 0
    }
}

.preloader-default {
	animation-duration: 1s;
    animation-fill-mode: forwards;
    animation-iteration-count: infinite;
    animation-name: placeHolderShimmer;
    animation-timing-function: linear;
    background: #f6f7f8;
    background: linear-gradient(to right, #eeeeee 8%, #dddddd 18%, #eeeeee 33%);
    background-size: 800px 104px;
    height: 25px;
    position: relative;
}

.preloader-default-80 {
	animation-duration: 1s;
    animation-fill-mode: forwards;
    animation-iteration-count: infinite;
    animation-name: placeHolderShimmer;
    animation-timing-function: linear;
    background: #f6f7f8;
    background: linear-gradient(to right, #eeeeee 8%, #dddddd 18%, #eeeeee 33%);
    background-size: 800px 104px;
    height: 15px;
    position: relative;
    width: 80%;
    margin: 1px;
    
}

.preloader-default-90 {
	animation-duration: 1s;
    animation-fill-mode: forwards;
    animation-iteration-count: infinite;
    animation-name: placeHolderShimmer;
    animation-timing-function: linear;
    background: #f6f7f8;
    background: linear-gradient(to right, #eeeeee 8%, #dddddd 18%, #eeeeee 33%);
    background-size: 800px 104px;
    height: 15px;
    position: relative;
    width: 90%;
    margin: 1px;
}

.preloader-default-30 {
	animation-duration: 1s;
    animation-fill-mode: forwards;
    animation-iteration-count: infinite;
    animation-name: placeHolderShimmer;
    animation-timing-function: linear;
    background: #f6f7f8;
    background: linear-gradient(to right, #eeeeee 8%, #dddddd 18%, #eeeeee 33%);
    background-size: 800px 104px;
    height: 15px;
    position: relative;
    width: 30%;
    margin: 1px;
}

.preloader-default-40 {
	animation-duration: 1s;
    animation-fill-mode: forwards;
    animation-iteration-count: infinite;
    animation-name: placeHolderShimmer;
    animation-timing-function: linear;
    background: #f6f7f8;
    background: linear-gradient(to right, #eeeeee 8%, #dddddd 18%, #eeeeee 33%);
    background-size: 800px 104px;
    height: 15px;
    position: relative;
    width: 40%;
    margin: 1px;
}

.preloader-default-50 {
	animation-duration: 1s;
    animation-fill-mode: forwards;
    animation-iteration-count: infinite;
    animation-name: placeHolderShimmer;
    animation-timing-function: linear;
    background: #f6f7f8;
    background: linear-gradient(to right, #eeeeee 8%, #dddddd 18%, #eeeeee 33%);
    background-size: 800px 104px;
    height: 15px;
    position: relative;
    width: 50%;
    margin: 1px;
}

.preloader-default-60 {
	animation-duration: 1s;
    animation-fill-mode: forwards;
    animation-iteration-count: infinite;
    animation-name: placeHolderShimmer;
    animation-timing-function: linear;
    background: #f6f7f8;
    background: linear-gradient(to right, #eeeeee 8%, #dddddd 18%, #eeeeee 33%);
    background-size: 800px 104px;
    height: 15px;
    position: relative;
    width: 60%;
    margin: 1px;
    
}

.preloader-default-70 {
	animation-duration: 1s;
    animation-fill-mode: forwards;
    animation-iteration-count: infinite;
    animation-name: placeHolderShimmer;
    animation-timing-function: linear;
    background: #f6f7f8;
    background: linear-gradient(to right, #eeeeee 8%, #dddddd 18%, #eeeeee 33%);
    background-size: 800px 104px;
    height: 15px;
    position: relative;
    width: 70%;
    margin: 1px;
    
}

.preloader-online {
	animation-duration: 1s;
    animation-fill-mode: forwards;
    animation-iteration-count: infinite;
    animation-name: placeHolderShimmer;
    animation-timing-function: linear;
    background: #f6f7f8;
    background: linear-gradient(to right, #8c8c8c 8%, #666666 18%, #8c8c8c 33%);
    background-size: 800px 104px;
    height: 40px;
    position: relative;
}

.preloader-green-button {
	animation-duration: 1s;
    animation-fill-mode: forwards;
    animation-iteration-count: infinite;
    animation-name: placeHolderShimmer;
    animation-timing-function: linear;
    background: #f6f7f8;
    background: linear-gradient(to right, #5cb85c 8%, #3e8e3e 18%, #5cb85c 33%);
    background-size: 800px 104px;
    height: 20px;
    position: relative;
    border-radius: 3px;
    width: 60px;
    display: inline-block;
    
}

.preloader-red-button {
	animation-duration: 1s;
    animation-fill-mode: forwards;
    animation-iteration-count: infinite;
    animation-name: placeHolderShimmer;
    animation-timing-function: linear;
    background: #f6f7f8;
    background: linear-gradient(to right, #d9534f 8%, #bc2e29 18%, #d9534f 33%);
    background-size: 800px 104px;
    height: 20px;
    position: relative;
    border-radius: 3px;
    width: 60px;
    display: inline-block;
}

.preloader-yellow-button {
	animation-duration: 1s;
    animation-fill-mode: forwards;
    animation-iteration-count: infinite;
    animation-name: placeHolderShimmer;
    animation-timing-function: linear;
    background: #f6f7f8;
    background: linear-gradient(to right, #ffd11a 8%, #e6b800 18%, #ffd11a 33%);
    background-size: 800px 104px;
    height: 20px;
    position: relative;
    border-radius: 3px;
    width: 60px;
    display: inline-block;
}

.preloader-pink {
	animation-duration: 1s;
    animation-fill-mode: forwards;
    animation-iteration-count: infinite;
    animation-name: placeHolderShimmer;
    animation-timing-function: linear;
    background: #f6f7f8;
    background: linear-gradient(to right, #E91E63 8%, #d11553 18%, #E91E63 33%);
    background-size: 800px 104px;
    height: 15px;
    position: relative;
    width: 40%;
    margin-left: 15px;
}

.preloader-blue {
	animation-duration: 1s;
    animation-fill-mode: forwards;
    animation-iteration-count: infinite;
    animation-name: placeHolderShimmer;
    animation-timing-function: linear;
    background: #f6f7f8;
    background: linear-gradient(to right, #2196F3 8%, #0a6fc2 18%, #2196F3 33%);
    background-size: 800px 104px;
    height: 15px;
    position: relative;
    width: 30%;
    margin-left: 15px;
}

.preloader-purple {
	animation-duration: 1s;
    animation-fill-mode: forwards;
    animation-iteration-count: infinite;
    animation-name: placeHolderShimmer;
    animation-timing-function: linear;
    background: #f6f7f8;
    background: linear-gradient(to right, #673AB7 8%, #4d2b88 18%, #673AB7 33%);
    background-size: 800px 104px;
    height: 15px;
    position: relative;
    width: 60%;
    margin-left: 15px;
}

.preloader-orange {
	animation-duration: 1s;
    animation-fill-mode: forwards;
    animation-iteration-count: infinite;
    animation-name: placeHolderShimmer;
    animation-timing-function: linear;
    background: #f6f7f8;
    background: linear-gradient(to right, #FF5722 8%, #cc3000 18%, #FF5722 33%);
    background-size: 800px 104px;
    height: 15px;
    position: relative;
    width: 60%;
    margin-left: 15px;
}

.preloader-teal {
	animation-duration: 1s;
    animation-fill-mode: forwards;
    animation-iteration-count: infinite;
    animation-name: placeHolderShimmer;
    animation-timing-function: linear;
    background: #f6f7f8;
    background: linear-gradient(to right, #009688 8%, #00665c 18%, #009688 33%);
    background-size: 800px 104px;
    height: 15px;
    position: relative;
    width: 20%;
    margin-left: 15px;
}
</style>
@endsection 

<div id="monitor-wrapper">
    
    <div id="monitor-wrapper-inner">
        <div class="block-header">
            <h2>MONITOR SERVER</h2>
        </div>

        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                <div id="result"></div>
            </div>
        </div>

        <div class="row clearfix">
            
            <div class="col-md-4">
                <div class="card">
                    <div class="header">
                        <h2 class="text-center">
                            <div class="preloader-default"></div>
                        </h2>
                    </div>
                    <div class="body">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <div style="display: inline-block;" class="preloader-default-50"></div> 
                                <div style="display: inline-block;" class="preloader-pink"></div>
                            </li>
                            <li class="list-group-item">
                                <div style="display: inline-block;" class="preloader-default-60"></div> 
                                <div style="display: inline-block;" class="preloader-blue"></div>
                            </li>
                            <li class="list-group-item">
                                <div style="display: inline-block;" class="preloader-default-30"></div> 
                                <div style="display: inline-block;" class="preloader-purple"></div>
                            </li>
                            <li class="list-group-item">
                                <div style="display: inline-block;" class="preloader-default-70"></div> 
                                <div style="display: inline-block;" class="preloader-teal"></div>
                            </li>
                            <li class="list-group-item">
                                <div style="display: inline-block;" class="preloader-default-30"></div> 
                                <div style="display: inline-block;" class="preloader-orange"></div>
                            </li>
                        </ul>
                            
                        <div class="preloader-yellow-button"></div>
                        <div class="preloader-red-button"></div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-8">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header bg-blue">
                            <h2 class="text-center">
                                {{-- DROPBEAR - <span id="dropbear_status">ONLINE</span> --}}
                                <div class="preloader-default"></div>
                            </h2>
                        </div>
                        <div class="body">
                            <h1 class="text-center">
                                {{-- <span id="dropbear_status">ONLINE</span> --}}
                                <div class="preloader-default-90"></div>
                                <div class="preloader-default-50"></div>
                                <div class="preloader-default-80"></div>
                                <div class="preloader-default-60"></div>
                            </h1>
                            <hr />
                            <div class="preloader-yellow-button"></div>
                            <div class="preloader-red-button"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="card">
                        <div class="header bg-red">
                            <h2 class="text-center">
                                {{-- DROPBEAR - <span id="dropbear_status">ONLINE</span> --}}
                                <div class="preloader-default"></div>
                            </h2>
                        </div>
                        <div class="body">
                            <h1 class="text-center">
                                {{-- <span id="dropbear_status">ONLINE</span> --}}
                                <div class="preloader-default-80"></div>
                                <div class="preloader-default-50"></div>
                                <div class="preloader-default-90"></div>
                            </h1>
                            <hr />
                            <div class="preloader-green-button"></div>
                            <div class="preloader-red-button"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="card">
                        <div class="header bg-purple">
                            <h2 class="text-center">
                                {{-- DROPBEAR - <span id="dropbear_status">ONLINE</span> --}}
                                <div class="preloader-default"></div>
                            </h2>
                        </div>
                        <div class="body">
                            <h1 class="text-center">
                                {{-- <span id="dropbear_status">ONLINE</span> --}}
                                <div class="preloader-default-80"></div>
                                <div class="preloader-default-50"></div>
                                <div class="preloader-default-40"></div>
                            </h1>
                            <hr />
                            <div class="preloader-green-button"></div>
                            <div class="preloader-yellow-button"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="card">
                        <div class="header bg-blue-grey">
                            <h2 class="text-center">
                                {{-- DROPBEAR - <span id="dropbear_status">ONLINE</span> --}}
                                <div class="preloader-default"></div>
                            </h2>
                        </div>
                        <div class="body">
                            <h1 class="text-center">
                                {{-- <span id="dropbear_status">ONLINE</span> --}}
                                <div class="preloader-default-40"></div>
                                <div class="preloader-default-90"></div>
                                <div class="preloader-default-60"></div>
                            </h1>
                            <hr />
                            <div class="preloader-red-button"></div>
                            <div class="preloader-yellow-button"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="card">
                        <div class="header bg-green">
                            <h2 class="text-center">
                                {{-- DROPBEAR - <span id="dropbear_status">ONLINE</span> --}}
                                <div class="preloader-default"></div>
                            </h2>
                        </div>
                        <div class="body">
                            <h1 class="text-center">
                                {{-- <span id="dropbear_status">ONLINE</span> --}}
                                <div class="preloader-default-80"></div>
                                <div class="preloader-default-50"></div>
                                <div class="preloader-default-40"></div>
                            </h1>
                            <hr />
                            <div class="preloader-red-button"></div>
                            <div class="preloader-green-button"></div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>

</div>

@section('js')

<script>
    $(document).ready(function() {
        $.ajax({
            url: '/server/monitor/{{encrypt($ip)}}',
            type: 'POST',
            data: '_token={{csrf_token()}}',
            success: function(d) {
                $('#monitor-wrapper-inner').html(d);
                $('.count-to').each(function(i, e) {
                    $(e).countTo();
                });
            },
            error: function(err) {
                swal('Whoops!', 'Unable to connect to to server!', 'error');
            }
        });
    });
</script>
@endsection

@endsection