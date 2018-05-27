@extends('layouts.app') @section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">Dashboard</div>
        <div class="card-body">
         @if (Session::has('message'))
            <div class="alert alert-info">{{ Session::get('message') }}</div>
         @endif
          <div class="row">
            <div class="col-3">
              <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="active nav-link" id="exchange_mode_set_default_tab_link" data-toggle="pill"
                href="#exchange_mode_set_default_tab" role="tab" aria-controls="exchange_mode_set_default_tab"
                        aria-selected="true">
                    Setting
                </a>
                @foreach ($exchangeRates as $exchangeRate) @php $class_name = $exchangeRate['id'].'ExchangeRate'; @endphp
                    <a class="nav-link" id="exchange_mode_<?php echo strtolower($exchangeRate['id']); ?>_tab_link" data-toggle="pill" href="#exchange_mode_<?php echo strtolower($exchangeRate['id']); ?>_tab" role="tab" aria-controls="exchange_mode_<?php echo strtolower($exchangeRate['id']); ?>_tab"
                aria-selected="true">{{ App\Helpers\ViewHelper::getInstance($class_name)->get_name()}}
                </a>
                @endforeach
              </div>
            </div>
            <div class="col-9">
              <div class="tab-content" id="v-pills-tabContent">
                <div class="active tab-pane fade show" id="exchange_mode_set_default_tab" role="tabpanel" aria-labelledby="exchange_mode_set_default_tab_link">
                    <form action="{{url('/admin')}}" method="POST">
                        <div class="form-group">
                        <select value="" name="exchangeratemode_default" class="select_default_exr form-control">
                                @foreach ($data['exchangeRateModes'] as $exchangeRate)
                            <option value="{{$exchangeRate['id']}}">{{$exchangeRate['name']}}</option>
                                @endforeach
                            </select>
                        </div>
                        {{ csrf_field() }}
                        <input class="btn btn-primary" type="submit" value="Save">
                    </form>
                </div>

                @foreach ($exchangeRates as $exchangeRate) @php $class_name = $exchangeRate['id'].'ExchangeRate'; $instance = App\Helpers\ViewHelper::getInstance($class_name); $settings = $instance->get_settings(); @endphp
                <div class="tab-pane fade show" id="exchange_mode_<?php echo strtolower($exchangeRate['id']); ?>_tab" role="tabpanel" aria-labelledby="exchange_mode_<?php echo strtolower($exchangeRate['id']); ?>_tab_link">
                  <form action="{{url('/admin')}}" method="POST">
                    @foreach ($settings as $setting) @php $value = App\Helpers\ViewHelper::getOption($setting['name']); if(!isset($setting['type'])){$setting['type'] = 'input';}; @endphp
                    <div class="form-group">
                      @if($setting['type'] == 'yes_no') @php $checked_yes = ($value == '1')? "checked":""; $checked_no = ($value != '1')? "checked":""; @endphp
                      <fieldset>
                        <legend style="font-size: inherit;">{{$setting['label']}}:</legend>
                        <label class="radio-inline" for="{{$setting['name']}}__id__yes">
                          <input {{$checked_yes}} class="form-control" id="{{$setting['name']}}__id__yes" type="radio" value="1" name="{{$setting['name']}}">Yes
                        </label>

                        <label class="radio-inline" for="{{$setting['name']}}__id__no">
                          <input {{$checked_no}} class="form-control" id="{{$setting['name']}}__id__no" type="radio" value="0" name="{{$setting['name']}}"> No
                        </label>

                      </fieldset>
                      @endif @if($setting['type'] == 'input')
                      <label>{{$setting['label']}}</label>
                      <input class="form-control" type="text" value="{{$value}}" name="{{$setting['name']}}"> @endif
                    </div>
                    @endforeach {{ csrf_field() }}
                    <input class="btn btn-primary" type="submit" value="Save">
                  </form>
                </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@if(isset($data['defaultExchangeRate']))
<script>
    $(document).ready(function(){
        $('.select_default_exr').val("{{$data['defaultExchangeRate']}}");
    })
</script>
@endif
@endsection
