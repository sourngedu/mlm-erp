
<div class="row">
        <div class="space-6"></div>

        <div class="col-sm-12 infobox-container">


            <div class="infobox infobox-blue">
                <div class="infobox-icon">
                    <i class="ace-icon fa fa-twitter"></i>
                </div>

                <div class="infobox-data">
                    <span class="infobox-data-number">11</span>
                    <div class="infobox-content">new followers</div>
                </div>

                <div class="badge badge-success">
                    +32%
                    <i class="ace-icon fa fa-arrow-up"></i>
                </div>
            </div>

            <div class="infobox infobox-pink">
                <div class="infobox-icon">
                    <i class="ace-icon fa fa-shopping-cart"></i>
                </div>

                <div class="infobox-data">
                    <span class="infobox-data-number">8</span>
                    <div class="infobox-content">new orders</div>
                </div>
                <div class="stat stat-important">4%</div>
            </div>

            <div class="infobox infobox-red">
                <div class="infobox-icon">
                    <i class="ace-icon fa fa-flask"></i>
                </div>

                <div class="infobox-data">
                    <span class="infobox-data-number">7</span>
                    <div class="infobox-content">experiments</div>
                </div>
            </div>

            <div class="infobox infobox-orange2">
                <div class="infobox-chart">
                    <span class="sparkline" data-values="196,128,202,177,154,94,100,170,224"><canvas width="44" height="33" style="display: inline-block; width: 44px; height: 33px; vertical-align: top;"></canvas></span>
                </div>

                <div class="infobox-data">
                    <span class="infobox-data-number">6,251</span>
                    <div class="infobox-content">pageviews</div>
                </div>

                <div class="badge badge-success">
                    7.2%
                    <i class="ace-icon fa fa-arrow-up"></i>
                </div>
            </div>

            <div class="infobox infobox-blue2">
                <div class="infobox-progress">
                    <div class="easy-pie-chart percentage" data-percent="42" data-size="46" style="height: 46px; width: 46px; line-height: 45px;">
                        <span class="percent">42</span>%
                    <canvas height="46" width="46"></canvas></div>
                </div>

                <div class="infobox-data">
                    <span class="infobox-text">traffic used</span>

                    <div class="infobox-content">
                        <span class="bigger-110">~</span>
                        58GB remaining
                    </div>
                </div>
            </div>

            <div class="space-6"></div>


        </div>

        <div class="vspace-12-sm"></div>

{{-- Personal Information        --}}

    <div class="col-sm-4">
            <div class="widget-box">
                <div class="widget-header">
                    <h4 class="widget-title">
                            <i class="normal-icon ace-icon fa fa-user red bigger-130"></i>
                    Personal Information
                    </h4>
                </div>

                <div class="widget-body">
                        <div class="widget-main">
                                <ol class="dd-list">
                                        <li class="dd-item dd2-item" data-id="16">
                                            <div class="dd-handle dd2-handle">
                                                <i class="normal-icon ace-icon fa fa-qrcode red bigger-130"></i>

                                                <i class="drag-icon ace-icon fa fa-arrows bigger-125"></i>
                                            </div>
                                            <div class="dd2-content">{{$MemberDetail->username}} (<span class="green">{{$MemberDetail->user->name}}</span> )</div>
                                        </li>

                                        <li class="dd-item dd2-item dd-colored" data-id="17">
                                            <div class="dd-handle dd2-handle btn-info">
                                                <i class="normal-icon ace-icon fa fa-user bigger-130"></i>

                                                <i class="drag-icon ace-icon fa fa-arrows bigger-125"></i>
                                            </div>
                                        <div class="dd2-content btn-success no-hover">Direct Sponser : (<span class="yellow"> {{$member_count }}</span> )</div>
                                        </li>

                                        <li class="dd-item dd2-item" data-id="18">
                                            <div class="dd-handle dd2-handle">
                                                <i class="normal-icon ace-icon fa fa-eye green bigger-130"></i>

                                                <i class="drag-icon ace-icon fa fa-arrows bigger-125"></i>
                                            </div>
                                            <div class="dd2-content">Member ID</div>
                                        </li>
                                    </ol>
                        </div>

                </div>
            </div>
    </div> <!-- / Personal Information -->


    {{-- Personal Score        --}}

    <div class="col-sm-4">
            <div class="widget-box">
                <div class="widget-header">
                    <h4 class="widget-title">
                        <i class="ace-icon fa fa-tint"></i>
                    Personal Score
                    </h4>
                </div>

                <div class="widget-body">
                        <div class="widget-main">
                            Main Content
                        </div>

                </div>
            </div>
    </div> <!-- / Personal Score -->

    {{-- Rating Organization        --}}

    <div class="col-sm-4">
            <div class="widget-box">
                <div class="widget-header">
                    <h4 class="widget-title">
                        <i class="ace-icon fa fa-tint"></i>
                    Rating Organization
                    </h4>
                </div>

                <div class="widget-body">
                        <div class="widget-main">
                            Main Content
                        </div>

                </div>
            </div>
    </div> <!-- / Rating Organization -->


        <!-- /.col -->
</div>

<div class="space-4"></div>

<div id="chart-container"></div>







