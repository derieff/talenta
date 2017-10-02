@extends('layout.master')

@section('title')
Home Front-End | @endsection

@section('content')
  <section class="front-end">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h2>
            USER (5)
          </h2><br>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6">
          <button class="btn btn-lg btn-add-new-user" data-toggle="modal" data-target="#ModalAddNewUser">
            <img src="{{ url('public/image/icon-add-new-user.png') }}"/>&nbsp;&nbsp;ADD NEW USER
          </button>
        </div>
        <div class="col-lg-6">

        </div>
      </div>
      <div class="row">
        <div class="col-md-12 col-sm-12 col-lg-12">
          <br>
          <div class="table-responsive">
            <table class="table table-hover" id="table-data-user">
              <thead>
                <tr>
                  <th>PHOTO</th>
                  <th>EMPLOYEE NAME</th>
                  <th>JOB POSITION</th>
                  <th>SIGNUP DATE</th>
                  <th>TOTAL COURSE</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <img src="{{ url('public/image/user-e.png') }}" />
                  </td>
                  <td>Cheryl Cyrilia</td>
                  <td>Graphic Designer</td>
                  <td>15 January 2015</td>
                  <td class="total-course">8</td>
                  <td class="text-right">
                    <button class="btn btn-sm btn-delete-user">
                      DELETE USER
                    </button>
                  </td>
                </tr>

                <tr>
                  <td>
                    <img src="{{ url('public/image/user-d.png') }}" />
                  </td>
                  <td>Mario Wijaya Utama</td>
                  <td>Marketing Director</td>
                  <td>28 January 2015</td>
                  <td class="total-course">5</td>
                  <td class="text-right">
                    <button class="btn btn-sm btn-delete-user">
                      DELETE USER
                    </button>
                  </td>
                </tr>

                <tr>
                  <td>
                    <img src="{{ url('public/image/user-c.png') }}" />
                  </td>
                  <td>Alexandor Novando Djafar</td>
                  <td>Project Manager</td>
                  <td>15 January 2015</td>
                  <td class="total-course">10</td>
                  <td class="text-right">
                    <button class="btn btn-sm btn-delete-user">
                      DELETE USER
                    </button>
                  </td>
                </tr>

                <tr>
                  <td>
                    <img src="{{ url('public/image/user-b.png') }}" />
                  </td>
                  <td>Joshua Kevin</td>
                  <td>Director</td>
                  <td>28 January 2015</td>
                  <td class="total-course">2</td>
                  <td class="text-right">
                    <button class="btn btn-sm btn-delete-user">
                      DELETE USER
                    </button>
                  </td>
                </tr>

                <tr>
                  <td>
                    <img src="{{ url('public/image/user-a.png') }}" />
                  </td>
                  <td>Cheryl Cyrilia</td>
                  <td>Graphic Designer</td>
                  <td>15 January 2015</td>
                  <td class="total-course">7</td>
                  <td class="text-right">
                    <button class="btn btn-sm btn-delete-user">
                      DELETE USER
                    </button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>


      <!-- Modal -->
      <div id="ModalAddNewUser" class="modal fade" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">
                <img src="{{ url('public/image/icon-close.png') }}" />
              </button>
              <h3 class="modal-title">Add New User</h3>
            </div>
            <div class="modal-body">
                <div class="row">
                  <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <label for="first-name">FIRST NAME</label>
                    <input type="text" class="form-control" id="first-name">
                  </div>
                  <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <label for="last-name">LAST NAME</label>
                    <input type="text" class="form-control" id="last-name">
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <label for="email">EMAIL</label>
                    <input type="text" class="form-control" id="email">
                  </div>
                  <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <label for="job-position">JOB POSITION</label>
                    <input type="text" class="form-control" id="job-position">
                  </div>
                </div>
                <button type="submit" class="btn btn-lg btn-save-new-user" data-dismiss="modal">SAVE</button>
                <br>
                <br>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>
@endsection

@section('cssonpage')

.modal-header{
  border-top:7.5px solid #990101;
  border-radius:0px !important;
  border-bottom:0px;
}
.modal-body label{
  font-size:12px;
  font-weight:normal;
}
.modal-body input, .modal-body button{
  border-radius:0px !important;
}
.modal-body button.btn-save-new-user{
  background:#75000d;
  color:#fff;
  font-weight:bold;
  font-size:11px;
}

/* desktop */
@media only screen and (min-width: 768px) {
  .front-end{
    margin-top:110px;
  }
  .table-custom{
    width:100%;
    overflow-x:hidden;
    overflow-y:hidden;
  }
}
/* mobile */
@media only screen and (max-width: 768px) {
  .front-end{
    margin-top:50px;
  }
  .table-custom{
    width:360px;
    overflow-x:scroll;
    overflow-y:hidden;
  }
}

.btn-add-new-user{
  color:#fff;
  background:#990101;
  border-radius:0px;
  font-size:14px;
}
.btn-add-new-user:hover, .btn-delete-user:hover, .modal-body button.btn-save-new-user:hover{
  -webkit-transform:scale(0.95); /* Safari and Chrome */
  -moz-transform:scale(0.95); /* Firefox */
  -ms-transform:scale(0.95); /* IE 9 */
  -o-transform:scale(0.95); /* Opera */
   transform:scale(0.95);
   color:#fff;
}
.btn-delete-user{
  color:#fff;
  backround:#c1c1c1 !important;
}
td.total-course{
  font-size:30px;
}
@endsection

@section('jsonpage')
  <script type="text/javascript">
  $(document).ready(function() {
      $('.btn-save-new-user').click(function() {
        var full_name = $('#first-name').val()+" "+$('#last-name').val();
        var job_position = $('#job-position').val();

        var m_names = new Array("January", "February", "March",
          "April", "May", "Juny", "July", "August", "September",
          "October", "November", "December");

          var d = new Date();
          var curr_date = d.getDate();
          var curr_month = d.getMonth();
          var curr_year = d.getFullYear();

        var total_course = $('#email').val().length;

         $('#table-data-user tbody').append('<tr class="child">\
            <td><i class="fa fa-user-secret" style="font-size:50px;"></i></td>\
            <td>'+full_name+'</td>\
            <td>'+job_position+'</td>\
            <td>'+curr_date+' '+m_names[curr_month]+' '+curr_year+'</td>\
            <td class="total-course">'+total_course+'</td>\
            <td class="text-right">\
              <button class="btn btn-sm btn-delete-user">\
                DELETE USER\
              </button>\
            </td>\
         </tr>');
      });
  });
  </script>
@endsection
