@extends('app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">添加用户</div>

				<div class="panel-body">
<ul>
@foreach($errors->all() as $k=>$message)
    <li>{{ $message }}</li>
@endforeach
</ul>
				  {!! Form::open(array('route' => 'mine.store', 'method' => 'post')) !!}
					<table width="100%" class="table table-bordered">
					<tr>
					  <th width="18%">用户名:</th><th width="72%"><div align="left">
					  
					      <label>
						     {!! Form::text('name') !!}
					      
				          </label>
				       
					    </div></th></tr>
					<tr>
					  <th>电子邮件:</th>
					  <th><div align="left">
					  {!! Form::text('email') !!}
					   
					  </div></th>
					  </tr>
					  
					 <tr>
					  <th>密码:</th>
					  <th><div align="left">
					  {!! Form::password('password') !!}
					   
					  </div></th>
					  </tr>
					  
					  <tr>
					  <th>确认密码:</th>
					  <th><div align="left">
					  {!! Form::password('password_confirmation') !!}
					   
					  </div></th>
					  </tr>
					  
					<tr>
					  <th colspan="2">&nbsp; {!! Form::submit('保存') !!}</th>
					  </tr>
					</table>
					 {!! Form::close() !!}
					 
					 				</div>
			</div>
		</div>
	</div>
</div>
@endsection
