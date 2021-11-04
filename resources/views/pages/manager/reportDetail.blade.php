@extends('layouts.masters.manager')
@section('content')
    <div class="container">
        <table class="table">
            <thead class="thead-dark">
            <th class="text-center" scope="col">項目</th>
            <th class="text-center" scope="col">總數量</th>
            <th scope="col">作業員</th>
            <th scope="col">數量</th>
            </thead>
            <tbody>
            @if($report == 'cut')
                @for($i = 0; $i < $queries->count(); $i++)
                    @if($i == 0)
                        <tr>
                            <td style="vertical-align : middle;text-align:center;" rowspan="{{$queries->count()}}">滾邊</td>
                            <td style="vertical-align : middle;text-align:center;" rowspan="{{$queries->count()}}">{{$sum2}}打</td>
                            <td>{{$queries[$i]->Piping}}</td>
                            <td>{{$queries[$i]->piping_order}}打</td>
                        </tr>
                    @else
                        <tr>
                            <td>{{$queries[$i]->Piping}}</td>
                            <td>{{$queries[$i]->piping_order}}打</td>
                        </tr>
                    @endif
                @endfor
                @for($i = 0; $i < $queries->count(); $i++)
                    @if($i == 0)
                        <tr>
                            <td style="vertical-align : middle;text-align:center;" rowspan="{{$queries->count()}}">剪巾</td>
                            <td style="vertical-align : middle;text-align:center;" rowspan="{{$queries->count()}}">{{$sum1}}打</td>
                            <td>{{$queries[$i]->user_id}}</td>
                            <td>{{$queries[$i]->cut_order}}打</td>
                        </tr>
                    @else
                        <tr>
                            <td>{{$queries[$i]->user_id}}</td>
                            <td>{{$queries[$i]->cut_order}}打</td>
                        </tr>
                    @endif
                @endfor
            @elseif($report == 'foldHead')
                @for($i = 0; $i < $queries->count(); $i++)
                    @if($i == 0)
                        <tr>
                            <td style="vertical-align : middle;text-align:center;" rowspan="{{$queries->count()}}">折頭</td>
                            <td style="vertical-align : middle;text-align:center;" rowspan="{{$queries->count()}}">{{$sum1}}打</td>
                            <td>{{$queries[$i]->user_id}}</td>
                            <td>{{$queries[$i]->foldHead_order}}打</td>
                        </tr>
                    @else
                        <tr>
                            <td>{{$queries[$i]->user_id}}</td>
                            <td>{{$queries[$i]->foldHead_order}}打</td>
                        </tr>
                    @endif
                @endfor
                @for($i = 0; $i < $queries->count(); $i++)
                    @if($i == 0)
                        <tr>
                            <td style="vertical-align : middle;text-align:center;" rowspan="{{$queries->count()}}">撿巾</td>
                            <td style="vertical-align : middle;text-align:center;" rowspan="{{$queries->count()}}">{{$sum2}}打</td>
                            <td>{{$queries[$i]->pickTower}}</td>
                            <td>{{$queries[$i]->pickTower_order}}打</td>
                        </tr>
                    @else
                        <tr>
                            <td>{{$queries[$i]->pickTower}}</td>
                            <td>{{$queries[$i]->pickTower_order}}打</td>
                        </tr>
                    @endif
                @endfor
            @endif
            </tbody>
        </table>
    </div>


@endsection