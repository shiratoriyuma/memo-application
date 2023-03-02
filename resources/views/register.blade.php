<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('登録') }}</div>
                <div class="card-body">
                    <form method="POST" action="?">
                        @csrf
                        <div class="row justify-content-center">
                            <div class="row">
                                <div class="col-4">
                                    <div>▼タイトル</div>
                                </div>
                                <div class="col-8">
                                    <div>▼内容</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <input type="text" class="form-control" name="title">
                                </div>
                                <div class="col-6">
                                    <input type="text" class="form-control" name="text">
                                </div>
                                <div class="col-2">
                                    <button type="submit" class="btn btn-primary" formaction="/memo_register/{{$usersId}}">
                                        {{ '追加' }}
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
