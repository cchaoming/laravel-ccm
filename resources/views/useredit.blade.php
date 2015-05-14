@extends('app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">修改用户</div>

				<div class="panel-body">  {!! Form::open(array('route' => array('mine.update', $uinfo->id), 'method' => 'put')) !!}
					<table width="100%" class="table table-bordered">
					<tr>
					  <th width="18%">用户名:</th><th width="72%"><div align="left">
					  
					      <label>
						     {!! Form::text('name', $uinfo->name) !!}
					      
				          </label>
				       
					    </div></th></tr>
					<tr>
					  <th>电子邮件:</th>
					  <th><div align="left">
					  {!! Form::text('email', $uinfo->email) !!}
					   
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
