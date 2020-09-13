@extends('layouts.master')

@section('title')
    E-Book
@endsection
@section('link-css')
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/css/index.css">
@endsection
@section('content')
    <div class="container-fluid " id="list">
        <!-- Main row -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body table-responsive">
                        <div class="card-header">
                            <div class="card-tools add-btn">
                                <button type="button" class="btn add-btn" data-toggle="modal" data-target="#form-add">
                                    新規登録はこちら
                                </button>
                            </div>
                            @include('E-Book.form-add')
                            @include('E-Book.form-update')
                        </div>
                        <table class="table table-hover" style="margin-bottom: 0 !important; ">
                            <thead>
                                <tr class="d-flex" style="font-weight: 600; font-size: 17px; line-height: 40px; background-color: #F6F6F6">
                                    <th class="col-1">番号</th>
                                    <th class="col-1">書名</th>
                                    <th class="col-3">内容</th>
                                    <th class="col-1">表紙画像</th>
                                    <th class="col-1">著者名</th>
                                    <th class="col-1">価格</th>
                                    <th class="col-2">発行日</th>
                                    <th class="col-2">#</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="d-flex">
                                    <td class="col-1">1</td>
                                    <td class="col-1">Book1</td>
                                    <td class="col-3">ダミーデータダミーデータダミ ーデータ</td>
                                    <td class="col-1"><img src="../img/Rectangle 507.png" alt=""></td>
                                    <td class="col-1">Cristiano</td>
                                    <td class="col-1">9000</td>
                                    <td class="col-2">1/1/2020</td>
                                    <td class="col-2 buttons">
{{--                                        <form style="display: inline-block;" action="#" method="get" accept-charset="utf-8">--}}
                                            <button type="button" class="btn btn-edit fas fa-edit" data-toggle="modal" data-target="#form-update"> 編集</button>
{{--                                        </form>--}}
{{--                                        <form style="display: inline-block;" action="#" method="post" accept-charset="utf-8">--}}
                                            <button type="button" class="btn btn-delete far fa-trash-alt"> 削除</button>
{{--                                        </form>--}}
                                    </td>
                                </tr>
                                <tr class="d-flex">
                                    <td class="col-1">2</td>
                                    <td class="col-1">Book1</td>
                                    <td class="col-3">ダミーデータダミーデータダミ ーデータ</td>
                                    <td class="col-1"><img src="../img/Rectangle 507.png" alt=""></td>
                                    <td class="col-1">Cristiano</td>
                                    <td class="col-1">9000</td>
                                    <td class="col-2">1/1/2020</td>
                                    <td class="col-2 buttons">
                                        <a style="display: inline-block;" href="#" data-toggle="modal" data-target="#form-update" class="btn btn-edit fas fa-edit"> 編集</a>
                                        <form style="display: inline-block;" action="#" method="post" accept-charset="utf-8">
                                            <button type="submit" class="btn btn-delete far fa-trash-alt"> 削除</button>
                                        </form>
                                    </td>
                                </tr>
                                <tr class="d-flex">
                                    <td class="col-1">3</td>
                                    <td class="col-1">Book1</td>
                                    <td class="col-3">ダミーデータダミーデータダミ ーデータ</td>
                                    <td class="col-1"><img src="../img/Rectangle 507.png" alt=""></td>
                                    <td class="col-1">Cristiano</td>
                                    <td class="col-1">9000</td>
                                    <td class="col-2">1/1/2020</td>
                                    <td class="col-2 buttons">
                                        <a style="display: inline-block;" href="#" data-toggle="modal" data-target="#form-update" class="btn btn-edit fas fa-edit"> 編集</a>
                                        <form style="display: inline-block;" action="#" method="post" accept-charset="utf-8">
                                            <button type="submit" class="btn btn-delete far fa-trash-alt"> 削除</button>
                                        </form>
                                    </td>
                                </tr>
                                <tr class="d-flex">
                                    <td class="col-1">4</td>
                                    <td class="col-1">Book1</td>
                                    <td class="col-3">ダミーデータダミーデータダミ ーデータ</td>
                                    <td class="col-1"><img src="../img/Rectangle 507.png" alt=""></td>
                                    <td class="col-1">Cristiano</td>
                                    <td class="col-1">9000</td>
                                    <td class="col-2">1/1/2020</td>
                                    <td class="col-2 buttons">
                                        <a style="display: inline-block;" href="#" data-toggle="modal" data-target="#form-update" class="btn btn-edit fas fa-edit"> 編集</a>
                                        <form style="display: inline-block;" action="#" method="post" accept-charset="utf-8">
                                            <button type="submit" class="btn btn-delete far fa-trash-alt"> 削除</button>
                                        </form>
                                    </td>
                                </tr>
                                <tr class="d-flex">
                                    <td class="col-1">5</td>
                                    <td class="col-1">Book1</td>
                                    <td class="col-3">ダミーデータダミーデータダミ ーデータ</td>
                                    <td class="col-1"><img src="../img/Rectangle 507.png" alt=""></td>
                                    <td class="col-1">Cristiano</td>
                                    <td class="col-1">9000</td>
                                    <td class="col-2">1/1/2020</td>
                                    <td class="col-2 buttons">
                                        <a style="display: inline-block;" href="#" data-toggle="modal" data-target="#form-update" class="btn btn-edit fas fa-edit"> 編集</a>
                                        <form style="display: inline-block;" action="#" method="post" accept-charset="utf-8">
                                            <button type="submit" class="btn btn-delete far fa-trash-alt"> 削除</button>
                                        </form>
                                    </td>
                                </tr>
                                <tr class="d-flex">
                                    <td class="col-1">6</td>
                                    <td class="col-1">Book1</td>
                                    <td class="col-3">ダミーデータダミーデータダミ ーデータ</td>
                                    <td class="col-1"><img src="../img/Rectangle 507.png" alt=""></td>
                                    <td class="col-1">Cristiano</td>
                                    <td class="col-1">9000</td>
                                    <td class="col-2">1/1/2020</td>
                                    <td class="col-2 buttons">
                                        <a style="display: inline-block;" href="#" data-toggle="modal" data-target="#form-update" class="btn btn-edit fas fa-edit"> 編集</a>
                                        <form style="display: inline-block;" action="#" method="post" accept-charset="utf-8">
                                            <button type="submit" class="btn btn-delete far fa-trash-alt"> 削除</button>
                                        </form>
                                    </td>
                                </tr>
                                <tr class="d-flex">
                                    <td class="col-1">7</td>
                                    <td class="col-1">Book1</td>
                                    <td class="col-3">ダミーデータダミーデータダミ ーデータ</td>
                                    <td class="col-1"><img src="../img/Rectangle 507.png" alt=""></td>
                                    <td class="col-1">Cristiano</td>
                                    <td class="col-1">9000</td>
                                    <td class="col-2">1/1/2020</td>
                                    <td class="col-2 buttons">
                                        <a style="display: inline-block;" href="#" data-toggle="modal" data-target="#form-update" class="btn btn-edit fas fa-edit"> 編集</a>
                                        <form style="display: inline-block;" action="#" method="post" accept-charset="utf-8">
                                            <button type="submit" class="btn btn-delete far fa-trash-alt"> 削除</button>
                                        </form>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="card-footer">
                            <div>07件中1から10まで表示</div>
                            <div class="paginate">
                                <ul>
                                    <li><a href="">前へ</a></li>
                                    <li><a href="">1</a></li>
                                    <li><a href="">2</a></li>
                                    <li><a href="">...</a></li>
                                    <li><a href="">10</a></li>
                                    <li><a href="">次へ</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('link-js')
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
@endsection
