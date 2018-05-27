@extends('layouts.app') @section('content')
@php
    $isShowForm = $data['isShowForm'];
@endphp
<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-12">
          <div class="card">
              <div class="card-header">
              <h2>
                  Currency convertor @if($isShowForm ){{$data['from'] . " to " .$data['to'] }}@endif</h2>
              </div>
              <div class="card-body">
                  <div class="row">
                      <div class="col-12">
                        @if(Session::has('message'))
                            <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                        @endif
                      </div>
                    <div class="col-12">
                        @if(isset($data['calcResult']) && $isShowForm )
                            <h1 class="text-center">
                                {{$data['amount']}} {{$data['from']}} =
                                <span style="color: #015b9d;">{{$data['calcResult']}}</span>
                                {{$data['to']}}
                            </h1>
                            <div class="text-center">
                                <span>
                                    {{$data['from']}} {{$data['countryFrom']}}  ↔  {{$data['to']}}
                                    {{$data['countryTo']}}
                                </span>
                            </div>
                            <div class="text-center">
                                <span>
                                    {{$data['amount']}} {{$data['from']}} = {{$data['calcResult']}} {{$data['to']}}
                                </span>
                                &nbsp; &nbsp; &nbsp;
                                <span>
                                    {{$data['amount']}} {{$data['to']}} = {{$data['calcResultReverse']}} {{$data['from']}}
                                </span>
                            </div>
                            <div class="text-center">
                                <span id="localDate"></span>
                            </div>
                            <div class="text-center">
                                <p>All figures are based on live mid-market rates. These rates are not available to consumer clients.
                                </p>
                            </div>
                        @endif
                    </div>
                    <div class="col-12">
                <form class="ml-5 form-inline">
                    <div class="form-group mb-2">
                    <input value="{{$data?$data['amount']:''}}" name="amount" type="text" class="currency-margic form-control-plaintext" id="staticEmail2" value="1">
                    </div>
                    <div class="form-group col-4 mx-sm-3 mb-2">
                            <select required value="" name="from" class="form-control currency-margic selectpicker countrypicker" data-live-search="true" data-default="United States" data-flag="true"></select>
                    </div>
                    <a id="reverse" href="javascript:void(0);">
                        <i style="font-size:2em;" class="fas fa-arrows-alt-h"></i>
                    </a>
                    <div class="form-group col-4 mx-sm-3 mb-2">
                            <select required value="" name="to" class="form-control currency-margic selectpicker countrypicker" data-live-search="true" data-default="United States" data-flag="true"></select>
                    </div>
                    <button type="submit" class="btn-calc btn btn-primary mb-2"><i class="fas fa-arrow-right"></i></button>

                </form>
                    </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $('select[name="from"]').val("{{$data?$data['from']:''}}");
        $('select[name="to"]').val("{{$data?$data['to']:''}}");
        $('#reverse').on('click', function(e){
            e.preventDefault();
            var from = $('select[name="from"]').val();
            $('select[name="from"]').val($('select[name="to"]').val());
            $('select[name="to"]').val(from);
            $('.countrypicker').selectpicker('refresh');
        })
        var date = new Date();
        var str = date.getFullYear() + "-" + (date.getMonth() + 1) + "-" + date.getDate() + " " +  date.getHours() + ":" + date.getMinutes();
        $("#localDate").html(str);
    });

</script>
@endsection
