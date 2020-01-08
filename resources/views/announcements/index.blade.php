@extends('layouts.app')
@section('css')
@parent
<link href="{{ asset('assets/css/components.min.css') }}" rel="stylesheet" type="text/css">
@endsection
@section('content')
<div class="container mt-3 mb-3">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header header-elements-inline">
                    <h5 class="card-title">Announcements <a href="/create"><button class="ml-2 btn btn-success">New Announcement</button></a></h5>


				</div>
				<div class="card-body">
					See All Announcement
				</div>
				<table class="table datatable-basic">
					<thead>
						<tr>
							<th>Announcement text</th>
							<th>Announcement Date</th>

							<!--th>Status</th-->

						</tr>
					</thead>
					<tbody>

                        @foreach($announcements as $announcement)
						<tr>


							<td>{{$announcement->announcement_text}}</td>
							<td>{{$announcement->announcement_date}}</td>


                        </tr>
                        @endforeach

					</tbody>
				</table>
			</div>
		</div>
	</div>
	<!-- Basic datatable -->
	<!-- /basic datatable -->
</div>
@endsection