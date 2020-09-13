<div class="modal fade" id="form-update" tabindex="-1" role="dialog" aria-labelledby="formUpdateModelLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div id="title-form" class="modal-title" id="formUpdateModelLabel">書籍更新</div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">書名 <span>*</span></label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" value="Book1">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">内容 <span>*</span></label>
                        <div class="col-sm-8">
                            <textarea class="form-control" rows="3">ダミーデータダミーデータダミーデータ</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">表紙画像 <span>*</span></label>
                        <div class="col-sm-8">
                            <img src="../img/Rectangle 507.png" alt="">
                            <input type="file" class="form-control-file" id="exampleFormControlFile1">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">本の原稿 <span>*</span></label>
                        <div class="col-sm-8" style="display: flex">
                            <input type="file" class="form-control-file" id="exampleFormControlFile1">
                            <button class="btn-preview fas fa-eye"> 下見</button>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">著者名 <span>*</span></label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" value="Cristiano">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">価格 <span>*</span></label>
                        <div class="col-sm-8" style="display: flex">
                            <input type="text" class="form-control" value="9000">
                            <div class="input-group-prepend">
                                <div class="input-group-text">円</div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">無料試読ページ数 <span>*</span></label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" value="20">
                        </div>
                    </div>
                </form>

            </div>
            <div class="modal-footer">
                <button style="width: 180px; height: 48px" type="button" class="btn btn-cancel" data-dismiss="modal">キャンセル</button>
                <button style="width: 180px; height: 48px" type="submit" class="btn btn-add">登録</button>
            </div>
        </div>
    </div>
</div>
