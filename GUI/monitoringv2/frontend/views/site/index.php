<?php

/* @var $this yii\web\View */

$this->title = 'Monitoring System';
?>
<div class="site-index">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<header>
  <div class="time">
          <div style="margin: 15px 0px 0px; display: inline-block; text-align: center; width: 250px;"><div style="display: inline-block; padding: 2px 4px; margin: 0px 0px 5px; border: 1px solid rgb(204, 204, 204); text-align: center; background-color: rgb(255, 255, 255);"><a href="http://localtimes.info/Asia/Philippines/Manila/" style="text-decoration: none; font-size: 13px; color: rgb(0, 0, 0);"><img src="http://localtimes.info/images/countries/ph.png"="" border=0="" style="border:0;margin:0;padding:0"=""> Manila</a></div><script type="text/javascript" src="http://localtimes.info/clock.php?continent=Asia&country=Philippines&city=Manila&cp1_Hex=000000&cp2_Hex=FFFFFF&cp3_Hex=000000&fwdt=288&ham=0&hbg=0&hfg=0&sid=0&mon=0&wek=0&wkf=0&sep=0&widget_number=1014"></script></div>
  </div>  
</header>
  <div class="row">
 <div class="col-lg-1 col-xs-6">
  </div> 
      <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><sup style="font-size: 20px">Law and Order</sup></h3>

              <p><sup style="font-size: 13px">last update</sup></p>
            </div>
            <div class="icon">
              <i class="fa  fa-legal"></i>
            </div>
            <a href="#" class="small-box-footer" data-toggle="modal" data-target="#lawOrder">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

<!--Modal-->
    <div class="modal fade" id="lawOrder" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Law and Order</h4>
        </div>
        <div class="modal-body">

          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-blue">
            <div class="inner">
              <h3><sup style="font-size: 20px">Camp Management</sup></h3>

               <p><sup style="font-size: 13px">last update</sup></p>
            </div>
            <div class="icon">
              <i class="fa fa-home"></i>
            </div>
            <a href="#" class="small-box-footer" data-toggle="modal" data-target="#camp">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

<!--Modal-->
    <div class="modal fade" id="camp" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Camp Coordianation and Management</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

            <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red-active">
            <div class="inner">
              <h3><sup style="font-size: 20px">Dead and Missing</sup></h3>

              <p><sup style="font-size: 13px">last update</sup></p>
            </div>
            <div class="icon">
              <i class="fa  fa-users"></i>
            </div>
            <a href="#" class="small-box-footer" data-toggle="modal" data-target="#deadM">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

<!--Modal-->
    <div class="modal fade" id="deadM" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Dead and Missing</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-teal">
            <div class="inner">
              <h3> <sup style="font-size: 20px">Food and Non-Food</sup></h3>

               <p><sup style="font-size: 13px">last update</sup></p>
            </div>
            <div class="icon">
              <i class="fa fa-cutlery"></i>
            </div>
            <a href="#" class="small-box-footer" data-toggle="modal" data-target="#food">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

<!--Modal-->
    <div class="modal fade" id="food" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Food and Non-Food</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>     
        <!---====-->
        
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><sup style="font-size: 20px">Logistics</sup></h3>

              <p><sup style="font-size: 13px">last update</sup></p>
            </div>
            <div class="icon">
              <i class="fa fa-ambulance"></i>
            </div>
            <a href="#" class="small-box-footer" data-toggle="modal" data-target="#logistics">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

<!--Modal-->
    <div class="modal fade" id="logistics" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Logistics</h4>
        </div>
        <div class="modal-body">
          
<p align="justify" style="text-indent: 50px"> Disasters are emergencies that cannot be handled by those affected without assistance. They are caused by natural or man-made events wherein communities experience severe danger and incur loss of lives and properties causing disruption to their social structure and to all or some of the affected communities’ essential functions. They are caused by unsustainable development that has not taken account of possible hazard impacts in that location.  They can be less damaging if there will be system that can help the management in faster administering and management of different resources.  </p>

<p align="justify" style="text-indent: 50px"> Now, in disaster, logistics is one of the most significant and complex component of the disaster operations whether if it is in preparedness, response or recovery phases. Logistics deliver the appropriate supplies in good condition, in the quantities required and at the places and time they are needed. So, logistics must be both agile and flexible in times of disaster and in preparing needed supplies. </p>

<p align="justify" style="text-indent: 50px"> Achieving those tasks of logistics is important because it can save and preserve millions and millions of lives in the disaster, and managing those are not easy and there is a need for a new, developed system that can handle those tasks and integrate different systems un users in just one click away.  </p>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-orange">
            <div class="inner">
              <h3><sup style="font-size: 20px">Inventory</sup></h3>

              <p><sup style="font-size: 13px">last update</sup></p>
            </div>
            <div class="icon">
              <i class="fa fa-archive"></i>
            </div>
            <a href="#" class="small-box-footer" data-toggle="modal" data-target="#inv">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

<!--Modal-->
    <div class="modal fade" id="inv" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Inventory</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><sup style="font-size: 20px">Procurement</sup></h3>

              <p><sup style="font-size: 13px">last update</sup></p>
            </div>
            <div class="icon">
              <i class="fa fa-money"></i>
            </div>
            <a href="#" class="small-box-footer" data-toggle="modal" data-target="#proc">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

<!--Modal-->
    <div class="modal fade" id="proc" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Procurement</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
        </div>
       

    <div class="body-content">

      <div class="row">
        <div class="col-md-6">
          <!-- AREA CHART -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"></h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
      </div>
    <div class="row">
        <div class ="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d123573.11109763144!2d121.02848460467526!3d14.56144133350866!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sph!4v1488816889384" width="570" height="550" frameborder="0" style="border:0; margin-left:30px; margin-bottom: 20px;" allowfullscreen></iframe>
            </div>
          </div>
          </div>

          <!-- DONUT CHART -->
          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Average Age of Missing People by Gender</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
            <img src="http://i1360.photobucket.com/albums/r656/Gail_Haboc/NDRRMC%20img/DeadandMissing/dm_zpst2gxkwh8.png" height="400" width="400" />
            </div>
            <!-- /.box-body -->
          </div>
        </div>
        <!-- /.col (LEFT) -->

        <div class="col-md-6">

        <!-- Calendar -->
          <div class="box box-solid bg-green-gradient">
            <div class="box-header ui-sortable-handle" style="cursor: move;">
              <i class="fa fa-calendar"></i>

              <h3 class="box-title">Calendar</h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <!-- button with a dropdown -->
                <div class="btn-group">
                  <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-bars"></i></button>
                  <ul class="dropdown-menu pull-right" role="menu">
                    <li><a href="#">Add new event</a></li>
                    <li><a href="#">Clear events</a></li>
                    <li class="divider"></li>
                    <li><a href="#">View calendar</a></li>
                  </ul>
                </div>
                <button type="button" class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-success btn-sm" data-widget="remove"><i class="fa fa-times"></i>
                </button>
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <!--The calendar -->
              <div id="calendar" style="width: 100%"><div class="datepicker datepicker-inline"><div class="datepicker-days" style="display: block;"><table class="table table-condensed"><thead><tr><th class="prev" style="visibility: visible;">«</th><th colspan="5" class="datepicker-switch">March 2017</th><th class="next" style="visibility: visible;">»</th></tr><tr><th class="dow">Su</th><th class="dow">Mo</th><th class="dow">Tu</th><th class="dow">We</th><th class="dow">Th</th><th class="dow">Fr</th><th class="dow">Sa</th></tr></thead><tbody><tr><td class="old day">26</td><td class="old day">27</td><td class="old day">28</td><td class="day">1</td><td class="day">2</td><td class="day">3</td><td class="day">4</td></tr><tr><td class="day">5</td><td class="day">6</td><td class="day">7</td><td class="day">8</td><td class="day">9</td><td class="day">10</td><td class="day">11</td></tr><tr><td class="day">12</td><td class="day">13</td><td class="day">14</td><td class="day">15</td><td class="day">16</td><td class="day">17</td><td class="day">18</td></tr><tr><td class="day">19</td><td class="day">20</td><td class="day">21</td><td class="day">22</td><td class="day">23</td><td class="day">24</td><td class="day">25</td></tr><tr><td class="day">26</td><td class="day">27</td><td class="day">28</td><td class="day">29</td><td class="day">30</td><td class="day">31</td><td class="new day">1</td></tr><tr><td class="new day">2</td><td class="new day">3</td><td class="new day">4</td><td class="new day">5</td><td class="new day">6</td><td class="new day">7</td><td class="new day">8</td></tr></tbody><tfoot><tr><th colspan="7" class="today" style="display: none;">Today</th></tr><tr><th colspan="7" class="clear" style="display: none;">Clear</th></tr></tfoot></table></div><div class="datepicker-months" style="display: none;"><table class="table table-condensed"><thead><tr><th class="prev" style="visibility: visible;">«</th><th colspan="5" class="datepicker-switch">2017</th><th class="next" style="visibility: visible;">»</th></tr></thead><tbody><tr><td colspan="7"><span class="month">Jan</span><span class="month">Feb</span><span class="month">Mar</span><span class="month">Apr</span><span class="month">May</span><span class="month">Jun</span><span class="month">Jul</span><span class="month">Aug</span><span class="month">Sep</span><span class="month">Oct</span><span class="month">Nov</span><span class="month">Dec</span></td></tr></tbody><tfoot><tr><th colspan="7" class="today" style="display: none;">Today</th></tr><tr><th colspan="7" class="clear" style="display: none;">Clear</th></tr></tfoot></table></div><div class="datepicker-years" style="display: none;"><table class="table table-condensed"><thead><tr><th class="prev" style="visibility: visible;">«</th><th colspan="5" class="datepicker-switch">2010-2019</th><th class="next" style="visibility: visible;">»</th></tr></thead><tbody><tr><td colspan="7"><span class="year old">2009</span><span class="year">2010</span><span class="year">2011</span><span class="year">2012</span><span class="year">2013</span><span class="year">2014</span><span class="year">2015</span><span class="year">2016</span><span class="year">2017</span><span class="year">2018</span><span class="year">2019</span><span class="year new">2020</span></td></tr></tbody><tfoot><tr><th colspan="7" class="today" style="display: none;">Today</th></tr><tr><th colspan="7" class="clear" style="display: none;">Clear</th></tr></tfoot></table></div></div></div>
            </div>
           
    </div>
        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->
    </section>
    <!-- /.content -->
  </div>                     
</div>
