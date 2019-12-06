@if(Helper::GeneralSiteSettings("style_subscribe"))
    <div class="col-lg-6">
        <div class="widget">
            <h4 class="widgetheading"><i class="fa fa-envelope-open"></i>&nbsp; {{ trans('frontLang.newsletter') }}</h4>
            <p>{{ trans('frontLang.subscribeToOurNewsletter') }}</p>
            <div id="subscribesendmessage"><i class="fa fa-check-circle"></i> &nbsp;{{ trans('frontLang.subscribeToOurNewsletterDone') }}</div>
            <div id="subscribeerrormessage">{{ trans('frontLang.youMessageNotSent') }}</div>

            {{Form::open(['route'=>['Home'],'method'=>'POST','class'=>'subscribeForm'])}}
            <div class="form-group col-lg-6 padding-remove-left">
                {!! Form::text('subscribe_name',"", array('placeholder' => trans('frontLang.yourName'),'class' => 'form-control','id'=>'subscribe_name', 'data-msg'=> trans('frontLang.enterYourName'),'data-rule'=>'minlen:4')) !!}
                <div class="alert alert-warning validation"></div>
            </div>
            <div class="form-group col-lg-6 padding-remove-left">
                {!! Form::text('subscribe_phone',"", array('placeholder' => trans('frontLang.phone'),'class' => 'form-control','id'=>'subscribe_phone', 'data-msg'=> trans('frontLang.enterYourPhone'),'data-rule'=>'minlen:4')) !!}
                <div class="validation"></div>
            </div>
            <button type="submit" class="btn btn-info">{{ trans('frontLang.subscribe') }}</button>
            {{Form::close()}}
            <h4 class="widgetheading" style="margin: 20px 0 10px 0"><i class="fa fa-envelope"></i>&nbsp; {{ trans('frontLang.form') }}</h4>
            <ul class="list-unstyled" style="margin-left: 0">
                <li><a href="#popup-form-1">{{ trans('frontLang.messageCard-1') }}</a></li>
                <li><a href="#popup-form-2">{{ trans('frontLang.messageCard-2') }}</a></li>
            </ul>
        </div>
    </div>
@endif