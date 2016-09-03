@extends('master')

@section('content')
<style>
#update label{
	margin-left:-15px;
}	
#update input{
	width: 400px;
}

</style>

@if(empty($Members))
    <div class="container-fluid">
    <div class="side-body">
        <div class="page-title">
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="card">
                    <div class="card-header">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary btn-info" data-toggle="modal" data-target="#modalInfo">
                         <i class="fa fa-user"> </i> New User
                    </button>
                    @if(Session::has('Success'))
						<div class="alert alert-success">
							<strong>Success: </strong>{{Session::get('Success')}}
						</div>
                    @endif
                    <!-- Modal -->
                    <div class="modal fade modal-info" id="modalInfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
	                                <form class="form-horizontal" role="form" method="POST" action="{{ url('members') }}">
	                                <div class="modal-header">
	                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	                                    <h4 class="modal-title" id="myModalLabel">Member Addition</h4>
	                                </div>
	                                <div class="modal-body">
			                        {{ csrf_field() }}
			                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
			                            <label for="name" class="col-md-4 control-label">Name</label>

			                            <div class="col-md-6">
			                                <input id="name" type="text" class="form-control" name="name" required autofocus>

			                                @if ($errors->has('name'))
			                                    <span class="help-block">
			                                        <strong>{{ $errors->first('name') }}</strong>
			                                    </span>
			                                @endif
			                            </div>
			                        </div>

			                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
			                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

			                            <div class="col-md-6">
			                                <input id="email" type="email" class="form-control" name="email"  required>

			                                @if ($errors->has('email'))
			                                    <span class="help-block">
			                                        <strong>{{ $errors->first('email') }}</strong>
			                                    </span>
			                                @endif
			                            </div>
			                        </div>
			                        <div class="form-group{{ $errors->has('mobile') ? ' has-error' : '' }}">
			                            <label for="mobile" class="col-md-4 control-label">Mobile</label>

			                            <div class="col-md-6">
			                                <input id="mobile" type="number" class="form-control" name="mobile" required>

			                                @if ($errors->has('mobile'))
			                                    <span class="help-block">
			                                        <strong>{{ $errors->first('mobile') }}</strong>
			                                    </span>
			                                @endif
			                            </div>
			                        </div>
			                        <div class="form-group{{ $errors->has('Address') ? ' has-error' : '' }}">
			                            <label for="email" class="col-md-4 control-label">Address</label>

			                            <div class="col-md-6">
			                                <input id="address" type="text" class="form-control" name="address" required>

			                                @if ($errors->has('address'))
			                                    <span class="help-block">
			                                        <strong>{{ $errors->first('address') }}</strong>
			                                    </span>
			                                @endif
			                            </div>
			                        </div>    
	                                </div>
	                                <div class="modal-footer">
	                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	                                    <button type="submit" class="btn btn-info">OK</button>
	                                </div>
                             	</form>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="card-body">
                        <table class="datatable table table-striped" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Number</th>
                                    <th>Address</th>
                                    <th>Created At</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                            @if(empty($members))
								<tr>
									<td colspan="6"> No Users Found</td>
								</tr>
                            @else
                            @foreach($members as $Member)
                                <tr>
                                    <td><strong>{{$Member->name}}</strong></td>
                                    <td>{{$Member->email}}</td>
                                    <td>00{{$Member->mobile}}</td>
                                    <td>{{$Member->address}}</td>
                                    <th>{{ date('M j,Y h:i:a', strtotime($Member->created_at))}}</th>
                                    <td>
									<!-- Button trigger modal -->
									<button type="button" class="btn btn-primary btn-success" data-toggle="modal" data-target="#modalSuccess{{$Member->id}}">
									    <i class="fa fa-pencil"> </i> Update User
									</button>
									<!-- Modal -->
									<div class="modal fade modal-success" id="modalSuccess{{$Member->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
									<div class="modal-dialog">
									<div class="modal-content">
										{!! Form::open(['url' => ['members', $Member->id], 'method' => 'put']) !!}
									        <div class="modal-header">
									            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									            <h4 class="modal-title" id="myModalLabel">Update Member</h4>
									        </div>
									        <div class="modal-body">
									        {{ csrf_field() }}
									        <div class="form-group">
												{!! Form::label('Name','Name',array('class' => 'col-lg-12')) !!}
									        	{!! Form::text('name',$Member->name,array('class' => 'form-control col-lg-12'))!!}
									        </div>
									        <div class="clearfix"></div>
									        <br>
									        <div class="form-group">
												{!! Form::label('Email','Email',array('class' => 'col-lg-12')) !!}
									            {!! Form::email('email',$Member->email,array('class' => 'form-control col-lg-12')) !!}
									        </div>
									        <div class="clearfix"></div>
									        <br>
									        <div class="form-group">
												{!! Form::label('Mobile','Mobile',array('class' => 'col-lg-12')) !!}
									            {!! Form::text('mobile',$Member->mobile,array('class' => 'form-control col-lg-12')) !!}
									        </div>
									        <div class="clearfix"></div>
									        <br>
									        <div class="form-group">
												{!! Form::label('Address','Address',array('class' => 'col-lg-12')) !!}
									            {!! Form::text('address',$Member->address,array('class' => 'form-control col-lg-12')) !!}
									        </div>
									        </div>
									        <div class="modal-footer">
									            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									            {!! Form::submit('Save Data',array('class'=>'btn btn-success'))!!}
									        </div>
									    {!! Form::close() !!}
									</div>
									</div>
									</div>
                                    </td>
                                    <td>
                                    {!! Form::open(['url' => ['members', $Member->id], 'method' => 'delete'])!!}
									{!! Form::submit('Save Data',array('class'=>'btn btn-danger'))!!}
									{!! Form::close() !!}
                                </tr>
                            @endforeach
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif 

@stop