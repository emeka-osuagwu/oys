@extends('template')

@section('title', 'Index')

@section('content')

  <div class="page animsition">
      <div class="page-content padding-30 container-fluid">
          <div class="row" data-plugin="matchHeight" data-by-row="true">

              <div class="col-xlg-3 col-lg-12">
                  <div class="row height-full" data-plugin="matchHeight">
                      <div class="col-xlg-12 col-lg-4 col-sm-4 col-xs-12">
                          <div class="widget widget-shadow widget-completed-options">
                              <div class="widget-content padding-30">
                                  <div class="row">
                                      <div class="col-xs-6">
                                          <div class="counter text-left blue-grey-700">
                                              <div class="counter-label margin-top-10">Tasks Completed
                                              </div>
                                              <div class="counter-number font-size-40 margin-top-10">
                                                  1,234
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-xs-6">
                                          <div class="pie-progress pie-progress-sm" data-plugin="pieProgress" data-valuemax="100" data-barcolor="#57c7d4" data-size="100" data-barsize="10" data-goal="86" aria-valuenow="86" role="progressbar">
                                              <span class="pie-progress-number blue-grey-700 font-size-20">
                                                86%
                                              </span>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
          
                  </div>
              </div>

           
          </div>
      </div>
  </div>

@endsection
