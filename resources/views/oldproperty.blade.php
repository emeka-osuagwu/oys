@extends('template')

@section('content')
<div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-6">
                <form class="form-horizontal" action="{{ URL::to('property/create') }}" value="{{ csrf_token() }}"  method="Post">
				          <input type="hidden" name="_token">
				          <header class="sign-title">Add a New Property</header>
                           <div ng-repeat="i in item">  

                     <div class="col-md-6">
                        <div class="form-group">
                          <label class="col-sm-3 control-label">Title<span class="text-danger">*</span></label>
                          <div class="col-sm-8">
                            <input type="text" name="name" class="form-control" placeholder="Property Tittle" data-validation="required" required />
                          </div>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="col-sm-3 control-label">Type <span class="text-danger">*</span></label>
                          <div class="col-sm-8">
                            <input type="text" name="role" class="form-control" placeholder="Type of Properties" data-validation="required" required />
                          </div>
                        </div>
                      </div>
                                      
                    <div class="row">                      
                    <div class="col-md-6">
                        <div class="form-group">
                          <label class="col-sm-3 control-label">Address </label>
                          <div class="col-sm-8">
                            <input type="text" name="address" class="form-control" placeholder="Type Property Address" data-validation="required"/>
                          </div>
                        </div>
                      </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="col-sm-3 control-label">City </label>
                          <div class="col-sm-8">
                            <input type="text" name="city" class="form-control" placeholder="Type City" data-validation="required"/>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="col-sm-3 control-label">State </label>
                          <div class="col-sm-8">
                            <input type="text" name="state" class="form-control" placeholder="Type State..." data-validation="required"/>
                          </div>
                        </div>
                      </div>

                       <div class="col-md-6">
                        <div class="form-group">
                          <label class="col-sm-3 control-label">Description </label>
                          <div class="col-sm-8">
                            <input type="text" name="state" class="form-control" placeholder="Describe the Property..." data-validation="required"/>
                          </div>
                        </div>
                      </div>
                       <div class="col-md-6">
                        <div class="form-group">
                          <label class="col-sm-3 control-label">Price </label>
                          <div class="col-sm-8">
                            <input type="text" name="state" class="form-control" placeholder="Type Price..." data-validation="required"/>
                          </div>
                        </div>
                      </div>
                   
                    <center>
                      <div class="btn-group">
                        <button type="submit" class="btn btn-success btn-quirk btn-wide mr5">Submit</button>
                        <button type="reset" class="btn btn-quirk btn-wide btn-default">Reset</button>
                      </div>
                    </center>
                  </div>

                </form>
               </div>
               </div>
               </div>
               </div>
        @endsection