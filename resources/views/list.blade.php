<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('リスト') }}</div>
                <div class="card-body">
                    <table id="perfume" class="table">
                        <thead>
                            <tr>
                                <th scope="col">タイトル</th>
                                <th scope="col">内容</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(isset($memoList))
                                @foreach($memoList as $memoLists)
                                <tr>
                                    <td>
                                        {{ $memoLists['memos_title'] }}
                                    </td>
                                    <form method="POST" action="?">
                                        @csrf
                                        <td>
                                            <input type="text" class="form-control" name="text" value="{{$memoLists['memos_text']}}">
                                        </td>
                                        <td>
                                            <button type="submit" class="btn btn-primary" formaction="/memo_update/{{$memoLists['id']}}">編集</button>
                                        </td>
                                    </form>
                                    <td>
                                        <button type="submit" class="btn btn-primary" onclick="location.href='/memo_delete/{{$memoLists['id']}}'">削除</button>
                                    </td>
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
