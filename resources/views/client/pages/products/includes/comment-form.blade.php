<div class="comment-box">
    <div class="row">
        <div class="col-sm-12">
            <h5>Bình luận</h5>
            <div class="row">
                <form role="form" id="comment-form">
                    <div class="col-sm-6 pt-0 pb-0">
                        <div class="form-group">
                            <input type="text" class="form-control" required name="commentable_name" value="{{ \Auth::user()->name ?? old('phone') }}" id="contact_name" placeholder="Nhập tên của bạn">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <textarea class="form-control" required name="commentable_content" id="contact_message2"  placeholder="Nội dung" rows="5"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" id="submitBtn" class="btn btn-dark btn-flat pull-right m-0" data-loading-text="Xin chờ...">Bình luận</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
