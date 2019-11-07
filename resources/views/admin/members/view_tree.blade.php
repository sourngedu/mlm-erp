@extends('layouts.backend.ace_layout')

@section('title', '| Tree View')

@push('css')
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/orgchart/2.1.3/css/jquery.orgchart.min.css'>

<style>

    /* body {
        width: 100%;
        height: 100%;
        margin: 0;
        padding: 0;
    }

    body {
        font-family: Arial;
        font-size: 14px;
        line-height: 1.428571429;
        color: #333333;
    } */

    #chart-container {
        position: relative;
        display: inline-block;
        top: 10px;
        left: 10px;
        /* height: 420px; */
        width: calc(100% - 4px);
        border: 2px dashed #aaa !important;
        border-radius: 5px;
        overflow: auto;
        text-align: center;
    }
    .rounded-circle{
        /* border-radius:5px !important; */

    }
    .card-body{
        border-radius: 16px;
        padding: 8px;
        border-color: #333333;
        background-color: cornflowerblue !important;
    }

    .profile-activity img {
        border: 2px solid #C9D6E5;
        border-radius: 5px !important;
        max-width: 60px;
        height: 64px !important;
        margin-right: 10px;
        margin-left: 0;
        box-shadow: none;
    }


    .orgchart {
        box-sizing: border-box;
        display: inline-block;
        min-height: 202px;
        min-width: 202px;
        -webkit-touch-callout: none;
        /* -webkit-user-select: none; */
        -khtml-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        background-image: none !important;
        background-size: 10px 10px;
        /* border: 1px dashed transparent; */
        /* padding: 20px; */
    }
    .orgchart .node .title {
        text-align: center;
        font-size: 14px;
        font-weight: 700;
        height: 30px;
        line-height: 30px;
        overflow: hidden;
        /* text-overflow: ellipsis; */
        white-space: nowrap;
        background-color: rgba(217,83,79,.8);
        color: #fff;
        border-radius: 4px 4px 0 0;
    }

    #chart-container {
        position: relative;
        display: inline-block;
        top: 10px;
        left: 10px;
        /* height: 420px; */
        width: calc(100% - 4px);
        border: none !important;
        border-radius: 5px;
        overflow: auto;
        text-align: center;
    }
    .orgchart .node {
        box-sizing: border-box;
        display: inline-block;
        position: relative;
        margin: 0;
        padding: 3px;
        border: 2px dashed transparent;
        text-align: center;
        width: 200px !important;
    }

    .orgchart .node .content {
        padding-top: 10px !important;
        padding-bottom: 10px !important;
        box-sizing: border-box;
        width: 100%;
        height: 100% !important;
        font-size: 11px;
        line-height: 18px;
        border: 1px solid rgba(217,83,79,.8);
        border-radius: 0 0 4px 4px;
        text-align: center;
        background-color: #fff;
        color: #333;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }

    .thumb img, .thumb-xs img, .thumb-sm img, .thumb-md img, .thumb-lg img, .thumb-btn img {
        height: auto;
        max-width: 100%;
        vertical-align: middle;
    }



</style>
@endpush

@section('content')

    <div class="main-content">
        <div class="main-content-inner">
            <div class="page-content">
                    <div class="col-xs-12 ">
                        @include('admin.members.includes.buttons')
                        @include('includes.flash_messages')
                        <!-- PAGE CONTENT BEGINS -->
                            @include('includes.validation_error_messages')
                            {!! Form::open(['route' =>'admin.users.store', 'method' => 'POST', 'class' => 'form-horizontal',
                            'id' => 'validation-form', "enctype" => "multipart/form-data"]) !!}
                            @include('admin.members.includes.tree')
                            <div class="clearfix form-actions">
                                <div class="col-md-12 align-right">
                                    <button class="btn btn-xs" type="reset">
                                        <i class="icon-undo bigger-110"></i>
                                        {{ __('Reset') }}
                                    </button>
                                    <button class="btn btn-info btn-xs" type="submit">
                                        <i class="icon-ok bigger-110"></i>
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                            {{-- <div class="hr hr-24"></div> --}}
                            {!! Form::close() !!}
                        </div><!-- /.col -->

            </div><!-- /.page-content -->
        </div>
    </div><!-- /.main-content -->

@endsection

@push('js')

<script src="{{ asset('assets/js/notify.min.js') }}"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/orgchart/2.1.3/js/jquery.orgchart.min.js'></script>



<script id="rendered-js">
    (function ($) {
        $(function () {
        var ds = {!!json_encode($members)!!};
        var nodeTemplate = function(data) {
        return `
        <div class="card bg- b1">

            <div class="profile-activity clearfix"​>


                <li class="dd-item dd2-item" data-id="16">
                    <div class="dd-handle dd2-handle">
                        ${data.children ? '<i class="normal-icon ace-icon fa fa-group red bigger-130"></i>' : ""}

                        <i class="drag-icon ace-icon fa fa-arrows bigger-125"></i>
                    </div>
                    <div class="dd2-content"><a href="${data.sponser_id}">${data.name}</a></div>
                </li>

                <div class="content">
                    <img  class="thumb img" src="${data.profile_image}" >
                    <p><strong>Code: ${data.username}</strong></p>



                    <div class="profile-social-links align-center" style="padding-left:15px;">
                        <a href="#" class="tooltip-info pull-left" title="" data-original-title="Visit my Facebook">
                            <i class="middle ace-icon fa fa-facebook-square fa-2x blue"></i>
                        </a>

                        <a href="#" class="tooltip-info pull-left" title="" data-original-title="Visit my Twitter">
                            <i class="middle ace-icon fa fa-twitter-square fa-2x light-blue"></i>
                        </a>



                        <strong class="tooltip-info"> MEMBER (MB)</strong>

                        <a href="${data.upline_id}" class="tooltip-error pull-right" title="" data-original-title="Visit my Pinterest">
                            <i class="middle ace-icon fa fa fa-arrow-circle-up fa-2x red"></i>
                        </a>

                    </div>
                </div>
            </div>
        </div>

        `;
        };
        var oc = $('#chart-container').orgchart({
            data: ds,
            depth: 2,
            nodeTemplate: nodeTemplate
        });

        });
    })(jQuery);
</script>


@endpush
