<header>
    <div id="smart__topbar" class="site-top container">
        <div id="smart__lang" class="pull-right">
                    @if(Helper::GeneralWebmasterSettings("dashboard_link_status"))
                        @if(Auth::check())
                            <strong dir="{{trans('frontLang.direction')}}">
                                <a href="{{ route("adminHome") }}">
                                    <i class="fa fa-user"></i> {{ Auth::user()->name }}
                                </a>
                            </strong>
                        @else
                            <strong>
                                <a href="{{ route("adminHome") }}"><i
                                            class="fa fa-cog"></i> {{trans('frontLang.dashboard')}}
                                </a>
                            </strong>
                        @endif
                    @endif
                    @if(Helper::GeneralWebmasterSettings("dashboard_link_status") && ($WebmasterSettings->languages_ru_status  && $WebmasterSettings->languages_en_status && $WebmasterSettings->languages_kz_status ))
                        &nbsp; | &nbsp;
                    @endif
                    @if($WebmasterSettings->languages_ru_status  && $WebmasterSettings->languages_en_status && $WebmasterSettings->languages_kz_status )
                        <ul class="list-unstyled">
                            <li>
                                <a href="{{ URL::to('lang/en') }}">{{ str_replace("[ ","",str_replace(" ]","",strip_tags(trans('backLang.englishBox')))) }}
                                </a>
                            </li>
                            <li>
                                <a href="{{ URL::to('lang/kz') }}">{{ str_replace("[ ","",str_replace(" ]","",strip_tags(trans('backLang.kazakhBox')))) }}
                                </a>
                            </li>
                            <li>
                                <a href="{{ URL::to('lang/ru') }}">{{ str_replace("[ ","",str_replace(" ]","",strip_tags(trans('backLang.russianBox')))) }}
                                </a>
                            </li>

                        </ul>
                    @endif
        </div>
        <div id="smart__contacts" class="pull-left">
            @if(Helper::GeneralSiteSettings("contact_t3") !="")
                <i class="fa fa-phone"></i> &nbsp;<a href="tel:{{ Helper::GeneralSiteSettings("contact_t5") }}"><span dir="ltr">{{ Helper::GeneralSiteSettings("contact_t5") }}</span></a>
            @endif
            @if(Helper::GeneralSiteSettings("contact_t6") !="")
                <span class="top-email">
                        &nbsp; | &nbsp;
                    <i class="fa fa-envelope"></i> &nbsp;<a href="mailto:{{ Helper::GeneralSiteSettings("contact_t6") }}">{{ Helper::GeneralSiteSettings("contact_t6") }}</a>
                </span>
            @endif
        </div>
    </div>
    <div id="smart__header" class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ route("Home") }}">
                    @if(Helper::GeneralSiteSettings("style_logo_" . trans('backLang.boxCode')) !="")
                        <img alt=""
                             src="{{ URL::to('uploads/settings/'.Helper::GeneralSiteSettings("style_logo_" . trans('backLang.boxCode'))) }}">
                    @else
                        <img alt="" src="{{ URL::to('uploads/settings/nologo.png') }}">
                    @endif

                </a>
            </div>
            @include('frontEnd.includes.menu')
        </div>
    </div>
</header>