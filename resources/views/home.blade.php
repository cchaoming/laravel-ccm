@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">用户列表 {!! link_to_route('mine.create', '增加用户') !!} </div>

				<div class="panel-body">
					<table class="table table-bordered">
					<tr><th>用户名</th><th>电子邮件</th><th>操作</th></tr>
					@foreach($ulist as $v)
					<tr><td>{{ $v->name }}</td><td>{{ $v->email }}&nbsp;</td><td>
					<div id="cc{{$v->id}}">
					 {!! Form::open(array('method' => 'DELETE', 'route' => array('mine.destroy', $v->id))) !!}  <a href="/mine/{{ $v->id }}/edit">修改</a>  <a href="javascript:if(confirm('你确定要删除吗?')){$('#cc{{$v->id}}').find('form').submit();}">删除</a>  {!! Form::close() !!}
					 </div>
					</td></tr>
					@endforeach
					<tr><td colspan="3">
				<!--输出分页-->
					{{ $ulist->render() }}</td></tr>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
