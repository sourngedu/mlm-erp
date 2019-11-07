<div class="widget-box transparent">
        {{-- <div class="widget-header widget-header-small">
            <h4 class="widget-title blue smaller">
                <i class="ace-icon fa fa-rss orange"></i>
                Recent Activities
            </h4>

            <div class="widget-toolbar action-buttons">
                <a href="#" data-action="reload">
                    <i class="ace-icon fa fa-refresh blue"></i>
                </a>
&nbsp;
                <a href="#" class="pink">
                    <i class="ace-icon fa fa-trash-o"></i>
                </a>
            </div>
        </div> --}}

        <div class="widget-body">
            <div class="widget-main padding-8">
                <div id="profile-feed-1" class="profile-feed">

                    @foreach ($members as $item)
                        <div class="profile-activity clearfix">
                            <div>
                                <img class="pull-left" alt="Alex Doe's avatar" src="{{asset('images/user/'.$item->user->profile_image)}}" />
                                <a class="user" href="#"> {{$item->user->name}} </a>
                                [{{$item->username}}]
                                <a href="#">{{$item->user->count()}}</a>

                                <div class="time">
                                    <i class="ace-icon fa fa-clock-o bigger-110"></i>
                                    an hour ago
                                </div>
                            </div>

                            <div class="tools action-buttons">
                                <a href="#" class="blue">
                                    <i class="ace-icon fa fa-pencil bigger-125"></i>
                                </a>

                                <a href="#" class="red">
                                    <i class="ace-icon fa fa-times bigger-125"></i>
                                </a>
                            </div>
                        </div>


                    @endforeach

                </div>
            </div>
        </div>
    </div>
