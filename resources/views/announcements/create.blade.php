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
                    <a href='/rooms'><h5 class="card-title"><button class="ml-2 btn btn-success">Enter New Announcement</button></h5></a>


				</div>
				<div class="card-body">
                        <form class="form-horizontal" action="{{route('announcements.store')}}" method='post'>
                            @csrf
                            <div class="form-group">
                              <label class="control-label col-sm-2" for="announcement_text">Announcement Text:</label>
                              <div class="col-sm-10">
                                <input type="text " class="form-control" id="announcement_text" placeholder="Enter announcement_text" name="announcement_text">
                              </div>
                            </div>





                            <div class="form-group">
                              <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default">Submit</button>
                              </div>
                            </div>
                          </form>
				</div>

			</div>
		</div>
	</div>
	<!-- Basic datatable -->
	<!-- /basic datatable -->
</div>
@endsection

@push('js')

	<!-- Theme JS files -->
	<script src="{{ asset('/global_assets/js/plugins/tables/datatables/datatables.min.js') }}"></script>
	<script src="{{ asset('/global_assets/js/plugins/forms/selects/select2.min.js') }}"></script>
	<script src="{{ asset('/js/page/room.js') }}"></script>
@endpush
