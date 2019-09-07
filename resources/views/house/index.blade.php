@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="col-sm-offset-2 col-sm-8">
			<div class="panel panel-default">
			<!-- 馬の掲示板一覧 -->
			@if (count($houses) > 0)
				<div class="panel panel-default">
					<div class="panel-heading">
						馬の一覧
					</div>

					<div class="panel-body">
						<table class="table table-striped task-table">
							<thead>
								<th>馬</th>
								<th>&nbsp;</th>
							</thead>
							<tbody>
								@foreach ($houses as $house)
									<tr>
                    <td class="table-text"><div>{{ $house->title }}</div></td>
                    <td class="table-text"><div>{{ $house->context }}</div></td>
                    @if ($image_url)
                      <p><img src ="/{{ $house->image_url }}" width="450px"></p>
                    @endif

                    <!-- 編集ボタン -->
										<td>
											<form action="/book/edit" method="POST">
												@csrf
												<button type="submit" class="btn btn-info">
													<i class="fa fa-trash"></i>編集
												</button>
											</form>
                    </td>

										<!-- 削除ボタン -->
										<td>
											<form action="/book/del" method="POST">
												@csrf
												<button type="submit" class="btn btn-danger">
													<i class="fa fa-trash"></i>削除
												</button>
											</form>
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			@endif
		</div>
	</div>
@endsection
