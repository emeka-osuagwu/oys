@extends('template')

@section('content')


  <!-- Page -->
  <div class="page animsition">
      <div class="page-content padding-30 container-fluid">
          <div class="row" data-plugin="matchHeight" data-by-row="true">
              <!-- First Row -->
              <!-- Completed Options Pie Widgets -->
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
                      <div class="col-xlg-12 col-lg-4 col-sm-4 col-xs-12">
                          <div class="widget widget-shadow widget-completed-options">
                              <div class="widget-content padding-30">
                                  <div class="row">
                                      <div class="col-xs-6">
                                          <div class="counter text-left blue-grey-700">
                                              <div class="counter-label margin-top-10">Points Completed
                                              </div>
                                              <div class="counter-number font-size-40 margin-top-10">
                                                  698
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-xs-6">
                                          <div class="pie-progress pie-progress-sm" data-plugin="pieProgress" data-valuemax="100" data-barcolor="#62a8ea" data-size="100" data-barsize="10" data-goal="62" aria-valuenow="62" role="progressbar">
                                              <span class="pie-progress-number blue-grey-700 font-size-20">
                        62%
                      </span>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-xlg-12 col-lg-4 col-sm-4 col-xs-12">
                          <div class="widget widget-shadow widget-completed-options">
                              <div class="widget-content padding-30">
                                  <div class="row">
                                      <div class="col-xs-6">
                                          <div class="counter text-left blue-grey-700">
                                              <div class="counter-label margin-top-10">Cards Completed
                                              </div>
                                              <div class="counter-number font-size-40 margin-top-10">
                                                  1,358
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-xs-6">
                                          <div class="pie-progress pie-progress-sm" data-plugin="pieProgress" data-valuemax="100" data-barcolor="#926dde" data-size="100" data-barsize="10" data-goal="56" aria-valuenow="56" role="progressbar">
                                              <span class="pie-progress-number blue-grey-700 font-size-20">
                        56%
                      </span>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <! -- End Completed Options Pie Widgets -->
              <!-- Team Total Completed -->
              <div class="col-lg-12 col-xlg-9">
                  <div id="teamCompletedWidget" class="widget widget-shadow example-responsive">
                      <div class="widget-content padding-20 padding-bottom-25">
                          <div class="row padding-bottom-40" data-plugin="matchHeight">
                              <div class="col-md-6 col-sm-12">
                                  <div class="counter text-left padding-left-10">
                                      <div class="counter-label">Team Total Completed</div>
                                      <div class="counter-number-group text-truncate">
                                          <span>1,439</span>
                                          <span>86%</span>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-md-6 col-sm-12">
                                  <ul class="list-inline margin-right-50">
                                      <li>
                                          Task Completed
                                      </li>
                                      <li>
                                          Cards Completed
                                      </li>
                                  </ul>
                              </div>
                          </div>
                          <div class="ct-chart"></div>
                      </div>
                  </div>
              </div>
              <!-- End Team Total Completed -->
              <!-- End First Row -->
              <!-- Second Row -->
              <!-- Personal -->
              <div class="col-xlg-4 col-lg-6 col-md-6">
                  <div id="personalCompletedWidget" class="widget widget-shadow padding-bottom-20">
                      <div class="widget-header cover overlay">
                          <img class="cover-image" src="{{URL::asset('global/photos/view-7-960x640.jpg')}}">
                          <div class="overlay-panel overlay-background vertical-align">
                              <div class="vertical-align-middle">
                                  <a class="avatar" href="javascript:void(0)">
                                      <img alt="" src="{{URL::asset('global/portraits/4.jpg')}}">
                                  </a>
                                  <div class="font-size-20 margin-top-10">MACHI</div>
                                  <div class="font-size-14">machidesign@163.com</div>
                              </div>
                          </div>
                      </div>
                      <div class="widget-content">
                          <div class="row text-center margin-bottom-20">
                              <div class="col-xs-6">
                                  <div class="counter">
                                      <div class="counter-label total-completed">TOTAL COMPLETED</div>
                                      <div class="counter-number red-600">1,628</div>
                                  </div>
                              </div>
                              <div class="col-xs-6">
                                  <div class="counter">
                                      <div class="counter-label">TOTAL TIME</div>
                                      <div class="counter-number blue-600">17</div>
                                  </div>
                              </div>
                          </div>
                          <div class="table-responsive">
                              <table class="table">
                                  <caption>TODAY STATISTIC</caption>
                                  <tbody>
                                      <tr>
                                          <td>
                                              Tasks Completed
                                          </td>
                                          <td>
                                              <div class="progress progress-xs margin-bottom-0">
                                                  <div class="progress-bar progress-bar-info bg-blue-600" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                                                  </div>
                                              </div>
                                          </td>
                                          <td>
                                              90%
                                          </td>
                                      </tr>
                                      <tr>
                                          <td>
                                              Cards Completed
                                          </td>
                                          <td>
                                              <div class="progress progress-xs margin-bottom-0">
                                                  <div class="progress-bar progress-bar-info bg-green-600" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 86%">
                                                  </div>
                                              </div>
                                          </td>
                                          <td>
                                              86%
                                          </td>
                                      </tr>
                                      <tr>
                                          <td>
                                              Points Completed
                                          </td>
                                          <td>
                                              <div class="progress progress-xs margin-bottom-0">
                                                  <div class="progress-bar progress-bar-info bg-red-600" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width: 68%">
                                                  </div>
                                              </div>
                                          </td>
                                          <td>
                                              68%
                                          </td>
                                      </tr>
                                  </tbody>
                              </table>
                          </div>
                      </div>
                  </div>
              </div>
              <!-- End Personal -->
              <!-- To Do List -->
              <div class="col-xlg-4 col-lg-6 col-md-6">
                  <div id="toDoListWidget" class="widget widget-shadow padding-bottom-20">
                      <div class="widget-header">
                          <a id="addNewItemBtn" href="javascript:void(0)" class="add-item-toggle pull-right">
                              <i class="icon wb-plus" aria-hidden="true"></i>
                          </a>
                          <h5 class="widget-title">TO DO LIST</h5>
                      </div>
                      <ul class="list-group">
                          <li class="list-group-item">
                              <div class="checkbox-custom checkbox-success checkbox-lg">
                                  <input type="checkbox" name="checkbox" checked="checked">
                                  <label class="item-title">Edit meeting record</label>
                              </div>
                              <div class="item-due-date">
                                  <span>Tue,aug 25</span>
                              </div>
                              <ul class="item-members">
                                  <li>
                                      <img class="avatar avatar-sm" src="{{URL::asset('global/portraits/3.jpg')}}">
                                      <button class="btn btn-sm btn-icon btn-default btn-outline btn-round">
                                          <i class="icon wb-pencil" aria-hidden="true"></i>
                                      </button>
                                  </li>
                              </ul>
                          </li>
                          <li class="list-group-item">
                              <div class="checkbox-custom checkbox-success checkbox-lg">
                                  <input type="checkbox" name="checkbox" checked="checked">
                                  <label class="item-title">Upload Photos and Video</label>
                              </div>
                              <div class="item-due-date">
                                  <span>Tue,aug 25</span>
                              </div>
                          </li>
                          <li class="list-group-item">
                              <div class="checkbox-custom checkbox-success checkbox-lg">
                                  <input type="checkbox" name="checkbox">
                                  <label class="item-title">Edit the blog system</label>
                              </div>
                              <div class="item-due-date">
                                  <span>No due date</span>
                              </div>
                              <ul class="item-members">
                                  <li>
                                      <img class="avatar avatar-sm" src="{{URL::asset('global/portraits/1.jpg')}}">
                                      <button class="btn btn-sm btn-icon btn-default btn-outline btn-round">
                                          <i class="icon wb-pencil" aria-hidden="true"></i>
                                      </button>
                                  </li>
                                  <li>
                                      <img class="avatar avatar-sm" src="{{URL::asset('global/portraits/5.jpg')}}">
                                      <button class="btn btn-sm btn-icon btn-default btn-outline btn-round">
                                          <i class="icon wb-pencil" aria-hidden="true"></i>
                                      </button>
                                  </li>
                              </ul>
                          </li>
                          <li class="list-group-item">
                              <div class="checkbox-custom checkbox-success checkbox-lg">
                                  <input type="checkbox" name="checkbox">
                                  <label class="item-title">Edit the blog system</label>
                              </div>
                              <div class="item-due-date">
                                  <span>No due date</span>
                              </div>
                              <ul class="item-members">
                                  <li>
                                      <button class="btn btn-sm btn-icon btn-default btn-outline btn-round">
                                          <i class="icon wb-pencil" aria-hidden="true"></i>
                                      </button>
                                  </li>
                              </ul>
                          </li>
                          <li class="list-group-item">
                              <div class="checkbox-custom checkbox-success checkbox-lg">
                                  <input type="checkbox" name="checkbox">
                                  <label class="item-title">Edit the blog system</label>
                              </div>
                              <div class="item-due-date">
                                  <span>No due date</span>
                              </div>
                              <ul class="item-members">
                                  <li>
                                      <img class="avatar avatar-sm" src="{{URL::asset('global/portraits/4.jpg')}}">
                                      <button class="btn btn-sm btn-icon btn-default btn-outline btn-round">
                                          <i class="icon wb-pencil" aria-hidden="true"></i>
                                      </button>
                                  </li>
                                  <li>
                                      <img class="avatar avatar-sm" src="{{URL::asset('global/portraits/6.jpg')}}">
                                      <button class="btn btn-sm btn-icon btn-default btn-outline btn-round">
                                          <i class="icon wb-pencil" aria-hidden="true"></i>
                                      </button>
                                  </li>
                                  <li>
                                      <img class="avatar avatar-sm" src="{{URL::asset('global/portraits/7.jpg')}}">
                                      <button class="btn btn-sm btn-icon btn-default btn-outline btn-round">
                                          <i class="icon wb-pencil" aria-hidden="true"></i>
                                      </button>
                                  </li>
                              </ul>
                          </li>
                      </ul>
                  </div>
              </div>
              <!-- End To Do List -->
              <!-- Recent Activity -->
              <div class="col-xlg-4 col-md-12">
                  <div id="recentActivityWidget" class="widget widget-shadow padding-bottom-20">
                      <div class="widget-header">
                          <span class="label label-default label-round pull-right">VIEW ALL</span>
                          <h5 class="widget-title">
              RECENT ACTIVITY
            </h5>
                      </div>
                      <ul class="timeline timeline-icon">
                          <li class="timeline-reverse">
                              <div class="timeline-content-wrap">
                                  <div class="timeline-dot bg-green-600">
                                      <i class="icon wb-chat" aria-hidden="true"></i>
                                  </div>
                                  <div class="timeline-content">
                                      <div class="title">
                                          <span class="authors">Victor Erixon</span> assigned to a task
                                      </div>
                                      <div class="metas">
                                          active 14 minutes ago
                                      </div>
                                      <ul class="members">
                                          <li>
                                              <img class="avatar avatar-sm" src="{{URL::asset('global/portraits/7.jpg')}}">
                                          </li>
                                          <li>
                                              <img class="avatar avatar-sm" src="{{URL::asset('global/portraits/6.jpg')}}">
                                          </li>
                                          <li>
                                              <img class="avatar avatar-sm" src="{{URL::asset('global/portraits/8.jpg')}}">
                                          </li>
                                      </ul>
                                  </div>
                              </div>
                          </li>
                          <li class="timeline-reverse">
                              <div class="timeline-content-wrap">
                                  <div class="timeline-dot bg-blue-600">
                                      <i class="icon wb-image" aria-hidden="true"></i>
                                  </div>
                                  <div class="timeline-content">
                                      <div class="title">
                                          <span class="authors">Alex Bender</span>uploaded 3 photos
                                      </div>
                                      <div class="metas">
                                          active 2 hours ago
                                      </div>
                                      <ul class="photos">
                                          <li class="cover">
                                              <img class="cover-image" src="{{URL::asset('global/photos/animal-4-240x160.jpg')}}">
                                          </li>
                                          <li class="cover">
                                              <img class="cover-image" src="{{URL::asset('global/photos/animal-2-240x160.jpg')}}">
                                          </li>
                                          <li class="cover">
                                              <img class="cover-image" src="{{URL::asset('global/photos/animal-1-240x160.jpg')}}">
                                          </li>
                                      </ul>
                                  </div>
                              </div>
                          </li>
                          <li class="timeline-reverse">
                              <div class="timeline-content-wrap">
                                  <div class="timeline-dot bg-cyan-600">
                                      <i class="icon wb-file" aria-hidden="true"></i>
                                  </div>
                                  <div class="timeline-content">
                                      <div class="title">
                                          <span class="authors">Jeff Erixon</span> invite you to attend topic discussion in
                                          <span class="room-number">B205</span> classroom
                                      </div>
                                      <div class="metas">
                                          active 4 hours ago
                                      </div>
                                      <div class="tags">
                                          As user experience designers we have to find the sweet spot
                                      </div>
                                  </div>
                              </div>
                          </li>
                          <li class="timeline-reverse">
                              <div class="timeline-content-wrap">
                                  <div class="timeline-dot bg-orange-600">
                                      <i class="icon wb-map" aria-hidden="true"></i>
                                  </div>
                                  <div class="timeline-content">
                                      <div class="title">
                                          <span class="authors">Jeff Erixon</span> invite you to attend topic discussion in
                                          <span class="room-number">B205</span> classroom
                                      </div>
                                      <div class="metas">
                                          active 3 hours ago
                                      </div>
                                      <ul class="operates">
                                          <li>
                                              <button class="btn btn-outline btn-success btn-round">Accept</button>
                                          </li>
                                          <li>
                                              <button class="btn btn-outline btn-danger btn-round">Refuse</button>
                                          </li>
                                      </ul>
                                  </div>
                              </div>
                          </li>
                      </ul>
                  </div>
              </div>
              <!-- End Recent Activity -->
              <!-- End Second Row -->
          </div>
      </div>
  </div>
  <!-- End Page -->

  <!-- Add Item Dialog -->
  <div id="addtodoItemForm" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="addtodoItemForm" aria-hidden="true">
      <div class="modal-dialog">
          <form class="modal-content form-horizontal" role="form" action="#" method="post">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                  <h4 class="moadl-title">Create New To Do Item</h4>
              </div>
              <div class="modal-body">
                  <div class="form-group">
                      <label class="col-sm-2 control-label" for="title">Title:</label>
                      <div class="col-sm-10">
                          <input id="title" class="form-control" type="text" name="title" />
                      </div>
                  </div>
                  <div class="form-group">
                      <label class="col-sm-2 control-label" for="dueDate">Due Date</label>
                      <div class="col-sm-10">
                          <div class="input-group">
                              <input id="dueDate" class="form-control" type="text" data-plugin="datepicker" data-container="#addtodoItemForm" />
                              <span class="input-group-addon">
                <i class="icon wb-calendar" aria-hidden="true"></i>
              </span>
                          </div>
                      </div>
                  </div>
                  <div class="form-group">
                      <label class="col-sm-2 control-label" for="people">People:</label>
                      <div class="col-sm-10">
                          <select id="people" multiple="multiple" data-plugin="jquery-selective">
                          </select>
                      </div>
                  </div>
              </div>
              <div class="modal-footer">
                  <div class="form-actions">
                      <button class="btn btn-primary" data-dismiss="modal" type="button">
                          Add This Item
                      </button>
                      <a class="btn btn-sm btn-white" data-dismiss="modal" href="javascript:void(0)">
          Cancel
        </a>
                  </div>
              </div>
          </form>
      </div>
  </div>
  <!-- End Add Item Dialog -->

  <!-- Edit Dialog -->
  <div class="modal fade" id="edittodoItemForm" aria-hidden="true" aria-labelledby="edittodoItemForm" role="dialog" tabindex="-1" data-show="false">
      <div class="modal-dialog">
          <form class="modal-content form-horizontal" action="#" method="post" role="form">
              <div class="modal-header">
                  <button type="button" class="close" aria-hidden="true" data-dismiss="modal">×</button>
                  <h4 class="modal-title">Edit To Do Item</h4>
              </div>
              <div class="modal-body">
                  <div class="form-group">
                      <label class="col-sm-2 control-label" for="editTitle">Title:
                      </label>
                      <div class="col-sm-10">
                          <input type="text" class="form-control" id="editTitle" name="editTitle">
                      </div>
                  </div>
                  <div class="form-group">
                      <label class="col-sm-2 control-label" for="editStarts">Due Date:
                      </label>
                      <div class="col-sm-10">
                          <div class="input-group">
                              <input type="text" class="form-control" id="editDueDate" name="editDueDate" data-container="#edittodoItemForm" data-plugin="datepicker">
                              <span class="input-group-addon">
                <i class="icon wb-calendar" aria-hidden="true"></i>
              </span>
                          </div>
                      </div>
                  </div>
                  <div class="form-group">
                      <label class="col-sm-2 control-label" for="editPeople">People:
                      </label>
                      <div class="col-sm-10">
                          <select id="editPeople" multiple="multiple" data-plugin="jquery-selective"></select>
                      </div>
                  </div>
              </div>
              <div class="modal-footer">
                  <div class="form-actions">
                      <button class="btn btn-primary" data-dismiss="modal" type="button">Save</button>
                      <button class="btn btn-danger" data-dismiss="modal" type="button">Delete</button>
                      <a class="btn btn-sm btn-white" data-dismiss="modal" href="javascript:void(0)">Cancel</a>
                  </div>
              </div>
          </form>
      </div>
  </div>
  <!-- End Edit Dialog -->

@endsection
