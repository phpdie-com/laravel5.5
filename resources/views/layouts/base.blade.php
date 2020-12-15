@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        @if(isset($title))
                        {{ $title }}
                        @endif
                    </div>
                    <div class="panel-body">
                        @if(isset($bottons))
                        @foreach($bottons as $btn)
                            @php
                                $title=empty($btn['title'])?'':$btn['title'];
                            @endphp
                            <button type="button" class="btn btn-primary">{{ $title }}</button>
                        @endforeach
                        @endif
                    </div>
                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>名称</th>
                                <th>城市</th>
                                <th>城市</th>
                                <th>城市</th>
                                <th>城市</th>
                                <th>城市</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Tanmay</td>
                                <td>Bangalore</td>
                                <td>Tanmay</td>
                                <td>Bangalore</td>
                                <td>Tanmay</td>
                                <td>Bangalore</td>
                            </tr>
                            <tr>
                                <td>Sachin</td>
                                <td>Mumbai</td>
                                <td>Sachin</td>
                                <td>Mumbai</td>
                                <td>Sachin</td>
                                <td>Mumbai</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="panel-body">
                        <ul class="pagination">
                            <li><a href="#">&laquo;</a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">&raquo;</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
