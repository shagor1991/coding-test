@extends('layouts.app')
@section('content')
<div class="container-fluid app-body">
	

	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title">Recent Post sent to Buffer </h3>
		</div>
		<div class="panel-body">
			<div class="row" style="margin-bottom:15px;">
				<div class="col-md-4">
					<input type="text" name="query" class="form-control" placeholder="Search">
				</div>
				<div class="col-md-4">
					<input type="date" name="date" class="form-control">
				</div>
				<div class="col-md-4">
					<select name="" id="" class="form-control">
						@foreach ($allgroups as $each_group)
							<option value="{{$each_group->id}}">{{$each_group->name}}</option>
						@endforeach						
					</select>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<table class="table table-bordered"> 
						<thead>
							<tr>
								<td>Group Name</td>
								<td>Group Type </td>
								<td>Account Name</td>
								<td>Post Text</td>
								<td>Time</td>
							</tr>
						</thead> 
						<tbody> 
							@foreach ($histories as $history)					
							
							<tr>
								<td>{{ $history->groupInfo->name}}</td>
								<td>{{ $history->groupInfo->type}}</td>
								<td>{{ $history->accountInfo->name}}</td>
								<td>{{ $history->post->text}}</td>
								<td>{{ $history->created_at->format('D M, Y H:i')}} </td>
							</tr>
							@endforeach
						</tbody> 
					</table>
					{{ $histories->links() }}
				</div>
			</div> 
		</div>
	  </div>


	<history-component/>
</div>
@endsection
