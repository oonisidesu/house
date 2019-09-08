@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="col-sm-offset-2 col-sm-8">
			<div class="panel panel-default">
			<!-- 馬の掲示板一覧 -->
			@if (count($items) > 0)
				<div class="panel panel-default">
					<div class="panel-heading">
						馬の一覧
					</div>

					<div class="panel-body">
						<table class="table table-striped task-table">
							<thead>
                <th>タイトル</th>
                <th>内容</th>
                <th>画像</th>
								<th>&nbsp;</th>
							</thead>
							<tbody>
                @foreach ($items as $item)
									<tr>
                    <td class="table-text">
                      {{ $item->title }}
                    </td>
                    <td class="table-text">
                      {{ $item->content }}
                    </td>
                    <td class="table-text">
                      <img src ="/{{ $item->image_url }}" width="50px">
                    </td>

										<td>
                      <!-- 編集ボタン -->
                      <form action="/edit" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-info">
                          <i class="fa fa-pencil"></i>編集
                        </button>
                      </form>
                      <!-- 削除ボタン -->
											<form action="/del" method="POST">
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
