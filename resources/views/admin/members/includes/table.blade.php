
	<div class="col-xs-12">
		{{-- <div class="clearfix">
				<span class="pull-right tableTools-container"></span>
		</div> --}}
		<div class="table-header">
				Roles Record list on table. Filter list using search box as your Wish.
		</div>
		<div class="table-responsive">
			<table id="dynamic-table" class="table table-striped table-bordered table-hover">
				<thead>
					<tr>
						<th class="center">
							<label class="pos-rel">
								<input type="checkbox" class="ace" />
								<span class="lbl"></span>
							</label>
						</th>
                        <th>S.N.</th>
                        <th>Profile</th>
						<th>Member</th>
						<th>Left / Rith Total</th>
						<th>Package Amount</th>
						<th>Status</th>
						<th>Action</th>
					</tr>
				</thead>
					<tbody>
						@if (isset($members) && $members->count() > 0)
							{!! Form::open(['route' => 'admin.members.index', 'id' => 'bulk_action_form']) !!}
							@php($i = 1)
							@foreach($members as $row)
								<tr>
									<td class="center">
										<label>
											<input type="checkbox" name="chkIds[]" value="{{ $row->id }}" class="ace" />
											<span class="lbl"></span>
										</label>
									</td>
                                    <td>{{ $i }}</td>
                                    <td>
                                        @if ($row->user->profile_image)
                                            <img src="{{ asset('images/user/'.$row->user->profile_image) }}" width="80px">
                                        @else
                                            <p>No image</p>
                                        @endif
                                    </td>
									<td>
                                        <b> {{ $row->user->name }}</b>
                                        <hr class="hr-2">
                                        <i>{{ $row->username }}</i>
                                        <hr class="hr-2">
                                        <i>{{ $row->user->id }}</i>




										{{-- {{ $row->contact_number }}
										<hr class="hr-2"> --}}

										{{-- <hr class="hr-2">
										{{ $row->address }} --}}
									</td>
									<td>
                                            Left Total :{{ $row->left_total }} $
                                            <hr class="hr-2">
                                            Ritht Total :{{ $row->right_total }} $
                                    {{-- @if ($row->profile_image)
											<img src="{{ asset('images/user/'.$row->profile_image) }}" width="80px">
										@else
											<p>No image</p>
										@endif --}}
									</td>
									<td>
                                           PKAmt : {{ $row->package->package_amount }} $
                                            <hr class="hr-2">
                                            {{ $row->package_amount }}

									</td>
									<td class="hidden-480 ">
										<div class="btn-group">
											<button data-toggle="dropdown" class="btn btn-primary btn-minier dropdown-toggle {{ $row->status == 1?"btn-info":"btn-warning" }}" >
												{{ $row->status == 1?"Active":"In Active" }}
												<span class="ace-icon fa fa-caret-down icon-on-right"></span>
											</button>
											<ul class="dropdown-menu">
												<li>
													<a href="#" title="Active"><i class="fa fa-check" aria-hidden="true"></i></a>
												</li>
												<li>
													<a href="#" title="In-Active"><i class="fa fa-remove" aria-hidden="true"></i></a>
												</li>
											</ul>
										</div>
									</td>
									<td>
										<div class="hidden-sm hidden-xs action-buttons">
											<a class="green" href="{{route('admin.users.edit',$row->id)}}">
												<i class="ace-icon fa fa-pencil bigger-130"></i>
											</a>
											<a href="{{route('admin.users.destroy',$row->id)}}" class="red bootbox-confirm">
												<i class="ace-icon fa fa-trash-o bigger-130"></i>
											</a>
										</div>
										<div class="hidden-md hidden-lg">
											<div class="inline pos-rel">
												<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
														<i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
												</button>
												<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
														<li>
																<a href="{{route('admin.users.edit',$row->id)}}" class="tooltip-success" data-rel="tooltip" title="Edit">
																<span class="green">
																		<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																</span>
																</a>
														</li>
														<li>
																<a href ="{{route('admin.users.destroy',$row->id)}}" class="tooltip-error bootbox-confirm" data-rel="tooltip" title="Delete">
																<span class="red ">
																		<i class="ace-icon fa fa-trash-o bigger-120"></i>
																</span>
																</a>
														</li>
												</ul>
											</div>
										</div>
									</td>
								</tr>
							@php($i++)
							@endforeach
							{!! Form::close() !!}
						@else
							<tr><td colspan="7">No data found.</td></tr>
						@endif
					</tbody>
			</table>
		</div>
	</div>

